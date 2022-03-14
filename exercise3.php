<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 3</title>
</head>

<body>

  <?php
  $players = array('Mark', 'John', 'Georg', 'Lisa');
  echo "The third player in the team is
  $players[2].<br>";

  $players = ['Mark', 'John', 'Georg', 'Lisa'];
  echo "The third player in the team is " .
    $players[2] . ".<br>";

  $players = array(
    "player1" => "Mark",
    "player2" => "John",
    "player3" => "Georg",
    "player4" => "Lisa"
  );
  echo "The third player in the team is
  $players[player3].<br>";

  $players = [
    "1st_player1" => "Mark",
    "2nd_player2" => "John",
    "3rd_player" => "Georg",
    "4th_player" => "Lisa"
  ];
  echo "The third player in the team is
  {$players["3rd_player"]}.<br>";
  ?>

</body>

</html>