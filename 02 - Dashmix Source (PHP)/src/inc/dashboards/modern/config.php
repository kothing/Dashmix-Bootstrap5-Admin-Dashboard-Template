<?php
/**
 * dashboards/modern/config.php
 *
 * Author: pixelcave
 *
 * Modern dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/dashboards/modern/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/dashboards/modern/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/modern/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/modern/views/inc_footer.php';


// **************************************************************************************************
// SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

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
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-chart-bar',
        'badge' => array(3, 'primary'),
        'url'   => 'db_modern.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Projects',
        'icon'  => 'fa fa-briefcase',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'fa fa-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Active',
                'icon'  => 'fa fa-star',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-pencil-alt',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Customers',
        'icon'  => 'fa fa-user',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'fa fa-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-pencil-alt',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Invoices',
        'icon'  => 'fa fa-file-alt',
        'sub'   => array(
            array(
                'name'  => 'New',
                'icon'  => 'fa fa-plus',
                'url'   => ''
            ),
            array(
                'name'  => 'Pending',
                'icon'  => 'fa fa-hourglass',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-pencil-alt',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fa fa-check',
        'sub'   => array(
            array(
                'name'  => 'Pending',
                'icon'  => 'fa fa-hourglass',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-pencil-alt',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Marketing',
        'icon'  => 'fa fa-glasses',
        'sub'   => array(
            array(
                'name'  => 'Articles',
                'icon'  => 'fa fa-book-open',
                'url'   => ''
            ),
            array(
                'name'  => 'SEO',
                'icon'  => 'fa fa-globe',
                'url'   => ''
            ),
            array(
                'name'  => 'Feedback',
                'icon'  => 'fa fa-directions',
                'url'   => ''
            ),
            array(
                'name'  => 'Analytics',
                'icon'  => 'fa fa-chart-area',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Support',
        'icon'  => 'fa fa-life-ring',
        'sub'   => array(
            array(
                'name'  => 'Open Tickets',
                'icon'  => 'fa fa-fire',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'icon'  => 'fa fa-pencil-alt',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Settings',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-house-user',
        'badge' => array(4, 'primary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'fa fa-envelope-open',
        'badge' => array(9, 'success'),
        'url'   => ''
    ),
    array(
        'name'  => 'Account',
        'icon'  => 'fa fa-user',
        'badge' => array(3, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'badge' => array(1, 'danger'),
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
