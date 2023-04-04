<?php
/**
 * get_started/rtl_backend_boxed/config.php
 *
 * Author: pixelcave
 *
 * Get Started RTL Backend Boxed configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_header                 = 'inc/get_started/rtl_backend_boxed/views/inc_header.php';
$dm->inc_footer                 = 'inc/get_started/rtl_backend_boxed/views/inc_footer.php';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


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
        'url'   => 'gs_rtl_backend_boxed.php'
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
