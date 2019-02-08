<?php
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];

include "funcs.php";
$pdo = db_con();

$sql = "INSERT INTO gs_user_table(name,lid,lpw,kanri_flg)VALUES(:name,:lid,:lpw,:kanri_flg)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR); 
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR); 
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR); 
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT); 

$status = $stmt->execute();

if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: adminuser.php");
    exit;
}
