<?php get_header(); ?>






<section id="slider">
	<img src="<?php bloginfo('template_directory');?>/images/slider.png" class="img-responsive slider">
</section>

<div class="cl"></div>

<section id="services" class="col-md-12 service-text">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>




</section>
<div class="cl"></div>


</section><!-- end wrap -->




<?php get_footer(); ?>