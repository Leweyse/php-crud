<?php 
    require('views/headers/edit/header.php');
?>

<div class='container'>
     <h2 class='title'>Edit student</h2>
    <form class='form' action="?student" method='POST'>
        <input type="text" name='studentName' placeholder='Name' value=<?php echo $data['info']['name'] ?>>
        <input type="email" name='email' placeholder='Email' value=<?php echo $data['info']['email'] ?>>
        <select name="student">
            <option value="">Select class</option>
        </select>
        <button>Edit</button>
    </form>
 </div>

</body>
</html>