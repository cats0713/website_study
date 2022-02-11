<?
  $page = $_GET['page'];
  include "./m1.html";
  switch ($page){
    case 'p1':
      include "./m2.html";
      break;
    case 'p2':
      include "./m2-1.html";
      break;
  }
  include "./m3.html";
?>