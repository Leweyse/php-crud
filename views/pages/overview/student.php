<?php
    require('views/headers/overview/header.php');
?>
<div class='container'>
<h2 class='title'>Students</h2>
<a class='addBtn' href='?student=add''>+ Create student</a>
<section>
<div class="tbl-header">
    <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Class</th>
          <th>Actions</th>
        </tr>
      </thead>
</div>
      <tbody class='tbl-content'>
      <?php 
        foreach ($student as $key => $value) {
            row($value, 'student');
        }
      ?>          
      </tbody>
    </table>
</section>
    
 </div>
</body>
</html>