<?php
include_once 'connect.php';
    if(isset($_POST['id'])){
        
        $id = $_POST['id'];
        $sql = "SELECT * FROM swiadectwa_uczniowie WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $arr = [
                "id" => $row['id'],
                "imiona_nazwisko" => $row['imiona_nazwisko'],
                "data_urodzenia" => $row['data_urodzenia'],
                "miejsce_urodzenia" => $row['miejsce_urodzenia'],
                "pesel" => $row['numer_pesel'],
            ];
        }
        echo json_encode($arr);
    }