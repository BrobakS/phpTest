<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 04-08-2015
 * Time: 14:52
 */

namespace mySpace;
require_once(__DIR__."/../../../build/src/JoomlaTest/Classes/MyClass.php");

class MyClassDoubleTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;

    public function setUp(){
        $this->testSubject = new MyClass();
    }

    public function testDoubleWithTwoPositiveNumbers()
    {
        $var = 5;

        $result = $this->testSubject->double($var);
        $expectedResult = 10;

        $this->assertEquals($expectedResult, $result, "Doubling the value of 5 should result in 10");
    }

    public function testDouble0()
    {
        $var = 0;

        $result = $this->testSubject->double($var);
        $expectedResult = 0;

        $this->assertEquals($expectedResult, $result, "Doubling the value of zero should result in 0");
    }

    public function testDoubleNegative()
    {
        $var = -4;

        $result = $this->testSubject->double($var);
        $expectedResult = -8;

        $this->assertEquals($expectedResult, $result, "Doubling the value of -4 shoudl result in -8");
    }
}
