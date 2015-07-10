<?php get_header(); ?>
    <div class="row">
        <div id="main" class="col-md-8 single single-post image-preloader">
            <div class="breadcrumb clearfix">
                <span class="base">You are here</span>
                <?php show_bread(); ?>
            </div>

            <!--Kiểm tra xem có dữ liệu chưa-->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <!--Láy dữ liệu từ file content-->
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('content', get_post_format()); ?>
                <?php // comments_template(); ?>
            <?php endwhile; ?>
                <!--Phân trang-->
                <?php pagination(); ?>
            <?php else :?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
        </div>

        <div id="sidebar" class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>