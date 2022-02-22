<?
  $path = pathinfo('/www/htdocs/www///index.php.asp.bmp.html.inc'.PATHINFO_BASENAME);

  echo $path;
  echo basename('/www/httpd/home/index.html');
  echo basename('/www/httpd/home/index.html','.html');

  $path = pathinfo('/www/httpd/home////index.php.asp.bmp.html.inc',PATHINFO_EXTENSION);


?>