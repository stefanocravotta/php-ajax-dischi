<?php 

require_once "assets/db/albums_db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <header class="d-flex justify-content-between">
          <img src="https://cdn.iconscout.com/icon/free/png-256/spotify-14-437140.png" alt="">
          <div class="d-flex">
            <select name="" id=""></select>
            <select name="" id=""></select>
          </div>
        </header>
        <div class="container card-container d-flex flex-wrap">
            <?php foreach($albums_db as $album) : ?>
            <div class="sc-card text-center">
                    <img class="mb-3" src="<?php echo $album["poster"] ?>">
                    <h4><?php echo $album["title"] ?></h4>
                    <h5><?php echo $album["author"] ?></h5>
                    <h6><?php echo $album["genre"] ?></h6>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>