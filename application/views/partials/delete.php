<form>
	<div class="modal-body">
		<h2>Are you sure you want to delete product: <?= $product['product']['id'] ?></h2>
		<h2><?= $product['product']['name'] ?></h2>
 		<div class="modal-footer">
 			<input type='hidden' name='images_preview' value='<?=$images_preview ?>'>
         	<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          	<input type="submit" name='action' class="prod_button btn btn-danger" value='Delete'>
        </div> <!-- end of footer -->
       </div>  <!-- end of modal body -->
      
</form>