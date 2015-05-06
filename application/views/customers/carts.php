<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart | Dojo eCommerce</title>
    <meta charset="utf-8" />
    <meta name="description" content="This website is using Twitter Bootstrap"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->

    
<!-- jquery cdns -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- fontawesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- local stylesheet -->
    <link rel="stylesheet" type="text/css" href="/assets/carts.css"> 

    
 <!-- local stylesheet -->
    <link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 

    <script type='text/javascript'>
    </script>
</head>
<body>
<?php $cart = ($this->session->userdata('cart'));
      $total = 0;?>
 
<!-- nav -->
  <?php $this->load->view('partials/header');?>
    <div class='container'>

        <h3 class="text-center">Your Cart:</h3>
        <div class="row">
            <div class="col-sm-12">
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
                       
                      <?php foreach ($cart as $item) { ?>
                        <tr>
                            <td><?= $item['name']?></td>
                            <td>$<?=$item['price']?></td>
                            <td> 
                                <div class="row">
                                    <div class="col-sm-offset-1 col-md-7">
                                         <?=  $item['quantity']?>
                                    </div>
                                    <div class="col-md-2">
                                        <a href='#'>Update</a>
                                    </div>
                                    <div class="col-md-2">
                                     <a href='#'><img id="garbage" src="/assets/images/garbage.jpg" alt='trashcan'></a>
                                    </div>
                                </div>
                            </td> 
                            <td><?= $item['quantity'] * $item['price'];  ?></td>
                        </tr>
                         <?php $total += $item['quantity'] + $item['price']; ?>
                        <?php  } ?>
                    </tbody>
                </table>
            <div class="row">
                <div class="col-sm-offset-10 col-sm-2">
                    <p>Your Total: $<strong><?php echo $total ?></strong></p>
                    <form class="form-inline" action="/" method="post">
                         <button type="submit" class="btn btn-success">Keep Shopping</button>
                    </form>
                </div>
            </div>
         </div>


        <form action='#' method='post' class="form-horizontal">
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
                </div>
                <div class='form-group'>
                  <button type="submit" class="btn btn-default pay">Pay</button>
                </div>
           </form>
        </div>
    </div>

</body>
</html>