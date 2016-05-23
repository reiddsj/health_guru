<?php

$dbconnect = array('server'=>'localhost', 'user'=>'root', 'pass'=>'', 'name'=>'health_guru_users');

$db = new mysqli(
	$dbconnect['server'],
	$dbconnect['user'],
	$dbconnect['pass'],
	$dbconnect['name']
);



//echo $db -> connect_errno;

if ($db->connect_errno>0){
	echo "Database connection error";
	exit;
}

?>