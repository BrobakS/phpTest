<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 24-08-2015
 * Time: 10:52
 */
namespace mySpace;


class MyClass2
{
    function dimSum(){
        return "dimSum";
    }

    function sumOfOrders($listOfProducts){
        $res = 0;
        foreach($listOfProducts as &$prod){
            $res += $prod;
        }

        return $res;
    }

    function avgPriceOfProdInOrders($listOfProducts){
        $res = 0;
        foreach($listOfProducts as &$prod){
            $res += $prod;
        }

        return $res/sizeof($listOfProducts);
    }

    function priceOfFirstItemInList($listOfProducts){
        $res = array_values($listOfProducts)[0];
        return $res;
    }

}