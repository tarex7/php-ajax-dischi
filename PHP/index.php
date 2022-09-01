<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include "./data/data.php";

include __DIR__ . '/data/data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discs</title>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10/dist/vue.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header><img src="./data/assets/Spotify_logo_without_text.svg.png" alt="logo" id="logo"></header>
    <div class="container">
        <div class="row gy-4 my-5">
            <?php foreach ($discs as $disc) : ?>
                <div class="col my-2">
                    <div class="card p-4 text-center text-white">
                        <figure>
                            <img class="img-fluid" src="<?= $disc['poster'] ?>" alt="">
                        </figure>
                        <h3 class="title text-uppercase mb-3"><?= $disc['title']?></h3>
                        <h5 class="artist m-0 text-muted"><?= $disc['author']?></h5>
                        <h5 class="year text-muted"><?= $disc['year']?></h5>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="./app.js"></script>
</body>

</html>