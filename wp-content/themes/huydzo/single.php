<?php get_header(); ?>
    <div class="row-fluid">
        <div id="main" class="span8 single single-post image-preloader">
            <div class="row-fluid">
                <div class="breadcrumb clearfix">
                    <span class="base">You are here</span>
                    <p><a href="index-2.html">Home</a>&nbsp;&nbsp;→&nbsp;&nbsp;<a href="blog_posts.html" title="View articles in Technology">Technology</a>&nbsp;&nbsp;→&nbsp;&nbsp;Winter Kitchen With Silver Panorama</p>
                </div>

                <!--Kiểm tra xem có dữ liệu chưa-->
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <!--Láy dữ liệu từ file content-->
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
                    <!--Phân trang-->
                    <?php pagination(); ?>
                <?php else :?>
                    <?php get_template_part('content', 'none'); ?>
                <?php endif; ?>
            </div>
        </div>

        <div id="sidebar" class="span4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>