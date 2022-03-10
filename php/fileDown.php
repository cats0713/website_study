<?php
  $filePath = './hello_world.txt';
  $fileSize = filesize($filePath);
  $pathParts = pathinfo($filePath);
  $fileName = $pathParts['basename'];
  $extension = $pathParts['extension'];

  header("Pragma: public"); //이건뭐...
  header("Expires: 0"); 
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=$fileName");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: $fileSize");

  ob_clean(); //버퍼를(메모리) 깨끗하게 지우는것
  flush(); //메모리에(버퍼에) 저장되어 있는 내용을 브라우저로 출력하고, 버퍼를 비운다는 뜻
  readfile($filePath);

?>