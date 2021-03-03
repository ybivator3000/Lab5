<?php
require_once '../config/connect.php';
$productname = $_POST['productname'];
$username = $_POST['username'];
$comment = $_POST['comment'];
$date = $_POST['date'];
$mysqli->query(" INSERT INTO `crud` (`id`, `productname`, `username`, `comment`, `date`) VALUES (NULL, '$productname', '$username', '$comment', '$date')");
header("Location: ../test.php");