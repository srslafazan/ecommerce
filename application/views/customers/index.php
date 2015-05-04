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
 	<div class="container-fluid">
		 <div class="row-fluid">
		<!-- left side column where user can search for a product and click links that will display particular products-->
		<div class="col-sm-3 navleft">

<!-- load search/browse bar -->

				<?php 	if (empty($this->session->userdata['search']) || $this->session->userdata['search'] == 'price'){
							$search = 'partials/search_price';
						} elseif ($this->session->userdata['search'] == 'popular') {
							$search = 'partials/search_popular';
						} 
						
						$this->load->view($search); ?>	
		</div>
			<div class="col-sm-8 photos">
				<div class="col-sm-12">
			 <!--right side column where the product displays and there is an option to sort by specific actions -->
					<div class="col-sm-6" >

						<h3>
						<?php 
							if(empty($offers['category_title'])){
								echo "All Products";
							} else {  echo $offers['category_title']; }
						?>

						(page 2)</h3>
					</div>
					<div class="col-sm-6 links ">
						<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
					</div>
				</div>

				<div class="col-sm-offset-7 col-sm-4 display">
					<form action='/products/sort_by' method='post'> 
					   	<label for="sorts">Sort By:</label>
					   	<select class="form-control" id="sorts" name='sort'>
 							  <option name='price' value='price'>Price</option>
							  <option name='popular' value='popular'>Most Popular</option>
						</select>
						<input type='hidden' name='category' value="<?= (string)$offers['browse'][0] ?>">
						<input type='hidden' name='search' value="<?= $offers['browse'][1] ?>">
						<input type='hidden' name='page' value="<?= (string)$offers['browse'][2] ?>">

						<input type='submit' value='Sort Products'>
					</form>
				</div>

				<div id='products_main'>
				<!--displays all the picures of all our products-->
				<?php $this->load->view('partials/products_main') ?> 
				</div>

				<!--pagination-->
				<div class="col-sm-12 links ">
					<a href="#" id="first_link">first</a> | <a href="#">prev</a> | <a href="#">2</a> | <a href="#">next</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>