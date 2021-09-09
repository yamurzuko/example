<!DOCTYPE html>
<?php

  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      if(!isset($_COOKIE[$cookie_name])) {
           echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
           echo "Cookie '" . $cookie_name . "' is set!<br>";
           echo "Value is: " . $_COOKIE[$cookie_name];
      }
    ?>


  </body>
</html>
