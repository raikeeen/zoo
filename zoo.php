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
class amphibians extends animal implements actions {
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
//$sobaka=new mammals("yrod",14,"male",true,4,true);
//$kowka=new mammals("may",4,"male",true,4,true);
//$kowka=new animal("myka",4,"female",cell.$cell(true));
//$olen=new animal("myka",4,"female",cell.$cell(true));
//$zoo=new zoo();
//$zoo.add($sobaka);
//$zoo.add($kowka);
//$zoo.view();


