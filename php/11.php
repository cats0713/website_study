<?
  if(preg_match("/php/i","PHP is the web scripting language of choice.")){
    echo "A match";
  }else{
    echo "not match";
  }
  if(preg_match("/\bweb\b/i","PHP is the website scripting language of choice.")){
  echo "A match";
  }else{
    echo "not match";
  }
  $subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
  preg_match('~(http://\w+.\w+)\s(\w+@\w+\.\w+)\s(\d{3}-\d{3,4}-\d{4})~',$subject,$match);
  var_dump($match);
  echo "home".$match[1]."<br>";
  echo "e".$match[2]."<br>";
  echo "phone".$match[3]."<br>";

  preg_match("@^(?:http://)?([^/]+)@i","http://www.php.net/index.html",$matchA);
  var_dump($matchA);
  preg_match("/[^.]+\.[^.]+$/",$matchA[1],$matchR);
  var_dump($matchR);
  echo "<br>";

  $str = 'foobar: 2008';
  preg_match("/(?P<name>\w+): (?P<di>\d+)/",$str,$matchA2);
  print_r($matchA2);

  $str2 = 'April 15, 2003';
  $pattern = '/(\w+) (\d+), (\d+)/i';
  $repla = '${1}1,$3';

  echo preg_replace($pattern,$repla,$str2);

  $string = 'The quick brown fox jumped over the lazy dog.';
  $patterns = ['/au/']


?>