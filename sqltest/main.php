<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>전화번호부</title>
  <style>
    *{
      margin:0;
      padding: 0;
    }
    span{
      background-color: pink;
    }
  </style>
</head>
<body>
  
  <?
    include "./sub/nav.html";
    // nav.html 포함시키는 라인 

    if(!@$_GET['menu']){ //get방식으로 가져왔을때 값이 메뉴면
      echo '<script>location.href="./main.php?menu=allList";</script>';
    }else if($_GET['menu'] == "allList"){ //전체 목록을 클릭했을 때

      require "./include/db_info.inc"; //require 없으면 로딩이 안된다.
      //보안상 파일을 나눠서 한다 / php인지 inc 인지 구분이 안가니까 저렇게 inc로 바꾼다.

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

      // 변수에 쿼리 명령문 저장
      $myQuery = "select * from `telList`"; 

      //쿼리가 제대로 실행되지 않았을 경우
      if(!$queryResult = mysqli_query($db_conn,$myQuery)){
        echo "<script>alert('db query 실패');</script>";
        exit;
      }

      //값이 없으면 error
      if(mysqli_num_rows($queryResult) == 0){
        echo "<script>alert('db 레코드가 없습니다.');</script>";
        exit;
      }

      while ($current_row = mysqli_fetch_assoc($queryResult)){
        echo "<div>";
        echo "<span>".$current_row['no']."</span>";
        echo "<span>".$current_row['name']."</span>";
        echo "<span>".$current_row['mobile']."</span>";
        echo "<span>".$current_row['address']."</span>";
        echo "</div>";
      }
      mysqli_free_result($queryResult);
      mysqli_close($db_conn);
    }
  ?>
</body>
</html>