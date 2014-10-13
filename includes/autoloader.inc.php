<?php

spl_autoload_register(function($class){
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classes'  . DIRECTORY_SEPARATOR . $class . '.class.php');
});