<?php

include 'hgconnect.php';

if (isset($_GET['user_id'])){
	$user_id = $_GET['user_id'];
}



$stmt = $db->prepare("DELETE FROM `user_info` WHERE `user_id` = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->close();

header("Location: dbtest_delete.php");
?>