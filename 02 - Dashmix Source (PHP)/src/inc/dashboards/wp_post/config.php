<?php
/**
 * dashboards/wp_post/config.php
 *
 * Author: pixelcave
 *
 * WP Post dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/wp_post/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/wp_post/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/wp_post/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xwork';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$dm->l_sidebar_dark             = true;
$dm->l_sidebar_mini             = true;


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-tachometer-alt',
        'sub'   => array(
            array(
                'name'  => 'Manage',
                'url'   => '',
            ),
            array(
                'name'  => 'Updates',
                'badge' => array(3, 'success'),
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => '',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Posts',
        'icon'  => 'fa fa-thumbtack',
        'sub'   => array(
            array(
                'name'  => 'All Posts',
                'url'   => ''
            ),
            array(
                'name'  => 'Add New',
                'url'   => 'db_wp_post.php',
            ),
            array(
                'name'  => 'Categories',
                'url'   => ''
            ),
            array(
                'name'  => 'Tags',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Media',
        'icon'  => 'fa fa-camera',
        'sub'   => array(
            array(
                'name'  => 'Library',
                'url'   => ''
            ),
            array(
                'name'  => 'Add New',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'fa fa-file',
        'sub'   => array(
            array(
                'name'  => 'All Pages',
                'url'   => ''
            ),
            array(
                'name'  => 'Add New',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Comments',
        'icon'  => 'fa fa-comment',
        'badge' => array(3, 'success'),
        'url'   => ''
    ),
    array(
        'name'  => '',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Appearance',
        'icon'  => 'fa fa-brush',
        'sub'   => array(
            array(
                'name'  => 'Themes',
                'url'   => ''
            ),
            array(
                'name'  => 'Customize',
                'url'   => ''
            ),
            array(
                'name'  => 'Widgets',
                'url'   => ''
            ),
            array(
                'name'  => 'Menus',
                'url'   => ''
            ),
            array(
                'name'  => 'Editor',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Plugins',
        'icon'  => 'fa fa-plug',
        'sub'   => array(
            array(
                'name'  => 'Installed Plugins',
                'url'   => ''
            ),
            array(
                'name'  => 'Add New',
                'url'   => ''
            ),
            array(
                'name'  => 'Editor',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Users',
        'icon'  => 'fa fa-user',
        'sub'   => array(
            array(
                'name'  => 'All Users',
                'url'   => ''
            ),
            array(
                'name'  => 'Add New',
                'url'   => ''
            ),
            array(
                'name'  => 'Your Profile',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Tools',
        'icon'  => 'fa fa-wrench',
        'sub'   => array(
            array(
                'name'  => 'Available Tools',
                'url'   => ''
            ),
            array(
                'name'  => 'Import',
                'url'   => ''
            ),
            array(
                'name'  => 'Export',
                'url'   => ''
            ),
            array(
                'name'  => 'Export Personal Data',
                'url'   => ''
            ),
            array(
                'name'  => 'Erase Personal Data',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'fa fa-sliders-h',
        'sub'   => array(
            array(
                'name'  => 'General',
                'url'   => ''
            ),
            array(
                'name'  => 'Writing',
                'url'   => ''
            ),
            array(
                'name'  => 'Reading',
                'url'   => ''
            ),
            array(
                'name'  => 'Discussion',
                'url'   => ''
            ),
            array(
                'name'  => 'Media',
                'url'   => ''
            ),
            array(
                'name'  => 'Permalinks',
                'url'   => ''
            ),
            array(
                'name'  => 'Privacy',
                'url'   => ''
            )
        )
    )
);
