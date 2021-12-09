<?php
$title = 'Class';
require('views/headers/overview/header.php');
?>

<div class='container'>
    <h2 class='title'>Classes</h2>
    <a class='addBtn' href='?class=add'>+ Create class</a>
    <section>
    <table >
        <thead class="tbl-header">
            <tr>
            <th>ID</th>
            <th>ClassName</th>
            <th>Location</th>
            <th>Class Code</th> 
            <th>Actions</th>
            </tr>
        </thead>    
        <tbody class='tbl-content'>
        <?php 
                    foreach ($classes as $key => $value) {
                        row($value, 'class');
                    }
                ?>  
        </tbody>
        </table>
    </section>    
 </div>