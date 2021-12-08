<?php 
    require('views/createComponents/header.php');
?>
 <div class='container'>
     <h2 class='title'>Create teacher</h2>
    <form class='form' action="">
        <input type="text" name='teacherName' placeholder='Name'>
        <input type="email" name='teacherEmail' placeholder='Email'>
        <select name="class">
            <option value="">Class</option>
        </select>
        <button>Submit</button>
    </form>
 </div>
</body>
</html>