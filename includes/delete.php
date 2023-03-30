<?php
include '../connect.php';
?>
<?php
$orderid = $_GET['order_id'];
$myid=$_GET['car_id'];
$delete=$mysqli->query("delete  from cars where car_id='$_GET[car_id]'") or die(mysqli_error($mysqli)) ;
if ($delete) {
	header("location:../admin/viewcars.php");
}
else{
	echo "<script type='text/javascript'>alert('Failed to delete');</script>";
}


$order_delete=$mysqli->query("delete  from orders where order_id='$_GET[order_id]'") or die(mysqli_error($mysqli)) ;
if ($delete) {
	header("location:../users/myorder.php");
}
else{
	echo "<script type='text/javascript'>alert('Failed to delete');</script>";
}
?>