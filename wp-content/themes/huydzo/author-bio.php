<?php
/**
 * Created by PhpStorm.
 * User: mrhuydzo
 * Date: 6/9/2015
 * Time: 1:25 PM
 */
?>

<div class="post-author clearfix">
    <h4>About The Author</h4>
    <figure>
        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
    </figure>
    <div class="content">
        <h5><?php printf('Written by:  <a href="%1$s" title="%2$s">%2$s</a>',get_author_posts_url( get_the_author_meta('ID') ),get_the_author() ); ?></h5>
        <p><?php echo get_the_author_meta( 'description' ); ?></p>
    </div>
</div>
