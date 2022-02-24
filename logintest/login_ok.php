<?php
  if(!isset($_POST['userId']) || !isset($_POST['userPw'])) {
    echo "로그인 실패";
    exit;
  }
  $userId = $_POST['userId'];
  $userPw = $_POST['userPw'];
  $members = array(
    'user1' => array('pw' => '1111', 'name' => 'user1'),
    'user2' => array('pw' => '2222', 'name' => 'user2'),
    'user3' => array('pw' => '3333', 'name' => 'user3')
  );

  if(!isset($members[$userId])){
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
  }
  if($members[$userId]['pw'] != $userPw){
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
  }

  setcookie('userId',$userId,time()+(86400*10),'/');
  setcookie('userName',$members[$userId]['name'],time()+(86400*10),'/'); 
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>