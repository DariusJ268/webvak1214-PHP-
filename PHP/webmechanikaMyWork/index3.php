<?php
$color = "";
if (isset($_GET["color"])) {
    $color = $_GET["color"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a  href="./index3.php">Nuoroda i save 1</a> <br>
    <a  href="./index.php"> <button>LINKAS I PIRMA UZDUOTI </button> </a>  <br> 

</head>

<body style="background-color:#<?= $color ?>;">

    <style>
        p {
            color: gray;
        }
    </style>

    <form action="./index3.php#<?= $color ?>">
        <label for="color">Color Code</label><br>
        <input type="text" id="color" name="color" value=""><br>
        <input type="submit"> <br>
        <input type="reset"> <br>
    </form>

    <p>Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.</p>

</body>

</html>