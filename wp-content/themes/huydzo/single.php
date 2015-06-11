<?php get_header(); ?>
    <div class="row-fluid">
        <div id="main" class="span8 blog-posts image-preloader">
            <!--Kiểm tra xem có dữ liệu chưa-->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <!--Láy dữ liệu từ file content-->
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
                <!--Phân trang-->
                <?php pagination(); ?>
            <?php else :?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
        </div>

        <div id="sidebar" class="span4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>