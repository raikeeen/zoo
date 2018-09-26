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
    public $zam;
    public $cell;
    function  __construct($zam,$cell){
        $this -> zam= $zam;
        $this->cell= $cell;
    }
    function zam($zam){
        if($zam===true)
            echo "Open";
        else echo "Close";
    }
    function cell($cell){
        if($cell===true)
            echo "Open";
        else echo "Close";
    }
}
class animal{
    public $name;
    public $old;
    public $sex;
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }
}
class mammals extends animal {
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }

}
class bird extends animal {
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }
}
class fish extends animal {
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }
}
class amphibians extends animal {
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }
}
class reptiles extends animal {
    function  __construct($name,$old,$sex){
        $this -> name= $name;
        $this->old= $old;
        $this->sex= $sex;
    }
}



