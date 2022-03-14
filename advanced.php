<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Advanced Exercise</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    img {
      height: 300px !important
    }
  </style>
</head>

<body>

  <?php
  $characters = [
    "Donald" => array(
      'en' => 'Donald Duck',
      'de' => 'Donald Duck',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/donald-duck_0.png'
    ),
    'Dagobert' => array(
      'en' => 'Scrooge McDuck',
      'de' => 'Dagobert Duck',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/dagobert-duck_0.png'
    ),
    'Daisy' =>  array(
      'en' => 'Daisy Duck',
      'de' => 'Daisy Duck',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/daisy-duck_0.png'
    ),
    'TTT' =>  array(
      'en' => 'Huey, Dewey & Louie',
      'de' => 'Tick, Trick & Track',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/tick-trick-und-track_0.png'
    ),
    'Gustav' =>  array(
      'en' => 'Gladstone Gander',
      'de' => 'Gustav Gans',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/gustav-gans_0.png'
    ),
    'Dussel' =>  array(
      'en' => 'Fethry Duck',
      'de' => 'Dussel Duck',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/dussel-duck_0.png'
    ),
    'Dorette' =>  array(
      'en' => 'Grandma Elvira Duck',
      'de' => 'Oma Dorette Duck',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/oma-dorette-duck_0.png'
    ),
    'Franz' =>  array(
      'en' => 'Gus Goose',
      'de' => 'Franz Gans',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/franz-gans_0.png'
    ),
    'Primus' =>  array(
      'en' => 'Ludwig von Drake',
      'de' => 'Primus von Quack',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/primus-von-quack_0.png'
    ),
    'DDD' =>  array(
      'en' => 'April, May & June',
      'de' => 'Dicky, Dacky & Ducky',
      'img' => 'https://www.lustiges-taschenbuch.de/sites/default/files/dicky-dacky-und-ducky_0.png'
    ),


  ];

  // echo $characters['Donald']['en'] . "<br/>";
  // echo $characters['Donald']['de'] . "<br/>";
  // echo "<img src={$characters['Donald']['img']}>";
  ?>

  <div class="container text-center mx-auto my-5">
    <h1 class="my-5 border-bottom pb-4">Walt Disney Cartoon characters</h1>

    <h2 class="border-bottom pb-3">Donald & Co</h2>

    <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6 g-4 my-4">

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Dagobert']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Dagobert']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Dagobert']['img'] ?>" alt="<?php echo $characters['Dagobert']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Donald']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Donald']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Donald']['img'] ?>" alt="<?php echo $characters['Donald']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Daisy']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Daisy']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Daisy']['img'] ?>" alt="<?php echo $characters['Daisy']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['TTT']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['TTT']['de'] ?>
        </h6>
        <img src="<?php echo $characters['TTT']['img'] ?>" alt="<?php echo $characters['TTT']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Gustav']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Gustav']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Gustav']['img'] ?>" alt="<?php echo $characters['Gustav']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Dussel']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Dussel']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Dussel']['img'] ?>" alt="<?php echo $characters['Dussel']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Dorette']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Dorette']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Dorette']['img'] ?>" alt="<?php echo $characters['Dorette']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Franz']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Franz']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Franz']['img'] ?>" alt="<?php echo $characters['Franz']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['Primus']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['Primus']['de'] ?>
        </h6>
        <img src="<?php echo $characters['Primus']['img'] ?>" alt="<?php echo $characters['Primus']['en'] ?>">
      </div>

      <div class="col">
        <h5 class="card-title">
          <?php echo $characters['DDD']['en'] ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
          <?php echo $characters['DDD']['de'] ?>
        </h6>
        <img src="<?php echo $characters['DDD']['img'] ?>" alt="<?php echo $characters['DDD']['en'] ?>">
      </div>

    </div>


    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>