<div class="content">
    <h3>This is : Gallery Post</h3>
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    <div class="tags">
        <?php show_tag(); ?>
    </div>
</div>