<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?> > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <!-- Your Basic Site Informations -->
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Enews is a news or magazine site template that built with very cool responsive template with clean design, fast load, seo friendly, beauty color and a slew of features." />
    <meta name="keywords" content="Site Template, News, Magazine, Portofolio, HTML, CSS, jQuery, Newsletter, PHP Contact, Subscription, Responsive, Marketing, Clean, SEO" />
    <meta name="author" content="Dots Theme" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <noscript><link rel="stylesheet" href="css/no-js.css"></noscript> <!-- If JavaScript Disabled -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body <?php body_class() ?> >

<div id="top-navigation">
    <div class="container">

        <!-- Navigation -->
        <ul class="nav-menu pull-left">
            <li class="active"><a href="index-2.html">Home</a></li>
            <li><a href="#">Features</a>
                <div class="nav-sub-menu">
                    <ul class="container">
                        <li><a href="features_typography.html">Typography</a></li>
                        <li><a href="features_columns.html">Columns</a></li>
                        <li><a href="features_shortcodes.html">Shortcodes</a></li>
                        <li><a href="features_pricing.html">Pricing Table</a></li>
                        <li><a href="features_sitemap.html">Sitemap</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Blog</a>
                <div class="nav-sub-menu">
                    <ul class="container">
                        <li><a href="blog_posts.html">Archives</a></li>
                        <li><a href="blog_photos.html">Photos</a></li>
                        <li><a href="blog_videos.html">Videos</a></li>
                        <li><a href="blog_musics.html">Musics</a></li>
                        <li><a href="blog_reviews.html">Reviews</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Portofolio</a>
                <div class="nav-sub-menu">
                    <ul class="container">
                        <li><a href="portofolio.html">1 Column</a></li>
                        <li><a href="portofolio_2.html">2 Columns</a></li>
                        <li><a href="portofolio_3.html">3 Columns</a></li>
                        <li><a href="portofolio_4.html">4 Columns</a></li>
                        <li><a href="single_portofolio.html">Single Portofolio</a></li>
                        <li><a href="single_portofolio_2.html">Single Portofolio 2</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Pages</a>
                <div class="nav-sub-menu">
                    <ul class="container">
                        <li><a href="author.html">Author</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="index-2.html">Homepage 1</a></li>
                        <li><a href="index_2.html">Homepage 2</a></li>
                        <li><a href="index_3.html">Homepage 3</a></li>
                        <li><a href="index_4.html">Homepage 4</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <!-- Search Form -->
        <form name="form-search" method="post" action="http://dotstheme.com/demo/premium/enews_responsive_news_template/html/stretched/search.html" class="form-search pull-right">
            <input type="text" name="search" placeholder="Search...." class="input-icon input-icon-search" />
        </form>

        <!-- Social Media -->
        <ul class="social pull-right">
            <li><a href="#" data-placement="bottom" data-original-title="Find us on LinkedIn"><img src="images/social/infocus/linkedin-logo.png" alt="LinkedIn"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Find us on Flickr"><img src="images/social/infocus/flickr.png" alt="Flickr"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Like us on Facebook"><img src="images/social/infocus/facebook-logo.png" alt="Facebook"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on DeviantArt"><img src="images/social/infocus/deviantart.png" alt="DeviantArt"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on Twitter"><img src="images/social/infocus/twitter.png" alt="Twitter"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on Stumbleupon"><img src="images/social/infocus/stumbleupon.png" alt="Stumbleupon"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Call us via Skype"><img src="images/social/infocus/skype.png" alt="Skype"></a></li>
        </ul>

    </div> <!-- End Container -->
</div> <!-- End Top-Navigation -->

<div class="container">
    <div class="container">
        <header id="header" class="clearfix">
            <!-- Logo -->
            <?php huydzo_logo() ?>

            <!-- Ads -->
            <div class="ads pull-right">
                <img src="images/ads/480x80.png" alt="Ads" />
            </div>

            <?php huydzo_menu('primary-menu') ?>
        </header> <!-- End Header -->