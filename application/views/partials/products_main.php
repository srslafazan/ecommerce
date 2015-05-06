

<?php   if ($values['category'] == '0') {
            $title = "All Products";
        } else {
            $title = UCFIRST($values['category']);
        }

$page = ( (int)$values['page'] / 5 + 1 );
echo "<h4>$title | Page {$page}</h4>";

if( $values['search'] != '%' && $values['search'] != '' ) {
    echo "<h5>Products like: {$values['search']}</h5>";
} ?>

<div>

<?php   if ( isset($no_matches) && $no_matches ){
            echo "No products matched your search. All items: ";
        }

if(isset($products)){
    foreach ($products as $product) { ?>

                <div class="col-sm-2 products">
                    <a href="/products/show/<?= $product['id'] ?>"><img src="/assets/images/hat_poker.jpg"/></a>
                    <p>
                        <?php echo $product['product_name'] . ' for $' . $product['price']; ?>
                    </p>
                </div>
<?php }} ?>

</div>

<ul>
<?php 

for($i = 0 ; $i < CEIL( ( (int)$total_products ) / 5 ); $i++) { ?>

                <li>
                    <form action='/products/load_main' method='post' class='product_page'>
                        <input put type="hidden" name="category" value="<?= (string)$values['category']; ?>">
                        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
                        <input type='hidden' name='page' value="<?= $i ?>">
                        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
                        <input type='submit' value='<?= ($i+1) ?>'>
                    </form>
                </li>
<?php } ?>
</ul>