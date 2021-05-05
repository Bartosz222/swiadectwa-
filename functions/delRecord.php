<?php
include('connect.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM swiadectwa_uczniowie WHERE id=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
};