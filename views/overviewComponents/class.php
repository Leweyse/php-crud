<?php
 require('./header.php');
 require('./displayComponent.php');
?>

<div class='container'>
<h2 class='title'>Classes</h2>
<a class='addBtn' href='../createComponents/class.component.php'>+ Create class</a>
<section>
<div class="tbl-header">
    <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>ClassName</th>
          <th>Location</th>
          <th>Assigned teacher</th>
          <th>Students</th>
          <th>Actions</th>
        </tr>
      </thead>
</div>
      <tbody class='tbl-content'>
      <?php 
        $dummyData = array("id"=>"35", "className"=>"bob", "Location"=>"Lamarr","AssignedTeacher"=>"Bob", "Students"=>"Students");
        displayComp($dummyData);
      ?>  
      </tbody>
    </table>
</section>
    
 </div>
</body>
</html>