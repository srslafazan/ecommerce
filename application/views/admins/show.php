<html>
<head>
	<title>Orders</title>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style type="text/css">
		.customer_info{
			
		
			border: 1px solid black;
	

		}
		.order{
			display: inline-block;
		}
		.status{
			border: 1px solid grey;
			background-color: #3c9b47;
		}
		.total{
			border: 1px solid grey;
		}

	</style>
 </head>
 <body>	
 	<?php $this->load->view('partials/header_red'); ?>
 	<div class="container-fluid">			
		<div class="row-fluid">

<!-- ========================= Customer Information============================== -->

			<div class="col-sm-3 customer_info">
				<h3><u>Order ID: 1</u></h3>

				<table class='table table-striped'>
					<thead>
						<h4>Customer shipping info</h4>
					</thead>
					<tr>
						<td>Name</td>
						<td>Bob</td>
					</tr>
						<tr>
						<td>Address</td>
						<td>123 Dojo Way</td>
					</tr>
						<tr>
						<td>City</td>
						<td>Seattle</td>
					</tr>
						<tr>
						<td>State</td>
						<td>WA</td>
					</tr>
						<tr>
						<td>Zip</td>
						<td>98133</td>
					</tr>
				</table>
				<table class='table table-striped'>
					<thead>
						<h4>Customer billing info</h4>
					</thead>
					<tr>
						<td>Name</td>
						<td>Bob</td>
					</tr>
						<tr>
						<td>Address</td>
						<td>123 Dojo Way</td>
					</tr>
						<tr>
						<td>City</td>
						<td>Seattle</td>
					</tr>
						<tr>
						<td>State</td>
						<td>WA</td>
					</tr>
						<tr>
						<td>Zip</td>
						<td>98133</td>
					</tr>
				</table>
			</div>  <!-- end of sidebar -->

<!-- ============================== Order Info =====================================-->

			<div class="col-sm-offset-1 col-sm-7">
				<div class='row'>
					<table class='table table-bordered table-striped order'>
						<thead>
							<th>ID</th>
							<th>Item</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</thead>
						<tr>
							<td>35</td>
							<td>cup</td>
							<td>$9.99</td>
							<td>1</td>
							<td>$9.99</td>
						</tr>
							<tr>
							<td>215</td>
							<td>shirt</td>
							<td>$19.99</td>
							<td>2</td>
							<td>$39.98</td>
						</tr>
					</table>
				</div>
				<div class='row'> <!-- status and shipped -->
					<div class='col-sm-4 status'>
						<p>Status: shipped</p>
					</div>	
					<div class='col-sm-5 pull-right total'>
						<p>Sub total: $49.97</p>
						<p>Shipping: $1.00</p>
						<p>Total Price: $50.97</p>
					</div>
				</div><!-- end of status and shipped -->
			</div> <!-- end of order-info -->
		</div> <!-- end of row-fluid -->
	</div>   <!-- end of container -->
</body>
</html>