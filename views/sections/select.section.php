<?php 
function select($data) {
    echo "<select name='c_id'>";
    foreach($data as $key => $value) {
        option($value);
    }
    echo "</select>";
}