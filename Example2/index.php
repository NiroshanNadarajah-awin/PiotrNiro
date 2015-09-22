<?php

require 'functions/tree.php';

$tree = array(

		'core' => array(
			'init.php'
			),

		'classes' => array(
			'User.php',
			'Hash.php',
			'session.php'
			),

		'functions' => array(
			'security.php'
			),

		'template' => array(
			'index.template.php',
			'includes' => array(
				'header.template.php',
				'footter.template.php'
				)

			),

		'index.php',
		'login.php',
		'register.php'

	);

echo treeOut($tree);
