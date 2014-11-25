<?php

 $id = $_GET['id'];


  $file = 'cv/'.$id.'.pdf';
  $filename = $id.'.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
?> 