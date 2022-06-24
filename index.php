<?php
require_once __DIR__ . "../server/database.php";

// var_dump($database);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header>
        <div class="header__sx">
            <img src="img/spotify-logo.png" alt="" class="header__logo">
        </div>
        <div class="header__dx">
            <input class="header__text-box" type="text" name="text" id="text">
        </div>
    </header>
    <main>
        <div class="container">
            <?php foreach ($database as $album) { ?>
                <div class="card">
                    <?php
                    echo "<img src='{$album["poster"]}' alt='{$album["title"]}' class='card__img'>";
                    echo "<h4 class='card__title'>{$album["title"]}</h4>";
                    echo " <div class='card__info'><div>{$album["author"]}</div><div>{$album["year"]}</div></div>"
                    ?>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>