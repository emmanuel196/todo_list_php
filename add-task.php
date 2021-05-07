<?php 

include 'config.php';

$task = $_POST['task'];
$doneDate = $_POST['doneDate'];

$fecha_actual = date("d-m-Y");
$diff = strtotime($doneDate) - strtotime($fecha_actual);

if($diff >= 0){
	$sql = "INSERT INTO tasks (title, done_date) VALUES ('$task', '$doneDate')";
	$result = mysqli_query($conn, $sql);

	if ($result) {
	    echo 1;
	} else {
	    echo 0;
	}
} else {
	echo 0;
}

?>