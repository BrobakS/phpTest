<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 24-08-2015
 * Time: 10:57
 */
namespace mySpace;
require_once(__DIR__."/../../Classes/MyClass2.php");
class MyClass2sumOfOrdersTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;
    public function setUp(){
        $this->testSubject = new MyClass2();
    }

    public function testSumOfOrders()
    {
        $var = [5,23,2,6,2];
        $result = $this->testSubject->sumOfOrders($var);
        $expectedResult = 38;
        $this->assertEquals($expectedResult, $result, "Testing testSumOfOrders");
    }

    public function testSumOfOrders2()
    {
        $var = [5,23,-2,-6,2];
        $result = $this->testSubject->sumOfOrders($var);
        $expectedResult = 22;
        $this->assertEquals($expectedResult, $result, "Testing testSumOfOrders");
    }


}