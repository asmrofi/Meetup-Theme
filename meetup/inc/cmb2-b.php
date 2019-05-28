<?php
//Speakers section start
add_action( 'cmb2_init', 'speaker' );
function speaker() {

$prefix = 'speaker';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'speakers_social',
    'title' => __( 'Speakers Social Link', 'meetup' ),
    'object_types' => array( 'speaker' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
        'name' => __( 'Facebook URL', 'meetup' ),
        'id'   => 'wiki_test_facebookurl',
        'type' => 'text',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );
    
    $cmb->add_field( array(
        'name' => __( 'Twitter URL', 'meetup' ),
        'id'   => 'wiki_test_twitterurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );
    
    $cmb->add_field( array(
        'name' => __( 'Linkedin URL', 'meetup' ),
        'id'   => 'wiki_test_linkedinurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );
}
//Speakers section End

    
    
    
//Event section start
add_action( 'cmb2_init', 'event' );
function event() {

$prefix = 'event';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'event',
    'title' => __( 'Icon', 'meetup' ),
    'object_types' => array( 'event' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
        'name' => __( 'Icon', 'meetup' ),
        'id'   => 'icon',
        'type' => 'text',
    ) );
}
//Event section End




//Schedule section start

function left_feature() {

$prefix = 'schedule';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'Schedule Time',
    'title' => __( 'Schedule Time Info', 'meetup' ),
    'object_types' => array( 'schedule' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
    'name' => __( 'Time', 'meetup' ),
    'id' => 'time',
    'type' => 'text',
    ) );
}
  add_action( 'cmb2_init', 'left_feature' ); 
//Schedule section End



//Right Feature section start
  
function right_feature() {

$prefix = 'right_feature';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'right_feature_info',
    'title' => __( 'Right Feature Info', 'meetup' ),
    'object_types' => array( 'feature' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
    'name' => __( 'Icon', 'meetup' ),
    'id' => 'icon',
    'type' => 'text',
    ) );
}
add_action( 'cmb2_init', 'right_feature' ); 
//Right Feature section End



//Pricing Section Start

function pricing() {

$prefix = 'pricing';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'pricing_info',
    'title' => __( 'Pricing Info', 'meetup' ),
    'object_types' => array( 'pricing' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Icon', 'meetup' ),
    'id' => 'icon',
    'type' => 'text',
    ) );
   
    $cmb->add_field( array(
    'name' => __( 'Amount', 'meetup' ),
    'id' => 'amount',
    'type' => 'text',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Year', 'meetup' ),
    'id' => 'year',
    'type' => 'text',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Button Name', 'meetup' ),
    'id' => 'Button_name',
    'type' => 'text',
    ) );
    
    
}
add_action( 'cmb2_init', 'pricing' );
//Pricing Section End



//Testimonial Section Start


function testimonial() {

$prefix = 'testimonial';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'testimonial_info',
    'title' => __( 'Testimonial Info', 'meetup' ),
    'object_types' => array( 'testimonial' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
		'name' => esc_html__( 'Client Photo ', 'meetup' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'meetup' ),
		'id'   => 'image',
		'type' => 'file',
	) );
    
    $cmb->add_field( array(
    'name' => __( 'Client Designation', 'meetup' ),
    'id' => 'client_designation',
    'type' => 'text',
    ) );


}
add_action( 'cmb2_init', 'testimonial' );
//Testimonial Section End