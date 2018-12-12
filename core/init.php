<link rel="stylesheet" href="assets/bootstrap.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/style.css?<?php echo time(); ?>">
  <script src="assets/jquery.js"></script>
  <script src="assets/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 

	session_start();

	spl_autoload_register(function($class)
	{
		require_once 'classes/'.$class.'.php';
	});

	date_default_timezone_set("Asia/Jakarta");
	$date = date('g:i A | l, j F Y');
	$uac = new UserAndCrud();
	$db = new Database();

 ?>