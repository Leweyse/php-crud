<?php 
    require('views/headers/overview/header.php');
?>

<div class='container'>
     <h2 class='title'>Edit teacher</h2>
     <form class='form' method="POST" action="?teacher">
        <input type="text" name="id" value=<?php echo $data['id'] ?> readonly>
        <input type="text" name='name' placeholder='Name' value=<?php echo $data['info']['name'] ?>>
        <input type="email" name='email' placeholder='Email' value=<?php echo $data['info']['email'] ?>>
        <?php select($classes) ?>
        <button name="update">Edit</button>
    </form>
 </div>