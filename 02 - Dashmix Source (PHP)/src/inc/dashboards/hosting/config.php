<?php
/**
 * dashboards/hosting/config.php
 *
 * Author: pixelcave
 *
 * Hosting dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/hosting/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/hosting/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/hosting/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xmodern';


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
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-chart-pie',
        'badge' => array(3, 'success'),
        'url'   => 'db_hosting.php'
    ),
    array(
        'name'  => 'Hosting',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Domains',
        'icon'  => 'fa fa-globe',
        'sub'   => array(
            array(
                'name'  => 'Manage',
                'badge' => array(3, 'success'),
                'url'   => ''
            ),
            array(
                'name'  => 'Registration',
                'url'   => ''
            ),
            array(
                'name'  => 'Transfer',
                'url'   => ''
            ),
            array(
                'name'  => 'Secure Hosting',
                'url'   => ''
            ),
            array(
                'name'  => 'Anonymous FTP',
                'url'   => ''
            ),
            array(
                'name'  => 'Site Statistics',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Mail',
        'icon'  => 'fa fa-inbox',
        'sub'   => array(
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Webmail',
                'url'   => ''
            ),
            array(
                'name'  => 'Custom MX',
                'url'   => ''
            ),
            array(
                'name'  => 'Announce Lists',
                'url'   => ''
            ),
            array(
                'name'  => 'Anti-spam',
                'url'   => ''
            ),
            array(
                'name'  => 'Filters',
                'url'   => ''
            ),
            array(
                'name'  => 'Autoresponders',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Goodies',
        'icon'  => 'fa fa-chess-queen',
        'sub'   => array(
            array(
                'name'  => 'MySQL Databases',
                'url'   => ''
            ),
            array(
                'name'  => 'One-Click Installs',
                'url'   => ''
            ),
            array(
                'name'  => 'Subversion',
                'url'   => ''
            ),
            array(
                'name'  => 'Cron Jobs',
                'url'   => ''
            ),
            array(
                'name'  => 'Block Spiders',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'VPS',
        'icon'  => 'fa fa-server',
        'sub'   => array(
            array(
                'name'  => 'Dashboard',
                'url'   => ''
            ),
            array(
                'name'  => 'Usage',
                'url'   => ''
            ),
            array(
                'name'  => 'Add Servers',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Users',
        'icon'  => 'fa fa-users',
        'sub'   => array(
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'SSH Keys',
                'url'   => ''
            ),
            array(
                'name'  => 'Account Privileges',
                'url'   => ''
            ),
            array(
                'name'  => 'Unix Groups',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Account',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Billing &amp; Account',
        'icon'  => 'fa fa-user-circle',
        'sub'   => array(
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Privacy Settings',
                'url'   => ''
            ),
            array(
                'name'  => 'Make Payment',
                'url'   => ''
            ),
            array(
                'name'  => 'View Invoices',
                'url'   => ''
            ),
            array(
                'name'  => 'Security',
                'url'   => ''
            ),
            array(
                'name'  => 'Backups',
                'url'   => ''
            ),
            array(
                'name'  => 'Affiliates',
                'url'   => ''
            ),
            array(
                'name'  => 'Bandwidth Usage',
                'url'   => ''
            ),
            array(
                'name'  => 'Disk Usage',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Support',
        'icon'  => 'fa fa-life-ring',
        'sub'   => array(
            array(
                'name'  => 'Contact Support',
                'url'   => ''
            ),
            array(
                'name'  => 'Knowledge Base',
                'url'   => ''
            )
        )
    ),
    array(
        'name'  => 'Dashboards',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Go Back',
        'icon'  => 'si si-arrow-left',
        'url'   => 'be_pages_dashboard_all.php'
    )
);
