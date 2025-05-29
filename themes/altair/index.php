<?php get_header(); ?>
<main>
    <section class="main-header">
        <span><strong>New:</strong> Infinite Canvas <a href="#">&nbsp;Learn more</a></span>
        <h1>Super fast motion <br> for every team</h1>
        <button>Try Altair for free</button>
        <section class="promotions">
            <hr>
            <span><strong>Over 20,000 creative teams use Altair</strong> to create stunning animations online.</span>
            <article class="companies">
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/google.svg'); ?>" alt="Google logo" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/akqa.svg'); ?>" alt="Akqa logo" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/deliveroo.svg'); ?>" alt="Deliveroo logo" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/perplexity.svg'); ?>" alt="Perplexity logo" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/tiktok.svg'); ?>" alt="Tiktok logo" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/webflow.svg'); ?>" alt="Webflow image" srcset="" class="image-animation"></div>
                <div class="image-container"><img src="<?php echo get_theme_file_uri('assets/images/ramp.svg'); ?>" alt="Ramp logo" srcset="" class="image-animation"></div>
            </article>
        </section>
    </section>
    <section class="altair-content__video">
        <article class="altair__video">
            <video autoplay loop src="<?php echo get_theme_file_uri('assets/videos/video-hero-hd-20.mp4'); ?>"></video>
        </article>
    </section>
    <section class="altair-content__tagline">
        <div class="scoll-to-appear">
            <?php
                $text = "Altair makes motion accessible to every designer, enabling creative teams to collaborate on and deliver engaging animations in record time";

                $words = explode(" ", $text);
                foreach ($words as $word) {
                    echo "<div>" . trim($word) . "</div>";
                }
            ?>
        </div>
    </section>
    <?php
    get_footer();
    ?>