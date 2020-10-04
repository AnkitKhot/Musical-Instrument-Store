<!DOCTYPE html>
<html>
<head>

	<link href="./css/style.css" rel="stylesheet">
	
	<title>Cart</title>
</head>
<body>		

	<body>
	<header>
		<?php
			include('header.php');
		?>
	</header>


    


    <div class="container-fluid">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:30%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:5%">Quantity</th>
							<th style="width:15%">Address</th>
							<th style="width:10%" class="text-center">Email</th>
							<th style="width:8%">Delivery status</th>
							<th style="width:8%">Deliver</th>
						</tr>

					</thead>

	<?php

    $productquery= "select * from checkout where delivery='pending' ";
    $run=mysqli_query($link,$productquery);

    while($productrow=mysqli_fetch_array($run)){
    		$orderid=$productrow["orderid"];
    		$uid = $productrow["uid"];
			$pid = $productrow["pid"];
			$pname = $productrow["pname"];
			$name=$productrow['name'];
			$email=$productrow['email'];
			$address=$productrow['address'];
			$quantity=$productrow['quantity'];
			$price=$productrow['price'];
			$delivery=$productrow['delivery'];

?>					
					<tbody>
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-10 ">
										<h3><?php echo $pname;?></h3>
										<p>High Quality Product.</p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $price;?></td>
							<td data-th="Quantity">
								<input name="quantity" id="quantity" type="text" value="<?php echo $quantity?>"/>
							</td>	
							<td data-th="Address" class="text-center"><?php echo $address;?></td>
<td data-th="Email" class="text-center"><?php echo $email;?></td>
<td data-th="Delivery" class="text-center"><?php echo $delivery;?></td>
<td data-th="Delivery" class="text-center">
			<form action="delivery.php?del=<?php echo @$orderid?>" method="post">
			<input name="deleteBtn" type="submit" value="delivery"  >
		 	</form></td>
</tr>
</tbody>
				
				<?php
}
?>


<?php

    $productquery= "select * from checkout where delivery='delivered' ";
    $run=mysqli_query($link,$productquery);

    while($productrow=mysqli_fetch_array($run)){
    		$orderid=$productrow["orderid"];
    		$uid = $productrow["uid"];
			$pid = $productrow["pid"];
			$pname = $productrow["pname"];
			$name=$productrow['name'];
			$email=$productrow['email'];
			$address=$productrow['address'];
			$quantity=$productrow['quantity'];
			$price=$productrow['price'];
			$delivery=$productrow['delivery'];

?>					
					<tbody>
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-10 ">
										<h3><?php echo $pname;?></h3>
										<p>High Quality Product.</p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $price;?></td>
							<td data-th="Quantity">
								<input name="quantity" id="quantity" type="text" value="<?php echo $quantity?>"/>
							</td>	
							<td data-th="Address" class="text-center"><?php echo $address;?></td>
<td data-th="Email" class="text-center"><?php echo $email;?></td>
<td data-th="Delivery" class="text-center"><?php echo $delivery;?></td>
<td>.</td>
</tr>
</tbody>
				
				<?php
}
?>
	</table>		
</div>

</body>
</html>