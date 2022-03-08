<?
  setcookie('userId','',time() - 36000,'/');
  setcookie('userName','',time() - 36000,'/');
  if(isset($_COOKIE['userId'])){
    echo "살아있음";
  }
?>
<!-- <meta http-equiv='refresh' content='0;url=../main.php'> -->