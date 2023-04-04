<?php
/**
 * get_started/landing/config.php
 *
 * Author: pixelcave
 *
 * Get Started Landing configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_header                 = 'inc/get_started/landing/views/inc_header.php';
$dm->inc_sidebar                = 'inc/get_started/landing/views/inc_sidebar.php';
$dm->inc_footer                 = 'inc/get_started/landing/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_visible_desktop  = false;
$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'light-glass';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Home',
        'icon'  => 'fa fa-home',
        'url'   => 'gs_landing.php'
    ),
    array(
        'name'  => 'Features',
        'icon'  => 'fa fa-rocket',
        'url'   => 'javascript:void(0)'
    ),
    array(
        'name'  => 'Pricing',
        'icon'  => 'fab fa-paypal',
        'url'   => 'javascript:void(0)'
    ),
    array(
        'name'  => 'Contact',
        'icon'  => 'fa fa-envelope',
        'url'   => 'javascript:void(0)'
    )
);
