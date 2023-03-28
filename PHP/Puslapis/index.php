<?php include "./logic.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./head.php"; ?>
</head>

<body>
    <div id = "top"></div>
    <h1>Pirkinių sąrašas</h1>
    <form action="" method="post">
        <input type="text" name="item" placeholder="Prekės pavadinimas">
        <input type="text" name="category" placeholder="Prekės kategorija">
        <button type="submit">Pridėti į sąrašą</button> <br>
    </form>


    <table class="table table-hover">

        <tr>
            <th class="col-1">Nr.</th>
            <th class="col-5">Prekė</th>
            <th class="col-6">Prekės kategorija</th>

        </tr>
        <?php for ($i = 0; $i < count($_SESSION["list"]); $i++) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $_SESSION["list"][$i]["item"] ?></td>
                <td><?= $_SESSION["list"][$i]["category"] ?></td>
            </tr>

        <?php } ?>
</body>

</html>