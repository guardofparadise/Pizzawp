<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
    <div class="hero-content">
        <div class="hero-text">

        <h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
        <?php the_content(); ?>    
        <?php $url =get_page_by_title("About Us"); ?>
        <a class="button secondary" href="<?php  echo get_permalink($url->ID)?>">
            More Info
        </a>
        </div><!--hero-text-->
    </div><!--hero-content-->
</div>
<?php endwhile; ?>
<div class="main-content container">
    <main class="container-grid clear">
        <h2 class="primary-text text-center">Our Specialities</h2>
        <?php $args=array(
            'posts_per_page'=>3,
            'post_type'=>'specialties',
            'category_name'=>'pizzas',
            'orderby'=>'rand'//random specialities displayed
        ); 
        
        $specialities = new WP_Query($args);
        while($specialities->have_posts()): $specialities->the_post();?>
        <div class="speciality columns1-3">
            <div class="speciality-content">
                <?php the_post_thumbnail('speciality-portrait') ?>
                <div class="information">
                    <?php the_title('<h3>','</h3>') ?>
                    <?php the_content(); ?>
                    <p class="price"><?php the_field('price'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button primary">Read More</a>
                </div>
            </div>
        </div>
        
    <?php endwhile; wp_reset_postdata();?>
    </main>



</div><!--hero-->

<section class="ingredients">
    <div class="container">
        <div class="container-grid">
            <?php while(have_posts()):the_post(); ?>
            <div class="columns2-4">
                <h3><?php the_field('ingredients')?></h3>
                <?php the_field('ingridients_text')?>
                <?php $url =get_page_by_title("About Us"); ?>
                <a class="button primary" href="<?php  echo get_permalink($url->ID)?>">
            read more
        </a>
            </div>
            <div class="columns2-4 image">
                <img src="<?php the_field('image') ?>" alt="Fresh Ingredients">
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section><!--ingredients-->

<section class="container clear">
    <h2 class="primary-text text-center">
        Gallery    
    </h2>
    <?php
    $url = get_page_by_title('Gallery');
    echo get_post_gallery($url->ID);
    
    
    ?>
</section><!--gallery-->

<section class="location-reservation clear container">
    <div class="container-grid">
        <div class="columns2-4">
            <div id="map">
          
    
            </div>
        </div>
        <div class="columns2-4" style="width:100%">
        <?php get_template_part( 'templates/reservation', 'form') ?>

        </div>
    </div>
</section><!--location -resevervations-->


<?php get_footer(); ?>