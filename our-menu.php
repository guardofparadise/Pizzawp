<?php
/*
* Template Name: Our Specialties
*/
?>
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
    <main class="text-center content-text">
    <?php the_content(); ?>    

    </main>
</div><!--hero-->



<?php endwhile; ?>

<div class="our-specialities  container">

    <h3 class="primary-text">Pizzas</h3>
    <div class="container-grid">
    <?php 
    $args=array(
        'post_type'=> 'specialties',
        'posts_per_page'=> 10,//-1 all posts bad for performanse
        'orderby'=>'title',
        'order'=>'ASC',
        'category_name'=>'pizzas'

    );
    $pizzas = new WP_Query($args);
    while($pizzas->have_posts()) : $pizzas->the_post(); ?>
    
<div class="columns2-4 speciality-content">
    <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('specialties'); ?>
            <h4><?php  the_title();  ?> <span> <?php the_field('price') ?></span> </h4>
            <?php the_content(); ?>
    </a>
</div>
    
<?php endwhile; wp_reset_postdata();?>
    
    </div>

 <h3 class="primary-text">Others</h3>
 <div class="container-grid">
    <?php 
    $args=array(
        'post_type'=> 'specialties',
        'posts_per_page'=> 10,//-1 all posts bad for performanse
        'orderby'=>'title',
        'order'=>'ASC',
        'category_name'=>'others'

    );
    $pizzas = new WP_Query($args);
    while($pizzas->have_posts()) : $pizzas->the_post(); ?>
    
<div class="columns2-4 speciality-content">
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('specialties'); ?>
<h4><?php  the_title();  ?> <span> <?php the_field('price') ?></span> </h4>
<?php the_content(); ?>
</a>
</div>
    
<?php endwhile; wp_reset_postdata();
    ?>
    </div>

</div><!-- our-specialities container --> 


<?php get_footer(); ?>


?>