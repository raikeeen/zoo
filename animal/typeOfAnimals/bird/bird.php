<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:38
 */
include 'aist.php';
include "sokol.php";
include "yastreb.php";

class bird extends animal implements actions{ //птицы
    public $feet;
    function  __construct($name,$old,$sex,$cell,$feet){

        $this->feet= $feet;
        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){
        echo "kar-kar";

    }
}