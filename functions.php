<?php

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
	});
	
	add_filter('template_include', function($template) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});
	
	return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats', array( 'front-page-plate', 'gallery' ) );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_menu' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}
	
	function register_menu() {
  		register_nav_menu('primary-menu',__( 'Primary Menu' ));
	}

	function register_post_types() {
		//this is where you can register custom post types
		if( function_exists('acf_add_local_field_group') ) {

			acf_add_local_field_group(array(
				'key' => 'group_59fa194907f5c',
				'title' => 'Author Bio',
				'fields' => array(
					array(
						'key' => 'field_59fa194c7da5c',
						'label' => 'Bio',
						'name' => 'bio',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_59fa19a5f7427',
						'label' => 'Picture',
						'name' => 'bio_picture',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'user_form',
							'operator' => '==',
							'value' => 'edit',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

			acf_add_local_field_group(array(
				'key' => 'group_5adfc6cde1b19',
				'title' => 'Cuisine Subpages',
				'fields' => array(
					array(
						'key' => 'field_5adfc6eca47bd',
						'label' => '',
						'name' => '',
						'type' => 'message',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'message' => '<h3>Recipes should be entered as a new post <a href="edit.php?post_type=post">here</a> not in the box below. Text entered here will appear above the recipes list.</h3>',
						'new_lines' => '',
						'esc_html' => 0,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'template-cuisine-subpage.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

			acf_add_local_field_group(array(
				'key' => 'group_59f9e9c53ca16',
				'title' => 'Page Options',
				'fields' => array(
					array(
						'key' => 'field_59f9e9d8ba16a',
						'label' => 'Landscape Image',
						'name' => 'landscape_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_59f9e9f0ba16b',
						'label' => 'Food Image',
						'name' => 'food_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_5a09c895abc1a',
						'label' => 'Food Image Size',
						'name' => 'food_image_size',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 200,
						'placeholder' => '',
						'prepend' => '',
						'append' => 'px',
						'min' => 100,
						'max' => '',
						'step' => 1,
					),
					array(
						'key' => 'field_5a0b2e6d91630',
						'label' => 'Author',
						'name' => 'author2',
						'type' => 'user',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'role' => array(
							0 => 'editor',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'array',
					),
					array(
						'key' => 'field_5a0b72cf5d2ab',
						'label' => 'Signature Dishes',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => '',
									'operator' => '==',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_5a0b7229bc62b',
						'label' => 'Signature Dishes Text',
						'name' => 'signature_dishes_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a0b732c2feaf',
						'label' => 'Signature Dishes Button Text',
						'name' => 'signature_dishes_button_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Learn More',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a0b730595dec',
						'label' => 'Ingredients',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => '',
									'operator' => '==',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_5a0b7286cd3c3',
						'label' => 'Ingredients Text',
						'name' => 'ingredients_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a0b733f2feb0',
						'label' => 'Ingredients Button Text',
						'name' => 'ingredients_button_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Learn More',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a0b730195deb',
						'label' => 'Where to get it?',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => '',
									'operator' => '==',
								),
							),
						),
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_5a0b7269cd3c2',
						'label' => '"Where to get it?" Text',
						'name' => 'where_to_get_it_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5a0b73422feb1',
						'label' => '"Where to get it?" Button Text',
						'name' => 'where_to_get_it_button_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Learn More',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'post',
						),
						array(
							'param' => 'post_category',
							'operator' => '==',
							'value' => 'category:front-page-plate',
						),
					),
					array(
						array(
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'template-cuisine-home.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

			acf_add_local_field_group(array(
				'key' => 'group_5a1b1a2d82c4c',
				'title' => 'Post Fields',
				'fields' => array(
					array(
						'key' => 'field_5a1b1a327469f',
						'label' => 'Cuisine',
						'name' => 'cuisine',
						'type' => 'post_object',
						'instructions' => 'Choose your Cuisine here. Do not select "Signature Dishes", "Where to get it?", or "Learn More".',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array(
							0 => 'page',
						),
						'taxonomy' => array(
						),
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array(
						'key' => 'field_5a6108345e6a6',
						'label' => '',
						'name' => '',
						'type' => 'taxonomy',
						'instructions' => 'Select your cuisine name and the post type (Signature Dishes, Where to get it? ,or Learn More)',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'taxonomy' => 'category',
						'field_type' => 'multi_select',
						'allow_null' => 0,
						'add_term' => 0,
						'save_terms' => 1,
						'load_terms' => 1,
						'return_format' => 'id',
						'multiple' => 0,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'post',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

		}
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
		$context['menu'] = new TimberMenu('primary-menu');
		$context['site'] = $this;
		return $context;
	}



	function add_to_twig( $twig ) {
		/* this is where you can add your own functions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		return $twig;
	}

}

new StarterSite();

function remove_personal_options(){
    echo '<script type="text/javascript">jQuery(document).ready(function($) {
    $(\'form#your-profile tr.user-rich-editing-wrap\').remove();
    $(\'form#your-profile tr.user-admin-color-wrap\').remove();
    $(\'form#your-profile tr.user-comment-shortcuts-wrap\').remove();
    $(\'form#your-profile tr.user-admin-bar-front-wrap\').remove();
    $(\'form#your-profile tr.user-language-wrap\').remove();
    $(\'table.form-table tr.user-url-wrap\').remove();
    $(\'h2:contains("About Yourself"), h2:contains("About the user")\').remove();
    $(\'form#your-profile tr.user-description-wrap\').remove();
    $(\'form#your-profile tr.user-profile-picture\').remove();
});</script>';
  
}
  
add_action('admin_head','remove_personal_options');
