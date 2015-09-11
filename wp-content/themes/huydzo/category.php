<?php get_header(); ?>
	<div id="main" class="col-md-8 blog-posts " role="main">
        <div class="row">
            <div class="breadcrumb clearfix">
                <?php show_bread(); ?>
            </div>
            <div class="post clearfix">
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


                <?php if (have_posts()){ ?>
                    <?php while (have_posts()){ the_post(); ?>
                        <?php get_template_part('listnews', get_post_format()); ?>
                    <?php } ?>
                    <?php pagination(); ?>

                <?php }else{ ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php } ?>

            </div>
        </div>
	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
