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

    if(!@$_GET['menu']){ //get방식으로 가져왔을때 값이 메뉴가 아니면
      echo '<script>location.href="./main.php?menu=allList";</script>'; //allList로 이식
    }else if($_GET['menu'] == "allList"){ //전체 목록을 클릭했을 때

      require "./include/db_open.inc"; //require 없으면 로딩이 안된다.
      //보안상 파일을 나눠서 한다 / php인지 inc 인지 구분이 안가니까 저렇게 inc로 바꾼다.

      // 변수에 쿼리 명령문 저장
      $myQuery = "select * from `telList`"; 

      //쿼리가 제대로 실행되지 않았을 경우
      if(!$queryResult = mysqli_query($db_conn, $myQuery)){
        echo "<script>alert('db query 실패');</script>";
        exit;
      }

      //값이 없으면 error
      if(mysqli_num_rows($queryResult) == 0){
        echo "<script>alert('db 레코드가 없습니다.');</script>";
        exit;
      }

      $recCounter = 1;
      while ($current_row = mysqli_fetch_assoc($queryResult)){
        echo "<div>";
        echo "<span>".$recCounter."</span>";
        echo "<span>".$current_row['name']."</span>";
        echo "<span>".$current_row['mobile']."</span>";
        echo "<span>".$current_row['address']."</span>";
        echo "<span>".$current_row['no']."</span>";
        echo '<span><a href="./main.php?menu=delList&item='.$current_row['no'].'">[삭제]</a></span>';
        echo '<span><a href="./main.php?menu=updateList&item='.$current_row['no'].'">[수정]</a></span>';
        echo "</div>";
        $recCounter++;
      }
      mysqli_free_result($queryResult);
      mysqli_close($db_conn);
    }else if($_GET['menu'] == "addList"){ //목록 추가를 클릭했을 때
      echo '<form action="./main.php" method="get">';
      echo '<input type = "hidden" name = "menu" value="saveList">';
      echo '<input type = "text" name = "name" placeholder = "이름" tabindex=10 autofocus required>';
      echo '<input type = "text" name = "mobile" placeholder = "전화번호" tabindex=10 required>';
      echo '<input type = "text" name = "address" placeholder = "주소" tabindex=10>';
      echo '<input type = "submit" value="저장">'; 
      echo '</form>';
    }else if($_GET['menu'] == "saveList"){ //저장버튼을 눌렀을때
      echo "save"; //save를 출력

      $inName = $_GET['name']; //받아오기
      $inMobile = $_GET['mobile'];
      $inAddress = $_GET['address'];

      $myQuery = "insert into `telList` values ('', '".$inName."','".$inMobile."','".$inAddress."')"; //쿼리 명령문
      require "./include/db_open.inc"; //db_open
      mysqli_query($db_conn,$myQuery);
      mysqli_close($db_conn);
      echo '<script>location.href="./main.php";</script>'; //main으로 돌아가기
    }else if($_GET['menu'] == "delList"){
      $recorNo = $_GET['item'];
      $myQuery = "delete from `telList` where `no`=".$recorNo;
      require "./include/db_open.inc";
      mysqli_query($db_conn,$myQuery);
      mysqli_close($db_conn);
      echo '<script>location.href="./main.php";</script>'; 
    }else if($_GET['menu'] == "updateList"){
      $recorNo = $_GET['item']; 
      //$myQuery = "update `telList` set `name` =" 
    }


  ?>
</body>
</html>