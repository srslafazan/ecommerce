
<form action='/admins/destroy' method='post'>
	<div class="modal-body">
		<h3>Are you sure you want to delete this product:</h3>
		<h3><?= $product['product']['name'] ?></h3>
<?php if($product[0]['images']['photo_url']) {?>		
		<img src="/assets/images/<?= $product['images'][0]['photo_url'] ?>">
<?php } ?>			
 		<div class="modal-footer">
 			<input type='hidden' name='product_id' value='<?= $product['product']['id'] ?>'>
      <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      <input type="submit" name='action' class="prod_button btn btn-danger" value='Delete'>
    </div> <!-- end of footer -->
  </div>  <!-- end of modal body -->
</form>