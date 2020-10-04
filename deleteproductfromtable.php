<?php
include 'connection.php';

if (isset($_GET['del'])) {
	$id=$_GET['del'];
	$sql="DELETE FROM product WHERE id=$id";
	$res=mysqli_query($link,$sql);
	echo"<script>window.location='deleteproduct.php'</script>";
	# code...
}
?>