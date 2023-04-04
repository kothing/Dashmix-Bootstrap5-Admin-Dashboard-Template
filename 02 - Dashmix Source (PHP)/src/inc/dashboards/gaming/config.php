<?php
/**
 * dashboards/gaming/config.php
 *
 * Author: pixelcave
 *
 * Gaming dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/gaming/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/gaming/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/gaming/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/gaming/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xeco';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'dark-glass';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-gamepad',
        'url'   => ''
    ),
    array(
        'name'  => 'Overview',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'My Servers',
        'icon'  => 'fa fa-server',
        'badge' => array(4, 'primary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Server Logs',
        'icon'  => 'fa fa-desktop',
        'url'   => ''
    ),
    array(
        'name'  => 'Inbox',
        'icon'  => 'fa fa-inbox',
        'badge' => array(7, 'primary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Account Settings',
        'icon'  => 'fa fa-wrench',
        'url'   => ''
    ),
    array(
        'name'  => 'Users &amp; Groups',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Manage Users',
        'icon'  => 'fa fa-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Manage Groups',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Server: MC_1685',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Live Status',
        'icon'  => 'fa fa-heartbeat',
        'url'   => 'db_gaming.php'
    ),
    array(
        'name'  => 'World Design',
        'icon'  => 'fa fa-globe',
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'User Access',
        'icon'  => 'fa fa-user-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'Server Settings',
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
