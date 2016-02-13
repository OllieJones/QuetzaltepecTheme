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
    <img id="homesplash" src="<?php echo $icons?>marquee3.jpg" width="590" height="305" alt="marquee" />
    <p class="text8"><?php _e('This kite-maker receives training through a community business cooperative in La Anemona 6 supported by Foundation Cristosal. Photo by Ryan Hutton ©', 'quetzaltepec');?></p>
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
    <h2><?php _e('Our Partner Communities:','quetzaltepec'); ?></h2>
    <a href="/programs/human-rights-and-community-development/el-carmen/" id="tablem1">
        <img id="buff2" class="left" src="<?php echo $icons?>carmen1.jpg" width="100" height="100" alt="com1" />
        <h3>El Carmen</h3>
        <p class="text2"><?php _e('El Carmen was founded in 1992 by ex-combatants and displaced people who were given land at the signing of the U.N. Peace Accords that ended El Salvador’s 12-year civil war. Twenty-six families live in the isolated community located in the foothills of the Usulutan coffee-producing highlands...','quetzaltepec'); ?></p></a>

    <a href="/programs/human-rights-and-community-development/las-anenomas-2-6/" id="tablem1">
        <img id="buff2" class="left" src="<?php echo $icons?>anenoma1.jpg" width="100" height="100" alt="com3" />
        <h3>Las Anenomas 2 &amp; 6</h3>
        <p class="text2"><?php _e('Some 2 million Salvadorans – one-third of the population – live in substandard housing, many on land that does not belong to them. In La Anemona, Foundation Cristosal is partnering with community leaders to legalize the land on which 189 families have built homes and to create a more stable economic...','quetzaltepec'); ?></p></a>

    <a href="/programs/human-rights-and-community-development/los-calix/" id="tablem1">
        <img id="buff2" class="left" src="<?php echo $icons?>calix1.jpg" width="100" height="100" alt="com4" />
        <h3>Los Calix</h3>
        <p class="text2"><?php _e('Los Calix is home to one of the Anglican-Episcopal Church of El Salvador’s most active congregations, Cristo Rey. The church first started a mission in the community in 2005 after floodwaters from Hurricane Stan devastated the Lempa River delta, where Los Calix...','quetzaltepec'); ?></p></a>

</div>

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>