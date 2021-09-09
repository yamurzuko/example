<?php include 'DatabaseConnect.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kişi Sorgulama</title>

  </head>
  <body style="background-color:LightGray">
      <h1>Kayıt Sayfası</h1>
      <hr>
      <form action="Insert.php" method="POST">
        <input type="text" required="" name="ad" placeholder="Adinizi Giriniz: "> </input>
        <input type="text" required="" name="soyad" placeholder="Soyadınizi Giriniz: "> </input>
        <input type="email" required="" name="email" placeholder="E-mail Giriniz: "> </input>
        <input type="text" required="" name="yas" placeholder="Yasinizi Giriniz: "> </input>
        <input type="text" required="" name="meslek" placeholder="Mesleginizi Giriniz: "> </input>
        <button type="submit" name="insertData"> KAYDET </button>
      </form>
      <hr>
      <table border = 1 style="width: 60%">
        <tr>
          <th>ID</th>
          <th>AD</th>
          <th>SOYAD</th>
          <th>E-MAIL</th>
          <th>YAS</th>
          <th>MESLEK</th>
          <th>İŞLEM</th>
          <th>İŞLEM</th>
          <th>İŞLEM</th>
        </tr>

        <?php
          $AskInformation = $db->query("SELECT * from bilgiler");

          while ($GetInformation = $AskInformation->FETCH_ASSOC()) {
        ?>

        <tr>
          <td><?php echo $GetInformation['id'] ?></td>
          <td><?php echo $GetInformation['ad'] ?></td>
          <td><?php echo $GetInformation['soyad'] ?></td>
          <td><?php echo $GetInformation['email'] ?></td>
          <td><?php echo $GetInformation['yas'] ?></td>
          <td><?php echo $GetInformation['meslek'] ?></td>
          <td align = "center"> <a href="JsonFormat.php?id=<?php echo $GetInformation['id'] ?>">JsonFormat</a></td>
          <td align = "center"> <a href="AllJsonFormat.php">AllJsonFormat</a></td>
          <td align = "center"> <a href="Delete.php?id=<?php echo $GetInformation['id'] ?>">SİL</a></td>
        </tr>

      <?php } ?>

      </table>
      <hr>

      <?php

          if ($_GET['durum'] == 'ok'){
            session_start();
            echo $_SESSION['JSON'];
            echo "<br>";
          }else if ($_GET['durum'] == 'no'){
            echo "İşlem başarısız..";
          }

          if ($_GET['sonuc'] == 'ok'){
            session_start();
            print_r ($_SESSION['JSON']);
          }else if ($_GET['sonuc'] == 'no'){
            echo "İşlem başarısız..";
          }

      ?>

  </body>
</html>
