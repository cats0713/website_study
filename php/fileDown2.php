<?
  function mb_basename($path){
    return end(explode('/',$path));
  }
  function utf2euc($str){
    return iconv("UTF-8","cp949//IGNORE",$str);
  }

  $filePath = './하이.txt';
  $fileSize = filesize($filePath);
  $fileName = mb_basename($filePath);

  header("Pragma: public");
  header("Expires: 0");
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: $filesize");

  readfile($filePath);
?>