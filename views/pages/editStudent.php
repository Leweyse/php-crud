<?php 
    require('../editComponents/header.php');
?>

<div class='container'>
     <h2 class='title'>Edit student</h2>
    <form class='form' action="">
        <input type="text" name='studentName' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="teacher">
            <option value="">Select class</option>
        </select>
        <button>Edit</button>
    </form>
 </div>

</body>
</html>