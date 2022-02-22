<?
  $arr = [1,2,3,4];

  foreach($arr as &$value){
    $value = $value * 2;
  }

  unset($value);
  var_export($arr);

  $a = [['a','b'],['c','d']];
  $b = [];

  foreach($a as $v1){
    foreach($v1 as $v2){
      $b[] = "$v2\n";
    }
  }
  var_export($b);

  $c = [
    "one" => 1,
    "two" => 2,
    "three" =>3
  ];
  foreach($c as $k => $v){
    echo "$k => $v.\n";
  }

  $arr = ['하나','둘','셋'];
  reset($arr);
  while(list(,$value) = each($arr)){
    echo "$value<br>";
  }
  foreach($arr as $value){
    echo "$value";
  }

?>