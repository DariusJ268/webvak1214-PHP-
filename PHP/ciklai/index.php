<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #word-wrap {
        word-wrap: break-word;
    }
</style>
<style>

</style>

<body>
    <?php

    // 3.1.a

    echo '<p id="word-wrap">';

    for ($i = 0; $i < 400; $i++) {
        echo "*";
    }
    echo '</p>';
    echo "<hr>";

    // 3.1.b

    echo "<p>";

    for ($i = 1; $i < 401; $i++) {
        echo "*";
        if ($i % 50 == 0 && $i != 400) {
            echo "</p><p>";
        }
    }

    echo "</p>";
    echo "<hr>";

    // 3.2

    // echo "<p>";
    // $count = 0;
    // for ($i = 0; $i < 300; $i++) {
    //     $rnd = rand(0, 300);
    //     // echo $rnd . " ";
    //     if ($rnd > 275) {
    //         echo "<span style='color:red'>" . $rnd . " " . "</span>";
    //     } else {
    //         echo $rnd . " ";
    //     }
    //     if ($rnd > 150) {
    //         $count++;
    //     }
    // // }
    // // for ($i=0; $i < ; $i++) { 
    // //     # code...
    // // }
    echo "</p>";

    echo "<br>";
    echo $count;

    echo "<hr>";

    // 3.3

    $row1 = "";
    $randominis = rand(3000, 4000);
    echo $randominis . "<br>";
    for ($i = 0; $i < $randominis; $i++) {
        if ($i % 77 == 0) {
            $row1 .= $i . ", ";
        }
    }

    echo substr($row1, 0, -2) . ".";

    echo "<hr>";

    // 3.4

    for ($a = 0; $a < 10; $a++) {
        $row = "";
        for ($i = 0; $i < 10; $i++) {
            $row .= "*";
        }
        echo $row;
        echo "<br>";
    }

    echo "<hr>";


    // 3.5

    for ($a = 0; $a < 10; $a++) {
        $row = "";
        for ($i = 0; $i < 10; $i++) {
            if ($a == $i || $a == 9 - $i) {
                $row .= "X";
            } else {
                $row .= "*";
            }
        }
        echo $row;
        echo "<br>";
    }

    echo "<hr>";


    function generateHashtag($str)
    {
        $str1 = ucwords($str);
        $str2 = str_replace(" ", "", $str1);
        $hashStr = "#" . $str2;
        // if ((strlen($str < 140))) {
            return $hashStr;
        // } 
        // else {
        //     return false;
        // }
    }

    echo generateHashtag('Codewars is great');

    $str = "Am i actually this dumb?";
    $str1 = ucwords($str);
    $str2 = str_replace(" ", "", $str1);
    $hashStr = "#" . $str2;
    if ((strlen($str2) < 140) && (strlen($str2 > 0))) {
        echo $hashStr;
    } else {
        echo "false";
    }

    echo $str2 . "<hr>";

    ?>
</body>

</html>