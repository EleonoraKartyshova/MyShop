<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 12:32
 */

namespace MyShop;
use \PDO;

class MyPDO
{
    public function get_dbc()
    {
        $dbc = new PDO('mysql:host=localhost;dbname=kartyshova_db','kartyshova','phpuser!');

        return $dbc;
    }
    public function create()
    {

    }
    public function read()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}