<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    table, th ,td {
      border: 1px solid black;
      border-collepse: collapse;
    }
    th, td {
      padding = 5px;
    }
    </style>
  </head>
  <body>

      <table>
        <tr>
          <td>Filter Name</td>
          <td>Filter Id</td>
        </tr>

        <?php

        foreach (filter_list() as $id => $filter) {

          echo "<tr><td>" . $filter ."</td><td>" . filter_id($filter) . "</td></tr>";
        }
        ?>
      </table>




  </body>
</html>
