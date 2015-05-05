<style type="text/css">
  img {
    height: 30px;
    width: 30px;
  }
</style>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a new product</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">
<!-- ================================= product name============================   -->
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
<!-- =============================category select================================= -->
           <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Categories</label>
             <div class="col-sm-6">
              <select class="form-control" id='category'>
                <option value='hats' >Hats</option>
                <option value='hats' >Hats</option>
                <option value='hats' >Hats</option>
                <option value='hats' >Hats</option>
                <option value='hats' >Hats</option>
              </select>
            </div>
          </div>
<!-- ==========================Add Category====================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Or add new category </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="category" placeholder="Product Name" name='category'>
            </div>
          </div>
<!-- ================================images===================================== -->
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label">Images</label>
              <div class="col-sm-6">
              <button type="button" class="btn btn-default">Upload</button>
            </div>
          </div>
         <div class="form-group">
            <label for="category" class="col-sm-4 control-label"></label>
            <div class="col-sm-6">
              <label class="radio-inline">
              <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> img.png </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> main
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="category" class="col-sm-4 control-label"></label>
            <div class="col-sm-6">
              <label class="radio-inline">
              <img src="/assets/images/Hat_Poker.jpg" alt="hat" class='product_img'> img.png </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> main
              </label>
            </div>
          </div>

        </div>  <!-- end of modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Preview</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div> <!-- end of footer -->
      </form>

    </div> <!-- end of modal content -->
  </div>  <!-- end of modal-dialog -->
</div> <!-- end of modal fade -->

