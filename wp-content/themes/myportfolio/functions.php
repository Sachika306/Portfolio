<?php

function add_install() {
  wp_enqueue_style('fontOpenSans', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap');
  wp_enqueue_style('fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('resertcss', get_theme_file_uri().'/css/reset.css');
  wp_enqueue_style('stylecss', get_theme_file_uri().'/style.css');
  wp_enqueue_style('responsivecss', get_theme_file_uri().'/css/responsive.css');
  wp_enqueue_style('photoSwipeMaster', get_theme_file_uri().'/PhotoSwipe-master2/dist/photoswipe.css');
  wp_enqueue_style('photoSwipeMasterDefault', get_theme_file_uri().'/PhotoSwipe-master2/dist/default-skin/default-skin.css');
  wp_enqueue_script('photoswipeminjs', get_theme_file_uri().'/PhotoSwipe-master2/dist/photoswipe.min.js', array('jquery'));
  wp_enqueue_script('defaultminjs', get_theme_file_uri().'/PhotoSwipe-master2/dist/photoswipe-ui-default.min.js');
  wp_enqueue_script('mainjs', get_theme_file_uri().'/js/main.js', array('jquery'));
  wp_enqueue_script('photoswipejs', get_theme_file_uri().'/js/photoswipe.js', array('jquery'));
};

function work_posts() {
  register_post_type('work', array(
    'rewrite' => array('slug' => 'works'),
    'public' => true,
    'label' => 'Work',
    'edit_item' => 'Work',
    'supports' => array('title', 'editor', 'thumbnail')
  ));
};

function skill_posts() {
  register_post_type('skill', array(
    'public' => true,
    'label' => 'Skill',
    'edit_item' => 'Skill',
    'supports' => array('title','editor')
  ));
};

function profile_posts() {
  register_post_type('profile', array(
    'public' => true,
    'label' => 'Profile',
    'edit_item' => 'Profile',
    'supports' => array('title','editor')
  ));
};

add_action('wp_enqueue_scripts', 'add_install');
add_action('init', 'work_posts');
add_action('init', 'skill_posts');
add_action('init', 'profile_posts');
add_theme_support('post-thumbnails'); // Thumbnailを使えるようにする
remove_filter('pre_user_description', 'wp_filter_kses');//プロフィールの自己紹介欄でHTMLを適用できるようにする
