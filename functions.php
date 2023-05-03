<?php
include_once 'jdf.php';

function shamsiDate($milady,$re=false){
    $timestamp=strtotime($milady);
    if($re)
        return jdate('j F Y',$timestamp);
    else
        echo jdate('j F Y',$timestamp);
}

function custom_comment_date( $date, $d, $comment ) {
    return shamsiDate(  $comment->comment_date );
}

add_filter( 'get_comment_date', 'custom_comment_date', 10, 3);

function starc_setup() {



    add_theme_support( 'automatic-feed-links' );


    add_theme_support( 'title-tag' );


    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );



    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );


    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    function get_category_post(){
        $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if ( ! empty( $categories ) ) {
            $cat='';

            foreach( $categories as $category ) {

                $cat="<a href='". esc_url( get_category_link( $category->term_id ) )."'"." class='category'>". $category->name."</a>";

            }
            echo $cat;

        }
    }

    function register_my_menus() {
        register_nav_menus(
            array(
                'sidebar-menu' => __( 'sidebar_menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );

}
add_action( 'after_setup_theme', 'starc_setup' );

function get_host($domain=null)
{
    //  return $_SERVER['SERVER_NAME'] ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
    if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) && $host = $_SERVER['HTTP_X_FORWARDED_HOST']) {
        $elements = explode(',', $host);
        $host = trim(end($elements));
    } else {
        if (!isset($_SERVER['HTTP_HOST']) || !$host = $_SERVER['HTTP_HOST']) {
            if (!isset($_SERVER['SERVER_NAME']) || !$host = $_SERVER['SERVER_NAME']) {
                $host = !empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
            }
        }
    }
    $host = preg_replace('/:\d+$/', '', $host);
    if($domain)
        return strtolower($domain) === trim($host);
    return trim($host);
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     *
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function.
     */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav  class='custom-pagination'>";
        echo $paginate_links;
        echo "</nav>";
    }

}

function mw_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        ?>
        <div data-wow-delay="1.3s" data-wow-duration="1s" class="col-lg-12 col-sm-12  wow bounceInUp" id="page-nv" >
            <div>


                <?php
                echo "<i>" . ' صفحه ' .$paged .' از '.$pages.'</i>';
                echo "<div class='pagination cf'>";
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&laquo;</a>";

                if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&lsaquo;</a>";

                for ($i=1; $i <= $pages; $i++)
                {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                    {
                        echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
                    }
                }

                if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&rsaquo;</a>";
                if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&raquo;</a>";

                echo "</div>\n";
                ?>
            </div>
        </div>
        <?php
    }
}

function custom_post_exerpt( $length ) {
    $excerpt= get_the_excerpt();
    echo mb_substr($excerpt, 0, $length) . ' ... ';
}

function hot_posts($per=10){

    $today = getdate();

    $popularpost = new WP_Query(array(
        'posts_per_page' =>-$per,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'date_query'     => array(
                array(
                        'after' => '4 week ago'
                )
        )

    ));

    while ( $popularpost->have_posts() ) : $popularpost->the_post();
        include 'includes/sidebarloop.php';
    endwhile;


}

function dimox_breadcrumbs() {

    $delimiter = '&raquo;';
    $home = 'Home '; // text for the 'Home' link
    $before = '<span>'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    $homeLink = get_bloginfo('url');
    if(is_home()){
        echo '<div id="crumbs">';

        global $post;

        echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter;
    }
    if ( !is_home() && !is_front_page() || is_paged() ) {

        echo '<div id="crumbs">';

        global $post;
        $homeLink = get_bloginfo('url');
        echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . single_cat_title('', false) .  $after;

        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;

        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            echo $before . get_the_time('Y') . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }

        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;

        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;

        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . get_the_title() . $after;

        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;

        } elseif ( is_search() ) {
            echo $before . get_search_query() .  $after;

        } elseif ( is_tag() ) {
            echo $before .  single_tag_title('', false) . $after;

        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo $before .  $userdata->display_name . $after;

        }
        if ( is_404() ) {
            echo $before . 'خطای 404' . $after;
        }

        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo __('صفحه') . ' ' . get_query_var('paged');
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }

        echo '</div>';

    }
}


function dimox_breadcrumbs2() {

    $delimiter = '/';
    $before = '<span>'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    echo "<h1>";

    if(is_home())
    {
        bloginfo('description');
    }
    if ( is_category() ) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0) echo(get_category_parents($parentCat ,  false, ' ' . $delimiter . ' '));
        echo $before . single_cat_title('', false) .  $after;

    }
    elseif ( is_day() ) {
        echo get_the_time('Y')  . get_the_time('Y')  . $delimiter ;
        echo  get_month_link(get_the_time('Y'),get_the_time('m')) . get_the_time('F') . $delimiter ;
        echo $before . get_the_time('d') . $after;

    }
    elseif ( is_month() ) {

        echo  get_the_time('F') .  $delimiter;
        echo  get_the_time('Y')  ;
    }
    elseif ( is_year() ) {
        echo $before . get_the_time('Y') . $after;

    }
    elseif ( is_single() && !is_attachment() ) {
        if ( get_post_type() != 'post' ) {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo  $post_type->labels->singular_name . $delimiter ;
            echo $before . get_the_title() . $after;
        } else {

            echo  get_the_title() ;
        }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID); $cat = $cat[0];
        echo get_category_parents($cat, false, ' ' . $delimiter . ' ');
        echo get_permalink($parent) . $parent->post_title .$delimiter ;
        echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
        echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] =  get_permalink($page->ID) . '">' . get_the_title($page->ID);
            $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
        echo $before . get_search_query() .  $after;

    } elseif ( is_tag() ) {
        echo $before .  single_tag_title('', false) . $after;

    } elseif ( is_author() ) {
        global $author;
        $userdata = get_userdata($author);
        echo $before .  $userdata->display_name . $after;

    }
    if ( is_404() ) {
        echo $before . 'خطای 404' . $after;
    }

    if ( get_query_var('paged') ) {
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
        echo __('صفحه') . ' ' . get_query_var('paged');
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo "</h1>";

    /*  else
      {
          if ( !is_home() && !is_front_page() || is_paged() ) {


              if ( is_category() ) {
                  global $wp_query;
                  $cat_obj = $wp_query->get_queried_object();
                  $thisCat = $cat_obj->term_id;
                  $thisCat = get_category($thisCat);
                  $parentCat = get_category($thisCat->parent);
                  if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
                  echo $before . single_cat_title('', false) .  $after;

              }
              elseif ( is_day() ) {
                  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</p> ' . $delimiter . ' ';
                  echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</p> ' . $delimiter . ' ';
                  echo $before . get_the_time('d') . $after;

              } elseif ( is_month() ) {
                  echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</p> ' . $delimiter . ' ';
                  echo $before . get_the_time('F') . $after;

              } elseif ( is_year() ) {
                  echo $before . get_the_time('Y') . $after;

              } elseif ( is_single() && !is_attachment() ) {
                  if ( get_post_type() != 'post' ) {
                      $post_type = get_post_type_object(get_post_type());
                      $slug = $post_type->rewrite;
                      echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</p> ' . $delimiter . ' ';
                      echo $before . get_the_title() . $after;
                  } else {
                      $cat = get_the_category(); $cat = $cat[0];
                      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                      echo $before . get_the_title() . $after;
                  }

              } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
                  $post_type = get_post_type_object(get_post_type());
                  echo $before . $post_type->labels->singular_name . $after;

              } elseif ( is_attachment() ) {
                  $parent = get_post($post->post_parent);
                  $cat = get_the_category($parent->ID); $cat = $cat[0];
                  echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                  echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</p> ' . $delimiter . ' ';
                  echo $before . get_the_title() . $after;

              } elseif ( is_page() && !$post->post_parent ) {
                  echo $before . get_the_title() . $after;

              } elseif ( is_page() && $post->post_parent ) {
                  $parent_id  = $post->post_parent;
                  $breadcrumbs = array();
                  while ($parent_id) {
                      $page = get_page($parent_id);
                      $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</p>';
                      $parent_id  = $page->post_parent;
                  }
                  $breadcrumbs = array_reverse($breadcrumbs);
                  foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
                  echo $before . get_the_title() . $after;

              } elseif ( is_search() ) {
                  echo $before . get_search_query() .  $after;

              } elseif ( is_tag() ) {
                  echo $before .  single_tag_title('', false) . $after;

              } elseif ( is_author() ) {
                  global $author;
                  $userdata = get_userdata($author);
                  echo $before .  $userdata->display_name . $after;

              } elseif ( is_404() ) {
                  echo $before . 'خطای 404' . $after;
              }

              if ( get_query_var('paged') ) {
                  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
                  echo __('Page') . ' ' . get_query_var('paged');
                  if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
              }

              echo '</div>';

          }

      }*/

}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 ";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
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

add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('View');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

function custom_permalink($post){

//    if($l=get_post_meta($post, 'ex_link'))
//        return $l[0];
//    else
        return esc_url( apply_filters( 'the_permalink', get_permalink( $post ), $post ) );
}

function custom_permalink_target($id){
    if(get_post_meta($id, 'ex_link'))
        return '_blank';
    else
        return '_parent';
}

function redirect($url) {
    header('Status: 301 Moved Permanently', false, 301);
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function wpse121723_register_sidebars() {
    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpse121723_register_sidebars' );

function dynamic_sidebar_customize($index = 1)
{
    global $wp_registered_sidebars, $wp_registered_widgets;

    if (is_int($index)) {
        $index = "sidebar-$index";
    } else {
        $index = sanitize_title($index);
        foreach ((array)$wp_registered_sidebars as $key => $value) {
            if (sanitize_title($value['name']) == $index) {
                $index = $key;
                break;
            }
        }
    }

    $sidebars_widgets = wp_get_sidebars_widgets();
    if (empty($wp_registered_sidebars[$index]) || empty($sidebars_widgets[$index]) || !is_array($sidebars_widgets[$index])) {
        /** This action is documented in wp-includes/widget.php */
        do_action('dynamic_sidebar_before', $index, false);
        /** This action is documented in wp-includes/widget.php */
        do_action('dynamic_sidebar_after', $index, false);
        /** This filter is documented in wp-includes/widget.php */
        return apply_filters('dynamic_sidebar_has_widgets', false, $index);
    }

    /**
     * Fires before widgets are rendered in a dynamic sidebar.
     *
     * Note: The action also fires for empty sidebars, and on both the front end
     * and back end, including the Inactive Widgets sidebar on the Widgets screen.
     *
     * @param int|string $index Index, name, or ID of the dynamic sidebar.
     * @param bool $has_widgets Whether the sidebar is populated with widgets.
     *                                Default true.
     * @since 3.9.0
     *
     */
    do_action('dynamic_sidebar_before', $index, true);
    $sidebar = $wp_registered_sidebars[$index];

    $did_one = false;
    foreach ((array)$sidebars_widgets[$index] as $id) {

        if (!isset($wp_registered_widgets[$id])) {
            continue;
        }

        $params = array_merge(
            array(array_merge($sidebar, array('widget_id' => $id, 'widget_name' => $wp_registered_widgets[$id]['name']))),
            (array)$wp_registered_widgets[$id]['params']
        );

        // Substitute HTML id and class attributes into before_widget
        $classname_ = '';
        foreach ((array)$wp_registered_widgets[$id]['classname'] as $cn) {
            if (is_string($cn)) {
                $classname_ .= '_' . $cn;
            } elseif (is_object($cn)) {
                $classname_ .= '_' . get_class($cn);
            }

        }
        $classname_ = ltrim($classname_, '_');
        $params[0]['before_widget'] = sprintf($params[0]['before_widget'], $id, $classname_);

        $params[0]['before_title'] = sprintf($params[0]['before_title'], $id, $classname_);

        /**
         * Filters the parameters passed to a widget's display callback.
         *
         * Note: The filter is evaluated on both the front end and back end,
         * including for the Inactive Widgets sidebar on the Widgets screen.
         *
         * @param array $params {
         * @type array $args {
         *         An array of widget display arguments.
         *
         * @type string $name Name of the sidebar the widget is assigned to.
         * @type string $id ID of the sidebar the widget is assigned to.
         * @type string $description The sidebar description.
         * @type string $class CSS class applied to the sidebar container.
         * @type string $before_widget HTML markup to prepend to each widget in the sidebar.
         * @type string $after_widget HTML markup to append to each widget in the sidebar.
         * @type string $before_title HTML markup to prepend to the widget title when displayed.
         * @type string $after_title HTML markup to append to the widget title when displayed.
         * @type string $widget_id ID of the widget.
         * @type string $widget_name Name of the widget.
         *     }
         * @type array $widget_args {
         *         An array of multi-widget arguments.
         *
         * @type int $number Number increment used for multiples of the same widget.
         *     }
         * }
         * @see register_sidebar()
         *
         * @since 2.5.0
         *
         */
        $params = apply_filters('dynamic_sidebar_params', $params);

        $callback = $wp_registered_widgets[$id]['callback'];

        /**
         * Fires before a widget's display callback is called.
         *
         * Note: The action fires on both the front end and back end, including
         * for widgets in the Inactive Widgets sidebar on the Widgets screen.
         *
         * The action is not fired for empty sidebars.
         *
         * @param array $widget_id {
         *     An associative array of widget arguments.
         *
         * @type string $name Name of the widget.
         * @type string $id Widget ID.
         * @type array|callable $callback When the hook is fired on the front end, $callback is an array
         *                                       containing the widget object. Fired on the back end, $callback
         *                                       is 'wp_widget_control', see $_callback.
         * @type array $params An associative array of multi-widget arguments.
         * @type string $classname CSS class applied to the widget container.
         * @type string $description The widget description.
         * @type array $_callback When the hook is fired on the back end, $_callback is populated
         *                                       with an array containing the widget object, see $callback.
         * }
         * @since 3.0.0
         *
         */
        do_action('dynamic_sidebar', $wp_registered_widgets[$id]);

        if (is_callable($callback)) {
            call_user_func_array($callback, $params);
            $did_one = true;
        }
    }

    /**
     * Fires after widgets are rendered in a dynamic sidebar.
     *
     * Note: The action also fires for empty sidebars, and on both the front end
     * and back end, including the Inactive Widgets sidebar on the Widgets screen.
     *
     * @param int|string $index Index, name, or ID of the dynamic sidebar.
     * @param bool $has_widgets Whether the sidebar is populated with widgets.
     *                                Default true.
     * @since 3.9.0
     *
     */
    do_action('dynamic_sidebar_after', $index, true);

    /**
     * Filters whether a sidebar has widgets.
     *
     * Note: The filter is also evaluated for empty sidebars, and on both the front end
     * and back end, including the Inactive Widgets sidebar on the Widgets screen.
     *
     * @param bool $did_one Whether at least one widget was rendered in the sidebar.
     *                            Default false.
     * @param int|string $index Index, name, or ID of the dynamic sidebar.
     * @since 3.9.0
     *
     */
    return apply_filters('dynamic_sidebar_has_widgets', $did_one, $index);
}