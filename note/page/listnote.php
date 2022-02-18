<?
  require "../inc/db_info.inc";
  require "../prg/db_connect";


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

?>