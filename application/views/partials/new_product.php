<!-- Modal -->
     <form class="form-horizontal" method='post' id="edit_form" action='' target=''>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>Add a new product</h4>
      </div>

        <div class="modal-body">
<!-- ================================= product name================================]==   -->
          <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" placeholder="Product Name" name='name'>
            </div>
          </div>
<!-- ============================product description ============================= -->
          <div class="form-group">
            <label for="description" class="col-sm-4 control-label">Product Description</label>
            <div class="col-sm-6">
              <textarea class="form-control" rows="3" id="description" placeholder="Product Description" name='description'></textarea>
            </div>
          </div>
<!-- ===============================price=========================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Price</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="category" placeholder="Price" name='price'>
            </div>
          </div>
<!-- =============================category select================================= -->
           <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Categories</label>
             <div class="col-sm-6">
              <select class="form-control" id='category' name='category'>
<?php           for ($i=0; $i < count($categories); $i++) {  ?>
                    <option value='<?=  $categories[$i]['id'] ?>' ><?= $categories[$i]['name']  ?></option>
<?php            }?>               
               
              </select>
            </div>
          </div>

<!-- ==========================Add Category====================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Or add new category </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="category" placeholder="Category Name" name='new_category'>
            </div>
          </div>

<!-- ================================images===================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Images</label>
              <div class="col-sm-6">
              <button type="button" class="btn btn-default">Upload</button>
            </div>
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit"  name='action' class="prod_button btn btn-success" value='Preview'>
          <input type="submit" name='action' class="prod_button btn btn-primary" value='Add Product'>
        </div> <!-- end of footer -->
        </div>  <!-- end of modal body -->
      <input type='hidden' name='images_preview' value='<?=$images_preview ?>'>
 </form>




