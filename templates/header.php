<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple FB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once 'core/init.php'; ?>
</head>
<body>
<?php 
	
	$username 		= Session::getSession('username');
	$uac->setNameUser($username);
    $result_user = $uac->getNameUser();
    $row_user = $result_user->fetch_assoc();
	
	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
	}
 ?>
<nav class="navbar-fixed-top navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">Simple FB</a>
		</div>
		<form action="search.php?id=<?php echo $cari;?>" class="navbar-form navbar-left" method="get">			
			<div class="input-group">
				<input type="text" placeholder="Cari" name="cari" class="form-control">				
				<div class="input-group-btn">
					<input type="submit" value="Search" class="btn">
				</div>
			</div>
		</form>
		<div class="navbar-right">
			<button class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-pencil"></span> Buat Post</button>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> 
					<?= $row_user['first_name']; ?>
				</a></li>
				<li><a href="profil.php"><span class="glyphicon glyphicon-cog"></span></a></li>
				<li><a href="logout.php" onclick="return confirm('Yakin ingin keluar sebagai <?= $row_user['first_name']; ?> ?');"><span class="glyphicon glyphicon-log-out"></span></a></li>
			</ul>
		</div>
	</div>
</nav>