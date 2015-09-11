<aside id="sidebar" class="col-md-4">

    <div class="widget clearfix">
        <ul class="rs cf social-subscribers">
            <li>
                <a href="#" data-original-title="Like us on Facebook"><img src="<?php echo get_bloginfo('template_url'); ?>/images/social/somacro/facebook.png" alt="Facebook"></a>
                <p>25,645<i>likes</i></p>
            </li>
            <li>
                <a href="#" data-original-title="Follow us on Twitter"><img src="<?php echo get_bloginfo('template_url'); ?>/images/social/somacro/twitter.png" alt="Twitter"></a>
                <p>8,480<i>followers</i></p>
            </li>
            <li>
                <a href="#" data-original-title="Subscribe our RSS Feed"><img src="<?php echo get_bloginfo('template_url'); ?>/images/social/somacro/rss.png" alt="RSS"></a>
                <p>17,289<i>subscribers</i></p>
            </li>
        </ul>
    </div> <!-- End Widget -->

    <div class="widget clearfix">
        <div class="enews-tab">

            <!-- Tab Menu -->
            <ul class="nav nav-tabs" id="enewsTabs">
                <li class="active"><a href="#tab-populars" data-toggle="tab">Populars</a></li>
                <li><a href="#tab-recents" data-toggle="tab">Recents</a></li>
                <li><a href="#tab-random" data-toggle="tab">Random</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab-populars">

                </div> <!-- End Populars -->

                <div class="tab-pane" id="tab-recents">

                </div> <!-- End Recents -->

                <div class="tab-pane" id="tab-random">
                    <?php randomPost(); ?>

                </div> <!-- End random -->
            </div> <!-- End Tab-Content -->

        </div> <!-- End Enews-Tab -->
    </div> <!-- End Widget -->

    <div class="widget clearfix">
        <?php if ( is_active_sidebar( 'side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'side-bar' ); ?>
        <?php endif; ?>
    </div>
</aside>


