<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>  
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/login/css/style.css">
</head>

<body>
	<form action="<?=base_url('login/cek_login')?>" method="POST">
	<div class="login-form">
		<h1>Login</h1>
			<div class="form-group ">
				<input type="text" class="form-control" placeholder="Masukkan Username" name="username">
				<i class="fa fa-user"></i>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password">
				<i class="fa fa-lock"></i>
			</div>
		<button type="submit" class="log-btn" >Log in</button>
				<?php
				if($this->input->get('aa')== 1){
					?>
					  <br><label style="color:red; font-style:12px, bold;">
					  Maaf, password dan username tidak sama
					</label>
				<?php } ?>
	</form>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="<?php echo base_url();?>asset/login/js/index.js"></script>
</body>
</html>
