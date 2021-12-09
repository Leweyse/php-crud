<?php
    require('views/headers/overview/header.php');
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
                <th>Class Code</th>
                <th>Actions</th>
                </tr>
            </thead>
        </div>
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