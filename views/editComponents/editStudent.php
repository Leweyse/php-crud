<?php 
    require('./header.php');
?>

<div class='container'>
     <h2 class='title'>Edit student</h2>
    <form class='form' action="">
        <input type="text" name='name' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="selectStudent">
            <option value="">Select teacher</option>
        </select>
        <select name="selectTeacher">
            <option value="">Select class</option>
        </select>
        <button>Edit</button>
    </form>
 </div>

</body>
</html>