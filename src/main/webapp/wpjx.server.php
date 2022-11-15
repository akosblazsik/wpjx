<?php
function load($cfg) {
	$response = new Response ();
	$response->assign("post-1", "innerHTML", "hello");
	$response->smartyPlugin->assign( "post-1", dirname(dirname(dirname(dirname(__FILE__)))) . "/demo/templates/index.tpl" );
	return $response;
}

function style_display($id, $show = 1) {
	$response = new Response();
	$response->assign($id, 'style.display', ($show == 1) ? 'block' : 'none');
	return $response;
}

function set_image($id, $file) {
	$response = new Response();
	$response->assign($id, 'src', $file);
	return $response;
}

function helloworld($name) 
{ 
    $response = new Jaxon\Response\Response();
    $response->alert("Hello $name");
    return $response;
}

function current_mediaquery($name) 
{ 
    $response = new Jaxon\Response\Response();
    $response->alert("Current mediaquery: $name");
    return $response;
}

function jaxon_basic_functions() {
	jaxon_register_function('load');
	jaxon_register_function('style_display');
	jaxon_register_function('set_image');
	jaxon_register_function('helloworld');
	jaxon_register_function('current_mediaquery');
}
add_action('init', 'jaxon_basic_functions');