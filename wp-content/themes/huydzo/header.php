<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?> > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <!-- Your Basic Site Informations -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Enews is a news or magazine site template that built with very cool responsive template with clean design, fast load, seo friendly, beauty color and a slew of features." />
    <meta name="keywords" content="Site Template, News, Magazine, Portofolio, HTML, CSS, jQuery, Newsletter, PHP Contact, Subscription, Responsive, Marketing, Clean, SEO" />
    <meta name="author" content="Dots Theme" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Stylesheets -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <noscript><link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/css/no-js.css"></noscript> <!-- If JavaScript Disabled -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="wp-content/themes/huydzo/images/favicon.ico">
    <link rel="apple-touch-icon" href="wp-content/themes/huydzo/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?> >
<div id="top-navigation">
    <div class="cf container">
        <!-- Navigation -->
        <div class="pull-left">
            <?php huydzo_nav('navtop') ?>
        </div>

        <!-- Search Form -->
        <form name="form-search" method="post" action="http://dotstheme.com/demo/premium/enews_responsive_news_template/html/stretched/search.html" class="form-search pull-right">
            <input type="text" name="search" placeholder="Search...." class="input-icon input-icon-search" />
        </form>

        <!-- Social Media -->
        <ul class="social pull-right">
            <li><a href="#" data-placement="bottom" data-original-title="Find us on LinkedIn"><img src="wp-content/themes/huydzo/images/social/infocus/linkedin-logo.png" alt="LinkedIn"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Find us on Flickr"><img src="wp-content/themes/huydzo/images/social/infocus/flickr.png" alt="Flickr"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Like us on Facebook"><img src="wp-content/themes/huydzo/images/social/infocus/facebook-logo.png" alt="Facebook"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on DeviantArt"><img src="wp-content/themes/huydzo/images/social/infocus/deviantart.png" alt="DeviantArt"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on Twitter"><img src="wp-content/themes/huydzo/images/social/infocus/twitter.png" alt="Twitter"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Follow on Stumbleupon"><img src="wp-content/themes/huydzo/images/social/infocus/stumbleupon.png" alt="Stumbleupon"></a></li>
            <li><a href="#" data-placement="bottom" data-original-title="Call us via Skype"><img src="wp-content/themes/huydzo/images/social/infocus/skype.png" alt="Skype"></a></li>
        </ul>

    </div> <!-- End Container -->
</div> <!-- End Top-Navigation -->

<div class="container">
    <header id="header" class="clearfix">
        <!-- Logo -->
        <?php huydzo_logo() ?>

        <!-- Ads -->
        <div class="ads pull-right">
            <img src="wp-content/themes/huydzo/images/ads/480x80.png" alt="Ads" />
        </div>
    </header> <!-- End Header -->

    <!--Main Nav-->
    <?php huydzo_lstMainNav('main-navigation'); ?>


    <!--Featured news-->
    <div id="highlight-posts" class="clearfix">
        <ul class="rs cf ">
            <?php $arr = query_posts('posts_per_page=4&cat=127'); ?>
            <?php if(have_posts()){ ?>
                <?php while (have_posts()){the_post(); ?>
                    <?php /*var_dump($arr[0]);die;*/ $masked='masked-small'?>
                    <?php if ($arr[0]){$masked == 'masked-big'; }?>
                    <li class="masked <?php echo $masked ?>">
                        <a href="single_post.html" title=""><div class="masked-hover"></div></a>
                        <div class="masked-base" style="display: block;"></div>
                        <div class="masked-color masked-violet" style="display: none;"></div>
                        <div class="text">
                            <h2><?php the_title(); ?></h2>
                            <span class="meta">By <?php the_author(); ?> on <?php the_date(); ?></span>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

    <!--headlines-->
    <div class="headlines clearfix">
        <span class="base">30<i>Tue</i></span>
        <div class="text-rotator" style="display: block;"><div><a href="single_post.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's<span class="cursor">_</span></a></div></div>
    </div>

