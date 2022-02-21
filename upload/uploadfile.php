<?
  $upDir = "/home/c15st19/public_html/study/upload/files/";
  $upfile1 = $upDir.basename($_FILES['file1']['name']);
  $upfile2 = $upDir.basename($_FILES['file2']['name']);

  move_uploaded_file($_FILES['file1']['tmp_name'],$upfile1);
  move_uploaded_file($_FILES['file2']['tmp_name'],$upfile2);

  echo "전송 성공";
?>