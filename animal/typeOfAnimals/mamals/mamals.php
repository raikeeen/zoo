<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:38
 */
include 'lion.php';
include "jiraf.php";
include "wolf.php";
include "monkey.php";
include "zebra.php";


class mammals extends animal implements actions{    //пресмыкающиеся
    public $feet;
    public $tail;
    function  __construct($name,$old,$sex,$cell,$feet,$tail){
        $this->feet= $feet;
        $this->tail= $tail;
        parent::__construct($name,$old,$sex,$cell);

    }
    public function action(){

    }

}