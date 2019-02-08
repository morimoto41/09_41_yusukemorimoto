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
<title>　ユーザー登録</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<form method="post" action="insert2.php">
  <div id="nametop">
    <br>
    <h4><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h4>
    <h5>新規ユーザー登録</h5>
    <br>
  </div>
  <div id="registration">
     <p><label>【名前】：<input type="text" name="name"></label></p><br>
     <label>【ID】：<input type="text" name="lid"></label></p><br>
     <label>【password】：<input type="text" name="lpw"></label></p><br>
     <p>【管理者区分を選択してください】</p>
     <label><input type="radio" name="kanri_flg" value="0">管理者</label></p>
     <label><input type="radio" name="kanri_flg" value="1">ユーザー</label></p>
     <br>
     <input type='submit' value='送信' onclick='return confirm("登録内容に間違いはないですか？");'/>
  </div>
</form>

<div id="return">
  <p><input type="button" value="前のページへ戻る" onclick="history.back()"></p>
</div>

</body>
</html>