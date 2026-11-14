<?php
/*
Template Name: Полная ширина
*/
get_header();
the_post();
?>
<main>
    <div class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
