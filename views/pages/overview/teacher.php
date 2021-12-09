<?php
    $title = 'Teacher';
    require('views/headers/overview/header.php');
  
?>

<div class='container'>
    <h2 class='title'>Teachers</h2>
    <a class='addBtn' href='?teacher=add'>+ Create teacher</a>
    <section>
        <table>
            <thead class="tbl-header">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class Code</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody class='tbl-content'>
                <?php 
                    foreach ($teachers as $key => $value) {
                        row($value, 'teacher');
                    }
                ?>  
            </tbody>
        </table>
    </section>        
</div>