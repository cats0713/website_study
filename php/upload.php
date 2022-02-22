<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form  enctype="multipart/form-data" action="upload.php" method="post">
    <input type="file" name="fileup" id="fileup">
    <input type="submit" value="upImg" name="submit">
  </form>
  <?
    //서브밋으로 제출 된건지 확인
    if(isset($_POST["submit"])){
      $target_dir = "./file/";
      $target_file = $target_dir.basename($_FILES["fileup"]["name"]);
      $uploadOk = 1;
      $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $check = getimagesize($_FILES['fileup']["tmp_name"]);

      if($check == true){
        echo "서브밋으로 넘겨온 값이 맞아" .$check["mime"].".";
        $uploadOk = 1;
      }else{
        echo "파일이 이미지가 아닙니다";
        $uploadOk = 0;
      }

      //파일 존재 여부 확인
      if(file_exists($target_file)){
        echo "파일이 이미 존재 합니다.";
        $uploadOk = 0;
      }

      //파일 크기가 서버가 지정한 값을 초과 하는지 확인
      if($_FILES['fileup']['size'] > 600000){
        echo "파일 크기가 초과";
        $uploadOk = 0;
      }

      //이미지 파일인지 확인
      if($fileType != 'jpg' && $fileType != 'png' && $fileType != 'gif'){
        echo "이미지 파일이 아닙니다.";
        $uploadOk = 0;
      }

      if($uploadOk == 1){
        if(move_uploaded_file($_FILES['fileup']['tmp_name'], $target_file)){
          echo basename($_FILES['fileup']['name'])."파일을 전송 하였습니다.";
        }
      }else{
        echo "파일을 업로드 하는데 실패했습니다.";
      }
  }

  ?>

</body>
</html>