<!-- Modal -->
     <form class="form-horizontal" method='post' id="edit_form" action='' target=''>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>Edit product - ID <?= $product['id'] ?></h4>
        <input type='hidden' name='id' value='<?= $product['id'] ?>'/>
      </div>

        <div class="modal-body">

<!-- ================================= product name================================]==   -->
          <div class="form-group">
            <label for="name" class="col-sm-4 control-label">Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" placeholder="Product Name" name='name'
              value="<?= $product['name'] ?>">
            </div>
          </div>

<!-- ============================product description ============================= -->
          <div class="form-group">
            <label for="description" class="col-sm-4 control-label">Product Description</label>
            <div class="col-sm-6">
              <textarea class="form-control" rows="3" id="description" placeholder="Product Description" name='description'
              ><?= $product['description']; ?>
              </textarea>
            </div>
          </div>

<!-- ===============================price=========================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Price</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="category" placeholder="Price" name='price'
              value="<?= $product['price']; ?>">
            </div>
          </div>

<!-- ==============================Inventory======================================= -->
          <div class="form-group">
            <label for="inventory" class="col-sm-4 control-label">Inventory </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inventory" placeholder="Quantity on hand" name='inventory'
              value="<?= $product['inventory'] ?>">
            </div>
          </div>

<!-- =============================category select================================= -->
           <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Categories</label>
             <div class="col-sm-6">
              <input type='hidden' name='existing_cat' value="<?= $product['category_id'] ?>"/>
              <select class="form-control" id='category' name='category'>
                <option value='<?= $product['category_id'] ?>' ><?= $product['category'] ?></option>
<?php           for ($i=0; $i < count($categories); $i++) {  
                  if($categories[$i]['id'] != $product['category_id']) {  ?>
                    <option value='<?=  $categories[$i]['id'] ?>' ><?= $categories[$i]['name']  ?></option>
<?php              }
                 }?>                  
              </select>
            </div>
          </div>

<!-- ==========================Add Category====================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Or add new category </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="category" placeholder="Product Name" name='new_category'>
            </div>
          </div>
          
<!-- ================================images===================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Images</label>
              <div class="col-sm-6">
              <button type="button" class="btn btn-default">Upload</button>
            </div>
          </div>

<?php     $count = 1;
          $images_preview = '';
          foreach($images as $image) { 
          $images_preview .= $image['photo_url'] . ' '; ?>
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label"></label>
            <div class="col-sm-6">
              <label class="radio-inline">
              <img src="/assets/images/<?= $image['photo_url'] ?>" alt="hat" class='product_img'> img.png </label>
              <label class="radio-inline">
              <input type='hidden' name="image<?= $count ?>" value="<?= $image['photo_url'] ?>" />
              <input type="radio" name="main_image" id="inlineRadio<?= $image['id'] ?>" 
                      value="option<?= $image['id'] ?>"> main
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
              </label>
            </div>
          </div>

<?php   $count++;
          }  ?>

  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit"  name='action' class="prod_button btn btn-success" value='Preview'>
          <input type="submit" name='action' class="prod_button btn btn-primary" value='Update'>
        </div> <!-- end of footer -->
        </div>  <!-- end of modal body -->
        <input type='hidden' name='images_preview' value='<?=$images_preview ?>'>
 </form>




