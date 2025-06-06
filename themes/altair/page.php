<?php

get_header();
echo "<section class=container>";
echo "<h1>" . the_title() . "</h1>";
echo "<article>" . the_content() . "</article>";
echo "</section>";
get_footer();