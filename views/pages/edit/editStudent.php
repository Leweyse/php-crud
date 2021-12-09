<?php 
    require('views/headers/edit/header.php');
?>

<div class='container'>
    <h2 class='title'>Edit student</h2>
    <form class='form' action="?student" method='POST'>
        <input type="text" name="id" value=<?php echo $data['id'] ?> readonly>
        <input type="text" name='name' placeholder='Name' value=<?php echo $data['info']['name'] ?>>
        <input type="email" name='email' placeholder='Email' value=<?php echo $data['info']['email'] ?>>
        <?php select($classes) ?>
        <button name="update">Edit</button>
    </form>
 </div>

</body>
</html>