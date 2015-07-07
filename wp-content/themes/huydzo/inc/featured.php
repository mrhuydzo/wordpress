<div id="highlight-posts" class="clearfix">
    <ul class="rs cf ">
        <?php /*$arr = query_posts('posts_per_page=4&cat=127'); */?>
        <?php
            $arr = array(
                'posts_per_page' => '4',
                'cat'=> '127'
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
                    if ($i === 0){
                        $masked = 'masked-big';
                    }else{
                        $masked = 'masked-small';
                    }
                    $i++;
                ?>
                <li class="masked <?php echo $masked; ?>">

                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>