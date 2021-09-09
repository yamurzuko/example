<?php include 'DatabaseConnect.php'; ?>

<?php

    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $yas = $_POST['yas'];
    $meslek = $_POST['meslek'];

    $insert = "INSERT INTO bilgiler (ad, soyad, email, yas, meslek)
    VALUES('$ad', '$soyad', '$email', '$yas', '$meslek')";

    if (mysqli_query($db,$insert)) {

      echo "Kayit Basarili...";
    }else {

      echo "Kayit Basarisiz.." . $insert . "<br>" . mysqli_error($db) ;
    }

    if ($insert) {
      header("Location:DataRecord.php");
  		exit;
  	} else {
      header("Location:DataRecord.php");
  		exit;
  	}

?>
