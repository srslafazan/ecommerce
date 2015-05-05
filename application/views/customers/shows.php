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
</head>
<body>
<!-- nav -->
<?php $this->load->view('partials/header');?>

    <div class='container'>
        <a class="header" href='/'>Go Back</a>
        <div class="row">
            <div class="col-sm-6">
                
                <h2 class="header"><?= $products[0]['name'] ?></h2>
                <a href="#"><img id="big_pic" src="/assets/images/<?=$products[0]['photo_url']?>" alt='product image'></a>
                <div class='thumbnails'>
                    <?php  foreach ($products as $product) {?>
                    <a href="#"><img class="prod_thumbnails" src="/assets/images/<?= $product['photo_url']  ?>" alt='product thumbnail'></a>
                    <?php } ?>
                </div>
            </div>
    

        <div class="col-md-6 description">
                <p><?=  $products[0]['description']  ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-8 col-sm-3">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="quantity" class="col-sm-2 control-label">Buy</label>
                    <div class="col-sm-7">
                         <select class="form-control">
                              <option>1 for $<?= $products[0]['price'] ?></option>
                              <option>2 for $<?= ($products[0]['price'] * 2)?></option>
                              <option>3 for $<?= ($products[0]['price'] * 3) ?></option>
                              <option>4 for $<?= ($products[0]['price'] * 4) ?></option>
                              <option>5 for $<?= ($products[0]['price'] * 5) ?></option>
                        </select>
                    </div>
                </div>
            </form>
         </div>
    </div>
    

        
    <div class="row products_show">
        <p><strong>You May Also Be Interested In:</strong></p>
        <?php foreach ($similars as $similar) { ?>
            <div class="col-sm-2 other_items">
                <form class='products'>
                    <a href='#'><img class="similar_item" src="/assets/images/<?= $similar['photo_url']  ?>" alt='products'></a>
                    <p><?= $similar['name']  ?></p>
                    <p><?= $similar['price']   ?></p>
                </form>
            </div>
         <?php  } ?>
    

    </div>
</body>
</html>