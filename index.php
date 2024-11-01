<?php 
/*
Plugin Name: WPBatch icons Shortcode
Plugin URI: http://wpbatch.com/font-awesome
Author: MTM Sujan
Author URI: http://mtmsujan.com
Description: This Plugin will help you to show font awesome Icons very easily using shortcode.. It's based on Font awesome 4.2, there is a lot of features.. you will enjoy it.. Try now
Version: 1.0
*/

// Register external CSS Files

function font_awesome_files(){
	wp_enqueue_style('font-awesome', plugins_url('/css/font-awesome.min.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'font_awesome_files');



// Register Shortcode 

function font_awesome_shortcode($atts, $content){
	extract(
	shortcode_atts(array(
		'color' => '#000000',
		'size' => '30px',
		'background' => '#FFFFFF',
		'round'=> 'border-radius:50%',
		'space' => '0px'
	), $atts));


	return '<i class="fa fa-'.$content.'" style="color:'.$color.'
	;font-size:'.$size.'
	;background:'.$background.'; '.$round.'; padding:'.$space.'"></i>';
}
add_shortcode('icon', 'font_awesome_shortcode');


?>