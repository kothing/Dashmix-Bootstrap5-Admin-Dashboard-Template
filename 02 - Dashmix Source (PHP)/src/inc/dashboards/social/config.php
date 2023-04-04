<?php
/**
 * dashboards/social/config.php
 *
 * Author: pixelcave
 *
 * Social dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/social/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/social/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/social/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/social/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xmodern';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'My Profile',
        'icon'  => 'fa fa-user-circle',
        'url'   => 'db_social.php'
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'fa fa-bell',
        'badge' => array(6, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'fa fa-envelope-open',
        'badge' => array(1, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Home',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'News Feed',
        'icon'  => 'fa fa-newspaper',
        'url'   => ''
    ),
    array(
        'name'  => 'Marketplace',
        'icon'  => 'fa fa-gem',
        'url'   => ''
    ),
    array(
        'name'  => 'Explore',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Events',
        'icon'  => 'fa fa-calendar-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Groups',
        'icon'  => 'fa fa-users',
        'url'   => ''
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'fa fa-file-alt',
        'badge' => array(32, 'danger'),
        'url'   => ''
    ),
    array(
        'name'  => 'On This Day',
        'icon'  => 'fa fa-clock',
        'url'   => ''
    ),
    array(
        'name'  => 'Pages Feed',
        'icon'  => 'fa fa-newspaper',
        'url'   => ''
    ),
    array(
        'name'  => 'Photos',
        'icon'  => 'fa fa-images',
        'badge' => array(14, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'Games',
        'icon'  => 'fa fa-gamepad',
        'badge' => array(25, 'success'),
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
