<article class="post clearfix <?php post_class();?>" id="<?php the_id();?>">
    <figure>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class=""><?php show_thumbnail('thumbnail'); ?></a>
    </figure>
    <div class="content">
        <?php show_titlepost(); ?>
        <p><?php show_summarypost(); ?></p>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div>
    <div class="meta">
        <span class="pull-left">Đăng bởi <a href="author.html"><?php the_author(); ?></a> - <?php the_date(); ?></span>
        <span class="pull-right"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >Đọc tiếp...</a></span>
    </div>
</article>