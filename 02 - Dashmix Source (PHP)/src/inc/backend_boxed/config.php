<?php
/**
 * backend_boxed/config.php
 *
 * Author: pixelcave
 *
 * Boxed Backend configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_header                 = 'inc/backend_boxed/views/inc_header.php';
$dm->inc_footer                 = 'inc/backend_boxed/views/inc_footer.php';


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'dark';
$dm->l_header_fixed             = false;


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
        'url'   => 'bd_dashboard.php'
    ),
    array(
        'name'  => 'Variations',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Variations',
        'icon'  => 'fa fa-puzzle-piece',
        'sub'   => array(
            array(
                'name'  => 'Simple 1',
                'url'   => 'bd_simple_1.php'
            ),
            array(
                'name'  => 'Simple 2',
                'url'   => 'bd_simple_2.php'
            ),
            array(
                'name'  => 'Image 1',
                'url'   => 'bd_image_1.php'
            ),
            array(
                'name'  => 'Image 2',
                'url'   => 'bd_image_2.php'
            ),
            array(
                'name'  => 'Video 1',
                'url'   => 'bd_video_1.php'
            ),
            array(
                'name'  => 'Video 2',
                'url'   => 'bd_video_2.php'
            ),
            array(
                'name'  => 'More Options',
                'sub'   => array(
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    ),
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    ),
                    array(
                        'name'  => 'Another Link',
                        'url'   => 'javascript:void(0)'
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Search',
        'icon'  => 'fa fa-search',
        'url'   => 'bd_search.php'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'fa fa-undo',
        'url'   => 'be_pages_dashboard.php'
    )
);
