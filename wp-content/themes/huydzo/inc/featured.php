<div id="highlight-posts" class="clearfix">
    <ul class="rs cf ">
        <?php /*$arr = query_posts('posts_per_page=4&cat=127'); */?>
        <?php
            $arr = array(
                'posts_per_page' => '4',
                'cat'=> '13'
            );
            $the_query = new WP_Query($arr);
        ?>
        <?php if($the_query->have_posts()){?>
            <?php
                $masked = '';
                $i = 0;
            ?>
            <?php while ($the_query->have_posts()){$the_query->the_post(); ?>
                <?php
                    if ($i == 0){
                        $masked = 'masked-big';
                        $des = get_the_excerpt();
                        //$size = array(630,473);
                        add_image_size('image', 630);
                    }else{
                        $masked = 'masked-small';
                        $des ='';
                        //$size =  array(509,340);
                        add_image_size('image', 509);
                    }
                    $i++;
                    //add_image_size('first_image', 630, 400, true);
                ?>
                <li class="masked <?php echo $masked; ?>">
                    <a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class=""><?php the_post_thumbnail('image'); ?></a>
                    <div class="text">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <span class="meta">By <?php the_author(); ?> on <?php the_date(); ?></span>
                        <?php echo $des;  ?>
                    </div>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>