<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 10:14
 */
namespace Shop\core;

class View
{
    public $data = [];
    function generate($template_view, $data = [])
    {
        $this->data = array_merge($this->data, $data);
        if( is_array($this->data))
        {
//            преобразуем элементы массива в переменные
            extract($this->data);
        }
        include __DIR__.'/../../app/views/'.$template_view;
    }
}