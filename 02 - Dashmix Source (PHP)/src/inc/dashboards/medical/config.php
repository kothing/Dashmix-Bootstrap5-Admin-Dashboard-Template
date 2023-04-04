<?php
/**
 * dashboards/medical/config.php
 *
 * Author: pixelcave
 *
 * Medical dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/medical/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/medical/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/medical/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xdream';


// **************************************************************************************************
// SIDEBAR
// **************************************************************************************************

$dm->l_sidebar_dark             = true;


// **************************************************************************************************
// HEADER
// **************************************************************************************************

$dm->l_header_style             = 'light';


// **************************************************************************************************
// MAIN CONTENT
// **************************************************************************************************

$dm->l_m_content                = 'boxed';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Overview',
        'icon'  => 'fa fa-hospital',
        'badge' => array(3, 'success'),
        'url'   => 'db_medical.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Patients',
        'icon'  => 'fa fa-user-circle',
        'sub'   => array(
            array(
                'name'  => 'Current',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Patient',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Appointments',
        'icon'  => 'fa fa-calendar',
        'sub'   => array(
            array(
                'name'  => 'Active',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Appointment',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fab fa-paypal',
        'sub'   => array(
            array(
                'name'  => 'Pending',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Payment',
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
        'icon'  => 'fa fa-pencil-alt',
        'url'   => ''
    ),
    array(
        'name'  => 'Security',
        'icon'  => 'fa fa-lock',
        'url'   => ''
    ),
    array(
        'name'  => 'Notifications',
        'icon'  => 'fa fa-flag',
        'url'   => ''
    ),
    array(
        'name'  => 'Help',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Knowledge Base',
        'icon'  => 'fa fa-book',
        'url'   => ''
    ),
    array(
        'name'  => 'Hospital Forum',
        'icon'  => 'fa fa-comments',
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
