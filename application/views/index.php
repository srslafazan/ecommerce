<html>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="assets/welcome.css">
 </head>
 <body>	
 	<?php 
 	var_dump($offers);
 	$this->load->view('partials/header');     
 	?>
 	<div class="container">
			 <div class="row">
			<!-- left side column where user can search for a product and click links that will display particular products-->
				
				    	<h5>Categories:</h5>
				    	<form action="/products/get_product" method="post">
				    	   <input type="hidden" name="category" value="t-shirts">
						   <input type="submit" class="btn btn-default" value="t-shirts"/>
						</form>
						<form action="/products/get_product" method="post">
							<input type="hidden" name="category" value="jeans">
						    <input type="submit" class="btn btn-default" value="jeans"/>
						</form>
						<form action="/products/get_product" method="post">
				    		<input type="hidden" name="cups" value="hats"/>
						    <input type="submit" class="btn btn-default" value="hats"/>
						</form>
						<form action="/products/get_product" method="post">
				    		<input type="hidden" name="glasses" value="glasses"/>
						    <input type="submit" class="btn btn-default" value="glasses"/>
						</form>
						<form action="/products/get_product" method="post">
				    		<input type="hidden" name="show all" value="shoes"/>
						    <input type="submit" class="btn btn-default" value="shoes"/>
						</form>
				</div>
				<div class="col-sm-8 photos">
					<div class="col-sm-12">
				 <!--right side column where the product displays and there is an option to sort by specifi actions -->
						<div class="col-sm-6" >
							<h3><?= $offers[0]['category'] ?> (page 2)</h3>
						</div>
						<div class="col-sm-6 links ">
							<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
						</div>
					</div>
					<div class="col-sm-offset-9 col-sm-2">
							<p>Sorted By: </p>
							<select class="form-control" id="sorts">
	 							  <option>Price</option>
								  <option>Most Popular</option>
							</select>
					</div>



					<!--displays all the picures of all our products-->
				

					<?php foreach ($offers as $offer) { ?>
						<div class="col-sm-2 products">
							<a href=""><img src="assets/images/hat_poker.jpg"/></a>
							<p><?= $offer['product_name'] ?> for  <?= $offer['price'] ?></p>
						</div>
					<?php } ?> 
				
						<!--pagination-->
						<div class="col-sm-6 links ">
							<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
						</div>
				</div>
		</div>

	</div>
		
	



 	</div>	

 	




 </body>
</html>