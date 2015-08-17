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
        <div class="sponsors">

            <div class="header">
                <h4>Sponsors</h4>
            </div>

            <div class="content">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/ads/180x180.png" alt="Sponsor 1">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/ads/180x180.png" alt="Sponsor 2">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/ads/180x180.png" alt="Sponsor 3">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/ads/180x180.png" alt="Sponsor 4">
            </div>

        </div>
    </div> <!-- End Widget -->

    <div class="widget clearfix">
        <div class="best-picture">

            <div class="header">
                <h4>Best Picture</h4>
            </div>

            <div class="content">
                <p><a href="single_photo.html" title="View permalink House in The Woods">Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci [..]</a></p>

                <!-- Photo Galleries -->
                <figure class="flexslider">
                    <ul class="slides">
                        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;"><img src="<?php echo get_bloginfo('template_url'); ?>/images/content/full/4.jpg" alt="Thumbnail 1"></li>
                        <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="<?php echo get_bloginfo('template_url'); ?>/images/content/full/9.jpg" alt="Thumbnail 2"></li>
                        <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="<?php echo get_bloginfo('template_url'); ?>/images/content/full/2.jpg" alt="Thumbnail 3"></li>
                    </ul>
                    <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></figure>

                <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 7, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_video.html">15 comments</a></div>
            </div>

        </div>
    </div> <!-- End Widget -->

    <div class="widget clearfix">
        <div class="subscribe-form">

            <div class="header">
                <h4>Subscribe Us</h4>
            </div>

            <div class="content">
                <p>You can stay up-to-date with our latest news with subscribe our newsletter.</p>
                <form name="subscribe-form" id="enews-subscribe-form" method="post" action="#">
                    <input type="text" name="email_address" placeholder="ex: your_email@domain.com">
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>

        </div>
    </div> <!-- End Widget -->

    <div class="widget clearfix">
        <?php if ( is_active_sidebar( 'side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'side-bar' ); ?>
        <?php endif; ?>
    </div>
</aside>


