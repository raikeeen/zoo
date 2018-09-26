<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 26.09.2018
 * Time: 19:05
 */
class zoo{
    public $animal;
    public $arrayAll=array();
    function  __construct($animal,$arrayAll){
        $this -> animal= $animal;
        $this->arrayAll= $arrayAll;
    }
    function add($animal,$arrayAll){
       return $arrayAll.array_push($animal);
    }
    function view(){
        foreach ($this->arrayAll as $a){
            echo $a;
        }
    }
}
class cell{
    function open(){

    }
    function close(){

    }
}
class animal{
    public $name;
}



