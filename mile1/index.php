<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone 1</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- HEADER -->
    <?php include_once __DIR__ . '/../partials/themeplates/header.php' ?>
    <!-- HEADER -->

    <!-- DATA ALBUMS -->
    <?php include_once __DIR__ . '/../partials/datas/database.php';?>



    <div class="albums container">
        
        <?php foreach($database as $album) { ?>
        <div class="card">
            <div class="album-img-container">
                <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
            </div>
            <h3><?php echo $album['title'] ?></h3>
            <h5><?php echo $album['author'] ?></h5>
            <h3><?php echo $album['year'] ?></h3>
            <h5><?php echo $album['genre'] ?></h5>
        </div>
        <?php } ?>

    </div>
</body>
</html>