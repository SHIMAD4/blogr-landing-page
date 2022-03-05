<?php 

  add_filter('show_admin_bar', '__return_false');
  add_filter('script_loader_tag', 'scripts_as_es6_modules', 10, 3 );
  
  function scripts_as_es6_modules( $tag, $handle, $src ) {
    if ( 'main-script' === $handle ) {
      return str_replace( 'text/javascript', 'module', $tag );
    }
    return $tag;
  }

  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_print_styles', 'print_emoji_styles');
  
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'wp_resource_hints', 2 );          // remove dns-prefetch
  remove_action('wp_head', 'wp_generator');                   // remove meta name="generator'
  remove_action('wp_head', 'wlwmanifest_link');               // remove wlwmanifest
  remove_action('wp_head', 'rsd_link');                       // remove EditURI
  remove_action('wp_head', 'rest_output_link_wp_head');       // remove 'https://api.w.org/'
  remove_action('wp_head', 'relcanonical');                   // remove canonical
  remove_action('wp_head', 'wp_shortlink_wp_head', 10);       // remove shortlink
  remove_action('wp_head', 'wp_oembed_add_discovery_links');  // remove alternate

  remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
  remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 ); 

  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

  add_action('wp_enqueue_scripts', 'site_scripts');
  function site_scripts() {
    $version = '0.0.0.0';
    $tag = `<script type='text/javascript' src='//localhost:3000/wp-content/themes/blogr_page/assets/js/main.js?ver=0.0.0.0' id='main-script-js'></script>`;
    $handle = 'main-script';
    $src = `//localhost:3000/wp-content/themes/blogr_page/assets/js/main.js?ver=0.0.0.0`;

    wp_dequeue_style( 'wp-block-library' );

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', [], $version);
    
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);
  };

  add_action( 'after_setup_theme', 'crb_load' );
  function crb_load() {
      require_once('C:\OpenServer\domains\blogr.loc\wp-content\themes\blogr_page\includes\carbon-fields\vendor\autoload.php' );
      \Carbon_Fields\Carbon_Fields::boot();
  };

  add_action('carbon_fields_register_fields', 'register_carbon_fields');
  function register_carbon_fields() {
    require_once('C:\OpenServer\domains\blogr.loc\wp-content\themes\blogr_page\includes\carbon-fields-options\theme-options.php' );
  };

  add_action('init', 'create_global_variable');
  function create_global_variable() {
    global $blogr;
    $blogr = [
      'logo' => wp_get_attachment_image_url(carbon_get_theme_option('site_logo')),

      'banner_title' => carbon_get_theme_option('banner_title'),
      'banner_subtitle' => carbon_get_theme_option('banner_subtitle'),
      'banner_btn_one' => carbon_get_theme_option('banner_btn_one'),
      'banner_btn_two' => carbon_get_theme_option('banner_btn_two'),

      'section_one_title' => carbon_get_theme_option('section_one_title'),
      'section_one_1_subtitle' => carbon_get_theme_option('section_one_1_subtitle'),
      'section_one_1_paragraph' => carbon_get_theme_option('section_one_1_paragraph'),
      'section_one_2_subtitle' => carbon_get_theme_option('section_one_2_subtitle'),
      'section_one_2_paragraph' => carbon_get_theme_option('section_one_2_paragraph'),
      'section_one_image' => wp_get_attachment_image_url(carbon_get_theme_option('section_one_image')),
      'section_one_mobile_image' => wp_get_attachment_image_url(carbon_get_theme_option('section_one_mobile_image')),
      
      'section_two_title' => carbon_get_theme_option('section_two_title'),
      'section_two_1_subtitle' => carbon_get_theme_option('section_two_1_subtitle'),
      'section_two_image' => wp_get_attachment_image_url(carbon_get_theme_option('section_two_image')),

      'section_three_1_subtitle' => carbon_get_theme_option('section_three_1_subtitle'),
      'section_three_1_paragraph' => carbon_get_theme_option('section_three_1_paragraph'),
      'section_three_2_subtitle' => carbon_get_theme_option('section_three_2_subtitle'),
      'section_three_2_paragraph' => carbon_get_theme_option('section_three_2_paragraph'),
      'section_three_image' => wp_get_attachment_image_url(carbon_get_theme_option('section_three_image')),
      'section_three_mobile_image' => wp_get_attachment_image_url(carbon_get_theme_option('section_three_mobile_image')),
    ];
  };

?>