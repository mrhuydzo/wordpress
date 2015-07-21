<?php get_header(); ?>

    <div id="main" class="col-md-8 blog-posts " role="main">
        <div class="search-info">
            <!--S? d?ng query ?? hi?n th? s? k?t qu? tìm ki?m ???c tìm th?y
                    C?ng nh? hi?n th? t? khóa tìm ki?m. T? khóa tìm ki?m c?ng
                    có th? hi?n th? ???c v?i hàm get_search_query()-->
            <?php
                $search_query = new WP_Query( 's='.$s.'&showposts=-1' );
                $search_keyword = wp_specialchars( $s, 1);
                $search_count = $search_query->post_count;
                //var_dump( $search_query );
                printf( __('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'huydzo'), $search_keyword, $search_count );
            ?>
        </div>
        <section id="post clearfix">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'listnews', get_post_format() ); ?>
            <?php endwhile; ?>
                <?php pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </section>
    </div>
    <div id="sidebar" class="col-md-4">
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>