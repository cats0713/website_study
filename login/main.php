<?php
  if(!isset($_COOKIE['userId']) && !isset($_COOKIE['userPw'])){   //쿠키가 없는경우 로그인 해야함
    if(!isset($_POST['userId']) && !isset($_POST['userPw'])){
      include "./html/start.html";
    
    }else{ 
      //post로 넘어온 유저의 값을 저장
      $user_id = $_POST['userId'];
      $user_pw = $_POST['userPw'];

      require "./db/db.inc"; //db중요 정보 부르게
      //db 연결
      $dbHanble = mysqli_connect($server_name, $server_id, $server_pw, $server_db);

      if(!$dbHanble){
        echo "db 연결 실패";
        exit;
      }

      mysqli_select_db($dbHanble,$server_db); //db 선택

      //query 구문
      $sql_query = "select * from `member` where `id`='".$user_id."' and `pw`=password('".$user_pw."')";
      //echo $sql_query; //쿼리 명령문 검사해보기

      if(!$accountInfo = mysqli_query($dbHanble,$sql_query) ){ //쿼리 날린 값이 false이면 (쿼리가 실패 했다면)
        echo "sql 구문이 잘못되었습니다.";
        echo '<script>history.back();</script>';
      }
      if(mysqli_num_rows($accountInfo) == 0){ //쿼리를 날린 결과 값이(자료가 1줄도 없다면) 0 이라면(0을 넣어야 한다 왜냐하면 false는 구분이 안되기 때문)
        echo '<script>alert("아이디 비밀번호가 틀렸습니다. ");</script>';
        echo '<script>location.href="./main.php";</script>';
      }

      echo "ok";
    }
  }else{  //쿠키가 있는 경우 데이터 조회
    echo "2222";
  }
  


?>