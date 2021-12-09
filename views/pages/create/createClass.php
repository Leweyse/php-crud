<?php 
 $title = 'Create Class';
require('views/headers/create/header.php');
?>
<div class='container'>
    <h2 class='title' >Create Class</h2>
    <form class='form' method= "POST" action="?class">
        <input type="text" name='name' placeholder='Class Name'>
        <input type="text" name='location' placeholder='Location'>
        <input type="text" name='c_id' placeholder='ClassNumber'>
        <button name = "add">Submit</button>
    </form>
</div>