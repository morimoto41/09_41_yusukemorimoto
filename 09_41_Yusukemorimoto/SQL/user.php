<?php 
session_start();
include("funcs.php");
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
    <link rel="stylesheet" href="css/user.css">
    
	
</head>
<body>

<header>
  <!-- <nav class="navbar navbar-default">LOGIN</nav> -->
</header>

<div id="toptitle">
<h1>user page </h1><br>
<h3><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h3><br>
<!-- <h6>ただいまの時間：<?php echo date("H:i").'です'?></h6><br> -->
<p><a href="bookmark.php">ブックマーク登録</a></p>
<p><a href="bookmarkread.php">ブックマーク表示</a></p>
<a href="logout.php" onclick='return confirm("ログアウトしますか？");'>ログアウト</a>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script> -->

</body>
</html>