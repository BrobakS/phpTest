<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 04-08-2015
 * Time: 13:13
 */

namespace mySpace;


class MyClass
{
    function sum($x, $y){
        return ($x + $y);
    }

    function multiply($x, $y){
        return ($x * $y);
    }

    function half($x){
        return ($x / 2);
    }

    function double($x){
        return ($x * 2);
    }

    function dummy($input){
        if($input < 5){
            return true;
        }else if($input < 10){
            return false;
        }else{
            return true;
        }
    }
}