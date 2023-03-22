<?php
$color = "pink";

if (isset($_GET["color"])) {
    $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="./index.php">Nuoroda i save 1</a> <br>
    <a href="./index.php?color=1">Nuoroda i save 2</a> <br>
    <a href="./index2.php"> <button> ANTRA UZDUOTIS</button></a> <br>
    <a href="./index22variant.php"> <button> ANTRA UZDUOTIS. 2 variantas</button></a> <br>
    <a href="./index3.php"><button>TRECIA UZDUOTIS</button></a> <br>
    <a href="./lemon.php"><button>Ketvirta UZDUOTIS</button></a> <br>
    <a href="./blue.php"><button>Penkta UZDUOTIS</button></a> <br>


</head>

<body style="background-color:<?= $color ?>;">

    <style>
        p {
            color: white;
        }
    </style>
    <p>Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.</p>

    <?php
    
?>

</body>

</html>