<?php

include 'hgconnect.php';
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$stmt = $db->prepare("INSERT INTO `user_info`(firstname, lastname, username, password, email) VALUES (?,?,?,?,?)");
$stmt->bind_param('sssss',$firstname, $lastname, $username, $password, $email);
$stmt->execute();
$stmt->close();

header("Location: sign_up.php");
?>