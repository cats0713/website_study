<?
  if(!isset($_POST['is_ajax'])){
    echo "ajax";
    exit;
  }
  if(!isset($_POST['userId'])){
    echo "id";
    exit;
  }
  if(!isset($_POST['userPw'])){
    echo "pw";
    exit;
  }
  $is_ajax = $_POST['is_ajax'];
  $userId = $_POST['userId']; 
  $userPw = $_POST['userPw']; 

  $members = array(
    'user1' => ('pw' => '1234', 'name' => '김'),
    'user2' => ('pw' => '1234', 'name' => '박')
  );

  if(!is_ajax){
    exit;
  }
  // setcookie('userId',$userId);
  // setcookie('userPw',$userPw);
  if($members[$userId]['pw'] == $userPw){
    echo "성공";
  }
 

?>