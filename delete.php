<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location:login.php");
}?>

<?php
require "db.php";

$db = new db();
$id = $_GET['id'];
$db->delete_data("emp","id=$id");

header("Location:index.php");
exit;