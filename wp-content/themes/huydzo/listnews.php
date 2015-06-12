<article class="post clearfix <?php post_class();?>" id="<?php the_id();?>">
    <figure>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class=""><?php show_thumbnail('thumbnail'); ?></a>
        <div class="cat-name">
            <span class="base">Technology</span>
        </div>
    </figure>
    <div class="content">
        <?php show_titlepost(); ?>
        <p><?php show_summarypost(); ?></p>
    </div>
    <div class="meta">
        <span class="pull-left">Đăng bởi <a href="author.html"><?php the_author(); ?></a> - 06 Jan 2013 | <a href="single_post.html">15 comments</a></span>
        <span class="pull-right"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >Đọc tiếp...</a></span>
    </div>
</article>