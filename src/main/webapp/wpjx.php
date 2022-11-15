<?php
/*
Plugin Name: WPJX - JAXON Wordpress Plugin
Plugin URI: http://akosmedia.com/wordpress/plugins/xajax
Description: Jaxon is an open source PHP class library for easily creating powerful PHP-driven, web-based Ajax Applications. Using Jaxon, you can asynchronously call PHP functions and update the content of your your webpage without reloading the entire page. Jaxon is a fork of the Xajax PHP library. Jaxon is also sequential access, event-driven JSON parser developed specifically to deal with streams...
Author: Akos Blazsik
Version: 0.1
Author URI: http://blazsik.com
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( "add_action" ) ) {
	echo "Hi there!  I\'m just a plugin, not much I can do when called directly.";
	exit;
}

define( 'JAXON_BASE', plugin_dir_path( __FILE__ ) );

require (plugin_dir_path( __FILE__ ) . '/vendor/autoload.php'); // Start autoload 

use Jaxon\Jaxon;
use Jaxon\Response\Response;  

global $jaxon;
global $jaxon_config;
global $jaxon_config_error;

function jaxon_init() {	
	global $jaxon;
	$jaxon = \Jaxon\Jaxon::getInstance();
}

/*
function xajax_configure() {
    global $jaxon;
    global jaxon_config_error;
    
    jaxon_config_error = new WP_Error;
    
    if ( is_admin() ) {
        global $jaxon_config;
        libxml_use_internal_errors(true);
        
        $jaxon_config = simplexml_load_file(XAJAX_BASE . '/wpx.config.xml');
        
        if ($jaxon_config === false) {
            jaxon_config_error->add( 'update', "<strong>Info: </strong>" . "[ SimpleXML ] wpx.config.xml" );
            foreach(libxml_get_errors() as $error) {
                jaxon_config_error->add( 'error', "<strong>Error: </strong>" . "[ LibXML ] " . $error->message );
            }
        }
    }
    
    $database_option_name = 'plugin:wpjx_settings';

    // Fetch existing options.
    $settings = get_option( $database_option_name );
    
    $xajax->configure( "javascript URI", plugins_url( "wpx" ) );
    
    if( isset( $settings["errorHandler_enabled"] ) and $settings["errorHandler_enabled"] !== "false" )
        $xajax->configure( "errorHandler", true );
    
    if( isset( $settings["cleanBuffer_enabled"] ) and $settings["cleanBuffer_enabled"] !== "false" )
        $xajax->configure( "cleanBuffer", true );
    
    if( isset( $settings["characterEncoding_charset"] ) and $settings["characterEncoding_charset"] !== "UTF-8" )
        $xajax->configure( "characterEncoding", $settings["characterEncoding_charset"] );
    
    if( isset( $settings["outputEntities_enabled"] ) and $settings["outputEntities_enabled"] !== "false" )
        $xajax->configure( "outputEntities", true );
    
    if( isset( $settings["statusMessages_enabled"] ) and $settings["statusMessages_enabled"] !== "false" )
        $xajax->configure( "statusMessages", true );
    
    if( isset( $settings["waitCursor_enabled"] ) and $settings["waitCursor_enabled"] !== "false" )
        $xajax->configure( "waitCursor", true );
    
    if( isset( $settings["defaultMode_mode"] ) and $settings["defaultMode_mode"] !== "asynchronous" )
        $xajax->configure( "defaultMode", $settings["defaultMode_mode"] );
    
    if( isset( $settings["defaultMethod_method"] ) and $settings["defaultMethod_method"] !== "POST" )
        $xajax->configure( "defaultMethod", $settings["defaultMethod_method"] );
    
    if( isset( $settings["debug_enabled"] ) and $settings["debug_enabled"] !== "false" )
        $xajax->configure( "debug", true );
    
    if( isset( $settings["language_code"] ) and $settings["language_code"] !== "en"){
        require_once ( XAJAX_CORE . "xajaxLanguageManager.inc.php" );
        $language_file = XAJAX_CORE . "xajax_lang_" . $settings["language_code"] . ".inc.php";
        if(file_exists($language_file))
            include_once ( $language_file );
        $xajax->configure("language", $settings["language_code"]);
    }
    
    if( isset( $settings["logFile_enabled"] ) and isset( $settings["logFile_uri"] ) and $settings["logFile_uri"] !== "")
        $xajax->configure("logFile", $settings["logFile_uri"]);
    
    ( isset( $settings["responseQueueSize_enabled"] ) and isset( $settings["responseQueueSize_size"] ) and $settings["responseQueueSize_size"] !== "")
        ? $xajax->configure("responseQueueSize", ( int )$settings["responseQueueSize_size"])
        : $xajax->configure("responseQueueSize", false);
    
    ( isset( $settings["wrapperPrefix_enabled"] ) and isset( $settings["wrapperPrefix_prefix"] ) and $settings["wrapperPrefix_prefix"] !== "")
        ? $xajax->configure("wrapperPrefix", $settings["wrapperPrefix_prefix"])
        : $xajax->configure("wrapperPrefix", false);
    
    if ( isset( $settings["smarty_enabled"] ) and $settings["smarty_enabled"] === "true" ){
        require_once ( XAJAX_CORE . "xajaxPluginManager.inc.php" );
        require_once ( XAJAX_PLUGIN_RESPONSE . "smarty.inc.php");
    }
       
    if ( isset( $settings["phpJavaBridge_enabled"] ) and $settings["phpJavaBridge_enabled"] === "true" ){
        if (file_exists(ABSPATH . "java/Java.inc")){
            require_once( ABSPATH . "java/Java.inc" );
        } else {
            jaxon_config_error->add( 'error', "<strong>Error: </strong>" . "[ PHP/Java Bridge ] java/Java.inc :: File not found." );
        }
        if( !defined( "JAVA_PREFER_VALUES" ) ){
            define( "JAVA_PREFER_VALUES", true );
        }
    }
    
    if ( isset( $settings["saxon9he_enabled"] ) and $settings["saxon9he_enabled"] === "true" ){
        require_once ( XAJAX_CORE . "xajaxPluginManager.inc.php" );
        require_once ( XAJAX_PLUGIN_RESPONSE . "saxon9he.inc.php");
        
        if(! function_exists("java_get_base"))
            jaxon_config_error->add( 'updated', "<strong>Info: </strong>" . "Please enable phpJavaBridge!" );
    }
    
    add_action( 'admin_notices', 'wpx_config_error_notices' );
}
*/

function jaxon_register_function($function) {
	global $jaxon;
	$jaxon->register(Jaxon::USER_FUNCTION, $function);
	return $jaxon;
}

function jaxon_process_request() {
	global $jaxon;
	$jaxon->processRequest();
}

function jaxon_get_css() {
	global $jaxon;
	$jaxon->getCss();
}

// add html script tags pointing to the URL of the external jaxon javascript files 
function jaxon_get_js() {
	global $jaxon;
	$jaxon->getJs();
}

function jaxon_get_script() {
	global $jaxon;
	$jaxon->getScript();
}
/*
if ( is_admin() ) {
	require_once( XAJAX_BASE . 'wpjx.admin.php' );
	add_action( 'init', 'wpjx_admin_init' );
}
*/

add_action('init', 'jaxon_init', 1);
//add_action('init', 'jaxon_configure', 2);
add_action('init', 'jaxon_process_request', 12);
add_action('wp_head', 'jaxon_get_js');

function jaxon_config_error_notice(){
    
    if($_GET["page"] === "wpjx_settings"){
        global $jaxon_config_error;
        
        if ( is_wp_error( $jaxon_config_error ) ) {
            foreach ( $jaxon_config_error->get_error_messages() as $key => $message ) {
                $html .= $message . "<br/>";
            }
            echo "<script type='text/javascript'>\n";
            echo "jQuery( \"#message\" ).html('" .$html . "');";
            echo "\n</script>";
        }
    }
}

function jaxon_config_error_notices() {
    if($_GET["page"] === "wpjx_settings"){
        global $jaxon_config_error;
        
        if ( is_wp_error( $jaxon_config_error ) ) {
            foreach ( $jaxon_config_error->get_error_messages("error") as $key => $message ) {
                $message = $message . "<br/>";
                $class = "error";
                echo"<div class=\"$class\"> <p>$message</p></div>";
            }
            
            foreach ( $jaxon_config_error->get_error_messages("updated") as $key => $message ) {
                $message = $message . "<br/>";
                $class = "updated";
                echo"<div class=\"$class\"> <p>$message</p></div>";
            }
        }
    }
}
