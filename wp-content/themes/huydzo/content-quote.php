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