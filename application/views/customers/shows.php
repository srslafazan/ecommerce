<!DOCTYPE html>
<html>
   <?php $this->load->view('partials/shows_header') ?>
<body>
<!-- nav -->
<?php $this->load->view('partials/header');
    // var_dump($products);
    // die();
if(!$this->session->userdata('cart'))
{
    $this->session->set_userdata('cart', array());
}
if(!$this->session->userdata('quantity'))
{
    $this->session->set_userdata('quantity', 0);
}
?>

    <div class='container'>
        <a class="header" href='/'>Go Back</a>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="header" value='<?= $products['name'] ?>'><?= $products[0]['name'] ?></h2>
                <a href="#"><img id="big_pic" src="/assets/images/<?=$products[0]['photo_url']?>"></a>
                <form class="form-inline" action="/products/add_to_cart" method="post">
                    <div class="form-group">
                            <div class="col-sm-7">
                                 <select class="form-control" name="quantity">
                                      <option value="1">1 for $<?= $products[0]['price'] ?></option>
                                      <option value="2"> 2 for $<?= ($products[0]['price'] * 2)?></option>
                                      <option value="3">3 for $<?= ($products[0]['price'] * 3) ?></option>
                                      <option value="4">4 for $<?= ($products[0]['price'] * 4) ?></option>
                                      <option value="5">5 for $<?= ($products[0]['price'] * 5) ?></option>
                                </select>
                            </div>
                        <input id="product_id" type="hidden" name='id' value='<?=  $products[0]['id']  ?>'>
                        <input id="name" type="hidden" name="name" value='<?= $products[0]['name'] ?>'>   
                        <input id="description" type="hidden" name="description" value='<?= $products[0]['description'] ?>'>
                        <input id="price" type="hidden" name="price" value='<?= $products[0]['price']  ?>'>
                        <input id="url" type="hidden" name="url" value='<?= $products[0]['photo_url']  ?>'>
                        <button type='submit' class='btn btn-success pull-right'>Add to Cart</button>
                    </div>
                </form>
                <p class="see_more"><u>Or see other similar styles:</u></p>
                <div class='thumbnails'>
                    <?php  for ($i = 0; $i < count($products); $i++) {?>
                    <a href="#">
                        <div class='thumbnail_img'>
                            <img class="prod_thumbnails" id="preview" src="/assets/images/<?= $products[$i]['photo_url'] ?>">
                            <input class="thumb_id" type="hidden" name='id' value='<?=  $products[$i]['id']  ?>'>
                            <input class="thumb_name" type="hidden" name="name" value='<?= $products[$i]['name'] ?>'>   
                            <input class="thumb_description" type="hidden" name="description" value='<?= $products[$i]['description'] ?>'>
                            <input class="thumb_price" type="hidden" name="price" value='<?= $products[$i]['price']   ?>'>  
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
    
            <div class="col-md-6 description">
                    <p><strong>About this product:</strong> <?=  $products[0]['description']  ?></p>
            </div>
        </div>



        
    <div class="row products_show">
        <p><strong>You May Also Be Interested In:</strong></p>
        <?php foreach ($similars as $similar) { ?>
         <a href="/products/show/<?= $similar['product_id'] ?>">
             <div class='thumbnail_img_similar other_items'>
                    <input class="other_id" type="hidden" name='id' value='<?=  $similar['id']  ?>'>
                    <img class="prod_thumbnails_similar" src="/assets/images/<?= $similar['photo_url']  ?>" alt='products'>
                    <p class="product_heading"><strong><?= $similar['name']  ?></strong></p>
                    <p class="product_pricing">For only $<?= $similar['price']   ?></p>
            </div>
        </a> 
         <?php  } ?>
    </div>
</body>
</html>