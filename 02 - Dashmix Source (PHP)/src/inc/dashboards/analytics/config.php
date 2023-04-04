<?php
/**
 * dashboards/analytics/config.php
 *
 * Author: pixelcave
 *
 * Analytics dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_header                 = 'inc/dashboards/analytics/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/analytics/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xpro';


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
        'icon'  => 'fa fa-chart-pie',
        'url'   => 'db_analytics.php'
    ),
    array(
        'name'  => 'Manage',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Websites',
        'icon'  => 'fa fa-globe',
        'sub'   => array(
            array(
                'name'  => 'example-website1.com',
                'sub'   => array(
                    array(
                        'name'  => 'Overview',
                        'icon'  => 'fa fa-coffee',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Visitors',
                        'icon'  => 'fa fa-users',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Content',
                        'icon'  => 'fa fa-file-alt',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Technology',
                        'icon'  => 'fa fa-rocket',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Social',
                        'icon'  => 'fa fa-share-alt',
                        'url'   => ''
                    )
                )
            ),
            array(
                'name'  => 'example-website2.com',
                'sub'   => array(
                    array(
                        'name'  => 'Overview',
                        'icon'  => 'fa fa-coffee',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Visitors',
                        'icon'  => 'fa fa-users',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Content',
                        'icon'  => 'fa fa-file-alt',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Technology',
                        'icon'  => 'fa fa-rocket',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Social',
                        'icon'  => 'fa fa-share-alt',
                        'url'   => ''
                    )
                )
            ),
            array(
                'name'  => 'example-website3.com',
                'sub'   => array(
                    array(
                        'name'  => 'Overview',
                        'icon'  => 'fa fa-coffee',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Visitors',
                        'icon'  => 'fa fa-users',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Content',
                        'icon'  => 'fa fa-file-alt',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Technology',
                        'icon'  => 'fa fa-rocket',
                        'url'   => ''
                    ),
                    array(
                        'name'  => 'Social',
                        'icon'  => 'fa fa-share-alt',
                        'url'   => ''
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Subscriptions',
        'icon'  => 'fa fa-sync-alt',
        'sub'   => array(
            array(
                'name'  => 'Active',
                'badge' => array(1, 'success'),
                'url'   => ''
            ),
            array(
                'name'  => 'Manage',
                'url'   => ''
            ),
            array(
                'name'  => 'Settings',
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
                'name'  => 'Statistics',
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
    )
);
