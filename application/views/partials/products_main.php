<?php 

    if(!empty($offers[0]["product_id"]))
    {
    foreach ($offers as $offer) { ?>

        <div class="col-sm-2 products">
            <a href="/products/show/<?=$offer['product_id']?>"><img src="/assets/images/hat_poker.jpg"/></a>
            <p><?= $offer['product_name'] ?> for  $<?= $offer['price'] ?></p>
        </div>

<?php } 
        } ?> 