<!DOCTYPE html>
<html>
<head>
    <title>##Product Name## | Dojo eCommerce</title>
    <meta charset="utf-8" />
    <meta name="description" content="This website is using Twitter Bootstrap"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/product_page.css">
    <script>
        $(document).ready(function (){
            $(document).on('click', '#big_pic' function(){
                $(this).attr('src', "/assets/images/<?= $product['photo_url']  ?>");
             });
        });  
    </script>
<?php   if($product['images_preview'])
        {
          $images = explode(' ', $product['images_preview']);
        }   ?>
</head>
<body>
<!-- nav -->
<?php $this->load->view('partials/header_red'); ?>

    <div class='container'>
     <!--    <a class="header" href='/'>Go Back</a> -->
        <div class="row">
            <div class="col-sm-6">
                
                <h2 class="header"><?= $product['name'] ?></h2>
<?php     if(!empty($images))
          { ?>                
              <a href="#"><img id="big_pic" src="/assets/images/<?=$product['image1']?>" alt='product image'></a>
              <div class='thumbnails'>
<?php         for($i=0; $i<(count($images)-1); $i++) 
              {   ?>                
                <a href="#"><img class="prod_thumbnails" src="/assets/images/<?= $images[$i]  ?>" alt='product thumbnail'></a>
<?php         }   
          }?>    
                </div>
            </div>
    

        <div class="col-md-6 description">
                <p><?=  $product['description']  ?></p>
        </div>
    </div> <!-- end of row -->

    <div class="row">
      <div class="col-sm-offset-8 col-sm-3">
        <form action='' method='post' class="form-horizontal">
          <div class="form-group">
            <label for="quantity" class="col-sm-2 control-label">Buy</label>
              <div class="col-sm-7">
               <select class="form-control">
                  <option>1 for $<?= $product['price'] ?></option>
                  <option>2 for $<?= ($product['price'] * 2)?></option>
                  <option>3 for $<?= ($product['price'] * 3) ?></option>
                  <option>4 for $<?= ($product['price'] * 4) ?></option>
                  <option>5 for $<?= ($product['price'] * 5) ?></option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div> <!-- end of container -->
</body>
</html>
