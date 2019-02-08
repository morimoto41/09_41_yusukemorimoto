<?php 
include("funcs.php");
session_start();
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/loginform.css">	
</head>
<body>
	<div class="container">
		<div class="form-bg">
			<form name="form1" action="login_a.php" method="post">
				<h2>Login　No.41 09.kadai</h2>
				<p><input type="text" placeholder="Username" name="lid"></p>
				<p><input type="password" placeholder="Password" name="lpw"></p>
				<label for="remember">
						<input type="hidden" name="kanri_flg" value="1">
				  <input type="checkbox" id="remember" name="kanri_flg" value="0" />
				  <span>administrator</span>
				</label>
				<button type="submit"></button>
			<form>
		</div>
		<br>
		<p id="nouser"><a href="nouser.php">ユーザー以外の方</a></p>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>

</body>
</html>