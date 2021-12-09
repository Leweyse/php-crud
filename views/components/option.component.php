<?php 
function option($data) {
   echo "<option value=".$data['c_id'].">";
   echo $data['c_id'];
   echo "</option>";
}