<?php 
session_start();
include("funcs.php");
// loginCheck();
$pdo = db_con();

$login = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw AND kanri_flg=:kanri_flg");
$login->bindValue(':lid', $_POST['lid']);
$login->bindValue(':lpw', $_POST['lpw']);
$login->bindValue(':kanri_flg', $_POST['kanri_flg']);

$res = $login->execute();
if ($res == false) {
    $error = $loginstmt->errorInfo();
    exit("QueryError:" . $error[2]);
}

$val = $login->fetch();
if ($val["id"] != "") {
    loginSession($val, 'ssid', 'name', 'kanri_flg');
    if ($_SESSION['kanri_flg'] == 0) {
      header("Location: adminuser.php");
    } elseif ($_SESSION['kanri_flg'] == 1) {
        header("Location: user.php");
    }    
} else {
    header("Location: index.php");
}
exit;
?>
