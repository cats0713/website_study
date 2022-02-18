<?
  $search = @$_GET['search'];
  if($search){
    require "../inc/db_info.inc";
    require "../prg/db_connect.php";

    $db_query = "select * from `note` where `name`='%".$search."%'";
    $records = mysqli_query($db_handler,$db_query);
    
    if(mysqli_num_rows($records) == 0){
      echo "<p>";
      echo "<span>자료 없음</span>";
      echo "</p>"; 
    }else{
      while($row = mysqli_fetch_assoc($records)){
        echo "<p>";
        echo "<span>".$row['name']."</span>";
        echo "<span>".$row['apple']."</span>";
        echo "<span>".$row['samsung']."</span>";
        echo "<span>".$row['lg']."</span>";
        echo "</p>";
      }
      mysqli_free_result($records);
      mysqli_close($db_handler); 
    }

  }else{
    require "../inc/db_info.inc";
    require "../prg/db_connect.php";
    $db_query = "select * from `note`";
    $records = mysqli_query($db_handler,$db_query);
    $counter = 1;

    while($row = mysqli_fetch_assoc($records)){
      echo "<p>";
      echo "<span>".$counter."</span>";
      echo "<span>".$row['name']."</span>";
      echo "<span>".$row['apple']."</span>";
      echo "<span>".$row['samsung']."</span>";
      echo "<span>".$row['lg']."</span>";
      echo "</p>";
      $counter++;
    }
    mysqli_free_result($records);
    mysqli_close($db_handler);
  }
  
?>