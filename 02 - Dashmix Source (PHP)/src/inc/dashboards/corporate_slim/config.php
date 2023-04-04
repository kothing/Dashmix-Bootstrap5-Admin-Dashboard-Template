<?php
/**
 * dashboards/corporate_slim/config.php
 *
 * Author: pixelcave
 *
 * Corporate Slim dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/corporate_slim/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/corporate_slim/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/corporate_slim/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xpro';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_visible_desktop  = false;
$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'dark';


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
        'icon'  => 'fa fa-compass',
        'url'   => 'db_corporate_slim.php'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-user-circle',
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'fa fa-envelope-open',
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Projects',
        'icon'  => 'fa fa-briefcase',
        'sub'   => array(
            array(
                'name'  => 'Active',
                'icon'  => 'fa fa-check',
                'badge' => array(3, 'success'),
                'url'   => ''
            ),
            array(
                'name'  => 'Colleagues',
                'icon'  => 'fa fa-users',
                'badge' => array(24, 'primary'),
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-cog',
                'url'   => ''
            ),
        )
    )
);
