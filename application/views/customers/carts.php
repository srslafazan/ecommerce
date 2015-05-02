<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart | Dojo eCommerce</title>
</head>
<body>
<!-- nav -->
    <div class='container'>
        <div>
            <table class='table table-striped table-bordered table-hover'>
                <thead>
                    <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Shirt</td>
                        <td>$5.99</td>
                        <td>3 
                            <a href='#'>update</a>
                            <a href='#'><img src='#' alt='trashcan'></a></td>
                        
                        <td>$5.99</td>
                    </tr>
                </tbody>
            </table>

            <p>Total: #####</p>
            <a href='#'>Continue Shopping</a>
        </div>

        <form action='#' method='post' class='form-horizontal'>
            <h2>Shipping Information</h2>
            <div class='form-group'>
                <label for='first_name' class='col-sm-2 control-label'>First Name: </label>
                <div class='col-sm-5'>
                    <input type='text' name='first_name' placeholder='First Name' class='form-control' id='first_name'>
                </div>
            </div>
            <div class='form-group'>
                <label for='last_name' class='col-sm-2 control-label'>Last Name: </label>
                <div class='col-sm-5'>
                    <input type='text' name='last_name' placeholder='Last Name' class='form-control' id='last_name'>
                </div>
            </div>
            <div class='form-group'>
                <label for='address' class='col-sm-2 control-label'>Address: </label>
                <div class='col-sm-5'>
                    <input type='text' name='address' placeholder='Address' class='form-control' id='address'>
                </div>
            </div>
            <div class='form-group'>
                <label for='address2' class='col-sm-2 control-label'>Address 2: </label>
                <div class='col-sm-5'>
                    <input type='text' name='address2' placeholder='Address 2' class='form-control' id='address2'>
                </div>
            </div>
            <div class='form-group'>
                <label for='city' class='col-sm-2 control-label'>City: </label>
                <div class='col-sm-5'>
                    <input type='text' name='city' placeholder='City' class='form-control' id='city'>
                </div>
            </div>
            <div class='form-group'>
                <label for='state' class='col-sm-2 control-label'>State: </label>
                <div class='col-sm-5'>
                    <input type='text' name='state' placeholder='State' class='form-control' id='state'>
                </div>
            </div>
            <div class='form-group'>
                <label for='zipcode' class='col-sm-2 control-label'>Zipcode: </label>
                <div class='col-sm-5'>
                    <input type='text' name='zipcode' placeholder='Zipcode' class='form-control' id='zipcode'>
                </div>
            </div>
        </form>

        <form action='#' method='post' class='form-horizontal'>
            <h2>Billing Information</h2>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Same as Shipping
                    </label>
                  </div>
                </div>
              </div>
            <div class='form-group'>
                <label for='first_name' class='col-sm-2 control-label'>First Name: </label>
                <div class='col-sm-5'>
                    <input type='text' name='first_name' placeholder='First Name' class='form-control' id='first_name'>
                </div>
            </div>
            <div class='form-group'>
                <label for='last_name' class='col-sm-2 control-label'>Last Name: </label>
                <div class='col-sm-5'>
                    <input type='text' name='last_name' placeholder='Last Name' class='form-control' id='last_name'>
                </div>
            </div>
            <div class='form-group'>
                <label for='address' class='col-sm-2 control-label'>Address: </label>
                <div class='col-sm-5'>
                    <input type='text' name='address' placeholder='Address' class='form-control' id='address'>
                </div>
            </div>
            <div class='form-group'>
                <label for='address2' class='col-sm-2 control-label'>Address 2: </label>
                <div class='col-sm-5'>
                    <input type='text' name='address2' placeholder='Address 2' class='form-control' id='address2'>
                </div>
            </div>
            <div class='form-group'>
                <label for='city' class='col-sm-2 control-label'>City: </label>
                <div class='col-sm-5'>
                    <input type='text' name='city' placeholder='City' class='form-control' id='city'>
                </div>
            </div>
            <div class='form-group'>
                <label for='state' class='col-sm-2 control-label'>State: </label>
                <div class='col-sm-5'>
                    <input type='text' name='state' placeholder='State' class='form-control' id='state'>
                </div>
            </div>
            <div class='form-group'>
                <label for='zipcode' class='col-sm-2 control-label'>Zipcode: </label>
                <div class='col-sm-5'>
                    <input type='text' name='zipcode' placeholder='Zipcode' class='form-control' id='zipcode'>
                </div>
            </div>


                <p>Stripe goes here:</p>
                <div class='form-group'>
                    <label for='card' class='col-sm-2 control-label'>Card: </label>
                    <div class='col-sm-5'>
                        <input type='text' name='zipcode' placeholder='Card' class='form-control' id='card'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='security_code' class='col-sm-2 control-label'>Security Code: </label>
                    <div class='col-sm-5'>
                        <input type='text' name='security_code' placeholder='Security Code' class='form-control' id='security_code'>
                    </div>
                </div>

                <div class='form-group'>
                    <label for='expiration' class='col-sm-2 control-label'>Expiration: </label>
                    <div class='col-sm-5'>
                        <input type='text' name='expiration' placeholder='Expiration' class='form-control' id='expiration'>
                </div>
        </form>

    </div>
</body>
</html>