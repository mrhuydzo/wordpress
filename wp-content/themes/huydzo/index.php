<?php get_header(); ?>
    <div class="row-fluid">
        <div id="main" class="span8 blog-posts image-preloader">
            <?php show_listcat(); ?>
            <!--Kiểm tra xem có dữ liệu chưa-->
            <!--Láy dữ liệu từ file content-->

           <?php /* if(have_posts()) : while(have_posts()) : the_post(); */?>
                <?php /*get_template_part('content', get_post_format()); */?>
            <?php /*endwhile; */?>
                <!--Phân trang-->
                <?php /*pagination(); */?>
            <?php /*else :*/?>
                <?php /*get_template_part('content', 'none'); */?>
            <?php /*endif; */?>


        </div>

        <div id="sidebar" class="span4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>