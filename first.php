<?php 
	require_once 'core/init.php';

	if (Input::getIsset('submit_log')) {
		if ($uac->cek_nama(Input::getIsset('usernameLog'))) {
			if ($uac->login_user(Input::getIsset('usernameLog'),Input::getIsset('passwordLog'))) {
				Session::setSession('username',Input::getIsset('usernameLog'));
				header('Location:index.php');
			}
		}else{
			die('Nama Belum Terdaftar');
		}
	}

	if (Input::getIsset('submit_reg')) {
		
		$uac->register_user(array(
			'first_name'	=> Input::getIsset('first_name'),
			'last_name'		=> Input::getIsset('last_name'),
			'username'		=> Input::getIsset('username'),
			'password' 		=> password_hash(Input::getIsset('password'),PASSWORD_DEFAULT),
			'address'		=> Input::getIsset('address')
		));

		Session::setSession('username',Input::getIsset('username'));
		header('Location:index.php');	

	}
 ?>
<body background="assets/img.jpg" style="background-position: center;background-size: cover;background-repeat: no-repeat;">
	<nav class="navbar bg-primary text-white">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<a href="#" class="navbar-brand" style="color: #fff;">Simple FB</a>
				</div>
				<div class="navbar-right actionStatus">
					<form action="" class="row navbar-form navbar-left form-inline" method="post">
						<input type="text" name="usernameLog" placeholder="Username" class=" form-control">
						<input type="password" name="passwordLog" placeholder="Password" class=" form-control">
						<input type="submit" value="Login" name="submit_log" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-md-5">
			<h1>Always connect with your friends</h1>
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">Register New Account</div>
				<div class="panel-body">
					<form action="" method="post" class="need-validation" novalidate>
						<div class="form-row">
							<div class="col-md-6 col-xs-6 form-group" style="padding-left: 0;">
								<input type="text" name="first_name" class="form-control" placeholder="First Name" required>
								<div class="valid-feedback">
									Looks Good!
								</div>
							</div>
							<div class="col-md-6 col-xs-6 form-group" style="padding-right: 0;">
								<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
						<div class="form-group">
							<input type="text" name="password" class="form-control" placeholder="Password" required>
							<small class="form-text text-muted">Your password must be 8-20 characters long</small>
						</div>
						<div class="form-group">
							<input type="text" name="address" class="form-control" placeholder="Address" required>
						</div>
						<input type="submit" class="btn btn-primary" name="submit_reg" value="Register" style="width: 100%;">
					</form>	
				</div>
			</div>
			
		</div>
	</div>
</body>