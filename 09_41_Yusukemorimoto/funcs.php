<?php
//共通に使う関数を記述
function h($a){
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=t_41;charset=utf8;host=localhost','root','');
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());
      }      
}

function redirect($page){
    header("Location: ".$page);
    exit;
}

function sqlError($stmt){ 
    $error = $stmt->errorInfo();
    exit("ErrorSQL:".$error[2]);
  }
// login認証用
  function loginCheck(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
      // echo "LOGIN ERROR".session_id();
      header("Location: loginerror.php");  
    exit();
  }else{
          session_regenerate_id(true);
          $_SESSION['chk_ssid'] = session_id();
          // echo $_SESSION['shk_ssid'];
      }
  }


  function loginSession($val, $id, $name, $kanri_flg){
    $_SESSION[$id]  = session_id();
    $_SESSION[$kanri_flg] = $val[$kanri_flg];
    $_SESSION[$name]      = $val[$name];
  }


  function time1(){
    $time = intval(date('H'));
    if (4 <= $time && $time <= 12) { 
    echo "おはようございます！";
    } elseif (12 <= $time && $time <= 16) {
    echo "こんにちは！";
    } else {
    echo "こんばんは";
    }
}
  


?>