<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:38
 */
include "kit.php";
include "delfin.php";
include "carp.php";
class fish extends animal implements actions {  //рыбы
    function  __construct($name,$old,$sex,$cell){


        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){
        echo "We swimming";
    }
}