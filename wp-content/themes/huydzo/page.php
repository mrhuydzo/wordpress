<?php get_header(); ?>
    <div id="main" class="col-md-8">
        <div class="row">
            <!--Kiểm tra xem có dữ liệu chưa-->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <!--Láy dữ liệu từ file content-->
                    <h1><?php the_title(); ?></h1>
                    <?php get_template_part('content', get_post_format()); ?>
                    <?php comments_template(); ?>
                <?php endwhile; ?>
            <?php else :?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
        </div>
    </div>

        <?php get_sidebar(); ?>
<?php get_footer(); ?>