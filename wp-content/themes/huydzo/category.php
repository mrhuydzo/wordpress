<?php get_header(); ?>
	<div id="main" class="col-md-8 blog-posts image-preloader" role="main">
        <div class="row">
            <div class="breadcrumb clearfix">
                <span class="base">You are here</span>
                <p><a href="index-2.html">Home</a>&nbsp;&nbsp;→&nbsp;&nbsp;Archive Category: <a href="blog_posts.html" title="View articles in Technology">Technology</a></p>
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
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php } ?>
                    <?php thememove_paging_nav(); ?>

                <?php }else{ ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php } ?>
            </div>
        </div>
	</div>
<?php get_footer(); ?>
