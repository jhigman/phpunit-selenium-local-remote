<?php

require_once 'loader.php';

class SmokeTest extends DynamicTestBase
{
  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("link=Home");
    $this->waitForPageToLoad("30000");
    $this->verifyTextPresent("My Home Page");
    $this->click("link=About");
    $this->waitForPageToLoad("30000");
    $this->assertTextPresent('About Us');
    $this->click("link=Contact Us");
    $this->waitForPageToLoad("30000");
    $this->assertTextPresent('Contact Us');
    $this->type("name=email", "fred@example.com");
    $this->click("css=button.btn.btn-primary");
    $this->waitForTextPresent("We will contact you");
  }
}
?>