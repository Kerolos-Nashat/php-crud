<?php
session_start();

require "db.php";

$email = $_POST['email'];
$pass  = $_POST['pass'];

$db = new db();

$result = $db->get_data("emp","email='$email' AND pass='$pass'");

$user = $result->fetch(PDO::FETCH_ASSOC);

if($user){

$_SESSION['user'] = $user['f_name'];

header("Location:index.php");

}else{

echo "Invalid email or password";

}