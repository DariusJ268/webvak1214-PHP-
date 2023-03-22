<?php
if (isset($_GET['redirect'])) {
    header("Location:./red.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="./blue.php?redirect"><button>i blue</a> <br>

</head>

<body style="background-color: blue;">

    <a href="./index.php"><button>LINKAS I PIRMA UZDUOTI</button></a> <br>


    <style>
        p {
            color: gray;
        }
    </style>
    <p>Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).</p>

</body>

</html>