<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Models\ProductsModel;
use MyShop\Controllers\FrontController;
use Shop\Validator;

class ProductsController extends FrontController
{
    public static $page_number = 2;

    public function dresses($params)
    {
        $page  = $params["page"];
        $products_count_per_page  = $params["num"];
        $sort  = $params["sort"];
        if (isset($_GET['search']) && Validator::search($_GET['search'])) {
            $search_query = $_GET['search'];
            $search = $params['search'];
        } else {
            $search_query = null;
            $search = null;
        }
        $obj = new ProductsModel();
        $data = $obj->products($params['category'], $page, $products_count_per_page, $sort, $search_query);
        if (!$data['products']) {
            $data['error'] = '4041';
            $this->view->generate('errorView.php', ['error' => $data['error']]);
        } else {
            $this->view->generate('productsView.php', ["data" => $data, "category" => $params['category'], "search_query" => $search_query, "search" => $search, "page_number" => self::$page_number]);
        }
    }
}