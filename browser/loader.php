<?php

spl_autoload_register(function($class) {
	if (strcasecmp($class, 'DynamicTestBase') === 0) {
		$remote = getenv('SAUCE_RUN_REMOTE');
		if ($remote) {
			require_once 'RemoteTestBase.php';
			class_alias('RemoteTestBase', 'DynamicTestBase');
		} else {
			require_once 'LocalTestBase.php';
			class_alias('LocalTestBase', 'DynamicTestBase');
		}
	}
}, true, true);

?>