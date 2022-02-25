<?
  if(!isset($_POST['userId']) || !isset($_POST['userPw'])) {
    echo "유저 정보가 존재 하지 않습니다.";
    exit;
  }

  $userId = $_POST['userId'];
  $userPw = $_POST['userPw'];

  $userInfo = array(
    'cemy' => array('pw' => md5('kkms4001'), 'name' => '세미')
  );

  if(!isset($userInfo[$userId])){
    echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
    exit;
  }
  if($userInfo[$userId]['pw'] === md5($userPw)){
    echo $userInfo[$userId]['pw'];
    echo md5($userPw);
    echo "로그인 성공";
    exit;
  }else{
    echo "로그인 실패";
    exit;
  }




?>