<?php include 'DatabaseConnect.php'; ?>

<?php


      $id = $_GET['id'];
      $remove= "DELETE FROM bilgiler WHERE id=$id";
      $removequery = mysqli_query($db, $remove);

      if($id == 1){
            mysqli_query($db,"UPDATE bilgiler  SET id=id-1 WHERE id>1");
        }
        else if($id>1 && $id<$num){
            mysqli_query($db,"UPDATE bilgiler  SET id=id-1 WHERE id>$id");
        }
        else if($id == $num){
            mysqli_query($db,"ALTER TABLE bilgiler AUTO_INCREMENT = $num");
        }
        else{
            echo "ERROR";
        }

        mysqli_query($db,"ALTER TABLE bilgiler AUTO_INCREMENT = $num");


      mysqli_close($db);
      header("Location:DataRecord.php");




?>
