<?
  $fileContent = file("./test.txt");
  echo $fileContent[2];

  echo dir("./test.");

  $x = 75;
  $y = 25;

  function aadd(){
    $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
  }

  echo $z;

  echo $_SERVER['PHP_SELF'];
?>