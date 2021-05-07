<?php

include 'config.php';

$id = $_POST['id'];

$sql = "SELECT id, checked FROM tasks WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$todo = mysqli_fetch_assoc($result);
$uId = $todo['id'];
$checked = $todo['checked'];

$uChecked = $checked ? 0 : 1;

$sqlUpdate = "UPDATE tasks SET checked='$uChecked' WHERE id='$uId'";
$res = mysqli_query($conn, $sqlUpdate);

if($res){
    echo $checked;
}else {
    echo "error";
}

?>