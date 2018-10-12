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

   public function add($animal){
       return $this -> arrayAll.array_push($animal);
    }
    function view(){
        foreach ($this->arrayAll as $a){
            echo $a;
        }
    }
}
class cell {
    public $zam;
    public $cell;
    function  __construct($zam,$cell){
        $this -> zam= $zam;
        $this->cell= $cell;
    }
    function cell($cell,$zam){
        if($zam===true)
            if($cell===true)
                echo "Open cell and zam";
            else echo "Close cell, open zam";
        else echo "Close cell and zam";
    }
}

class mammals extends animal implements actions{
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
class bird extends animal implements actions{
    public $feet;
    function  __construct($name,$old,$sex,$cell,$feet){

        $this->feet= $feet;
        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){

    }
}
class fish extends animal implements actions {
    public $feet;
    function  __construct($name,$old,$sex,$cell,$feet){

        $this->feet= $feet;
        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){

    }
}

class reptiles extends animal implements actions {
    public $feet;
    function  __construct($name,$old,$sex,$cell,$feet){

        $this->feet= $feet;
        parent::__construct($name,$old,$sex,$cell);
    }
    public function action(){

    }

}
interface actions{
    public function action();
}
$z=new zoo();
$a=new animal("kotya",12,"male",true);
$z.add($a);



