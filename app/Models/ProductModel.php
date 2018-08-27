<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\Models;

use MyShop\Tables\Products;
use MyShop\Tables\Users;
use MyShop\Tables\UsersProductsReviews;
use Shop\Core\Model;
use Shop\Session\Session;
use Shop\Exceptions\AuthException;

class ProductModel extends Model
{
    public function get_product($id)
    {
        if (Session::cookieExists()) {
            Session::start();
            Session::set_data('review', md5(date('d.m.Y H:i:s').rand(1, 1000000)));
        }
        $product = new Products();
        $data['product'] = $product->get_record_by_id($id)[0];
        $us_prod_rev = new UsersProductsReviews();
        $data['reviews'] = $us_prod_rev->get_reviews($id);
        return $data;
    }
    public function add_review($id)
    {
        if (!Session::cookieExists()) {
            throw new AuthException('User is not authorized', '4013');
        }
        Session::start();
        $obj = new UsersProductsReviews();
        if (isset($_POST["text_review"]) && $_POST["review"] == Session::get_data("review")) {
            $obj->add_review($id, Session::get_data('user_id'), $_POST['text_review']);
            Session::set_data("review", rand());
        }
    }
}