<?php 
function displayComp($data) {
    
      echo "<tr>";
      foreach($data as $key => $value) {
        echo "<td>" . $value. "</td>";
      }
      echo "<td><a href='../editComponents/editStudent.php'><i class='fas fa-edit'></i></a> <i class='fas fa-trash-alt'></i></td>";
      echo "</tr>";
}