<?php
/**
 * dashboards/tasks/config.php
 *
 * Author: pixelcave
 *
 * Tasks dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = '';
$dm->inc_sidebar                = 'inc/dashboards/tasks/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/tasks/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/tasks/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xwork';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$dm->l_sidebar_mini             = true;
$dm->l_sidebar_dark             = true;


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
        'name'  => 'Projects Overview',
        'icon'  => 'fa fa-location-arrow',
        'url'   => ''
    ),
    array(
        'name'  => 'Acme Inc',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Tasks',
        'icon'  => 'fa fa-sticky-note',
        'url'   => 'db_tasks.php'
    ),
    array(
        'name'  => 'Timeline',
        'icon'  => 'fa fa-clock',
        'url'   => ''
    ),
    array(
        'name'  => 'People',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Communication',
        'icon'  => 'fa fa-comments',
        'url'   => ''
    ),
    array(
        'name'  => 'Files',
        'icon'  => 'fab fa-dropbox',
        'url'   => ''
    ),
    array(
        'name'  => 'Options',
        'icon'  => 'fa fa-wrench',
        'url'   => ''
    ),
    array(
        'name'  => 'Active Projects',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Acme Inc',
        'icon'  => 'fa fa-folder text-success-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Example.com',
        'icon'  => 'fa fa-folder text-warning-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Test Ltd',
        'icon'  => 'fa fa-folder text-info-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Store Inc',
        'icon'  => 'fa fa-folder text-danger-light',
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Personal',
        'icon'  => 'fa fa-pencil-alt',
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
