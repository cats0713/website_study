<?
  require "./sub/topArea.html";
  require "./inc/db.inc";
  require "./subphp/func.php";

  connectDB($serverName,$serverId,$serverPw,$serverDB);
  
  require "./sub/bottomArea.html";
?>