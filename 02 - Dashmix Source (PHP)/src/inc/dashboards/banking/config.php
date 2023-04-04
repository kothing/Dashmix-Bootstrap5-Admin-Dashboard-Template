<?php
/**
 * dashboards/banking/config.php
 *
 * Author: pixelcave
 *
 * Banking dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/banking/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/banking/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/banking/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xdream';


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
        'icon'  => 'fa fa-rocket',
        'url'   => 'db_banking.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Accounts',
        'icon'  => 'fa fa-piggy-bank',
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
                'name'  => 'New Account',
                'icon'  => 'fa fa-plus-circle',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Cards',
        'icon'  => 'fa fa-money-check',
        'sub'   => array(
            array(
                'name'  => 'Approved',
                'badge' => array(3, 'success'),
                'url'   => ''
            ),
            array(
                'name'  => 'Pending',
                'badge' => array(1, 'warning'),
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'New Card',
                'icon'  => 'fa fa-plus-circle',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Payments',
        'icon'  => 'fa fa-money-bill',
        'sub'   => array(
            array(
                'name'  => 'Scheduled',
                'badge' => array(2, 'success'),
                'url'   => ''
            ),
            array(
                'name'  => 'Recurring',
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'New Payment',
                'icon'  => 'fa fa-plus-circle',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Services',
        'icon'  => 'fa fa-money-bill-wave-alt',
        'sub'   => array(
            array(
                'name'  => 'Transfers',
                'url'   => ''
            ),
            array(
                'name'  => 'Loans',
                'url'   => ''
            ),
            array(
                'name'  => 'Credit',
                'url'   => ''
            ),
            array(
                'name'  => 'Bonds',
                'url'   => ''
            ),
            array(
                'name'  => 'Stocks',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Personal',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Profile',
        'icon'  => 'fa fa-user-circle',
        'url'   => ''
    ),
    array(
        'name'  => 'Messages',
        'icon'  => 'fa fa-envelope',
        'badge' => array(3, 'success'),
        'url'   => ''
    ),
    array(
        'name'  => 'Settings',
        'icon'  => 'fa fa-cog',
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
