<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
$icons = get_stylesheet_directory_uri() . '/assets/icons/';
$post_id = -1;
$thumbnail_id = -1;
$thumbnail = array('', 0, 0, false);
while ( have_posts() ) {
    the_post();
    $this_post = get_post();
    $post_id = $this_post->ID;
    if ( has_post_thumbnail() ) {
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail = wp_get_attachment_image_src( $thumbnail_id, 'full' );
    }
}

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo $icons ?>favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $icons ?>apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $icons ?>apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $icons ?>apple-touch-icon-114x114.png"/>

    <?php
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    wp_head();
    ?>
</head>

<div id="contain">

    <body <?php body_class(); ?>>
    <div id="head">
        <div class="topbar">
        <?php echo quetzaltepec_lang_menu('class="topleft"'); ?>
        <div class="topright"><?php _e('Rights. Justice. Community. El Salvador.','quetzaltepec');?></div>
        </div>
        <div class="clear"></div>
        <div id="navbarmain">
            <?php
            $outp = '';
            if ($thumbnail[1] > 200 && $thumbnail[1] <= 350) {
                //$outp .=   '<ul id="navbar">';
                $outp .= sprintf('<a border="0" href="%s" title="%s">', get_bloginfo('url'), get_bloginfo('name'));
                $outp .= sprintf('<img class="logo1" id="logo2" src="%s" width="%d" height="%d" alt="%s"/></a>',
                    $icons . 'logo2.png', 95, 99, __('Foundation Cristosal Logo', 'quetzaltepec'));

                $outp .= sprintf('<img class="widenav" src="%s" width="%d" height="%d"/>',
                            $thumbnail[0],$thumbnail[1],$thumbnail[2]);
            }
            else {
                $outp .= sprintf('<a border="0" href="%s" title="%s">', get_bloginfo('url'), get_bloginfo('name'));
                $outp .= sprintf('<img class="logo1" src="%s" width="%d" height="%d" alt="%s"/></a>',
                     $icons . 'logo1.png', 300, 89, __('Foundation Cristosal Logo', 'quetzaltepec'));

                //$outp .=   '<ul id="navbar">';
            }
            echo $outp;

            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'header-menu',

            ) ); ?>

<!--                <li id="navbar"><a class="navboxa" id="navbox6" href="donations.html">donate</a></li>
                <li id="navbar"><a class="navboxa" id="navbox5" href="contact.html">contact</a></li>
                <li id="navbar"><a class="navboxa" id="navbox4" href="resources.html">resources</a></li>
                <li id="navbar"><a class="navboxa" id="navbox3" href="programs.html">programs</a></li>
                <li id="navbar"><a class="navboxa" id="navbox2" href="elsalvador.html">el salvador</a></li>
                <li id="navbar"><a class="navboxa" id="navbox1" href="about.html">about us</a></li>
            </ul>  -->
            <div id="clear"></div>
        </div>
    </div>


    <div id="main" class="site-main">
