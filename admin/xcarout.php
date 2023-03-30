<?php
include '../connect.php';
?>
<?php
	$payid=$_GET['payid'];
	//$myid=$_SESSION['login']['user_id'];
	$quantity = 1;
	//$date = now();
    $sel = $mysqli->query("select * from payment where payment_id = $payid");
    $row=mysqli_fetch_array($sel);
    $carid = $row['car_id'];
    $userid = $row['user_id'];
	/////////////////////////////////////
	$sel2 = $mysqli->query("select * from cars where car_id = $carid");
    $row2=mysqli_fetch_array($sel2);
    $q = $row2['quantity'];
	if($q >= 1){
	////////////////////////////////////
	$sql=$mysqli->query("INSERT INTO `stockout`(`out_id`, `car_id`, `user_id`, `quantity`, `date`) VALUES (' ','$carid','$userid','$quantity',now())");
	$upd = $mysqli->query("update cars set quantity = quantity -1 where quantity > 0 and car_id = $carid")or die(mysqli_error($mysqli));
	$del = $mysqli->query("delete from payment where payment_id = $payid  and car_id = $carid");
	$del2 = $mysqli->query("delete from confirmed_orders where user_id = $userid  and car_id = $carid");
	if ($sql and $del and $upd and $del2) {
		header("location:carout.php");
	}
	else{
		echo "<script type='text/javascript'>alert('Failed to delete');</script>";
	}
   }
   else
   {
	echo "<script type='text/javascript'>alert('Sorry No Car in stock');</script>";
	//header("location:inprocess.php");
   }
?>
