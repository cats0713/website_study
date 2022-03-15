<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

require "../db/db.inc"; //db중요 정보 부르게
$dbHanble = mysqli_connect($server_name, $server_id, $server_pw, $server_db);
if(!$dbHanble){
  echo "db 연결 실패";
  exit;
}
$sql_query = "select * from `user` where `id`='".$user_id."' and `pw`=password('".$user_pw."')";
if(!$accountInfo = mysqli_query($dbHanble,$sql_query) ){ //쿼리 날린 값이 false이면 (쿼리가 실패 했다면)
  mysqli_close($dbHanble);
  echo "sql 구문이 잘못되었습니다.";
  echo '<script>location.reload();</script>';
}

if(mysqli_num_rows($accountInfo) == 0){ //쿼리를 날린 결과 값이(자료가 1줄도 없다면) 0 이라면(0을 넣어야 한다 왜냐하면 false는 구분이 안되기 때문)
  mysqli_close($dbHanble);
  echo '<script>alert("아이디 비밀번호가 틀렸습니다. ");</script>';
  echo '<script>location.href="../main.php";</script>';
}else{
  $row = mysqli_fetch_assoc($accountInfo);
  $user_name = $row['nikname'];

  session_start();
  $_SESSION['user_id'] = $user_id;
  $_SESSION['user_name'] = $row['nikname'];
  mysqli_free_result($accountInfo);
  mysqli_close($dbHanble);
  
  echo '<script>location.href="../main.php"</script>';
}

?>