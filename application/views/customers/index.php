<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- jquery cdns -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- fontawesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 	
<!-- local stylesheet -->
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 

	<script type='text/javascript'>

		$(document).ready(function(){

// load initial views, pagination handler
			$.get('products/products_main', function(res){
            	$('#products_main').html(res);
        	});

// product_main sorts handler
			$('#sorts').on('change', 'select', function(){
				$(this).parent().submit();
			});

// product_main search, browse, pagination
			$(document).on('submit', '#sorts, #search_products, .browse_products', function(){
				var action = $(this).attr('action');
				$.post(action, $(this).serialize(), function(res){
					$('#products_main').html(res);
					$.post('/products/load_browse', $(this).serialize(), function(res2){ // reset search and browse 
						$('#browse').html(res2);
					});
					return false;
				});
				return false;
			});

// pagination handler
			$(document).on('click', '.product_page', function(){
				var action = $(this).attr('action');
				$.post(action, $(this).serialize(), function(res){
					$('#products_main').html(res);
				});
				return false;
			});

// end of jquery
		});
	</script>
 </head>
 <body>	
 	<?php $this->load->view('partials/header'); ?>
 	<div class="container-fluid">
		<div class="row-fluid">

<!-- left side column where user can search for a product and click links that will display particular products-->
		<div class="col-sm-3 navleft" id='browse'>
			<?php $this->load->view('partials/browse_sidebar'); ?>
		</div>
		
<!--right side column where the product displays and there is an option to sort by specific actions -->
			<div class="col-sm-8 photos">
				<div class="col-sm-12">
					<div class="col-sm-6"></div>

<!-- SEARCH/CATEGORY TITLE -->
					<div class="col-sm-offset-7 col-sm-4 display">
						<form action='/products/load_main' method='post' id='sorts'> 
						   	<label for="sorts">Sort By:</label>
							<input type='hidden' name='category' value="<?= (string)$values['category']; ?>">
							<input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
							<input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
						   	<select class="form-control" name='sort'>
	 							  <option name='price' value='price'>Price</option>
								  <option name='popular' value='most_popular'>Most Popular</option>
							</select>
						</form>
					</div>
				</div>

<!--displays all the picures of all our products-->	
				<div id='products_main'></div>
			</div>
		</div>
	</div>
</body>
</html>