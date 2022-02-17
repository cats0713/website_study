<?
  require "./sub/header.html";

  require "./inc/db_info.inc";
  require "./func/db_connect.php";
  $db_handle = DB_CONNECTFUNC($server, $db_id, $db_pw, $db_name);

  $sqlQuery = "select * from `bodyInfo`"; //쿼리 명령문
  $rows = mysqli_query($db_handle,$sqlQuery); //쿼리 날리기
  if(mysqli_num_rows($rows)==0){ //자료없음
    echo "자료없음";
    exit;
  }
  while($row = mysqli_fetch_assoc($rows)){ //반복하여 문서에 기술
    echo $row['no']," ".$row['name']." ".$row['gender']." ".$row['height']." ".$row['weight']." ".$row['blood'];
    echo "<a href="./main.php"></a><br>";
  }
  mysqli_free_result($rows);
  mysqli_close($db_handle);

  require "./sub/footer.html";
?>