<?php
/**
 * dashboards/social_compact/config.php
 *
 * Author: pixelcave
 *
 * Social Compact dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/social_compact/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/social_compact/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/social_compact/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/social_compact/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xmodern';


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
        'name'  => 'My Profile',
        'icon'  => 'far fa-user-circle',
        'url'   => ''
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'far fa-bell',
        'badge' => array(6, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'far fa-envelope-open',
        'badge' => array(1, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Home',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'News Feed',
        'icon'  => 'far fa-newspaper',
        'url'   => 'db_social_compact.php'
    ),
    array(
        'name'  => 'Marketplace',
        'icon'  => 'far fa-gem',
        'url'   => ''
    ),
    array(
        'name'  => 'Explore',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Events',
        'icon'  => 'far fa-calendar-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Groups',
        'icon'  => 'far fa-user',
        'url'   => ''
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'far fa-file-alt',
        'badge' => array(32, 'danger'),
        'url'   => ''
    ),
    array(
        'name'  => 'Photos',
        'icon'  => 'far fa-images',
        'badge' => array(14, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'More',
        'icon'  => 'fa fa-plus',
        'sub'   => array(
            array(
                'name'  => 'On This Day',
                'icon'  => 'far fa-clock',
                'url'   => ''
            ),
            array(
                'name'  => 'Pages Feed',
                'icon'  => 'far fa-newspaper',
                'url'   => ''
            ),
            array(
                'name'  => 'Games',
                'icon'  => 'fa fa-gamepad',
                'badge' => array(25, 'success'),
                'url'   => ''
            ),
        )
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
