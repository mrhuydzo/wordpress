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
                    <h2><?php the_title(); ?></h2>
                    <!--Láy dữ liệu từ file content-->
                    <div class="content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        <div class="tags">
                            <strong>Tags:</strong>&nbsp;
                            <a href="blog_posts.html" title="View posts in technology">technology</a>
                            <a href="blog_posts.html" title="View posts in web">web</a>
                            <a href="blog_posts.html" title="View posts in design">design</a>
                            <a href="blog_posts.html" title="View posts in inspiration">inspiration</a>
                            <a href="blog_posts.html" title="View posts in kitchen">kitchen</a>
                            <a href="blog_posts.html" title="View posts in panorama">panorama</a>
                        </div>
                    </div>
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