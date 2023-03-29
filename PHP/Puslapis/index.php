<?php include "./logic.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./head.php"; ?>
</head>

<body>

    <div id="top"></div>
    <h1>Pirkinių sąrašas</h1>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="item" placeholder="Prekės pavadinimas">
            <input type="text" name="category" placeholder="Prekės kategorija">
            <button type="submit">Pridėti į sąrašą</button> <br>
        </form>

        <form action="" method="post">
            <button type="submit" name="reset">reset</button>
        </form>
        <table class="table table-hover">

            <tr>
                <div class="row">
                    <th class="col-1">Nr.</th>
                    <th class="col-5">Prekė</th>
                    <th class="col-6">Prekės kategorija</th>
                </div>
            </tr>
            <?php for ($i = 0; $i < count($_SESSION["list"]); $i++) { ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $_SESSION["list"][$i]["item"] ?></td>
                    <td><?= $_SESSION["list"][$i]["category"] ?></td>
                </tr>

            <?php } ?>
    </div>
</body>

</html>