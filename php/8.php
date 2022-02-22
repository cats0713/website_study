<?
  $arr = [1,2,3,4];

  foreach($arr as &$value){
    $value = $value * 2;
  }

  unset($value);
  var_export($arr);

?>