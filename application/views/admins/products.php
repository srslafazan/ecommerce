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
    <style type="text/css">
    	.page {
			text-align: center;
		}
			.filter{
			display: inline-block;
			margin-bottom: 1.5%;
		}

		  img {
		    height: 30px;
		    width: 30px;
		  }
    </style>

    <script type="text/javascript">

    // ===========================load modals==========================
    	$(document).on("click", ".update", function()
    	{
    		var id = $(this).data('id');
    		var action = $(this).data('action');
    		console.log(action);
    		if(action === 'edit'){
	        	var url = "/admins/edit_product/"+id;
	        	$.get(url, function(res){
	        		$('#body').html(res);
	  		 	});
	          	$('#product').modal('show');
          }
          if(action === "add"){
          		$.get("/admins/add", function(res){
        		$('#body').html(res);
  		 	});
          	$('#product').modal('show');
          }
          if(action === 'delete'){
          	var id = $(this).data('id');
        	$.get("/admins/delete/"+id, function(res){
        		$('#body').html(res);
  		 	});
          	$('#product').modal('show');
          }
       	
       	});
       	
//=====================manage products ===============================

       	$(document).on("click", ".prod_button", function(){
       		if($(this).attr('value') === 'Preview'){
       			$('#edit_form').attr('target','_blank');
       			$('#edit_form').attr('action', '/admins/preview');
       		}
       		else if($(this).attr('value') === 'Update'){
       			$('#edit_form').attr('action','/admins/update');
       			$('#edit_form').attr('target','');
       		}
       		else if($(this).attr('value') === 'Add Product'){
       			$('#edit_form').attr('action','/admins/create');
       			$('#edit_form').attr('target','');
       		}
       	});


    </script>
</head>
<body>	

<?php require_once(dirname(__FILE__) .'/../partials/header_red.php') ?>

 	<div class="container">
		
<!-- =========================== Search and filter ======================================-->

		<div class="row">
	    	<form role="form" class='filter'>
	    		<div class="form group has-feeback has-feedback-left ">		  	
		    		<input type='text' name='search'  class='search form-control' placeholder='search'/>
	    		</div>
	    	</form> 
	    	<form class='pull-right filter' action='' method='post'>
	    		<button type="button" class="btn btn-success update"   data-action="add">
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
					<td> <a  data-toggle="modal" data-target="" 
						 data-id="<?= $product['id']?>" data-action="edit" class='update'>edit</a> | 
					<a data-id="<?= $product['id']?>" data-action="delete" class='update' >delete</a> </td>
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

<!-- ===============================Modal Body========================================== -->

<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div id="body">
  <!--======== form gets inserted here ============-->	
        </div> <!-- end of body -->
    </div> <!-- end of modal content -->
  </div>  <!-- end of modal-dialog -->
</div> <!-- end of modal fade -->















</html>