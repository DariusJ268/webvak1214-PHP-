<?php
session_start();

$text = "ABCDEFGHIJKLMNOPRQSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890+-*/=-0#;/.>,<|(&^%$~!";
if (isset($_POST["reset"])) {
  $_SESSION['list'] = [];
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (strlen(preg_replace("/[^a-z]/i", "", $_POST["item"])) >= 3 && strlen(preg_replace("/[^a-z]/i", "", $_POST["category"])) >= 3) {
    $_SESSION["list"][] = ["item" => $_POST["item"], "category" => $_POST["category"]];
  }
  header("Location: ./index.php");
  die;
}

if (!isset($_SESSION["list"])) {
  $_SESSION["list"] = [];
}

echo "<br>";
?>
