<?
  require "./sub/header.html";

  require "./inc/db_info.inc";
  require "./func/db_connect.php";
  $db_handle = DB_CONNECTFUNC($server, $db_id, $db_pw, $db_name);

  $sqlQuery = "select * from `bodyInfo`";
  $rows = mysqli_query($db_handle,$sqlQuery);
  if(mysqli_num_rows($rows)==0){
    echo "자료없음";
    exit;
  }
  while($row = mysqli_fetch_assoc($rows)){
    echo $row['no']," ".$row['name']."".$row['gender']." ".$row['height']." ".$row['weight']." ".$row['blood'];
  }


  require "./sub/footer.html";
?>