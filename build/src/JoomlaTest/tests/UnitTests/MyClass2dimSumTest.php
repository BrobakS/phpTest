<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 24-08-2015
 * Time: 10:56
 */
namespace mySpace;
require_once(__DIR__."/../../Classes/MyClass2.php");
class MyClass2dimSumTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;
    public function setUp(){
        $this->testSubject = new MyClass2();
    }
    public function testDimSum()
    {
        $result = $this->testSubject->dimSum();
        $expectedResult = "dimSum";
        $this->assertEquals($expectedResult, $result, "Testing dimsum function");
    }



}