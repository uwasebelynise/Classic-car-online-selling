<?php
include '../connect.php';
?>
<?php
	$orderid=$_GET['order_id'];
	$myid=$_SESSION['login']['user_id'];
	$quantity = 1;
	//$date = now();
    $sel = $mysqli->query("select * from orders where order_id = $orderid");
    $row=mysqli_fetch_array($sel);
    $carid = $row['car_id'];
    $userid = $row['user_id'];
	$sql=$mysqli->query("INSERT INTO `confirmed_orders`(`co_id`, `order_id`, `car_id`, `user_id`, `date`) VALUES (' ','$orderid','$carid','$userid',' ')");
    $del = $mysqli->query("delete from orders where order_id = $orderid");
	if ($sql and $del) {
		header("location:orders.php");
	}
	else{
		echo "<script type='text/javascript'>alert('Failed to delete');</script>";
	}	
?>
