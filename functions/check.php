<?php 
    include "connect.php";
    $sql = "SELECT imiona_nazwiska FROM swiadectwa INNER JOIN swiadectwa_uczniowie ON swiadectwa.id_ucznia = swiadectwa_uczniowie.id WHERE rok_szkolny = '2021/2020'";

