<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $_SESSION["list"][] = ["item" => $_POST["item"] , "category" => $_POST["category"]];
    }


    print_r($_SESSION);

    echo "<br>";

    print_r($_POST);


  ?>