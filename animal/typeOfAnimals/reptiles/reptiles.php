<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:39
 */
include "varan.php";
include "yj.php";

class reptiles extends animal implements actions { //рептилии

    function  __construct($name,$old,$sex,$cell){


        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){
        echo "ширх ширх, we very danger";
    }

}