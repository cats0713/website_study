<?

  $db_handler = db_connet ($server, $db_id, $db_pw, $db_name);
  if(!@$db_handler){
    echo "DB 로그인 실패";
    exit;
  }
  if(!mysqli_select_db($db_handler,$db_name)){
    echo "DB선택 실패";
    exit;
  }

?>