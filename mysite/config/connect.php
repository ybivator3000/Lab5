<?php
$mysqli = new mysqli('localhost', 'root',  '',  'CRUD');
if(mysqli_connect_errno()){
    die('ERROR'.mysqli_connect_error());
}
?>