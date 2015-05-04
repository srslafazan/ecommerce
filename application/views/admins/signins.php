<!DOCTYPE html>
<html>
<head>
    <title>Admin Signin | Dojo eCommerce</title>
     <meta charset="utf-8" />
    <meta name="description" content="This website is using Twitter Bootstrap"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="/assets/welcome.css"> 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
	.signin{
		text-align: center;
	}
	.red{
		background-color: #910000;
	}
</style>
</head>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid red">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">Dashboard</a>
      </div>  
    </div><!-- /.container-fluid -->
  </nav>
<body>
    <div class='container'>
        <div class='signin col-sm-6 col-sm-offset-3'>
            <h2>Admin Signin Page</h2>
            <form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name='email'>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name='password'>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			  </div>
			</form>
			       <a href='/admins/orders'>sign in</a>     
        </div>

    </div>
</body>
</html>