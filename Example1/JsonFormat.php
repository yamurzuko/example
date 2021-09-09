<?php include 'DatabaseConnect.php'; ?>


<?php


      $id = $_GET['id'];
      $result = mysqli_query($db,"SELECT * FROM bilgiler WHERE id= $id");
      $json_array = array();

      while ($row = mysqli_fetch_assoc($result)) {

        $json_array[] = $row;
      }
      session_start();
      $_SESSION['JSON'] = json_encode($json_array);
      mysqli_close($db);


      if ($json_array) {
        header("Location:DataRecord.php?durum=ok");
        exit;
      } else {
        header("Location:DataRecord.php?durum=no");
        exit;
      }



?>
