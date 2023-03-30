<?php
include '../connect.php';
?>
<?php
	$carid=$_GET['car_id'];
	$myid=$_SESSION['login']['user_id'];
	$quantity = 1;
	//$date = now();
	$sql=$mysqli->query("INSERT INTO `orders` (`order_id`, `car_id`, `user_id`, `quantity`, `date`) VALUES ('', '$carid', '$myid', '1', now())");
	if ($sql) {
		header("location:index.php");
	}
	else{
		echo "<script type='text/javascript'>alert('Failed to delete');</script>";
	}	
?>
