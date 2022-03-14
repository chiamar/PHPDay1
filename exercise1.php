<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 1</title>

  <style>
    div {
      /* display: flex;
      justify-content: center;
      align-items: center; */
      display: grid;
      place-items: center;
      height: 98vh
    }

    h1 {
      text-align: center;
      /* vertical-align: middle; */
      /* transform: translate(50%,50%); */
      /* line-height: 98vh; */
      margin: auto;
    }
  </style>
</head>

<body>

  <div>
    <?php
    $fname = "Petra Christina";
    $lname = "Sedlaczek";
    
    echo "<h1>$fname<br>$lname</h1>" 
    ?>

  <!-- 
    <h1><?php echo $name ?></h1>  
  -->
  </div>

</body>

</html>