<?php
remove_filter( 'the_content', 'wpautop' );
$template_dir = get_template_directory_uri();
if( !is_admin() ) {
//заменяем jquery
add_action('wp_enqueue_scripts', 'my_update_jquery');
function my_update_jquery () {
	if ( !is_admin() ) { 
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.slim.min.js', false, false, false);
	wp_enqueue_script('jquery');
	}
}

//подключаем стили в хедер
add_action('wp_enqueue_scripts', 'add_header_styles');
function add_header_styles() {
global $template_dir;
	wp_enqueue_style( 'bootstrap', $template_dir.'/css/bootstrap-grid.css');
	wp_enqueue_style( 'style', $template_dir. '/css/index.css', array('bootstrap'));
	wp_enqueue_style( 'fontello', $template_dir.'/css/fontello.css');
	wp_enqueue_style( 'swiper', $template_dir.'/css/swiper.min.css');
	wp_enqueue_style( 'fancy', $template_dir.'/css/jquery.fancybox.min.css');

}
	
//подключаем скрипты в хедер
add_action( 'wp_enqueue_scripts', 'add_header_scripts');
function add_header_scripts(){
	wp_enqueue_script('smooth', get_template_directory_uri() . '/js/smooth-scroll.min.js', array('jquery'), null, true);
}
//подключаем скрипты в футер
add_action( 'get_footer', 'add_my_scripts');
function add_my_scripts(){
	global $template_dir;
	wp_enqueue_script('swiper', $template_dir . '/js/swiper.min.js', array('jquery'), null, true);
	wp_enqueue_script('index', $template_dir. '/js/index.js', array('jquery'), null, true);
	if( !is_front_page() )
	{
		wp_enqueue_script('fancy', $template_dir . '/js/jquery.fancybox.min.js', array('jquery'), null, true);
	}
}
}

//ограничение на кол-во слов в описании акции
function new_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

/* включаем поддержку миниатюр для постов*/
add_theme_support( 'post-thumbnails' );

// надпись в футере админки
add_filter('admin_footer_text', 'remove_footer_admin');
	function remove_footer_admin () {      
		echo 'Сайт разработан студией                                             
		<a style="text-decoration: none;" href="http://adm-lab.pro/" title="Сайт студии ADM-Lab">
		<span style="color:#FFD500;">A</span>
		<span style="color:#A3D900;">D</span>
		<span style="color:#00A7DC;">M</span>
		<span style="color:#555d66;">- Lab ©</span>
	</a>';  
	}   

?>