<?
  $path_parts = pathinfo('/WWW/htdocs/www//index.html');
  print_r($path_parts);


  $path_parts2 = pathinfo('/www/htdocs/www/index.php.asp.bmp.html.inc');
  print_r($path_parts2);

  $path_parts2 = pathinfo('/www/htdocs/www/index');
  print_r($path_parts2);

?>