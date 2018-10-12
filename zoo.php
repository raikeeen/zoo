<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 26.09.2018
 * Time: 19:05
 */
include "animal/animal.php";
class zoo{  //зоопарк
    public $animal;
    public $arrayAll=array();

   public function add($animal):void {  //метод добавления животных
       array_push($arrayAll,$animal);
    }
    function view(){    //метод просмотра животных в зоопарке
        foreach ($this->arrayAll as $a){
            echo $a;
        }
    }
}
class cell {    //клетка
    public $zam;
    public $cell;
    function  __construct($zam,$cell){
        $this -> zam= $zam;
        $this->cell= $cell;
    }
    function cell($cell,$zam){ //метод проверки клетки
        if($zam===true)
            if($cell===true)
                echo "Open cell and zam";
            else echo "Close cell, open zam";
        else echo "Close cell and zam";
    }
}

interface actions{  //интерфейс
    public function action();   //действия животных
}



