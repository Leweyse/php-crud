<?php 
 $title = 'Edit Class';
 require('views/headers/overview/header.php');
?>

<div class='container'>
     <h2 class='title'>Edit class</h2>
     <form class='form' method="POST" action="?class">
         <input type="text" name="id" value=<?php echo $data['id'] ?> readonly>
         <input type="text" name='name' placeholder='Class Name' value=<?php echo $data['info']['name']?>>
         <input type="text" name='location' placeholder='Location' value=<?php echo $data['info']['location'] ?>>
         <input type="text" name='c_id' placeholder='101-106'>
         <button name="update">Edit</button>
    </form>
 </div>

</body>
</html>