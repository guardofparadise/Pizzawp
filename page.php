<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
    <div class="hero-content">
        <div class="hero-text">

        <h2><?php the_title(); ?></h2>

        </div><!--hero-text-->
    </div><!--hero-content-->
</div>
<div class="main-content container">
    <main class="text-center content-text clear">
    <?php the_content(); ?>    

    </main>
</div><!--hero-->



<?php endwhile; ?>
<?php get_footer(); ?>