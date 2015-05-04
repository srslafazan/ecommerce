<!DOCTYPE html>
<html>
<head>
    <title>Products | Dojo eCommerce</title>
    <meta charset="utf-8" />
    <meta name="description" content="This website is using Twitter Bootstrap"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.page {
			text-align: center;
		}
			.filter{
			display: inline-block;
			margin-bottom: 1.5%;
		}

    </style>
</head>
<body>	
<?php var_dump($products); ?>
 	<?php $this->load->view('partials/header_red'); ?>
 <?php $this->load->view('partials/new_product'); ?>
 	
 	<div class="container">
		
<!-- =========================== Search and filter ======================================-->

		<div class="row">
	    	<form role="form" class='filter'>
	    		<div class="form group has-feeback has-feedback-left ">		  	
		    		<input type='text' name='search'  class='search form-control' placeholder='search'/>
	    		</div>
	    	</form> 
	    	<form class='pull-right filter' action='' method='post'>
	    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  					Add new product 
				</button>
				<?php $this->session->set_flashdata('edit', '5'); ?>
	    		<input type='hidden' name='edit' value='5'>
	    	</form>
		</div>

<!-- ============================= Show products =======================================-->

		<div class='row'>
			<table class='table table-bordered table-striped'>
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th>action</th>
				</thead>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> </td>
					<td>1</td>
					<td>Hat</td>
					<td>10000</td>
					<td>9</td>
					<td> <a href="">edit</a> | <a href="">delete</a> </td>
				</tr>	
			</table>

<!-- =============================pagination ==========================================-->

			<div class='page'>
				<a href="#" >1</a> | <a href="#">2</a> | <a href="#">3</a> | <a href="#">4</a> |
				<a href="#">5</a> | <a href="#">6</a> | <a href="#">7</a>    | <a href="#">8</a> | <a href="#">9</a> | 
				<a href="#">10</a> | <a href="#">-></a>
			</div>  <!-- end of pagination -->

		</div>  <!-- end of show products -->
	</div>   <!-- end of container -->
</body>
</html>