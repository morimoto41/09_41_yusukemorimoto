<?php 
include("funcs.php");
$pdo = db_con();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if($status==false) {

  $error = $stmt->errorInfo();
  exit("sqlerror2:".$error[2]);

}else{

  while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<tr><td>'.$res["bname"].'</td><td>'.$res["burl"].'</td><br><td>'.$res["bcmt"].'</td></tr>';
  }
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ブックマークリスト</title>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/bookmarkread1.css">
</head>
<body>

<div id="brtop">
  <br>
  <h4><?php time1() ?>nouserさん</h4>
  <h5>ブックマークリスト</h5>
</div>

<div id="booklist1">
  <table>
    <tr>
    <th>書籍名</th>
    <th>書籍URL</th>
    <th>コメント</th>
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