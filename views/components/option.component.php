<?php 
function option($data) {
   echo "<option value=".$data['id'].">";
   echo $data['c_id'];
   echo "</option>";
}