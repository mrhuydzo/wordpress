<?php get_header(); ?>
    <div id="homepage" class="row">
        <div id="main" class="col-md-8" role="main">
            <div class="row">
                <?php
                    //get only parents
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'parent' => 0
                    );
                    $Parent_categories = get_categories($args);
                    //var_dump ($Parent_categories );die;
                    //$i = 1;
                    /*echo '<h2>'.$i++.$category->name.'</h2>';*/
                ?>

                <?php foreach($Parent_categories as $category){
                    $cat_id = $category->term_id;
                    query_posts("cat=$cat_id&posts_per_page=1");
                ?>
                    <?php if(have_posts()){ ?>
                        <?php while (have_posts()) { the_post(); ?>
                            <div class="col-md-6 post">
                                <figure>
                                    <a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class=""><?php show_thumbnail('thumbnail'); ?></a>
                                    <div class="cat-name">
                                        <!--<span class="base"><?php /*echo $category->name; */?></span>-->
                                        <a href="<?php echo get_category_link($category->term_id); ?>" title="<?php echo $category->name; ?>" class="base"><?php echo $category->name; ?></a>
                                        <span class="arrow"></span>
                                    </div>
                                </figure>
                                <div class="text">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php
                                                $title = get_the_title();
                                                if(strlen($title) > 48){
                                                    echo $title = mb_substr($title,0,45,'UTF-8')."...";
                                                }else{
                                                    echo $title;
                                                }
                                            ?>
                                        </a>
                                    </h2>
                                    <p>
                                        <?php
                                            $summary = get_the_excerpt();
                                            //var_dump($summary);die;
                                            if(strlen($summary) > 180){
                                                echo $summary = mb_substr($summary,0,170,'UTF-8')."...";
                                            }else{
                                                echo $summary;
                                            }
                                        ?>
                                    </p>
                                    <div class="meta">By <a href=""><?php the_author(); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_date(); ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="sidebar" class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>