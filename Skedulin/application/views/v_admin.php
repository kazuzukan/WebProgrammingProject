<!DOCTYPE html>
<html>
<head>
	<title>Skedulin</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("name"); ?></h2>
	<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
</body>
</html>