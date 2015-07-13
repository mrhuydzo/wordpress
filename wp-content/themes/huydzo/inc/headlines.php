<div class="headlines clearfix">
    <span class="base">30<i>Tue</i></span>
    <div class="text-rotator" style="display: block;">
        <?php $the_query = new WP_Query( 'posts_per_page=5&ignore_sticky_posts=true' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();//var_dump($the_query);die; ?>
            <div><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?><span class="cursor">_</span></a></div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
