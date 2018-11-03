<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\Controllers;

use MyShop\Service\ProductsFilter;
use Shop\Core\Controller;
use MyShop\Models\ProductsModel;
use MyShop\Controllers\FrontController;
use Shop\Validator;

class ProductsController extends FrontController
{
    public $page_number = 2;

    public function action_index($params = "")
    {
        ProductsFilter::clear_filter();
        $filter = ProductsFilter::get_filter();
        if (isset($params["page"])) {
            $page  = $params["page"];
        } else {
            $page = 1;
        }
        if (isset($params["num"])) {
            $products_count_per_page  = $params["num"];
        } else {
            $products_count_per_page  = 6;
        }
        if (isset($params["sort"])) {
            $sort  = $params["sort"];
        } else {
            $sort  = "recommend";
        }
        if (!isset($params['category'])) {
            $params['category'] = "all";
        }
        $search_query = null;
        $search = null;
        $obj = new ProductsModel();
        $data = $obj->products($params['category'], $page, $products_count_per_page, $sort, $search_query, $filter);
        if (!$data['products']) {
            $error_number = '4041';
            $controller = new ErrorController();
            $controller->action_index($error_number);
        } else {
            $this->view->generate('productsView.php', ["data" => $data, "category" => $params['category'], "search_query" => $search_query, "search" => $search, "filter" => $filter, "page_number" => $this->page_number]);
        }
    }
    public function dresses($params = "")
    {
        if (isset($_POST['clear_all_filters'])) {
            ProductsFilter::clear_filter();
        }
        if ((isset($_POST['color']) || isset($_POST['length']) || isset($_POST['fabric_material']) || !empty($_POST['price_from']) || !empty($_POST['price_to'])) && (!isset($_POST['clear_filter'])) && Validator::price($_POST['price_from']) && Validator::price($_POST['price_to'])) {
            ProductsFilter::clear_filter();
            ProductsFilter::set_filter($_POST);
        }
        if (isset($_POST['set_filter']) && (empty($_POST['color']) && empty($_POST['length']) && empty($_POST['fabric_material']) && empty($_POST['price_from']) && empty($_POST['price_to']))) {
            ProductsFilter::clear_filter();
        }
        if (!empty(ProductsFilter::get_filter()) && !isset($_POST['clear_filter'])) {
            $filter = ProductsFilter::get_filter();
        } else {
            ProductsFilter::clear_filter();
            $filter = ProductsFilter::get_filter();
        }
        if (isset($params["page"])) {
            $page  = $params["page"];
        } else {
            $page = 1;
        }
        if (isset($params["num"])) {
            $products_count_per_page  = $params["num"];
        } else {
            $products_count_per_page  = 6;
        }
        if (isset($params["sort"])) {
            $sort  = $params["sort"];
        } else {
            $sort  = "recommend";
        }
        if (!isset($params['category'])) {
            $params['category'] = "all";
        }
        if (isset($_GET['search']) && Validator::search($_GET['search'])) {
            $search_query = $_GET['search'];
            $search = $params['search'];
        } else {
            $search_query = null;
            $search = null;
        }
        $obj = new ProductsModel();
        $data = $obj->products($params['category'], $page, $products_count_per_page, $sort, $search_query, $filter);
        if (!$data['products']) {
            $error_number = '4041';
            $controller = new ErrorController();
            $controller->action_index($error_number);
        } else {
            $this->view->generate('productsView.php', ["data" => $data, "category" => $params['category'], "search_query" => $search_query, "search" => $search, "filter" => $filter, "page_number" => $this->page_number]);
        }
    }
}