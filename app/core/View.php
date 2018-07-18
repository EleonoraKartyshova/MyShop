<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 10:14
 */
namespace MyShop\core;
class View
{
    public $data = [];
    function generate($template_view, $data = [])
    {

        $this->data = array_merge($this->data, $data);



var_dump(gettype($this->data));
        var_dump($this->data);
        if( is_array($this->data)) {

//            преобразуем элементы массива в переменные
            extract($this->data);

        }
        var_dump($data_auth);
        //var_dump($this->data);die;


        include 'app/views/'.$template_view;
    }
}