<?php include 'connection.php';?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">-->
	<title>Login</title>
</head>


<body id="LoginForm">
			<div class="container padding">
            <div class="row login-form text-center">
             <div class="col-sm-6">
		      <div class="panel panel-default ">
			     <div class="main-div">
    	
   					<h2>User Login</h2>
   					<p>Please enter your email and password</p>
   				</div>
    			<form id="Login" action="" method="post">

        		<div class="form-group">


            		<input type="text" class="form-control" name="username"  placeholder="Username" >

        		</div>

        		<div class="form-group">

            		<input type="password" class="form-control" name="password"  placeholder="Password" >

        		</div>
        	<div class="forgot">
        		<a href="reset.html">Forgot password?</a>
			</div>
        		<input type="submit" name="sub" class="btn btn-primary" value="Login">
                <button type="btn" class="btn btn-primary"><a href="register.php" >Register</a></button>
           

</div>
 </form>
 <?php
    if (isset($_POST['sub']));
 {
    @$username=$_POST['username'];
    @$password=$_POST['password'];

    $q="select * from users";
    $run=mysqli_query($link,$q);
    while($row=mysqli_fetch_array($run)){
    # code...
       $id=$row['id'];
       $u=$row['firstname'];
       $p=$row['password'];
      
    
      if ($username==$u && $password==$p) {
        $_SESSION['username']=$id;
        echo'
        <script>
            window.location="index.php";
        </script>
';
          # code...
      }
      else{
        echo 'invalid username/password';
      }
  }
}
?>

        
    </div>
</div>
 <a href="adminlogin.php" class="btn btn-info" role="button">Admin Login</a>
            </div>


<?php include 'footer.php';?>

</body>
</html>

