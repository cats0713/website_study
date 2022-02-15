<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>전화번호부</title>
</head>
<body>
  
  <?
    include "./sub/nav.html";
    // nav  
    if(!@$_GET['menu']){
      echo '<script>location.href="./main.php?menu=allList";</script>';
    }else if($_GET['menu'] == "allList"){
      require "./include/db_info.inc"; //require 없으면 로딩이 안된다.
      //보안상 파일을 나눠서 한다.
      //php인지 inc 인지 구분이 안가니까 저렇게 inc로 바꾼다.
      $db_conn = mysqli_connect($db_server, $db_id, $db_pw, $db_db);
      //db 핸들러

      if(!$db_conn){ //핸들러 작업이 정상적으로 되지 않았으면 error
        //echo "mysql_error($db_conn)";
        echo "<script>alert('db 진입 실패');</script>"; 
        exit;
      }
      if(!@mysqli_select_db($db_conn,$db_db)){ //db 접속이 제대로 되지 않았으면 error
        //echo "mysql_error($db_conn)";
        echo "<script>alert('db 선택 실패');</script>"; 
        exit;
      }
      $myQuery = "select * from `telList`"; // 변수에 쿼리 명령문 저장
      if(!$queryResult = mysqli_query($db_conn,$myQuery)){ //쿼리가 제대로 실핼되지 않았을 경우
        echo "<script>alert('db query 실패');</script>";
        exit;
      }
      if(mysqli_num_rows($queryResult) == 0){
        echo "<script>alert('db 레코드가 없습니다.');</script>";
        exit;
      }
      $current_row =  mysqli_fetch_assoc($queryResult);
      echo $current_row['no'];
      echo $current_row['name'];
      echo $current_row['mobile'];
      echo $current_row['address'];
    }
  ?>
</body>
</html>