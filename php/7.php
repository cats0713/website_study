<?
  if(isset($_GET['width']) AND isset($_GET['hegiht'])){
    echo '화면 가로 : '.$_GET['width']."<br>";
    echo '화면 세로 : '.$_GET['hegiht']."<br>";
  }else{
    echo '<script>';
    echo 'location.href=${_SERVER["SCRIPT_NAME"]}?${$_SERVER["QUERY_STRING"]}';
    echo '&width="+ screen.width +" &height = " + screen.height;\n';
    echo '</script>';
    exit;
  }



?>