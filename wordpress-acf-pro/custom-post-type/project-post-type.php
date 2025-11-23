<?php
if (!class_exists('Project_post_type')) {
    class Project_post_type
    {
        function __construct()
        {
            add_action('init', array(&$this, 'project_init'));
            add_action('save_post',array(&$this,'project_meta_box_save'));
        }

        function project_init()
        {
            $project_labels = array(
                'name' => _x('Projects', 'post type general name', 'wordpress-acf-pro'),
                'singular_name' => _x('Project', 'post type singular name', 'wordpress-acf-pro'),
                'menu_name' => _x('Projects', 'admin menu', 'wordpress-acf-pro'),
                'name_admin_bar' => _x('Project', 'add new on admin bar', 'wordpress-acf-pro'),
                'add_new' => _x('Add New', 'project', 'wordpress-acf-pro'),
                'add_new_item' => __('Add New Project', 'wordpress-acf-pro'),
                'new_item' => __('New Project', 'wordpress-acf-pro'),
                'edit_item' => __('Edit Project', 'wordpress-acf-pro'),
                'view_item' => __('View Project', 'wordpress-acf-pro'),
                'all_items' => __('All Projects', 'wordpress-acf-pro'),
                'search_items' => __('Search Projects', 'wordpress-acf-pro'),
                'parent_item_colon' => __('Parent Projects:', 'wordpress-acf-pro'),
                'not_found' => __('No projects found.', 'wordpress-acf-pro'),
                'not_found_in_trash' => __('No projects found in Trash.', 'wordpress-acf-pro')
            );

            $project_args = array(
                'labels' => $project_labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'project'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title', 'editor', 'thumbnail')
            );

            register_post_type('project', $project_args);

            $project_categary_labels = array(
                'name' => __('Projects Categories', 'wordpress-acf-pro'),
                'singular_name' => __('Project Categories', 'wordpress-acf-pro'),
                'menu_name' => __('Projects Categories', 'wordpress-acf-pro'),
                'name_admin_bar' => __('Project Categories', 'wordpress-acf-pro'),
                'add_new' => __('Add New Categories', 'wordpress-acf-pro'),
                'add_new_item' => __('Add New Categorie', 'wordpress-acf-pro'),
                'new_item' => __('New Categories', 'wordpress-acf-pro'),
                'edit_item' => __('Edit Categories', 'wordpress-acf-pro'),
                'view_item' => __('View Categories', 'wordpress-acf-pro'),
                'all_items' => __('All Categories', 'wordpress-acf-pro'),
                'search_items' => __('Search Categories', 'wordpress-acf-pro'),
                'parent_item_colon' => __('Parent Categories:', 'wordpress-acf-pro'),
                'not_found' => __('No Categories found.', 'wordpress-acf-pro'),
                'not_found_in_trash' => __('No Categories found in Trash.', 'wordpress-acf-pro')
            );

            $project_categary_args = array(
                'labels' => $project_categary_labels,
                'hierarchical' => true,
                'public' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'project-categary'),
            );
            register_taxonomy('project-categary', array('project'), $project_categary_args);
        }

        function project_meta_box_save(){
            
        }
    }

    new Project_post_type;
}

