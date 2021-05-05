<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'modal.php'?>
    <div class="cars-bar">
    <div class="type-bar">
        <div class="item">
            <p>id</p>
        </div>
        <div class="item">
            <p>Imiona i Nazwisko</p>
        </div>
        <div class="item">
            <p>Data Urodzenia</p>
        </div>
        <div class="item">
            <p>Miejsce Urodzenia</p>
        </div>
        <div class="item">
            <p>Numer Pesel</p>
        </div>
        <div class="item">
            <p>Edytuj</p>
        </div>
        <div class="item">
            <p>Usuń</p>
        </div>
    </div>
    <?php
    require_once('functions/connect.php');
    $count = 1;
    $sql = 'SELECT * FROM swiadectwa_uczniowie';
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
    <div class="car">
        <div class="item" id="id"><p><?= $count?></p></div>
        <div class="item" id="mark"><p><?= $row['imiona_nazwisko']?></p></div>
        <div class="item" id="model"><p><?= $row['data_urodzenia']?></p></div>
        <div class="item" id="year"><p><?= $row['miejsce_urodzenia']?></p></div>
        <div class="item" id="color"><p><?= $row['numer_pesel']?></p></div>
        <div class="item"><button data-id="<?= $row['id']?>" id="edit-btn" data-id="<?= $row['id']?>" class="edit-btn">Edytuj</button></div>
        <div class="item"><button data-id="<?= $row['id']?>" class="delete-btn">Usuń</button></div>
    </div>
    <?php
$count++;
    }
}
?>


</div>
  
<script src="jquery.js"></script>
<script src="index.js"></script>
</body>
</html>