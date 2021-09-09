<?php include 'DatabaseConnect.php'; ?>


<?php

      $result = mysqli_query($db,"SELECT * FROM bilgiler");
      $json_array = array();

      while ($row = mysqli_fetch_assoc($result)) {

        $json_array[] = $row;
      }

      session_start();
      $_SESSION['JSON'] = json_encode($json_array);
      mysqli_close($db);


      if ($json_array) {
        header("Location:DataRecord.php?sonuc=ok");
        exit;
      } else {
        header("Location:DataRecord.php?sonuc=no");
        exit;
      }



?>
