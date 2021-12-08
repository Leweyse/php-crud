<?php 
    require('../createComponents/header.php');
?>
 <div class='container'>
     <h2 class='title'>create student</h2>
    <form class='form' action="">
        <input type="text" name='name' placeholder='Name'>
        <input type="email" name='email' placeholder='Email'>
        <select name="selectClass">
            <option value="">Select class</option>
        </select>
        <button>Submit</button>
    </form>
 </div>
</body>
</html>