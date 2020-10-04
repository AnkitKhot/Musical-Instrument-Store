<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>

<body>
	<?php include 'header.php';?>
	<div class="container padding">
        <div class="row register-form">
        <div class="col-xs-6">
        	<div class="panel text-center">
        		<div class="panel-heading">
        			<h3> Register</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="" role="form" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name="submit-register"value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
      <?php
							if (isset($_POST['submit-register'])) {
									$firstname=$_POST['first_name'];
									$lastname=$_POST['last_name'];
									$email=$_POST['email'];
									$pass=$_POST['password'];

									if(mysqli_query($link,"insert into users(firstname,lastname,email,password) value('$firstname','$lastname','$email','$pass')"))
									{
										echo "<script>alert('Data saved')</script>";
										echo "<script>window.location='login.php'</script>";
									}   
									else 
									{
									    echo "<script>alert('Data not saved')</script>";                          	# code...
									}                              
								    }                         
							?> 
	<?php include 'footer.php';?>

</body>
</html>