<?
  if( !isset($_COOKIE['userId']) && !isset($_COOKIE['userName']) ){
    echo '<script>location.href="'.$home_path.'"</script>';
  }

?>