<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 04-08-2015
 * Time: 13:14
 */

namespace mySpace;
//require_once(__DIR__."/../../../build/src/JoomlaTest/Classes/MyClass.php");

class MyClassTest extends \PHPUnit_Framework_TestCase
{

    private $testSubject;
	

    public function setUp(){
        $this->testSubject = new MyClass();
    }

    public function testHalfPostiveEven()
    {
        $c = new MyClass();
        $var1 = 10;

        $result = $c->half($var1);
        $expectedResult = 5;

        $this->assertEquals($expectedResult, $result, "The half of 10 should be 5");
    }

    public function testHalf0()
    {
        $c = new MyClass();
        $var1 = 0;

        $result = $c->half($var1);
        $expectedResult = 0;

        $this->assertEquals($expectedResult, $result, "The half of zero should be zero");
    }

    public function testHalfPositiveUneven()
    {
        $c = new MyClass();
        $var1 = 5;

        $result = $c->half($var1);
        $expectedResult = 2.5;

        $this->assertEquals($expectedResult, $result, "The half of 5 should be 2.5");
    }

    public function testHalfNegativeEven()
    {
        $c = new MyClass();
        $var1 = -10;

        $result = $c->half($var1);
        $expectedResult = -5;

        $this->assertEquals($expectedResult, $result, "The half of -10 should be -5");
    }

    public function testHalfNegativeUneven()
    {
        $c = new MyClass();
        $var1 = -5;

        $result = $c->half($var1);
        $expectedResult = -2.5;

        $this->assertEquals($expectedResult, $result, "The half of -5 should be -2.5");
    }

}
