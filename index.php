<?php

  require_once __DIR__ . '/Model/Movie.php';
  require_once __DIR__ . '/Model/Media.php';
  require_once __DIR__ . '/db/db.php';

  // var_dump($margherita);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>.

  <title>Document</title>
</head>
<body>

  <h1 class="text-center">PIRATI DEI CARAIBI</h1>
  <p class="text-center">Past and future films</p>

  <div class="container mt-5 d-flex">

  <?php
    foreach($Movies as $Movie):
  ?>

    <div class="card m-4" style="width: 18rem;">
      <img src="img/<?php echo $Movie->image->file_name ?? 'movie_placeholder.jpg' ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Movie->name ?></h5>
        <p class="card-text">Minutes: <?php echo $Movie->duration ?></p>
        <p class="card-text"><?php echo $Movie->category ?></p>
      </div>
    </div>

  <?php
    endforeach;
  ?>

  </div>
  
</body>
</html>