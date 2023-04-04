<?php
/**
 * dashboards/dark/config.php
 *
 * Author: pixelcave
 *
 * Dark dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/dark/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/dark/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/dark/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/dark/views/inc_footer.php';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// DARK MODE
// **************************************************************************************************

$dm->l_dark_mode                = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-rocket',
        'url'   => 'db_dark.php'
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
