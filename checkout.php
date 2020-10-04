<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">
</head>
<?php include 'header.php';?>

<?php
  if(isset($_SESSION['username'])){
    $uname= $_SESSION["username"];
  ?>



<body>
	<div class="container">
	<div class="row row-checkout">
  <div class="col-75">
    <div class="container container-checkout">
      <form action="" role="form" method="post">
        <div class="row row-checkout">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="uname" placeholder="Yash Haria" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
            <input type="email" id="email" name="email" placeholder="abc@example.com" required><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="503 Society Thane Maharashtra" required>
        </div>
        <input type="submit" value="Continue to checkout" name="checkoutbtn" class="btn-primary btn-check">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b></b>
        </span>
        </h4>

          <?php 
   $uidquery="select * from cart where uid=$uname";
    $run=mysqli_query($link,$uidquery);
    
  while($row=mysqli_fetch_array($run)){
     $uid=$row['uid'];
     $pid=$row['pid'];
     $quantity=$row['quantity'];


    $productquery= "select * from product where id=$pid";
    $productrun=mysqli_query($link,$productquery);

    while($productrow=mysqli_fetch_array($productrun)){
      
        $productname = $productrow["name"];
      $producttotalprice = $productrow["price"];
     echo $productcode = $productrow["id"];
      $pic=$productrow['img'];
      
      $pr=$productrow['price'];

      $producttotalpricetotal = $producttotalprice * $quantity;
      @$cartTotal = $producttotalpricetotal + $cartTotal;

?>
        
      
      <p><?php echo $productname;?><span class="price"><?php echo $producttotalprice; ?></span></p>

   

    <?php }
  }
  ?>
       <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo number_format($cartTotal); ?></b></span></p>
    </div>
  </div>
</div>
</div>
<?php


              if (isset($_POST['checkoutbtn'])) {
                  $firstname=$_POST['uname'];
                  $email=$_POST['email'];
                  $pass=$_POST['address'];
                  
                  if(mysqli_query($link,"insert into checkout(uid,pid,name,email,address,price) value('$uname','$firstname','$email','$pass)"))
                  {
                    echo "<script>alert('Data saved')</script>";
                    /*echo "<script>window.location='thankyou.php'</script>";*/
                  }   
                  else 
                  {
                      echo "<script>alert('Data not saved')</script>";                            # code...
                  }                              
                    }  
                    }                        
              ?> 

<?php include 'footer.php';?>
</body>
</html>