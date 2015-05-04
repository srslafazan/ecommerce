<?php 
    if(isset($offers['products']))
    {
    foreach ($offers['products'] as $product) { ?>
        <div class="col-sm-2 products">
            <a href="/products/show/<?= $product['product_id'] ?>"><img src="/assets/images/hat_poker.jpg"/></a>
            <p>

            <?php if(isset($product['product_name']) && isset($product['price'])) 
                    {
                        echo $product['product_name'] . ' for $' . $product['price']; 
                    } ?>

            </p>
        </div>
 
      <?php } 
        } ?> 