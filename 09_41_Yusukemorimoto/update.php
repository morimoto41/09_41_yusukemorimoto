<?php
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];

include "funcs.php";
$pdo = db_con();


$sql = "UPDATE gs_user_table SET name=:name,lid=:lid,lpw=:lpw,kanri_flg=:kanri_flg WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR); 
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT); 
$stmt->bindValue(':id',$id, PDO::PARAM_STR);
$status = $stmt->execute();


if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: select.php");
    exit;
}
?>
