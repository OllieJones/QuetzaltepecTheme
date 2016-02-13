
<div class="left" id="left1">
    <?php wp_nav_menu( array(
        'theme_location' => 'left-menu',
        'container' => 'nav',
        'container_class' => 'left-menu',

        ) ); ?>

    <aside class="sidebar">
        <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
            <div class="sidebar-left">
                <?php dynamic_sidebar( 'sidebar-left' ); ?>
            </div>
        <?php endif; ?>
    </aside>

    <!---  the former menu

<ul id="lnav1">
<li id="lnav1"><a id="lnav4" href="index.html">Foundation Cristosal</a></li>
<li id="lnav2"><a id="lnav1" href="about.html">About Us</a></li>
<li id="lnav3"><a id="lnav2" href="approach.html">Our Approach</a></li>
<li id="lnav3"><a id="lnav2" href="staff.html">Staff</a></li>
<li id="lnav3"><a id="lnav2" href="board.html">Board of Directors</a></li>
<li id="lnav3"><a id="lnav2" href="base.html">Base Communities</a></li>
<li id="lnav5"></li>
<li id="lnav2"><a id="lnav1" href="elsalvador.html">El Salvador</a></li>
<li id="lnav3"><a id="lnav2" href="history.html">History</a></li>
<li id="lnav3"><a id="lnav2" href="social.html">Social Exclusion</a></li>
<li id="lnav3"><a id="lnav2" href="conflict.html">Conflict</a></li>
<li id="lnav3"><a id="lnav2" href="environment.html">Environment</a></li>
<li id="lnav3"><a id="lnav2" href="romero.html">Oscar Romero</a></li>
<li id="lnav5"></li>
<li id="lnav2"><a id="lnav1" href="programs.html">Programs</a></li>
<li id="lnav3"><a id="lnav2" href="community.html">Human Rights &amp; Community Development</a></li>
<li id="lnav4"><a id="lnav2" href="elcarmen.html">+El Carmen</a></li>
<li id="lnav4"><a id="lnav2" href="laanenoma.html">+La Anenomas 2 &amp; 6</a></li>
<li id="lnav4"><a id="lnav2" href="loscalix.html">+Los Calix</a></li>
<li id="lnav3"><a id="lnav2" href="globalschool.html">Global School</a></li>
<li id="lnav3"><a id="lnav2" href="accompanient.html">Accompaniment Grant</a></li>
<li id="lnav4"><a id="lnav2" href="iaes.html">+IAES</a></li>
<li id="lnav5"></li>
<li id="lnav2"><a id="lnav1" href="resources.html">Resources</a></li>
<li id="lnav3"><a id="lnav2" href="reading.html">Reading</a></li>
<li id="lnav3"><a id="lnav2" href="newsletter.html">Newsletter</a></li>
<li id="lnav3"><a id="lnav2" href="http://cristosalblog.wordpress.com/"target="_blank">Blog</a></li>
<li id="lnav3"><a id="lnav2" href="news.html">News</a></li>
<li id="lnav3"><a id="lnav2" href="promotional.html">Promotional Materials</a></li>
<li id="lnav5"></li>
<li id="lnav2"><a id="lnav1" href="contact.html">Contact</a></li>
<li id="lnav5"></li>
<li id="lnav2"><a id="lnav1" href="donations.html">Donate</a></li>
</ul>
-->

</div>

