<?
  $filePath = './hello_world.txt';
  $fileSize = filesize($filePath);
  $pathParts = pathinfo($filePath);
  $fileName = $pathParts['basename'];
  $extension = $pathParts['extension'];
  
  header("pragma: public");
  header("Expires: 0");
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=$filename");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: $fileSize");

  ob_clean();
  flush();
  readfile($filePath);
?>