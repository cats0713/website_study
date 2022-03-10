<?
  $names = 'Edward,James,Alex,John';
  $name_array = explode(',',$names);
  echo "<pre>";
  print_r($name_array);

  $data = 'aaa::Male::24::programmer';
  list($name,$gender,$age) = explode('::', $data, 3);
  echo $name.'<br>';
  echo $gender.'<br>';
  echo $age.'<br>';

  $file = fopen("./test.txt","r");
  fget($file);

  echo fpassthru($file);
  fclose($file);
?>