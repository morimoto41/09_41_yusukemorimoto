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
<title>ブックマーク登録</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/bookmark1.css">
</head>
<body>

<form method="post" action="bookinsert.php">
  <div id="nametop">
    <br>
    <h4><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h4>
    <h5>ブックマーク登録</h5>
    <br>
  </div>
  <div id="bookmark">
    <p><label>書籍名<br><input type="text" name="bname"></label></p><br>
    <p><label>書籍URL<br><input type="text" name="burl"></label></p><br>
    <p><label>コメント<br><textArea name="bcmt" rows="4" cols="40"></textArea></label></p><br>
    <input type="submit" value="登録" onclick='return confirm("登録しますか？");' >   
  </div>
</form>

<div id="return">
  <p><input type="button" value="前のページへ戻る" onclick="history.back()"></p>
</div>

</body>
</html>