<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="pt-48 pb-20">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
