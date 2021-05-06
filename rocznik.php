<?php
  include ('functions/connect.php');
  $sql = "SELECT DISTINCT rok_szkolny FROM swiadectwa";
  $retval = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($retval)) {
    $arr = [
      "text" => $row['rok_szkolny'],
      "value" => $row['rok_szkolny'],
    ];
 }
 echo json_encode($arr);
?>