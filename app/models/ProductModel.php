<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\models;

use Shop\core\Model;

class ProductModel extends Model
{
    public $table_name = 'products';

    public function get_rec_by_id($id)
    {
        $obj = new Model();
        $data['product'] = $obj->get_record_by_id($this->table_name, $id)[0];
        $sql = 'SELECT users_products_reviews.text_review, users_products_reviews.created_at, users.email 
                FROM kartyshova_db.users_products_reviews 
                INNER JOIN kartyshova_db.users 
                ON users.id = users_products_reviews.user_id 
                WHERE users_products_reviews.product_id = '. $id ;
        $data['reviews'] = $obj->my_query($sql);

        return $data;
    }
}