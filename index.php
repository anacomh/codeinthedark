<?php

		//Redirect http to https
		// if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
		// 	$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		// 	header('Location: ' . $redirect);
		// }

		// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		// header("Cache-Control: post-check=0, pre-check=0", false);
		// header("Pragma: no-cache");

		include('includes/autoloader.php');
		include('includes/config.php');

		new Router();

?>
