<?php
session_start();

$text = "ABCDEFGHIJKLMNOPRQSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890+-*/=-0#;/.>,<|(&^%$~!";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (strlen(preg_replace("/[^a-z]/i", "", $_POST["item"])) >=3 && strlen(preg_replace("/[^a-z]/i", "", $_POST["category"])) >=3) {
    $_SESSION["list"][] = ["item" => $_POST["item"], "category" => $_POST["category"]];
  }
  header("Location: ./index.php");
  die;
}

if (!isset($_SESSION["list"])) {
  $_SESSION["list"] = [];
}

// print_r($_SESSION);

echo "<br>";

// print_r($_POST);
?>

<?php if (isset($_POST["item"]) && isset($_POST["category"])) { ?>
  <h1><?= $_POST["item"] ?></h1>
  <h1><?= $_POST["category"] ?></h1>
<?php } ?>