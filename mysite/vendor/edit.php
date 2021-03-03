
<?php
require_once '../config/connect.php';
$productname = $_POST['productname'];
$username = $_POST['username'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$id = $_POST['id'];
$mysqli->query(" UPDATE `crud` SET  `productname` = '$productname', `username` = '$username', `comment` = '$comment', `date` = '$date' WHERE `crud`.`id` = '$id' ");
header("Location: ../test.php");
?>