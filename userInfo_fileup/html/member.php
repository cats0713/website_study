<?
  session_start();
  if(!$_SESSION['user_id'] AND  !$_SESSION['user_name']){
    echo '<script>location.href="../main.php"</script>';
  }else{
    require "./fileup.html";
  }
  

?>