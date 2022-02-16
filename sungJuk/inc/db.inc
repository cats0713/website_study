<?
  //파일을 떼었으니까 그냥 적어도 상관없다.
  $db_conn = mysql_connet('localhost','c15st19','H07dQfkwWfP5TmM5','c15st19');
  
  if(!$db_conn){
    echo "DB 로그인 실패";
    exit;
  }
  if(!mysql_select_db($db_conn,"c15st19")){
    echo "DB선택 실패";
    exit;
  }
?>