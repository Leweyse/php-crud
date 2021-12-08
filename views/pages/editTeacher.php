<?php 
    require('../editComponents/header.php');
?>

<div class='container'>
     <h2 class='title'>Edit teacher</h2>
     <form class='form' action="">
        <input type="text" name='name' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="selectClass">
            <option value="">Class</option>
        </select>
        <button>Edit</button>
    </form>
 </div>

</body>
</html>