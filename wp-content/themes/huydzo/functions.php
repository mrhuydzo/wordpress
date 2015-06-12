<?php
/**
 * Created by PhpStorm.
 * User: mrhuydzo
 * Date: 6/9/2015
 * Time: 1:12 PM
 */

/*
 * @Khai báo hằng giá trị
 *  @THEME_URL = Lấy đường dẫn thư mục THEME
 *  @CORE = Lấy đường dẫn thư mục /core
 * */
define('THEME_URL',get_stylesheet_directory());
define('CORE',THEME_URL."/core");

/*
 * Nhúng file core/init.php
 * */
require_once(CORE."/init.php");

/*
 * @Thiết lập chiều rộng nội dung
 * */
if(!isset($content_width)){
    $content_width = 620;
}

/*
 * Khai báo chức năng trong THEME
 * */
if(!function_exists('huydzo_theme_setup')){
    function huydzo_theme_setup(){
        /* Thiết lập Textdomain */
        $language_folder = THEME_URL.'/languages';
        load_theme_textdomain('huydzo',$language_folder);

        /*Tự động thêm link RSS lên <head> */
        add_theme_support('automatic-feed-links');

        /*Thêm Post Thumbnail*/
        add_theme_support('post-thumbnails');

        /*Thêm Post format*/
        add_theme_support('post-formats',array(
            'image',
            'video',
            'gallery',
            'link',
            'quote',
        ));

        /*Thêm chức năng title-tag để tự thêm <title>*/
        add_theme_support('title-tag');

        /*Thêm custom background*/
        $default_background = array(
            'default-color' => '#fff'
        );
        add_theme_support('custom-background',$default_background);

        /*Thêm menu*/
        register_nav_menu('primary-menu',__('Primary Menu','huydzo'));

        /*Thêm Sidebar*/
        $sidebar = array(
            'name' => __('Main sidebar','huydzo'),
            'id' => 'main-sidebar',
            'description' => __('Default Sidebar'),
            'class' => ('mainSidebar'),
            'before_title' => '<h3 class="headSidebar">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);

        /*Thêm custom-header*/
        /*add_theme_support('custom-header');*/

    }
    add_action('init','huydzo_theme_setup');
}

/*Template Function*/

/*Thiết lập Logo*/
if(!function_exists('huydzo_logo')){
    function huydzo_logo(){
        $urlBase = get_bloginfo('url');
        $urlSitename = get_bloginfo('sitename');
        if (is_home()){
            echo '<h1 class="logo pull-left"><a href="'.$urlBase.'" title="'.$urlSitename.'"><img src="wp-content/themes/huydzo/images/logo.png" alt="'.$urlSitename.'" /></a></h1>';
        }else{
            echo '<div class="logo pull-left"><a href="'.$urlBase.'" title="'.$urlSitename.'"><img src="wp-content/themes/huydzo/images/logo.png" alt="'.$urlSitename.'" /></a></div>';
        }
    };
}

/*Thiết lập Menu*/
if(!function_exists('huydzo_nav')){
    function huydzo_nav($menu){
        $menu = array(
            'theme_location'=> 'primary-menu',
            'container'=> 'nav',
            'container_class'=> $menu,
            'menu_class'      => 'nav-menu pull-left',
            'menu_id'      => 'lstNav'
        );
        wp_nav_menu($menu);
    }
}

/*Tạo phân trang*/
if(!function_exists('pagination')){
    function pagination(){
        if( $GLOBALS['wp_query']->max_num_pages < 2 ){
            return '';
        }?>

        <div class="prevnext-posts clearfix" role="navigation">
            <?php if ( get_previous_post_link() ) : ?>
                <div class="prev"><?php previous_posts_link( __('prev', 'thachpham') ); ?></div>
            <?php endif; ?>

            <?php if ( get_next_post_link() ) : ?>
                <div class=" next"><?php next_posts_link( __('next', 'thachpham') ); ?></div>
            <?php endif; ?>
        </div><?php
    }
}

/*Hiển thị Thumbnail*/
if(!function_exists('show_thumbnail')){
    function show_thumbnail($size){
        if(!is_single() && has_post_thumbnail()){
            the_post_thumbnail($size);
        }else{
            echo '<img src="wp-content/themes/huydzo/images/thumb-default.png" alt="" />';
        }
    }
}
/*Hiển thị tiêu đề Post*/
if(!function_exists('show_titlepost')){
    function show_titlepost(){
        $link_post = get_the_permalink();
        $title_post = get_the_title();

        if(is_single()){
            echo '<h1><a href="'.$link_post.'" title="'.$title_post.'">'.$title_post.'</a></h1>';
        }else{
            echo '<h2><a href="'.$link_post.'" title="'.$title_post.'">'.$title_post.'</a></h2>';
        }
    }
}

/*Hiển thị meta*/
/*if(!function_exists('show_meta')){
    function show_meta(){

    }
}*/

/*Hiển thị meta*/
if(!function_exists('show_summarypost')){
    function show_summarypost(){
        if(!is_single()){
            the_excerpt();
        }else{
            the_content();
        }
    }
}

/*Hiển thị category in home*/
if(!function_exists('show_listcat')){
    function show_listcat(){
        //get only parents
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'parent' => 0
        );
        $Parent_categories = get_categories($args);
        //var_dump ($Parent_categories );die;
        //$html .='<a href="'.get_category_link( $category->term_id ).'">'.$category->category_nicename.'</a>';
        $i = 0;
        foreach($Parent_categories as $category){

            echo '<h2>'.$i++.$category->name.'</h2>';
            $cat_id= $category->term_id;
            query_posts("cat=$cat_id&posts_per_page=3");
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <ul>
                    <li><?php the_title(); ?></li>
                </ul>
            <?php
            endwhile;
            endif;
        }
    }
}

?>
