<?php SESSION_START();
?>
<?php include 'connection.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">BAJAAO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="keyboard.php">Keyboards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="guitar.php">Guitars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="drums.php">Drums & Percussion</a>
              </li>
              <?php
      if(isset($_SESSION['username'])){
      $q="select * from admin";
      $run=mysqli_query($link,$q);
      while($row=mysqli_fetch_array($run)){
    # code...
       $u=$row['username'];
  

        if ($_SESSION['username']==$u ) {?>
          
           <li class="nav-item ">
        <a class="nav-link" href="insert-product.php" >
          Insert product
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="orders.php" >
          Orders
        </a>
      </li>
  <?php }
}
}
  ?>
            </ul> 
            
            


  </div> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php

if(isset($_SESSION['username'])) {
    echo '<li><a href="logout.php"><button class="btn btn-outline-success" type="submit">Logout
            </button></a></li>';
     echo'<li><a href="newcart.php"><button class="btn btn-outline-success" type="submit">Cart
            </button></a></li>';
} 
else {
    echo '<li><a href="login.php"><button class="btn btn-outline-success" type="submit">Login/Sign Up</button></a></li>';
}


 
      ?>

      
    </ul>
  
  </div>


           
            
          </div>
      </nav>