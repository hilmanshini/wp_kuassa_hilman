<?php

/*
Plugin Name: Dig Banner
Plugin URI: http://samsonasik.wordpress.com
Description: Diginiq Banner
Version: 1.0
License: GPLv2
Author: Abdul Malik Ikhsan
Author URI: http://samsonasik.wordpress.com
*/

function showBannerIn($page)
{
    global $wpdb;

    $myrows = $wpdb->get_results( "select * from dig_banner where dig_banner.banner_onpage = '".$page."'" );
    return $myrows;
}