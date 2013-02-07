<?php

class LocalTestBase extends PHPUnit_Extensions_SeleniumTestCase
{
	const TIMEOUT = 9000;
	const SPEED = 1000;
	
	function setUp()
    {
    	$sauceBrowser = getenv("SAUCE_BROWSER");
    	$sauceBaseUrl = getenv("SAUCE_BASE_URL");    	
    	
    	$this->setBrowser($sauceBrowser);
    	$this->setBrowserUrl($sauceBaseUrl);

    	$this->setTimeout(self::TIMEOUT);
		$this->setSpeed(self::SPEED);
    }
}