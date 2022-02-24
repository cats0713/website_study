<?
  echo "<!DOCTYPE html>";

  echo "<meta charset='UTF-8'/>";

    if(!isset($_COOKIE['userId'])|| !isset($_COOKIE["userName"])){
      echo "<meta http-equiv='refresh' content='0;url=login.html'>";
      exit;
    }
    $userId = $_COOKIE['userId'];
    $userName = $_COOKIE['userName'];
    echo "<p>안녕하세요. $userName($userId)님</p>";
    echo "<p><a href='logout.php'>로그아웃</a></p>";
  ?>