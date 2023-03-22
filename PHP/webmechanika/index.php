<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $color = "pink";
}else{
   // header('Location: ./index.php');
    // die;
    $color = "yellow";
}
print_r(count($_SERVER));
echo "<br>";
// print_r(array_keys($_SERVER));
echo "<br>";
print_r($_SERVER['REQUEST_METHOD']);
echo "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?=$color?>;">

     <a href="?labas=miau">ten pat</a>
     <a href="https://www.google.com">google</a>
     <a href="./antras.php">antras</a>
    
    <form action="" method="post">
        <input type="text" name="vardas">
        <br>
        <input type="text" name="pavarde">
        <button type="submit">touch me!</button>
    </form>

    <p>Choose your favorite Web language:</p>

    <form>
    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label>
    </form>

    <form>
    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> I have a boat</label><br>
    <input type="submit" value="Submit">
    </form>

    <?php
        print_r($_GET);
        print_r($_POST);

    ?>


<?php  if(isset($_GET['vardas']) && isset($_GET['pavarde'])){ ?>
    <h1><?=$_GET['vardas']?></h1>
    <h1><?=$_GET['pavarde']?></h1>

<?php } ?>


<?php 
 if(isset($_POST['vardas']) && isset($_POST['pavarde'])){ 
    echo "<h6>" . $_POST['vardas'] . "</h6>";
    echo "<h5>" . $_POST['pavarde'] . "</h5>";
 } 
 ?>


</body>
</html>