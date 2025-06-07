<?php

get_header();
echo "<section class=container>";
?>

<h1> <?php the_title(); ?> </h1>

<?php
echo "<article>" . the_content() . "</article>";
echo "</section>";
get_footer();