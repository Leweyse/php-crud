<?php 
    require('./header.php');
?>
 <div class='container'>
     <h2 class='title'>create student</h2>
    <form class='form' action="">
        <input type="text" name='studentName' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="class">
            <option value="">Select teacher</option>
        </select>
        <select name="teacher">
            <option value="">Select class</option>
        </select>
        <button>Submit</button>
    </form>
 </div>
</body>
</html>