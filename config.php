<?php 

$server = "localhost";
$username = "root";
$password = "3mm4nu3l";
$database = "todo_list";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>