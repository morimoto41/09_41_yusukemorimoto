<?php 
session_start();
include("funcs.php");
// loginCheck();
?>

<!doctype html>
<html lang="ja">
<head>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Login Form</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/usertop.css">
</head>
<body>
<div id="toptitle">
    <br>
    <h1>ユーザー用ページ</h1>
    <h3><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h3><br>
</div>

<div id="usertitlelist">
    <p><a href="bookmark.php">ブックマーク登録</a></p><br>
    <p><a href="bookmarkread.php">ブックマーク表示</a></p><br>
</div>

<div id='return'>
    <p><a href="logout.php" onclick='return confirm("ログアウトしますか？");'>ログアウト</a></p>
</div>

</body>
</html>