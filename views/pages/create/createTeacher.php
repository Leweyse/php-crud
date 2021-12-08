<?php 
    require('views/headers/create/header.php');

    $fakeData = [array("id"=>"35", "name"=>"bob", "email"=>"bob@gmail.com", 'c_id'=>'102'), array("id"=>"11", "name"=>"bob", "email"=>"bob@gmail.com", 'c_id'=>'201'), array("id"=>"12", "name"=>"bob", "email"=>"bob@gmail.com", 'c_id'=>'103')];
?>

<div class='container'>
    <h2 class='title'>Create teacher</h2>
    <form class='form' method="POST">
        <input type="text" name='name' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
            <?php select($fakeData) ?>
        <button>Submit</button>
    </form>
</div>