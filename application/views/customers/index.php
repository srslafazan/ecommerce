<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 </head>
 <body>	
 	<?php $this->load->view('partials/header'); ?>
 	<div class="container">
		 <div class="row">
		<!-- left side column where user can search for a product and click links that will display particular products-->
		<div class="col-sm-3">
				<div>
					<form action='/products/product_search' method='post' class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" name='search' class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				     </form>
						<!-- <input type='submit' value=""><i class='fa fa-search'></i></input> -->
				</div>
				<div>
			    	<h5>Categories:</h5>
			    	<form action="/products/get_product" method="post">
			    	   <input type="hidden" name="category" value="T-shirts">
					   <input type="submit" class="btn btn-default" value="t-shirts"/>
					</form>
					<form action="/products/get_product" method="post">
						<input type="hidden" name="category" value="Jeans">
					    <input type="submit" class="btn btn-default" value="jeans"/>
					</form>
					<form action="/products/get_product" method="post">
			    		<input type="hidden" name="category" value="Hats"/>
					    <input type="submit" class="btn btn-default" value="hats"/>
					</form>
					<form action="/products/get_product" method="post">
			    		<input type="hidden" name="category" value="Glasses"/>
					    <input type="submit" class="btn btn-default" value="glasses"/>
					</form>
					<form action="/products/get_product" method="post">
			    		<input type="hidden" name="category" value="Shoes"/>
					    <input type="submit" class="btn btn-default" value="shoes"/>
					</form>
					<form action="/products/get_product" method="post">
			    		<input type="hidden" name="category" value="All Products"/>
					    <input type="submit" class="btn btn-default" value="all products"/>
					</form>
				</div>
			</div>
			
			<div class="col-sm-8 photos">
				<div class="col-sm-12">
			 <!--right side column where the product displays and there is an option to sort by specifi actions -->
					<div class="col-sm-6" >

						<h3>
						<?php 
							if(empty($offers[0]['category_title'])){
								echo "All Products";
							} else {  echo $offers[0]['category_title']; }
						?>

						(page 2)</h3>
					</div>
					<div class="col-sm-6 links ">
						<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
					</div>
				</div>

				<div class="col-sm-offset-7 col-sm-4 display">
					   <label for"sorts">Sort By:</label>
					   <select class="form-control" id="sorts">
 							  <option>Price</option>
							  <option>Most Popular</option>
						</select>
				</div>

				<!--displays all the picures of all our products-->
		
				<?php 
					if(!empty($offers[0]["product_id"]))
					{
					foreach ($offers as $offer) { ?>

					<div class="col-sm-2 products">
						<a href="/products/<?=$offer['product_id']?>"><img src="/assets/images/hat_poker.jpg"/></a>
						<p><?= $offer['product_name'] ?> for  $<?= $offer['price'] ?></p>
					</div>
				<?php } ?> 
					<?php } ?>
					<!--pagination-->
					<div class="col-sm-6 links ">
						<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
					</div>
			</div>
		</div>
	</div>
</body>
</html>