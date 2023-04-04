<?php
/**
 * get_started/rtl_backend/config.php
 *
 * Author: pixelcave
 *
 * Get Started RTL Backend configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/get_started/rtl_backend/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/get_started/rtl_backend/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/get_started/rtl_backend/views/inc_header.php';
$dm->inc_footer                 = 'inc/get_started/rtl_backend/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

$dm->l_sidebar_left             = false;
$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'light';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// RTL Support
// **************************************************************************************************

$dm->l_rtl                      = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-rocket',
        'badge' => array(3, 'primary'),
        'url'   => 'gs_rtl_backend.php'
    ),
    array(
        'name'  => 'Heading',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Dropdown',
        'icon'  => 'fa fa-puzzle-piece',
        'sub'   => array(
            array(
                'name'  => 'Link #1',
                'url'   => 'javascript:void(0)'
            ),
            array(
                'name'  => 'Link #2',
                'url'   => 'javascript:void(0)'
            )
        )
    )
);
