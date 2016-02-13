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
$icons = get_stylesheet_directory_uri() . '/assets/icons/';
$images = get_stylesheet_directory_uri() . '/assets/images/';
?>

<?php get_sidebar( 'left' ); ?>

    <!-- main content stuff -->
    <div class="left" id="mid1">

        <?php $breadcrumbed = false ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( !$breadcrumbed && function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<p class="breadcrumbs">','</p>');
                    $breadcrumbed = true;
                } ?>
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2 class=""><a class="post-title" href="<?php the_permalink() ?>"
                                    rel="bookmark"><?php the_title(); ?></a></h2>

                    <div class="text1">
                        <p class="entry-meta">By <?php the_author_posts_link(); ?> in <em><?php the_category(", ") ?></em>.<?php the_date('',' ', '.')?></p>
                        <?php the_content(); ?>
                    </div>
                    <?php edit_post_link( __( 'Edit', 'quetzaltepec' ), '<span class="edit-link">', '</span><div class="clear"></div>' ); ?>
                    <nav class="nav-single">
                        <h3 class="assistive-text"><?php _e( 'Post navigation', 'quetzaltepec' ); ?></h3>
                        <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous item', 'quetzaltepec' ) . '</span> %title' ); ?></span>
                        <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next item', 'quetzaltepec' ) . '</span>' ); ?></span>
                        <div class="clear"></div>
                    </nav><!-- .nav-single -->
                    <?php comments_template( '', true ); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h2 class="center"><?php _e('Not Found','quetzaltepec');?></h2>
            <p class="center"><?php _e("Sorry, but you are looking for something that isn't here.",'quetzaltepec');?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>

<?php get_sidebar( 'right' ); ?>

<?php get_footer(); ?>