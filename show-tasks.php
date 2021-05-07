<?php 

include 'config.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
	$date = explode(" ", $row['creation_date']);
	$doneDate = explode(" ", $row['done_date']);
?>

<li>
	<div class="todo-item">
		<?php if($row['checked']){?>
			<input
			   type="checkbox"
		       class="check-box"
		       data-todo-id ="<?php echo $row['id']; ?>"
		       checked
		    />
		    <span class="checked"><?php echo $row['title']; ?></span>
        <?php }else { ?>
        	<input 
        	   type="checkbox"
	           data-todo-id ="<?php echo $row['id']; ?>"
	           class="check-box"
	        />
	        <span class="text"><?php echo $row['title']; ?></span>
        <?php } ?>
	    <br>
	    <small class="text">created: <?php echo $date[0] ?></small>
	    <small class="text">done: <?php echo $doneDate[0] ?></small>
	    <i id="removeBtn" class="icon fa fa-trash" data-id="<?php echo $row['id']; ?>"></i>
	</div>
</li>

<?php
    }
    echo '<div class="pending-text">You have ' . mysqli_num_rows($result) . ' tasks.</div>';
} else {
    echo "<li><span class='text'>No Record Found.</span></li>";
}

?>