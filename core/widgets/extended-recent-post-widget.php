<?php
/*
Plugin Name: Ank Recent Posts Extended Widget
Plugin URI: http://ank91.github.io/
Description: Show Recent Posts list with Featured Image and Post Time from selected categories and lots of other options.
Version: 1.4
Author: Ankur Kumar
Author URI: http://ank91.github.io/
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
?>
<?php
/* no direct access */
if (!defined('ABSPATH')) exit;

    add_action( 'widgets_init', 'Ank_RPE_Widget_Init');
    function Ank_RPE_Widget_Init(){
        register_widget( "Ank_Recent_Posts_Extended_Widget" );
    }

//CUSTOM RECENT POSTS  extended

class Ank_Recent_Posts_Extended_Widget extends WP_Widget
{
    //using trimmed version of widget
    function __construct()
    {
        $widget_ops = array('classname' => 'widget-rpew', 'description' => 'Extended Post List with images');
        $control_ops = array('width' => 200, 'height' => 250);
        parent::__construct('ank_recent_post_extended_widget', 'AK: Extended Recent Post List', $widget_ops, $control_ops);

    }


    function  widget($args, $instance)
    {
        ob_start();

        extract($args);
        extract($instance);
        $title = (!empty($instance['title'])) ? $instance['title'] : '';
        $count = empty($instance['post_count']) ? 5 : absint($instance['post_count']);
        $post_types = (is_array($instance['post_types'])) ? $instance['post_types'] : array('post');
        $include_sticky = ($instance['sticky_on'] == 'on') ? false : true;
        $order_by = (empty($instance['order_by'])) ? 'date' : $instance['order_by'] . ' ID';; //adding a fallback
        $order = ($instance['order'] != '0') ? 'DESC' : 'ASC';
        //prepare query arguments


        $query_args = array(
            'no_found_rows' => true,
            'post_type' => $post_types,
            'posts_per_page' => $count,
            'post_status' => 'publish',
            'ignore_sticky_posts' => $include_sticky,
            'orderby' => $order_by,
            'order' => $order,
            'date_query' => array(
                array(
                    'after' => $instance['posts_time'],
                ),
            )
        );

        //execute query
        $my_query = new WP_Query($query_args);
        if ($my_query->have_posts()) {
            echo $args['before_widget'];
            if ($title):
                echo $args['before_title'] . $title . $args['after_title'];
            endif;
            echo "<ul class='rpew-list " . esc_attr($instance['ul_class']) . "'>";
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="clearfix">
                    <?php if (has_post_thumbnail() && $instance['img_on']) { ?>
                    <a rel="bookmark" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> <?php echo get_the_post_thumbnail(get_the_ID(), array(150, 150), array('class' => 'rpew-img')); ?> </a><?php } ?>
                    <a class="rpew-title" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <?php
                    if ($instance['time_on']):
                        printf('<span class="rpew-time">%1$s</span>', get_the_date());
                    endif;
                    if ($instance['cat_on']):
                        $categories_list = get_the_category_list($separator = ', ', $post_id = get_the_ID());
                        if ($categories_list) printf('<span class="rpew-cat">in %1$s</span>', $categories_list);
                       endif;
                    ?>
                </li>
            <?php
            endwhile;
            echo "</ul>";
            echo $args['after_widget'];
            wp_reset_postdata();
        }
        wp_reset_query();
        //strip white space
        echo preg_replace('/(\s)+/s', '\\1', ob_get_clean());
    }


    function  update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['post_types'] = $new_instance['post_types']; //array
        $instance['order'] = sanitize_text_field($new_instance['order']);
        $instance['order_by'] = sanitize_text_field($new_instance['order_by']);
        $instance['posts_time'] = sanitize_text_field($new_instance['posts_time']);
        $instance['img_on'] = isset($new_instance['img_on']);
        $instance['time_on'] = isset($new_instance['time_on']);
        $instance['cat_on'] = isset($new_instance['cat_on']);
        $instance['sticky_on'] = isset($new_instance['sticky_on']);
        $instance['ul_class'] = sanitize_html_class($new_instance['ul_class']);
        $instance['post_count'] = intval(sanitize_text_field($new_instance['post_count']));

        return $instance;

    }

    function form($config)
    {
        ob_start();
        $config = wp_parse_args(( array )$config, array('title' => 'Recent Posts', 'post_count' => 5, 'time_on' => 1, 'img_on' => 1, 'cat_on' => 1, 'sticky_on' => 0, 'order_by' => 'date', 'order' => '1', 'ul_class' => '', 'posts_time' => '0', 'post_types' => array('post')));
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title:</label>
            <input placeholder="Recent Posts" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" type="text" value="<?php echo esc_attr($config['title']) ?>" name="<?php echo $this->get_field_name('title'); ?>">
        </p>
        <p><label><b>Post Types:</b> (default:Posts)</label>
        <ul>
            <?php
            foreach (get_post_types(array('public' => true), 'objects') as $type) {
                echo "<li>" . '<label><input value="' . esc_attr($type->name) . '" type="checkbox" name="' . $this->get_field_name('post_types') . '[]"' . checked(in_array($type->name, (array)$config['post_types']), true, false) . ' /> ' . esc_html($type->labels->name) . "</label></li>\n";
            }
            ?></ul>
        </p>
        <hr>
        <p><label for="<?php echo $this->get_field_id('order'); ?>">Order:</label>
            <select name="<?php echo $this->get_field_name('order'); ?>" id="<?php echo $this->get_field_id('order'); ?>">
                <option value="1" <?php selected($config['order'], '1'); ?>>Descending (default)</option>
                <option value="0" <?php selected($config['order'], '0'); ?>>Ascending</option>
            </select>
        </p>
        <p><label for="<?php echo $this->get_field_id('order_by'); ?>">Order by:</label>
            <select name="<?php echo $this->get_field_name('order_by'); ?>" id="<?php echo $this->get_field_id('order_by'); ?>">
                <option value="none" <?php selected($config['order_by'], 'none'); ?>>None (No Order)</option>
                <option value="title" <?php selected($config['order_by'], 'title'); ?>>Post Title</option>
                <option value="date" <?php selected($config['order_by'], 'date'); ?>>Post Date (default)</option>
                <option value="modified" <?php selected($config['order_by'], 'modified'); ?>>Date Modified</option>
                <option value="rand" <?php selected($config['order_by'], 'rand'); ?>>Random Posts</option>
                <option value="comment_count" <?php selected($config['order_by'], 'comment_count'); ?>>Popular (Most Commented)</option>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id("posts_time"); ?>">Posts from:</label>
            <select id="<?php echo $this->get_field_id("posts_time"); ?>" name="<?php echo $this->get_field_name("posts_time"); ?>">
                <option value="0"<?php selected($config["posts_time"], "0"); ?>>All time</option>
                <option value="1 year ago"<?php selected($config["posts_time"], "1 year ago"); ?>>This year</option>
                <option value="1 month ago"<?php selected($config["posts_time"], "1 month ago"); ?>>This month</option>
                <option value="1 week ago"<?php selected($config["posts_time"], "1 week ago"); ?>>This week</option>
                <option value="1 day ago"<?php selected($config["posts_time"], "1 day ago"); ?>>Past 24 hours</option>
            </select>
        </p>
        <p><label for="<?php echo $this->get_field_id('img_on'); ?>">Show Featured Image:</label>
            <input id="<?php echo $this->get_field_id('img_on'); ?>" type="checkbox"  <?php checked($config['img_on'], true, true); ?> name="<?php echo $this->get_field_name('img_on'); ?>">
        </p>
        <p><label for="<?php echo $this->get_field_id('time_on'); ?>">Show Post Time:</label>
            <input id="<?php echo $this->get_field_id('time_on'); ?>" type="checkbox"  <?php checked($config['time_on'], true, true); ?> name="<?php echo $this->get_field_name('time_on'); ?>">
        </p>
        <p><label for="<?php echo $this->get_field_id('cat_on'); ?>">Show Categories:</label>
            <input id="<?php echo $this->get_field_id('cat_on'); ?>" type="checkbox"  <?php echo checked($config['cat_on'], true, true); ?> name="<?php echo $this->get_field_name('cat_on'); ?>">
        </p>
        <p><label for="<?php echo $this->get_field_id('sticky_on'); ?>">Include Sticky Posts:</label>
            <input id="<?php echo $this->get_field_id('sticky_on'); ?>" type="checkbox"  <?php checked($config['sticky_on'], true, true); ?> name="<?php echo $this->get_field_name('sticky_on'); ?>">
        </p>
        <p><label for="<?php echo $this->get_field_id('ul_class'); ?>">Add this class to &lt;ul&gt;:</label>
            <input placeholder="rpew-ul" size="10" id="<?php echo $this->get_field_id('ul_class'); ?>" type="text" value="<?php echo esc_attr($config['ul_class']) ?>" name="<?php echo $this->get_field_name('ul_class'); ?>">
        </p>
        <p><label for="<?php echo $this->get_field_id('post_count'); ?>">Number of posts to show:</label>
            <input size="3" placeholder="5" id="<?php echo $this->get_field_id('post_count'); ?>" type="text" value="<?php echo esc_attr($config['post_count']) ?>" name="<?php echo $this->get_field_name('post_count'); ?>">
        </p>
        <?php
        //strip white space
        echo preg_replace('/(\s)+/s', '\\1', ob_get_clean());
    }
}

/**************************************************************************************/






