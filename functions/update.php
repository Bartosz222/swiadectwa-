<?php
include ('connect.php');
if (isset($_POST['d'])) {
    $id = $_POST['id'];
    $Name = $_POST['imiona_nazwisko'];
    $Date = $_POST['data_urodzenia'];
    $Place = $_POST['miejsce_urodzenia'];
    $Pesel = $_POST['numer_pesel'];

    
    


    $sql = "UPDATE swiadectwa_uczniowie SET imiona_nazwisko='$Name', data_urodzenia = '$Date', miejsce_urodzenia='$Place', numer_pesel='$Pesel' WHERE id='$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
};
?>