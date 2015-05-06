<div id='search_sidebar'>
    <form action='/products/load_main' method='post' class="navbar-form navbar-left" role="search" id='search_products'>
        <input type='hidden' name='category' value="All Products">
        <div class="form-group">
            <input type="text" name='search' class="form-control" placeholder="Search">
        </div>
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
</div>

<div id='browse_sidebar'>
    <h5>Categories:</h5>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input type="hidden" name="category" value="t-shirts">
        <input type="submit" class="btn btn-default" value="T-shirts"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input put type="hidden" name="category" value="jeans">
        <input put type="submit" class="btn btn-default" value="Jeans"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input put type="hidden" name="category" value="hats"/>
        <input put type="submit" class="btn btn-default" value="Hats"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input put type="hidden" name="category" value="glasses"/>
        <input put type="submit" class="btn btn-default" value="Glasses"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input put type="hidden" name="category" value="shoes"/>
        <input put type="submit" class="btn btn-default" value="Shoes"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
    <form action="/products/load_main" method="post" class='browse_products'>
        <input put type="hidden" name="category" value="All Products"/>
        <input put type="submit" class="btn btn-default" value="All Products"/>
        <input type='hidden' name='sort' value="<?= (string)$values['sort']; ?>">
        <input type='hidden' name='search' value="<?= (string)$values['search']; ?>">
        <input type='hidden' name='page' value="<?= (string)$values['page']; ?>">
    </form>
</div>