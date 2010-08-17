<?php
	// load system
	include('plugins.class.php');
	// start system
	plugins::start('plugins/');
	// call first hook
	plugins::call('helloWorld');
	// second hook
	$test = 'Lorem Ipsum Dolor';
	plugins::call('foo', array($test));
