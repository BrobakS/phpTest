<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 04-08-2015
 * Time: 13:57
 */

namespace mySpace;
require_once("/src/JoomlaTest/Classes/MyClass.php");

class MyClassSumTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;

    public function setUp(){
        $this->testSubject = new MyClass();
    }

    public function testSum2Possitives()
    {
        $var1 = 5;
        $var2 = 10;

        $result = $this->testSubject->sum($var1, $var2);
        $expectedResult = 15;

        $this->assertEquals($expectedResult, $result, "The sum of 5 and 10 should be 15");
    }

    public function testSum0AndAPostive()
    {
        $var1 = 0;
        $var2 = 10;

        $result = $this->testSubject->sum($var1, $var2);
        $expectedResult = 10;

        $this->assertEquals($expectedResult, $result, "The sum of 0 and 10 should be 10");
    }

    public function testSumNegativeAndAPostive()
    {
        $var1 = -10;
        $var2 = 10;

        $result = $this->testSubject->sum($var1, $var2);
        $expectedResult = 0;

        $this->assertEquals($expectedResult, $result, "The sum of -10 and 10 should be 0");
    }

    public function testSum2Negatives()
    {
        $var1 = -10;
        $var2 = -10;

        $result = $this->testSubject->sum($var1, $var2);
        $expectedResult = -20;

        $this->assertEquals($expectedResult, $result, "The sum of -10 and -10 should be -20");
    }

    public function testSum2BigNumbers()
    {
        $var1 = 2000000000;
        $var2 = 2000000000;

        $result = $this->testSubject->sum($var1, $var2);
        $expectedResult = 4000000000;

        $this->assertEquals($expectedResult, $result, "The sum of 2000000000 and 2000000000 should be 4000000000");
    }
}
