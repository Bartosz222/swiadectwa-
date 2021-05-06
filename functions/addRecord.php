<?php
 
include('connect.php');
 
if (isset($_POST["d"])) {
    $Name = $_POST['imiona_nazwisko'];
    $Date = $_POST['data_urodzenia'];
    $Place = $_POST['miejsce_urodzenia'];
    $Pesel = $_POST['numer_pesel'];
 
    $sql = "INSERT INTO swiadectwa_uczniowie VALUES ('','$Name','$Date','$Place','$Pesel')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
 
};