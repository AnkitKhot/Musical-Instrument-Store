<?php
include 'connection.php';
SESSION_START();
if(isset($_SESSION['username'])){
	$uid=$_SESSION['username'];
}
if (isset($_GET['del'])) {
	$id=$_GET['del'];
	$sql="DELETE FROM cart WHERE uid='$uid' AND pid='$id'";
	$res=mysqli_query($link,$sql);
	echo"<script>window.location='newcart.php'</script>";
	# code...
}
?>