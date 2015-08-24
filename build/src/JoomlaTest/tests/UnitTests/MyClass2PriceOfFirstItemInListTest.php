<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 24-08-2015
 * Time: 11:45
 */
namespace mySpace;
require_once(__DIR__."/../../Classes/MyClass2.php");
class MyClass2PriceOfFirstItemInListTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;
    public function setUp(){
        $this->testSubject = new MyClass2();
    }

    public function testPriceOfFirstItemInList()
    {
        $var = [5,23,2,6,2];
        $result = $this->testSubject->priceOfFirstItemInList($var);
        $expectedResult = 5;
        $this->assertEquals($expectedResult, $result, "Testing priceOfFirstItemInList");
    }

    public function testPriceOfFirstItemInList2()
    {
        $var = [-5,23,-2,-6,2];
        $result = $this->testSubject->priceOfFirstItemInList($var);
        $expectedResult = -5;
        $this->assertEquals($expectedResult, $result, "Testing priceOfFirstItemInList");
    }


}