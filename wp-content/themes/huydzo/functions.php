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
        register_nav_menu('second-menu',__('Second Menu','huydzo'));

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
            echo '<h1 class="logo pull-left"><a href="'.$urlBase.'" title="'.$urlSitename.'"><img src="'.get_bloginfo('template_url').'/images/logo.png" alt="'.$urlSitename.'" /></a></h1>';
        }else{
            echo '<div class="logo pull-left"><a href="'.$urlBase.'" title="'.$urlSitename.'"><img src="'.get_bloginfo('template_url').'/images/logo.png" alt="'.$urlSitename.'" /></a></div>';
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
            'menu_class'      => 'rs nav-menu pull-left',
            'menu_id'      => 'lstNav'
        );
        wp_nav_menu($menu);
    }
}

/*Thiết lập Menu Top*/
if(!function_exists('huydzo_lstMainNav')){
    function huydzo_lstMainNav($menu){
        $menu = array(
            'theme_location'=> 'second-menu',
            'container'=> 'nav',
            'container_id'=> 'main-navigation',
            'container_class'=> 'clearfix',
            'menu_class'      => 'rs',
            'menu_id'      => 'lstMainNav'
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

/*        $args = array(
                'before'           => '<p>' . __( 'Pages:' ),
                'after'            => '</p>',
                'link_before'      => '',
                'link_after'       => '',
                'next_or_number'   => 'number',
                'separator'        => ' ',
                'nextpagelink'     => __( 'Next page' ),
                'previouspagelink' => __( 'Previous page' ),
                'pagelink'         => '%',
                'echo'             => 1
            );
        wp_link_pages( $args );*/
    }
}

/*Hiển thị Thumbnail*/
if(!function_exists('show_thumbnail')){
    function show_thumbnail($size){
        if(!is_single() && has_post_thumbnail()){
            the_post_thumbnail($size);
        }else{
            echo '<img src="'.get_bloginfo('template_url').'/images/thumb-default.png" alt="" />';
        }
    }
}

/*Remove width/height in thumbnail*/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
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

/**
@ Hàm hiển thị tag của post
@ show_tag()
 **/
if ( ! function_exists( 'show_tag' ) ) {
    function show_tag() {
        if ( has_tag() ) :
            echo '<div class="entry-tag">';
            printf( __('<strong>Tags </strong> %1$s', ''), get_the_tag_list( '', ',' ));
            echo '</div>';
        else:
            echo '<h4>Không có Tags nào</h4>';
        endif;
    }
}

/*Hiển thị Breadcrums*/
if(!function_exists('show_bread')){
    function show_bread(){
        $urlbase = get_bloginfo('url');
        $cat_current = get_the_category();

        //$cat_current[0]->cat_ID;
        // Get the ID of a given category
        $category_id = $cat_current[0]->term_id;

        // Get the URL of this category
        $category_link = get_category_link( $category_id );
        //var_dump($category_id);die;

        if(is_category()){
            echo '<p><a href="'.$urlbase.'"<i class="glyphicon glyphicon-home"></i></a>&nbsp;→&nbsp;<a href="'.$category_link.'" title="'.$cat_current[0]->cat_name.'">'.$cat_current[0]->cat_name.'</a>';
        }elseif(is_single()){
            $title_post = get_the_title();
            echo '<p><a href="'.$urlbase.'"><i class="glyphicon glyphicon-home"></i></a>&nbsp;→&nbsp;<a href="'.$category_link.'" title="'.$cat_current[0]->cat_name.'">'.$cat_current[0]->cat_name.'</a>&nbsp;→&nbsp; '.$title_post.'</p>';
        }
    }
}

/*thememove_paging_nav*/
if ( !function_exists('pagination')){
    function pagination(){
        global $wp_query;
        $big = 99999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'format' => '?paged=%#%',
            'total' => $wp_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'show_all' => false,
            'end_size' => 2,
            'mid_size' => 3,
            'prev_next' => true,
            'prev_text' => 'Prev',
            'next_text' => 'Next',
            'type' => 'list'
        ));
    }
}

/*Sidebar*/
register_sidebar(array(
    'name' => 'My sidebar',
    'id' => 'side-bar',
    'description' => 'Khu vuc sidebar hien thi duoi moi bai viet',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="header"><h4 class="widget-title">',
    'after_title' => '</h4></div>'
));

/*Random Post*/
if(!function_exists('randomPost')){
    function randomPost(){
        $randpost = new WP_Query();
        $randpost->query('showposts=5&orderby=rand&ignore_sticky_posts=true');

        while ($randpost->have_posts()):
            postview_set(get_the_id());
            $randpost->the_post();
            $thumb_default ='';
            if(has_post_thumbnail()){
                add_image_size('size70',70);
                get_the_post_thumbnail('size70');
            }else{
                $thumb_default = '<img src="'.get_bloginfo('template_url').'/images/thumb-default.png" alt="'.get_the_title().'" />';
            }

            $html ='';
            $html .= '<div class="item">';
            $html .= '<figure class="pull-left">';
            $html .= '<a href="'.get_the_permalink().'" alt="'.get_the_title().'" >'.$thumb_default.'</a>';
            $html .= '</figure>';
            $html .= '<div class="pull-right content">';
            $html .= '<h5><a href="'.get_the_permalink().'" alt="'.get_the_title().'" >'.get_the_title().'</a></h5>';
            $html .= '<p class="meta">'.postview_get(get_the_id()).' &nbsp;&nbsp;|&nbsp;&nbsp;49 comments</p>';
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        endwhile;
    }
}

/*Most Views*/
if(!function_exists('mostview')){
// Set post view
    function postview_set($postID) {
        $count_key = 'postview_number';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
// Get post view
    function postview_get($postID){
        $count_key = 'postview_number';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 lượt xem";
        }
        return $count.' lượt xem';
    }
}

//Display Thumbnail in Dashboard
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page' ) );
    function fb_AddThumbColumn($cols) {
        $cols['thumbnail'] = __('Thumbnail');
        return $cols;
    }
    function fb_AddThumbValue($column_name, $post_id) {
        $width = (int) 90;
        $height = (int) 90;
        if ( 'thumbnail' == $column_name ) {
            // thumbnail of WP 2.9
            $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
            // image from gallery
            $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
            if ($thumbnail_id)
                $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
            elseif ($attachments) {
                foreach ( $attachments as $attachment_id => $attachment ) {
                    $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                }
            }
            if ( isset($thumb) && $thumb ) {
                echo $thumb;
            } else {
                echo __('None');
            }
        }
    }

    // for posts
    add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

    // for pages
    add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}

?>


