<?php
 require('views/overViewComponents/header.php');
 require('views/overViewComponents/displayComponent.php');
 
?>
<div class='container'>
<h2 class='title'>Teachers</h2>
<a class='addBtn' href='?teacher=add'>+ Create teacher</a>
<section>
<div class="tbl-header">
    <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Students</th>
          <th>Actions</th>
        </tr>
      </thead>
</div>
      <tbody class='tbl-content'>
        <?php 
          $dummyData = array("id"=>"35", "name"=>"bob", "email"=>"bob@gmail.com", 'students'=>'students');
          displayComp($dummyData);
        ?>  
      </tbody>
    </table>
</section>
    
 </div>
</body>
</html>