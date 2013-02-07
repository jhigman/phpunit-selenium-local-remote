<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase/SauceOnDemandTestCase.php';
require_once 'PHPUnit/Util/XML.php';

class RemoteTestBase extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase
{
	const TIMEOUT = 9000;
	
    function setUp()
    {
        $sauceUserName = getenv('SAUCE_USER_NAME');
        $sauceAccessKey = getenv('SAUCE_ACCESS_KEY');

        $sauceOS = getenv("SAUCE_OS");
		$sauceBrowser = getenv("SAUCE_BROWSER");
        $sauceBrowserVersion = getenv("SAUCE_BROWSER_VERSION");
        $sauceBaseUrl = getenv("SAUCE_BASE_URL");

        $this->setUserName($sauceUserName);
        $this->setAccessKey($sauceAccessKey);
        
        $this->setOs($sauceOS);
        $this->setBrowser($sauceBrowser);
        $this->setBrowserVersion($sauceBrowserVersion);
        $this->setBrowserUrl($sauceBaseUrl);

        $this->setTimeout(self::TIMEOUT);

        $className = get_class($this);
        $testName = $this->getName();
        echo "\n[{$sauceBaseUrl}] Sauce: {$className}->{$testName} ({$sauceBrowser} {$sauceBrowserVersion} on {$sauceOS})\n";
    }
}