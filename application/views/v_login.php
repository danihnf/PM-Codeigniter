<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Now!</title>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">

					<form method="post" action="<?php echo base_url('login/aksi_login') ?>">
						<div class="form-group">
							<label for="username"> Username </label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna">

						</div>
						<div class="form-group">
							<label for="password"> Password </label>
							<input type="password" class="form-control" id="username" name="password" placeholder="Kata Sandi">
						</div>
						<button type="submit" class="btn btn-primary" value="login">Login</button>
						<a href="<?php echo base_url(); ?>signup" class="btn btn-link"> Sign Up </a>
					</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
<script src="assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>