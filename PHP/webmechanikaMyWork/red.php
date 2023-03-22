<?php
    if (isset($_GET['redirect'])) {
        header("Location:./blue.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href="./red.php?redirect"><button>i red</a> <br>
    

</head>

<body style="background-color: red;">

    <a href="./index.php"><button>LINKAS I PIRMA UZDUOTI</button></a> <br>
   
    <p>Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).</p>

</body>

</html>