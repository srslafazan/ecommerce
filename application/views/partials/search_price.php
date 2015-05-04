


<div>
    <form action='/products/product_search' method='post' class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" name='search' class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
</div>

<div>
    <h5>Categories:</h5>
    <form action="/products/get_product" method="post">
       <input type="hidden" name="category" value="T-shirts">
       <input type="submit" class="btn btn-default" value="t-shirts"/>
    </form>
    <form action="/products/get_product" method="post">
        <input type="hidden" name="category" value="Jeans">
        <input type="submit" class="btn btn-default" value="jeans"/>
    </form>
    <form action="/products/get_product" method="post">
        <input type="hidden" name="category" value="Hats"/>
        <input type="submit" class="btn btn-default" value="hats"/>
    </form>
    <form action="/products/get_product" method="post">
        <input type="hidden" name="category" value="Glasses"/>
        <input type="submit" class="btn btn-default" value="glasses"/>
    </form>
    <form action="/products/get_product" method="post">
        <input type="hidden" name="category" value="Shoes"/>
        <input type="submit" class="btn btn-default" value="shoes"/>
    </form>
    <form action="/products/get_product" method="post">
        <input type="hidden" name="category" value="All Products"/>
        <input type="submit" class="btn btn-default" value="all products"/>
    </form>
</div>