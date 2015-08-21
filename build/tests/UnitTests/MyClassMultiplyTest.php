<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 05-08-2015
 * Time: 08:24
 */
namespace mySpace;
require_once(__DIR__."/../../src/JoomlaTest/Classes/MyClass.php");
class MyClassMultiplyTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;
    public function setUp(){
        $this->testSubject = new MyClass();
    }
    public function testMultiplyPositiveWithPositive()
    {
        $var1 = 5;
        $var2 = 10;
        $result = $this->testSubject->multiply($var1, $var2);
        $expectedResult = 50;
        $this->assertEquals($expectedResult, $result, "Multiplying 5 with 10 should result in 50");
    }
    public function testMultiplyPositiveWithZero()
    {
        $var1 = 5;
        $var2 = 0;
        $result = $this->testSubject->multiply($var1, $var2);
        $expectedResult = 0;
        $this->assertEquals($expectedResult, $result, "Multiplying 5 with 0 should result in 0");
    }
    public function testMultiplyZeroWithZero()
    {
        $var1 = 0;
        $var2 = 0;
        $result = $this->testSubject->multiply($var1, $var2);
        $expectedResult = 0;
        $this->assertEquals($expectedResult, $result, "Multiplying zero with zero shoudl result in zero");
    }
    public function testMultiplyPositiveWithNegative()
    {
        $var1 = 10;
        $var2 = -10;
        $result = $this->testSubject->multiply($var1, $var2);
        $expectedResult = -100;
        $this->assertEquals($expectedResult, $result, "Multiplying 10 with -10 should result in -100");
    }
}