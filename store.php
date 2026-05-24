<?php

require "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];

$db = new db();

$connection = $db->get_connection();

$stm = $connection->prepare("INSERT INTO emp (f_name, l_name, email, pass, address) VALUES (?,?,?,?,?)");

$stm->execute([
$fname,
$lname,
$email,
$password,
$address
]);

header("Location:index.php");