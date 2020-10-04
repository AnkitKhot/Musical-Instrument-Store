<?php include 'connection.php';?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Guitar</title>
	<meta charset="utf-8">
	
	
	<link href="./css/style.css" rel="stylesheet">


</head>
<body>
	
	






<!--Content-->
<div class="Epparels-content">
	<div class="container-fluid">
		<div class="row">
			
			<!--left sidebar
				<div class="col-md-3 left-bar">
					
					<h4>Brands</h4>
							<form class=category>
						<input type="checkbox" name="Brand1">
                               Brand 1
                          </br>
                          <input type="checkbox" name="Brand1">
                               Brand 2
                          </br>
                          <input type="checkbox" name="Brand1">
                               Brand 3
                          </br>
                          <input type="checkbox" name="Brand1">
                               Brand 4
                          </br>
                          <input type="checkbox" name="Brand1">
                               Brand 5
                          </br>
                          <input type="checkbox" name="Brand1">
                               Brand 6
                          </br>
                      </form>
                  
                  </ul>

                  <h4>Price</h4>
							<form class=category>
						<input type="checkbox" name="Price1">
                               100-150
                          </br>
                          <input type="checkbox" name="Price2">
                               150-200
                          </br>
                          <input type="checkbox" name="Price3">
                               200-250
                          </br>
                          <input type="checkbox" name="Price4">
                               250-300
                          </br>
                          <input type="checkbox" name="Price5">
                          	   300-350
                          </br>
                          <input type="checkbox" name="Price6">
                          		350-400
                          </br>
                      </form>
                  
                  </ul>

				</div>


<!--gird--><!--Right side

<div class="cool-md-3 card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Category </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Mersedes Benz
				  </span>
				</label> <!-- form-check.// 
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Nissan Altima
				  </span>
				</label>  <!-- form-check.// 
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Another Brand
				  </span>
				</label>  <!-- form-check.// 
			</form>

			</div> <!-- card-body.// 
		</div>
	</article> <!-- card-group-item.// 
	
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Choose type </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    First hand items
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    Brand new items
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    Some other option
			  </span>
			</label>
			</div> <!-- card-body.// 
		</div>
	</article> <!-- card-group-item.// 
</div> <!-- card.// -




	</aside> <!-- col.// -->
	


				<div class="col-lg">
					<div class="row">

						<?php 

							$q="select * from product where category='drum'";
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
										<a href='b.php?product=<?php echo $id;?>' class='btn btn-primary btn-sm float-right'> Order </a>
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
			<h1 class="display-4">Clothes</h1>
		</div>
		<hr>
		<div class="col-12"><p class="lead">Welcome to my website</p></div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html>