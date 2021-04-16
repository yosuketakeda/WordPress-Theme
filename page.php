<?php get_header();?>

<div class="container">
    <h1><?php the_title();?></h1>
    <!----- widget : sidebar // Be sure to change “Name of Widgetized Area” to a name that makes sense for you.----->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
    <?php endif;?>
    <!----------------->
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>