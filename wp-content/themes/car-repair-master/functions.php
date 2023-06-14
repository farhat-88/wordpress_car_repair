<?php 
    function custom_testimonial_post_type() {
        $labels = array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'menu_name' => 'Testimonials',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'not_found_in_trash' => 'No testimonials found in trash',
            'parent_item_colon' => 'Parent Testimonial:',
            'all_items' => 'All Testimonials',
            'archives' => 'Testimonial Archives',
            'insert_into_item' => 'Insert into testimonial',
            'uploaded_to_this_item' => 'Uploaded to this testimonial',
            'filter_items_list' => 'Filter testimonials list',
            'items_list_navigation' => 'Testimonials list navigation',
            'items_list' => 'Testimonials list',
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title', 'editor'),
            'has_archive' => true,
        );

        register_post_type('testimonial', $args);
    }
    add_action('init', 'custom_testimonial_post_type');


    function custom_work_post_type() {
        $labels = array(
            'name' => 'Work Section',
            'singular_name' => 'Work Section',
            'menu_name' => 'Work Section',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Work Section',
            'edit_item' => 'Edit Work Section',
            'new_item' => 'New Work Section',
            'view_item' => 'View Work Section',
            'search_items' => 'Search Work Section',
            'not_found' => 'No Work Section found',
            'not_found_in_trash' => 'No Work Section found in trash',
            'parent_item_colon' => 'Parent Work Section:',
            'all_items' => 'All Work Section',
            'archives' => 'Work Section Archives',
            'insert_into_item' => 'Insert into Work Section',
            'uploaded_to_this_item' => 'Uploaded to this Work Section',
            'filter_items_list' => 'Filter Work Section list',
            'items_list_navigation' => 'Work Section list navigation',
            'items_list' => 'Work Section list',
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor'),
            'has_archive' => true,
        );

        register_post_type('Work Section', $args);
    }
    add_action('init', 'custom_work_post_type');

    add_action( 'after_setup_theme', 'cxc_add_post_thumbnail_supports', 99 );
    function cxc_add_post_thumbnail_supports() {
        add_theme_support( 'post-thumbnails' );
    }
?>
