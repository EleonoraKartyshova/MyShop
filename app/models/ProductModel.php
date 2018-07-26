<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\models;

use MyShop\tables\Products;
use MyShop\tables\Users;
use MyShop\tables\UsersProductsReviews;
use Shop\core\Model;
use Shop\session\Session;
use Shop\exceptions\AuthException;

class ProductModel extends Model
{
    public function get_product($id)
    {
        if (Session::cookieExists())
        {
            Session::start();
            $_SESSION['review'] = md5(date('d.m.Y H:i:s').rand(1, 1000000));
        }
        $product = new Products();
        $data['product'] = $product->get_record_by_id($id)[0];
        $us_prod_rev = new UsersProductsReviews();
        $data['reviews'] = $us_prod_rev->get_reviews($id);

        return $data;
    }

    public function add_review($id)
    {
        if (!Session::cookieExists())
        {
            throw new AuthException('User is not authorized', '4013');
        }
        Session::start();
        $obj = new UsersProductsReviews();
        if (isset($_POST["text_review"]) && $_POST["review"] == $_SESSION["review"] )
        {
            $obj->add_review($id, $_SESSION['user_id'], $_POST['text_review']);
            $_SESSION["review"] = rand();
        }
    }
}