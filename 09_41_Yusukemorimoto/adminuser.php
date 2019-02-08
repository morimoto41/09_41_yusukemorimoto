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
<title>管理者用ページ</title> 
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/adminuser1.css">  	
</head>
<body>
<div id="toptitle1">
   <br>
   <h1>管理者用ページ </h1><br>
   <h3><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h3><br>
   <!-- <h6>ただいまの時間：<?php echo date("H:i").'です'?></h6><br> -->
</div>

<div id="admintitlelist">
   <p><a href="registration.php">ユーザー登録ページ</a></p><br>
   <p><a href="userlist.php">ユーザー表示</a></p><br>
   <p><a href="bookmark.php">ブックマーク登録</a></p><br>
   <p><a href="bookmarkread.php">ブックマーク表示</a></p><br>
</div>

<div id="return">
   <a href="logout.php" onclick='return confirm("ログアウトしますか？");'>ログアウト</a>
</div>

</body>
</html>
