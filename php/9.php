<?
  foreach($_FILES["pictures"]["error"] as $key => $error){
    if($error == UPLOAD_ERR_OK){
      $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
      $name = $_FILES["pictures"]["name"][$key];
      move_uploaded_file($tmp_name,"data/$name");
      echo "$key" => $error;
      #echo "ok\n";
    }
    #echo "if x\n";
  }
#echo " 종료\n";

?>