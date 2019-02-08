<?php
session_start();
include "funcs.php";
$pdo = db_con();

$bname = $_POST["bname"];
$burl = $_POST["burl"];
$bcmt = $_POST["bcmt"];

$stmt = $pdo->prepare("INSERT INTO gs_bm_table(bname,burl,bcmt,indate)VALUES(:bname,:burl,:bcmt,sysdate())");
$stmt->bindValue(':bname', $bname, PDO::PARAM_STR); 
$stmt->bindValue(':burl', $burl, PDO::PARAM_STR); 
$stmt->bindValue(':bcmt', $bcmt, PDO::PARAM_STR);  
$status = $stmt->execute();

if($status==false){
  function sqlerror1($stmt){ 
  $error = $stmt->errorInfo();
  exit("ErrorSQL:".$error[2]);
}
sqlerror($stmt);

}else{
  header("Location: bookmark.php");
  exit;
}
?>
