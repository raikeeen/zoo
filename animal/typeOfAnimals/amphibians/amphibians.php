<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:39
 */
include 'cherepaha.php';
include 'krokodil.php';
include 'lyagushka.php';

class amphibians extends animal implements actions {
    public $feet;
    function  __construct($name,$old,$sex,$cell,$feet){

        $this->feet= $feet;
        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){

    }
}