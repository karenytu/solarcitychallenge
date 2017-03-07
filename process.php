<?php
	require 'vendor/autoload.php';
	$uri = "mongodb://<dbuser>:<dbpassword>@ds121190.mlab.com:21190/heroku_5kdpcthd";
	$client = new MongoDB\Client($uri);
	
	$name=$_POST['name'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$city=$_POST['city'];
	$region=$_POST['region'];
	$country=$_POST['country'];
	$interest=$_POST['interest'];

	$user = array(
		'name' => name,
		'address1' => address1,
		'address2' => address2,
		'city' => city,
		'region' => region,
		'country' => country,
		'interest' => interest
	);
