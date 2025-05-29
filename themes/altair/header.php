<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altair Custom Theme</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><a href="<?php echo home_url(); ?>"><strong>Altair</strong>Custom</a></h1>
        <!-- Navigation -->
        <nav class="site-nav">
            <?php

                $args = array(
                    'theme_location' => 'primary'
                );

                wp_nav_menu($args);
            ?>
        </nav>
    </header>