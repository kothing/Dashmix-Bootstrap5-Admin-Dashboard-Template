<?php
/**
 * dashboards/minimal/config.php
 *
 * Author: pixelcave
 *
 * Minimal dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/minimal/views/inc_side_overlay.php';
$dm->inc_sidebar                = '';
$dm->inc_header                 = 'inc/dashboards/minimal/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/minimal/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xwork';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_fixed             = false;
$dm->l_header_style             = 'dark-glass';


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
        'url'   => 'db_minimal.php'
    ),
    array(
        'name'  => 'Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Features',
        'icon'  => 'fa fa-rocket',
        'url'   => ''
    ),
    array(
        'name'  => 'Pricing',
        'icon'  => 'fa fa-shopping-bag',
        'url'   => ''
    ),
    array(
        'name'  => 'Plans',
        'icon'  => 'fa fa-check',
        'url'   => ''
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
        'name'  => 'More',
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
