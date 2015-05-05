<!DOCTYPE html>
<html>
<head>
    <title>Products | Dojo eCommerce</title>
	<meta charset="utf-8" />
	<meta name="description" content="This website is using Twitter Bootstrap"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
 	
 	<!-- jquery cdn -->
 
 	
 	
 	<!-- local stylesheet -->
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 

	<script type='text/javascript'>


	</script>
    <style type="text/css">
    	.page {
			text-align: center;
		}
			.filter{
			display: inline-block;
			margin-bottom: 1.5%;
		}

    </style>
    <script type="text/javascript">
    	$(document).on("click", ".update", function(){
    		console.log("made it!")
    		var id = $(this).data('id');
    		var html_str = "<h4 class='modal-title' id='myModalLabel'>Edit product - ID " + id + " </h4>";
    		$('.modal-header').html(html_str);
    		$('#myModal').modal('show');
    	})

    </script>
</head>
<body>	

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
<?php  	foreach ($products['products'] as $product) 
		{ ?>
				<tr>
					<td> <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'></td>
					<td><?= $product['id'] ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['inventory'] ?></td>
					<td><?= $product['id'] ?></td>
					<td> <a target=''  data-toggle="modal" data-target="" data-action="Edit a"
						data-id="<?= $product['id']?>" class='update'>edit</a> | 
					<a href="">delete</a> </td>
				</tr>
<?php	}	?>
			</table>

<!-- =============================pagination ==========================================-->

			<div class='page'>
				<a href="#" >1</a> | <a href="#">2</a> | <a href="#">3</a> | <a href="#">4</a> |
				<a href="#">5</a> | <a href="#">6</a> | <a href="#">7</a>    | <a href="#">8</a> | 
				<a href="#">9</a> | <a href="#">10</a> | <a href="#">-></a>
			</div>  <!-- end of pagination -->

		</div>  <!-- end of show products -->
	</div>   <!-- end of container -->
</body>
</html>