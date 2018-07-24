<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\models;

use Shop\core\Model;
use Shop\session\Session;
use Shop\exceptions\AuthException;

class ProductModel extends Model
{
    public $table_name = 'products';
    public $additional_table_name = 'users_products_reviews';
    protected $db_connect;

    public function get_product($id)
    {
        if (Session::cookieExists())
        {
            Session::start();
            $_SESSION['review'] = md5(date('d.m.Y H:i:s').rand(1, 1000000));
        }

        $data['product'] = $this->db_connect->get_record_by_id($this->table_name, $id)[0];
        $sql = 'SELECT users_products_reviews.text_review, users_products_reviews.created_at, users.email 
                FROM users_products_reviews 
                INNER JOIN users 
                ON users.id = users_products_reviews.user_id 
                WHERE users_products_reviews.product_id = '. $id . ' ORDER BY users_products_reviews.created_at DESC';
        $data['reviews'] = $this->db_connect->my_query($sql);

        return $data;
    }
    public function add_review($id)
    {
        if (!Session::cookieExists())
        {
            throw new AuthException('User is not authorized', '4013');
        }
        Session::start();
        if (isset($_POST["text_review"]) && $_POST["review"] == $_SESSION["review"] )
        {
            $field_val = ['product_id' => $id, 'user_id' => $_SESSION['user_id'], 'text_review' => $_POST['text_review']];
            $this->db_connect->add_record($this->additional_table_name, $field_val);
            $_SESSION["review"] = rand();
        }
    }
}