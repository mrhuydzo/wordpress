<div class="headlines clearfix">
    <span class="base">30<i>Tue</i></span>
    <div class="text-rotator" >
        <?php
        //$the_query = new WP_Query( 'posts_per_page=5&orderby=date' );

        query_posts('posts_per_page=5&ignore_sticky_posts=true');
        if(have_posts()){
            while(have_posts()){the_post();
                echo '<div><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></div>';
            }
        }
        ?>
    </div>
</div>
 <!-- End Headlines -->

