<?php

/**
 * Created by PhpStorm.
 * User: Brobak
 * Date: 05-08-2015
 * Time: 11:50
 */
class SeleniumTests2 extends PHPUnit_Extensions_Selenium2TestCase
{

    public static $browsers = array(
        /**array(
            "name" => "Firefox",
            "browserName" => "firefox",
        ),*/
        array(
            "name" => "Chrome",
            "browserName" => "chrome",
        ),
        array(
            "name" => "Internet Explorer",
            "browserName" => "internet explorer",
        ),
    );

    public function setUp(){
        parent::setUp();
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowserUrl('http://localhost/JoomlaTest/');
        //$this->web_driver = new WebDriver();
    }
    public function testSearch1(){

        $this->url('index.php');

        $form = $this->byCssSelector('form');

        $this->byName('searchword')->value('Test');

        $form->submit();

        $results = $this->ByCssSelector('.badge')->text();

        $this->assertNotEquals('0', $results, "Should find results when searching for Test");
    }
    public function testLogin1(){

        $this->url('index.php');
        $this->byCssSelector('.item-312')->click();

        $this->byId('modlgn-username')->value('Brobak');
        $this->byId('modlgn-passwd')->value('1234');

        $this->byId('login-form')->submit();


        $results = $this->byCssSelector('.login-greeting')->text();

        $this->assertContains('Hi', $results, "Should find results when searching for Test");
    }

    public function testLogin2(){

        $this->url('index.php');
        $this->timeouts()->implicitWait(25000);

        $this->byCssSelector(".item-233")->submit();
        $this->timeouts()->implicitWait(15000);

        $this->byId('username')->value('Brobak');
        $this->byId('password')->value('1234');
        $this->byCssSelector('.form-validate')->submit();
        $this->timeouts()->implicitWait(15000);

        $this->byCssSelector('.btn-group')->click();
        $this->byId('jform_name')->clear();
        $this->byId('jform_name')->value('New Name');
        $this->byId('member-profile')->submit();
        $this->timeouts()->implicitWait(15000);

        $alert = $this->byCssSelector('.alert-message')->text();


        $this->assertContains('Profile successfully saved.', $alert, "Should alert us that the new updates to the profile is saved");
    }
/**
    public function testLogin3(){

        $this->url('index.php');
        $this->timeouts()->implicitWait(25000);

        $this->byCssSelector(".item-233")->click();
        $this->timeouts()->implicitWait(15000);

        $this->byId('username')->value('Brobak');
        $this->byId('password')->value('1234');
        $this->byCssSelector('.form-validate')->submit();
        $this->timeouts()->implicitWait(15000);

        $this->byCssSelector('.btn-group')->click();
        $this->byId('jform_name')->clear();
        $this->byId('jform_name')->value('New Name');
        $this->byId('member-profile')->submit();
        $this->timeouts()->implicitWait(15000);

        $alert = $this->byCssSelector('.alert-message')->text();


        $this->assertContains('Profile successfully saved.', $alert, "Should alert us that the new updates to the profile is saved");
    }
*/
    /**public function testLoginFormSubmitsToAdmin(){
        $this->url('index.php');

        $form = $this->byCssSelector('form');
        $action = $form->attribute('action');

        $this->assertContains('admin.php', $action, 'Testing that the form action is admin.php');

        $this->byName('username')->value('DasName');
        $this->byName('password')->value('1234');
        $form->submit();

        $welcome = $this->byCssSelector('h1')->text();

        $this->assertEquals('Welcome, DasName', $welcome);
    }

    public function testSubmitButtonIsDisabledUntilFieldsAreFilled(){
        $this->url('index.php');
        $this->assertFalse($this->byId('submit')->enabled(),"The submit button must be dissabled while the name and password fields are empty");

        $this->byName('username')->value('DasName');
        $this->byName('password')->value('1234');

        $this->assertTrue($this->byId('submit')->enabled(), "The submit button should be enabled after entering a name and password");
    }*/

}
