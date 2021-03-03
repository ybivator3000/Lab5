<?php
require_once '../config/connect.php';
$id = $_GET['id'];
$mysqli->query("DELETE FROM `crud` WHERE `crud`.`id` = '$id'");
header("Location: ../test.php");
?>