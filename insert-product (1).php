<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<?php include 'header.php';?>

	<body id="LoginForm">
		
           
 </form>
	
		
 	 <?php
      if(isset($_SESSION['username'])){
      $q="select * from admin";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
    # code...
       $u=$row['username'];
  

    		if ($_SESSION['username']==$u ) {
    			?>
		
	
	<div class="container padding">
        
        	<div class="panel text-center">
        		<div class="panel-heading">
        			<h3> Insert Product</h3>
			 			</div>
			 			
			 			
			    		<form action="" role="form" method="post" enctype="multipart/form-data">
			    				
			    					<h6>Name:</h6><div class="form-group">
			                			<input type="text" name="name"  placeholder="Name" required="required">

			                						<input type="file" name="file_img" vaue="file_img"/>
			    					
			    				</div>

								<h6>Category</h6>	    					

			    					</div>
			    						<div class="form-group">	
			    							<select name="category"  placeholder="Category" required="required">
			    							<option>Guitar</option>
			    							<option>Drum</option>
			    							<option>keyboard</option>

			    							<option>Mic</option>
			    							<option>Precussion</option>
			    							<option>Speaker</option>
										</select>
										
			    					</div>	
			    					
			    			
			    				
			    				
			    					<div class="form-group"><h6>Price</h6>
			    						<input type="text" name="price" placeholder="Price" required="required">
			    					
			    				</div>
			    				<div class="form-group"><h6>Stock</h6>
			    						<input type="text" name="stock" placeholder="Stock" required="required">
			    					
			    				</div>
			    		
			    			
			    			<input type="submit" name="submit-product" value="Submit" class="btn btn-info btn-block">
			    		
                        </form>
                        <a href="deleteproduct.php" type="submit" value="Delete Products" class="btn btn-danger">Delete Products</a></button>

                        <?php 
                    }



                        else{
                        	echo "invalid username/password";
                        }
                    
                    }
                        ?>


                            <?php
							if (isset($_POST['submit-product'])) {
									$name=$_POST['name'];
									$category=$_POST['category'];
									
									$price=$_POST['price'];
									$stock=$_POST['stock'];
									
									
									
									$image_tmp=$_FILES['file_img']['tmp_name'];
									$image=$_FILES['file_img']['name'];
									$filetype=$_FILES["file_img"]["type"];
									$imagepath="product-img/".$image;
									move_uploaded_file($image_tmp,$imagepath);

									if(mysqli_query($link,"insert into product(name,category,img,price,stock) value('$name','$category','$image','$price','$stock')"))
									{
										echo "<script>alert('Data saved')</script>";
									}   
									else 
									{
									    echo "<script>alert('Data not saved')</script>";                          	# code...
									}                              
								    }
								     
								    

}
							?>                     
</div>
                 </div>

</div>
         </div>
              </div>

              <?php include 'footer.php';?>
                  

</body>
</html>