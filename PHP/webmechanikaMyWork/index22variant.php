<?php
$color = "";
if (isset($_GET["color"])) {
    $color = $_GET["color"];
}
print_r($_GET)
// print_r sicia isspausdina $_GET reiksme
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="./index22variant.php">Nuoroda i save</a> <br>
    <a href="./index.php"><button>LINKAS I PIRMA UZDUOTI</button></a> <br>

</head>

<body style="background-color:#<?= $color ?>;">

    <style>
        p {
            color: gray;
        }
    </style>
    <p>Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.</p>

</body>

</html>