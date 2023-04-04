<?php
/**
 * dashboards/classic_boxed/config.php
 *
 * Author: pixelcave
 *
 * Classic Boxed dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/classic_boxed/views/inc_side_overlay.php';
$dm->inc_header                 = 'inc/dashboards/classic_boxed/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/classic_boxed/views/inc_footer.php';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_fixed             = false;
$dm->l_header_style             = '';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-coffee',
        'url'   => 'db_classic_boxed.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Orders',
        'icon'  => 'fa fa-shopping-bag',
        'url'   => ''
    ),
    array(
        'name'  => 'Customers',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Products',
        'icon'  => 'fa fa-puzzle-piece',
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Support',
        'icon'  => 'fa fa-life-ring',
        'url'   => ''
    ),
    array(
        'name'  => 'Contact',
        'icon'  => 'fa fa-envelope',
        'url'   => ''
    ),
    array(
        'name'  => 'Personal',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Account',
        'icon'  => 'fa fa-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'fa fa-cog',
        'url'   => ''
    ),
    array(
        'name'  => 'Dashboards',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'fa fa-arrow-left',
        'url'   => 'be_pages_dashboard_all.php'
    )
);
