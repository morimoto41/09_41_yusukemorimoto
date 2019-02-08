<?php
session_start();
include "funcs.php";
// loginCheck();
$pdo = db_con();

$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .='<p>';  
        $view .='<tr><td>'.$result["name"];
        $view .='<td>'.$result["lid"];
        $view .='<td>'.$result["lpw"];
        $view .='<td>'.$result["kanri_flg"];
        $view .='<td><a href="userdetail.php?id='.$result["id"].'">';
        $view .=' ';    
        $view .= '[更新]';
        $view .='</a>';
        $view .=' ';
        $view .='<a href="delete.php?id='.$result["id"].'">';    
        $view .= '[削除]';
        $view .='</a>';
        $view .='</td>';
        $view .='</tr>';
        $view .='</p>';
    }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>登録ユーザーリスト</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/userlist.css">
</head>
<body>
<br>
<div id="usertop">
<h4><?php time1() ?><?php  echo $_SESSION['name'].'さん'?></h4>
<h5>登録ユーザーリスト</h5>
</div>
<div id="userlist1">
  <table>
    <tr>
    <th>ユーザー名</th>
    <th>ユーザーID</th>
    <th>ユーザーパスワード</th>
    <th>管理種別</th>
    <th>更新/削除</th>
    </tr>
    <?php echo $view;?>
  </table>
</div>
<div id="return">
  <br>
  <p><input type="button" value="前のページへ戻る" onclick="history.back()"></p>
</div>

</body>
</html>