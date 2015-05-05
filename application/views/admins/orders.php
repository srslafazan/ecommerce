<html>
<head>
	<title>Orders</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- fontawesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 	
 	<!-- jquery cdn -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 	
 	<!-- local stylesheet -->
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 

	<script type='text/javascript'>


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
		    		<div class="form group has-feeback has-feedback-left ">		  	
			    		<input type='text' name='search'  class='search form-control' placeholder='search'/>
		    		</div>
		    	</form> 
		    	<form class='pull-right filter'>
		    		<select name='' class='form-control' >
		    			<option value='show_all'>Show All</option>
		    			<option value='show_all'>Order In</option>
		    			<option value='show_all'>Process</option>
		    			<option value='show_all'>Shipped</option>
		    		</select>
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
				<tr>
					<td>100</td>
					<td>Bob</td>
					<td>9/6/2014</td>
					<td>123 dojo way San Jose CA</td>
					<td>$149.99</td>
					<td>
						<select name='status' class='form-control'>
							<option value='shipped'>Shipped</option>
							<option value='process'>Order in process</option>
							<option value='cancelled'>Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>100</td>
					<td>Bob</td>
					<td>9/6/2014</td>
					<td>123 dojo way San Jose CA</td>
					<td>$149.99</td>
					<td>
						<select name='status' class='form-control'>
							<option value='shipped'>Shipped</option>
							<option value='process'>Order in process</option>
							<option value='cancelled'>Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>100</td>
					<td>Bob</td>
					<td>9/6/2014</td>
					<td>123 dojo way San Jose CA</td>
					<td>$149.99</td>
					<td>
						<select name='status' class='form-control'>
							<option value='shipped'>Shipped</option>
							<option value='process'>Order in process</option>
							<option value='cancelled'>Cancelled</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>100</td>
					<td>Bob</td>
					<td>9/6/2014</td>
					<td>123 dojo way San Jose CA</td>
					<td>$149.99</td>
					<td>
						<select name='status' class='form-control'>
							<option value='shipped'>Shipped</option>
							<option value='process'>Order in process</option>
							<option value='cancelled'>Cancelled</option>
						</select>
					</td>
				</tr>
			</table>
			<!--pagination-->
			<div class="page">
				<a href="#" id="first_link">1</a> | <a href="#">2</a> | <a href="#">3</a> | <a href="#">4</a> |
				<a href="#">5</a> | <a href="#">6</a> | <a href="#">7</a>    | <a href="#">8</a> | <a href="#">9</a> | 
				<a href="#">10</a> | <a href="#">-></a>
			</div>

		</div>
	</div>   <!-- end of container -->
</body>
</html>