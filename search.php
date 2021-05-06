<?php

    include "functions/connect.php";
    $year = $_GET['gfs'];
    $sql = "SELECT imiona_nazwisko FROM swiadectwa_uczniowie Inner Join swiadectwa on swiadectwa_uczniowie.id = swiadectwa.id_ucznia where rok_szkolny = '$year'";
    $retval = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($retval)) {
      $arr = [
        "text" => $row['imiona_nazwisko'],
        "value" => $row['imiona_nazwisko'],
      ];
    }
    
    echo json_encode($arr);
 