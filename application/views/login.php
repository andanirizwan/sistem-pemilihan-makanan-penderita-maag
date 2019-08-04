<?php

  if ($this->session->userdata('username')) {
    redirect('page/beranda');
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pemilihan Makanan Penderita Maag</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>">
</head>
<body>

<nav class="navbar fixed-top navbar-dark bg-primary" >
<center><h1>SPK Pemilihan Makanan Penderita Maag</h1></center>
</nav>
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-4"></div>
			<div class="col-xs-12 col-sm-8 col-md-4">

			<div class="panel panel-default"><div class="panel-body">
				<div class="text-center"><h2>Login</h2></div>
				<form action="<?php echo base_url('autentication/login') ?>" method="post" >
				<div class="form-group">
					<label for="InputUsername">Username</label>
					<input type="text" class="form-control" type="text" name="username" id="InputUsername" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="InputPassword">Password</label>
					<input type="password" class="form-control" type="password" name="password" id="password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				</form>		
			</div>

			<div class="col-xs-12 col-sm-8 col-md-4"></div>
			
		</div>

</body>
</html>