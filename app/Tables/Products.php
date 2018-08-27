<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:33
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;

class Products extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'products';
    public $id;
    public $title;
    public $picture;
    public $quantity_in_stock;
    public $style;
    public $features;
    public $fabric_material;
    public $length;
    public $color;
    public $manufacturer_country;
    public $description;
    public $created_at;
    public $updated_at;
}