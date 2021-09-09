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

    $SESSİON["favcolor"] = "green";
    $SESSİON["favanimal"] = "cat";

    echo "Session variables are set.";


    ?>




  </body>
</html>
