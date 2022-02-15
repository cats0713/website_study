<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>전화번호부</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="./allList.php">전체목록</a></li>
      <li><a href="">번호추가</a></li>
      <li><a href="">번호삭제</a></li>
      <li><a href="">번호수정</a></li>
      <li><a href="">번호조회</a></li>
    </ul>
  </nav>
  <?
    require "./include/db_info.inc"; //require 없으면 로딩이 안된다.
    //보안상 파일을 나눠서 한다.
    //php인지 inc 인지 구분이 안가니까 저렇게 inc로 바꾼다.
    $db_conn = mysqli_connect($db_server, $db_id, $db_pw, $db_db);
  
  
  ?>
</body>
</html>