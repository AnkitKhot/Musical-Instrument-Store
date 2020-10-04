<?php
include 'connection.php';
SESSION_START();

if (isset($_GET['del'])) {
	$id=$_GET['del'];
	$sql="UPDATE checkout SET delivery='delivered' WHERE orderid='$id' ";
	$res=mysqli_query($link,$sql);
	echo"<script>window.location='orders.php'</script>";
	
}
?>