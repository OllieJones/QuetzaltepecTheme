<?php $icons =  get_stylesheet_directory_uri() . '/assets/icons/';?>

<div class="left" id="right1">

    <aside class="sidebar">
        <?php if ( is_active_sidebar( 'sidebar-righttop' ) ) : ?>
            <div class="sidebar-right">
                <?php dynamic_sidebar( 'sidebar-righttop' ); ?>
            </div>
        <?php endif; ?>
    </aside>

      <?php wp_nav_menu( array(
        'theme_location' => 'right-menu',
        'container' => 'nav',
        'container_class' => 'right-menu',

    ) ); ?>

    <table class="left" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td class="rtext2" colspan="2">
                <a id="social" href="https://twitter.com/Cristosal"><img id="social" src="<?php echo $icons?>twitter4.png" width="28" height="28" alt="twitter" />Follow</a>
                <a id="social" href="http://vimeo.com/foundationcristosal"><img id="social" src="<?php echo $icons?>vimeo1.png" width="28" height="28" />Watch</a>
            </td>
        </tr>
    </table>
    <div id="clear"></div>

    <aside class="sidebar">
        <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
            <div class="sidebar-right">
                <?php dynamic_sidebar( 'sidebar-right' ); ?>
            </div>
        <?php endif; ?>
    </aside>
</div>
