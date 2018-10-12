<?php
/**
 * Created by PhpStorm.
 * User: raiken
 * Date: 12.10.2018
 * Time: 19:50
 */

class jiraf extends mammals
{
    function  __construct($name,$old,$sex,$cell,$feet,$tail){

        parent::__construct($name,$old,$sex,$cell,$feet,$tail);

    }
    public function action(){
        echo "ya is very long";
    }
}