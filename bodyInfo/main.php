<?
  require "./sub/header.html";

  require "./inc/db_info.inc";
  require "./func/db_connect.php";
  

  $menu = @$_GET['menu'];
  if($menu == 'update'){
    $db_handle = DB_CONNECTFUNC($server, $db_id, $db_pw, $db_name);

    $sqlQuery = "select * from `bodyInfo` where no=".$_GET['no']; //쿼리 명령문
    $rows = mysqli_query($db_handle,$sqlQuery); //쿼리 날리기
    if(mysqli_num_rows($rows)==0){ //자료없음
      echo "자료없음";
      exit;
    }


    echo "<section class='dataList'>";
    echo "<article>";
    echo "<ol>";
    while($row = mysqli_fetch_assoc($rows)){ //반복하여 문서에 기술
      echo "<li>".$row['name']." ";
      echo $row['gender']." ";
      echo $row['height']." ";
      echo $row['weight']." ";
      echo $row['blood']." ";
      echo "<a href='main.php?menu=update&no=".$row['no']."'>수정</a>.</li><br>";
    }
    echo "</ol>";
    echo "</article>";
    echo "</section>";
    mysqli_free_result($rows);
    mysqli_close($db_handle);
  
    require "./sub/footer.html";
  }eles{
    $db_handle = DB_CONNECTFUNC($server, $db_id, $db_pw, $db_name);

    $sqlQuery = "select * from `bodyInfo`"; //쿼리 명령문
    $rows = mysqli_query($db_handle,$sqlQuery); //쿼리 날리기
    if(mysqli_num_rows($rows)==0){ //자료없음
      echo "자료없음";
      exit;
    }

    echo "<section class='dataList'>";
    echo "<article>";
    echo "<ol>";
    while($row = mysqli_fetch_assoc($rows)){ //반복하여 문서에 기술
      echo "<li>".$row['name']." ";
      echo $row['gender']." ";
      echo $row['height']." ";
      echo $row['weight']." ";
      echo $row['blood']." ";
      echo "<a href='main.php?menu=update&no=".$row['no']."'>수정</a>.</li><br>";
    }
    echo "</ol>";
    echo "</article>";
    echo "</section>";
    mysqli_free_result($rows);
    mysqli_close($db_handle);
  
    require "./sub/footer.html";
  }

?>