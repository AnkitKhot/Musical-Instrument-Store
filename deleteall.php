<?php
include 'connection.php';
SESSION_START();
if(isset($_SESSION['username'])){
	$uid=$_SESSION['username'];

	$sql="DELETE FROM cart WHERE uid='$uid'";
	$res=mysqli_query($link,$sql);
	echo"<script>window.location='newcart.php'</script>";
	# code...
}

?>