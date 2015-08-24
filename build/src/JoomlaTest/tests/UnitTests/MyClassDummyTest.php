<?php
/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 24-08-2015
 * Time: 09:27
 */
namespace mySpace;
require_once(__DIR__."/../../Classes/MyClass.php");
class MyClassDummyTest extends \PHPUnit_Framework_TestCase
{
    private $testSubject;
    public function setUp(){
        $this->testSubject = new MyClass();
    }
    public function testDummyWith3()
    {
        $var = 3;
        $result = $this->testSubject->dummy($var);
        $expectedResult = true;
        $this->assertEquals($expectedResult, $result, "Testing dummy with 3 expects a true return");
    }

    public function testDummyWith6()
    {
        $var = 6;
        $result = $this->testSubject->dummy($var);
        $expectedResult = false;
        $this->assertEquals($expectedResult, $result, "Testing dummy with 6 expects a true return");
    }

    
}