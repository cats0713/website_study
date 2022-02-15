<?
  $db_server = "localhost";
  $db_id = "c15st19";
  $db_pw = "H07dQfkwWfP5TmM5";
  $db_db = "c15st19";


  $db_conn = mysqli_connect($db_server, $db_id, $db_pw, $db_db); //db 접속
  //db 핸들러

  //핸들러 작업이 정상적으로 되지 않았으면 error
  if(!$db_conn){ 
  //echo "mysql_error($db_conn)";
  echo "<script>alert('db 진입 실패');</script>"; 
  exit;
  }

  //db 접속이 제대로 되지 않았으면 error
  if(!@mysqli_select_db($db_conn,$db_db)){ 
  //echo "mysql_error($db_conn)";
  echo "<script>alert('db 선택 실패');</script>"; 
  exit;
  }
  
?>