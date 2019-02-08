<?php
session_start();
$id = $_GET["id"];
include "funcs.php";
// loginCheck();
$pdo = db_con();

$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ユーザー更新</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<form method="post" action="insert2.php">
  <div id="nametop">
    <p><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></p>
    <h5>新規ユーザー登録</h5>
  </div>

  <div id="registration">
     <label>名前：<input type="text" name="name" value="<?php echo $row["name"];?> "></label><br>
     <label>ID：<input type="text" name="lid" value="<?php echo $row["lid"];?> "></label><br>
     <label>password：<input type="text" name="lpw" value="<?php echo $row["lpw"];?> "></label><br>
     <label><input type="radio" name="kanri_flg" value="0">管理者</label><br>
     <label><input type="radio" name="kanri_flg" value="1">ユーザー</label>
     <br>
     <input type='submit' value='更新' onclick='return confirm("更新内容に間違いはないですか？");'/>    
     </div>
</form>

<div id="return">
    <p><input type="button" value="前のページへ戻る" onclick="history.back()"></p>
</div>

</body>
</html>