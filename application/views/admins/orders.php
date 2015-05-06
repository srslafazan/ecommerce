<html>
<head>
	<title>Orders</title>
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

// INITIAL VIEW LOADS	
			$.get('/admins/orders_main', function(res){
				$('tbody').html(res);
			});

// #SORT HANDLERS
			$(document).on('change', '#sort select', function(){
				$(this).parent().submit();
			});
			$(document).on('submit', '#sort', function(){
				var action = $(this).attr('action');
				$.post(action, $(this).serialize(), function(res){
					$('tbody').html(res);
				});
				return false;
			});
			
// END OF JQUERY
		});
	</script>

	<style type="text/css">
		.filter{
			display: inline-block;
			margin-bottom: 1.5%;
		}
		.page{
			text-align: center;
		}
	</style>
 </head>
 <body>	
 	<?php $this->load->view('partials/header_red'); ?>
 	<div class="container">
	
<!-- ============= Search and filter ==============-->
			<div class="row">
		    	<form role="form" class='filter'>
		    		<div class="form group has-feedback has-feedback-left ">		  	
			    		<input type='text' name='search'  class='search form-control' placeholder='search'/>
		    		</div>
		    	</form> 
		    	<form action='/admins/load_orders_main' method='post' class='pull-right filter' id='sort'>
		    		<select name='sort' class='form-control'>
		    			<option value='3'>Show All</option>
		    			<option value='1'>In Process</option>
		    			<option value='2'>Shipped</option>
		    		</select>
		    		<input type='hidden' name='search' value='%'>
		    		<input type='hidden' name='page' value='0'>
		    	</form>
			</div>

<!-- ================= Show products =======================-->
<div class='row'>
    <table class='table table-bordered table-striped'>
        <thead>
            <th>Order ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Billing Address</th>
            <th>Total</th>
            <th>Status</th>
        </thead>

<!-- ORDERS_MAIN / LOAD_ORDERS_MAIN --> 
        <tbody>

        </tbody>
    </table>

<!--pagination-->

		</div>
<!-- end of container -->
	</div>   
</body>
</html>