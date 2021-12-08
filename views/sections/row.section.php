<?php 
function row($data, $table) {
   echo "<tr>";
      foreach($data as $key => $value) {
         echo "<td name='$key'>" . $value. "</td>";
      }
      echo "<td class='buttons'>";
         echo "<form method='POST' action='?$table=update'>";
         echo "<button type='submit' name='id' value=".$data['id']."><i class='fas fa-edit'></i></button>";
         echo "</form>";
         echo "<form method='POST' action='?$table=delete'>";
         echo "<button type='submit' name='id' value=".$data['id']."><i class='fas fa-trash-alt'></i></button>";
         echo "</form>";
      echo "</td>";
   echo "</tr>";
}