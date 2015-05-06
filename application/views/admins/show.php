<html>
<head>
	<title>Orders</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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

 	
 	<!-- local stylesheet -->
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 

	<script type='text/javascript'>


	</script>
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
  	<?php $this->load->view('partials/header_red'); ?>
 <body>	


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
						<td><?= $customer['name'] ?></td>
					</tr>
						<tr>
						<td>Address</td>
						<td><?= $customer['street'] ?></td>
					</tr>
						<tr>
						<td>City</td>
						<td><?= $customer['city'] ?></td>
					</tr>
						<tr>
						<td>State</td>
						<td><?= $customer['state'] ?></td>
					</tr>
						<tr>
						<td>Zip</td>
						<td><?= $customer['zipcode'] ?></td>
					</tr>
				</table>
				<table class='table table-striped'>
					<thead>
						<h4>Customer billing info</h4>
					</thead>
					<tr>
						<td>Name</td>
						<td><?= $customer['name'] ?></td>
					</tr>
						<tr>
						<td>Address</td>
						<td><?= $customer['street'] ?></td>
					</tr>
						<tr>
						<td>City</td>
						<td><?= $customer['city'] ?></td>
					</tr>
						<tr>
						<td>State</td>
						<td><?= $customer['state'] ?></td>
					</tr>
						<tr>
						<td>Zip</td>
						<td><?= $customer['zipcode'] ?></td>
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
<?php  			$sub_total = 0;
				foreach ($orders as $order) {  ?>
						<tr>
							<td><?= $order['id'] ?></td>
							<td><?= $order['name'] ?></td>
							<td>$<?= $order['price'] ?></td>
							<td><?= $order['quantity'] ?></td>
<?php			$sub_total += $order['total']; 									?>
							<td>$<?= $order['total'] ?></td>
						</tr>
<?php 		}		?>
					</table>
				</div>
				<div class='row'> <!-- status and shipped -->
					<div class='col-sm-4 status'>
						<h4>Status: <?= $order['status'] ?></h4>
					</div>	
					<div class='col-sm-5 pull-right total'>
						<p>Sub total: $<?= $sub_total ?></p>
<?php $shipping = rand(1, 100) ?>						
						<p>Shipping: $<?= $shipping ?></p>
						<p>Total Price: $<?= $sub_total + $shipping ?></p>
					</div>
				</div><!-- end of status and shipped -->
			</div> <!-- end of order-info -->
		</div> <!-- end of row-fluid -->
	</div>   <!-- end of container -->
</body>
</html>