<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'example';

  $db = new mysqli($servername, $username, $pasword, $dbname);

  if ($db->connect_error) {

    die ("Connect Failed:" . $db->connect_error);
  }else {

#    echo "Connected Successfully";
  }



?>
