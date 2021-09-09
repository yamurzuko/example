<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo "Favorite color is " . $_SESSİON["favcolor"] . "<br>";
    echo "Favorite animal is " . $_SESSİON["favanimal" . "."];

    ?>



  </body>
</html>
