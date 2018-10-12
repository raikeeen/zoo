<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:38
 */
include 'typeOfAnimals/amphibians/amphibians.php'
include 'typeOfAnimals/bird/bird.php';
include 'typeOfAnimals/fish/fish.php';
include 'typeOfAnimals/mamals/mamals.php';
include 'typeOfAnimals/reptiles/reptiles.php';
class animal   {
    public $name;
    public $old;
    public $sex;
    public $cell;
    function  __construct($name,$old,$sex,$cell){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
        $this->cell= $cell;
    }
}