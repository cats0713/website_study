<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
echo "<meta http-equiv='refresh' content='0;url=./html/login.html'>";
exit;
}
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
echo "<p>안녕하세요. $user_name($user_id)님</p>";
echo "<p><a href='./html/logout.php'>로그아웃</a></p>";
echo "<p><a href='./html/member.php'>파일업로드</a></p>";
?>
