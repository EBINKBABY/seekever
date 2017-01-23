<?php
$username = $_POST['username'];
$password = $_POST['password'];
$connect = mysqli_connect('localhost','root','','seekever') or die("Couldn't connect to the database");
?>