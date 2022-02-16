<? //func는 func끼리 모아둔다.
  function connectDB($serverName,$serverId,$serverPw,$serverDB){
    $db_conn = mysqli_connect($serverName,$serverId,$serverPw,$serverDB); //파일을 떼었으니까 그냥 적어도 상관없다.
  
    if(!$db_conn){
      echo "DB 로그인 실패";
      exit;
    }
    if(!mysql_select_db($db_conn,$serverDB)){
      echo "DB선택 실패";
      exit;
    }
  }

?>