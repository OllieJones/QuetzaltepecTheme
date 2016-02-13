<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();
$icons =  get_stylesheet_directory_uri() . '/assets/icons/';
?>

<?php get_sidebar('left'); ?>

<!-- main content stuff -->
<div class="left" id="mid1">

    <center><h3>Join the <a href="http://cristosal.org/wp-content/uploads/2015/12/2016-global-school-catalog.pdf">Global School</a> in 2016!<h3></center>

    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'front-door', 'slug' ); } ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <h2 class=""><a class="post-title" href="<?php the_permalink() ?>"
                                rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="text1">
                    <?php the_content(); ?>
                    <p />
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <h2 class="center"><?php _e('Not Found','quetzaltepec'); ?></h2>
        <p class="center"><?php _e("Sorry, but you are looking for something that isn't here.",'quetzaltepec'); ?></p>
        <?php get_search_form(); ?>
    <?php endif; ?>

</div>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>