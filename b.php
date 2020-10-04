
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8">

	<link href="./css/style.css" rel="stylesheet">
	

	<title>Eparrel</title>
</head>
<body>
	<?php include 'header.php';?>

	<?php
		$productid=$_GET['product'];
	?>
	

<div class="container">
	


		<?php 
						

							$q="select * from product where id like '%$productid%'";
							$run=mysqli_query($link,$q);
							while($row=mysqli_fetch_array($run))
							{
								$id=$row['id'];
								$name=$row['name'];
								$img=$row['img'];
								$price=$row['price'];

						?>
						<form id="form1" name="form1" method="post" action="newcart.php">	
						<input type="hidden" name="pid" id="pid" value="<?= $productid ?>" />
						<div class="card">
						<div class="row">
						<aside class="col-sm-4 border-right">
						<article class="gallery-wrap"> 
						<div class="img-big-wrap"><?php echo"
  						<div> 
  							<img src='product-img/$img'></div>
						</div>";?> 
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3"><?php echo $name;?></h3>

	<!--hidden send pid-->

	

<p class="price-detail-wrap"> 
	<span class="price h2 text-warning"> 
		<span class="currency">RS</span><span class="num"><?php echo $price;?></span>
	</span> 
	<span></span> 
</p><?php
}
?> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Description</dt>
  <dd><p>Good Quality Ranges Best color available with best material </p></dd>
</dl>
 <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Color</dt>
  <dd>Black and white</dd>
</dl>  <!-- item-property-hor .// -->
  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			 
		<div class="col-sm-7">
			<dl class="param param-inline">
				
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	<hr>
	<input type='submit' class="btn btn-lg btn-primary text-uppercase" value="buy now" />
	<button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
            </button>
</article> <!-- card-body.// -->
		</aside>
		
 <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->

<?php include 'footer.php';?>
</div>
</form>
</body>
</html>
	
	










		







