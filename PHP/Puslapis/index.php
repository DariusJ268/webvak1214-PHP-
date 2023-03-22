<?php include "./logic.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Pirkinių sąrašas</title>
</head>

<body>


    <H1>Pirkinių sąrašas</H1>
    <form action="" method="post">
        <input type="text" name="item" placeholder="Prekės pavadinimas">
        <input type="text" name="category" placeholder="Prekės kategorija">
        <button type="submit">Pridėti į sąrašą</button>
    </form>


    <table class="table table-hover">

        <tr>
            <th>Nr.</th>
            <th>Prekė</th>
            <th>Prekės kategorija</th>
        </tr>
        <?php for ($i = 1; $i < count($_SESSION["list"]); $i++) { ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $_SESSION["list"][$i]["item"] ?></td>
                <td><?= $_SESSION["list"][$i]["category"] ?></td>
            </tr>
        <?php } ?>

</body>

</html>