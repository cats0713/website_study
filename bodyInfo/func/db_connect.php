<?
  function DB_CONNECTFUNC($server, $db_id, $db_pw, $db_name){
    $db_handle = mysqli_connect($server, $db_id, $db_pw, $db_name);

    if(!@$db_handle){
      echo "DB 로그인 실패";
      exit;
    }
    if(!mysqli_select_db($db_handle,$db_name)){
      echo "DB 이상";
      exit; 
    }

    return $db_handle;
  }
?>