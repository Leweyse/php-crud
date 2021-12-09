<?php
    require('views/headers/overview/header.php');
?>
<div class='container'>
<h2 class='title'>Students</h2>
<a class='addBtn' href='./createStudent.php'>+ Create student</a>
<section>
<div class="tbl-header">
    <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Class</th>
          <th>Teacher</th>
          <th>Actions</th>
        </tr>
      </thead>
</div>
      <tbody class='tbl-content'>
        <?php 
          $dummyData = array("id"=>"35", "name"=>"bob", "email"=>"bob@gmail.com","class"=>"1A","teacher"=>"N.oetri");
          row($dummyData, '?student');
        ?>         
      </tbody>
    </table>
</section>
    
 </div>
</body>
</html>