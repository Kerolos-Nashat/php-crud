<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location:login.php");
}?>

<?php
require "db.php";

$stm = $connection->prepare(
    "UPDATE emp 
     SET f_name=?, l_name=?, email=?, address=? 
     WHERE id=?"
);

$stm->execute([
    $_POST['f_name'],
    $_POST['l_name'],
    $_POST['email'],
    $_POST['address'],
    $_POST['id']
]);

header("Location: index.php");
exit;