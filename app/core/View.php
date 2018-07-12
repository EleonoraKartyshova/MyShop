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
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($template_view, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'app/views/'.$template_view;
    }
}