<?php 
    require('views/headers/create/header.php');
?>

<div class='container'>
    <h2 class='title'>Create teacher</h2>
    <form class='form' method="POST" action="?teacher">
        <input type="text" name='name' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
            <?php select($classes) ?>
        <button name="add">Submit</button>
    </form>
</div>