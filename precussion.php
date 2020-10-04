<?php include 'connection.php';?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Guitar</title>
	<meta charset="utf-8">
	
	
	<link href="./css/style.css" rel="stylesheet">
<style>
body {
 background-image: url('images/musical-background-2842924_1920.jpg'); 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

</head>
<body>


<!--Content-->
<div class="Epparels-content">
	<div class="container-fluid">
		<div class="row">
                   
	


				<div class="col-lg">
					<div class="row">

						<?php 

							$q="select * from product where category='precussion'";
							$run=mysqli_query($link,$q);
							while($row=mysqli_fetch_array($run))
							{
								$id=$row['id'];
								$name=$row['name'];
								$img=$row['img'];
								$price=$row['price'];

							

						?>
						<div class="col-md-3"><?php
							echo "<figure class='card card-product'>
								<div class='img-wrap'> 
									<img src='product-img/$img'>
									
								</div>";?>
								<figcaption class='info-wrap'>
									<?php echo"<h6 class='title text-dots'><a href='#'>$name</a></h6>";?>
									<div class='action-wrap'>
										<a href='b.php?product=<?php echo $id;?>' class='btn btn-dark btn-sm float-right'> Order </a>
										<div class='price-wrap h6'>
											<?php echo"<span class='price-new'>$price</span>";?>
											<!--<del class='price-old'>$1980</del>-->
										</div> <!-- price-wrap.// -->
									</div> <!-- action-wrap -->
								</figcaption>
							</figure> <!-- card // -->
						</div> <!-- col // -->
					<?php
				}

				?>	
</div> 
					
				</div>
			</div>
		
	</div>
</div><!--Epparels-conternt close-->
<!--Welcome -->



<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Precussion</h1>
		</div>
		<hr>
		<div class="col-12"><p class="lead">Welcome to my website</p></div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html>