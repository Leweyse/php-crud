<?php
    $title = 'Overview';

    require('views/headers/overview/header.php');

    $details = ['id' => 1, 'name' => 'Lucas', 'extra' => 'emaglksdjn@aksjdnf.com', 'c_id' => 102];
?>
<section class='detailed_section'>
    <h2 class='title'><?php echo $title ?></h2>
    <article>
        <?php 
            foreach ($details as $key => $value) {
                p($value, $key);
            }
        ?>
    </article>
</section>