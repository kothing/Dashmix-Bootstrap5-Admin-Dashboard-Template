<?php
/**
 * dashboards/file_hosting/config.php
 *
 * Author: pixelcave
 *
 * File Hosting dashboard configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_sidebar                = 'inc/dashboards/file_hosting/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/dashboards/file_hosting/views/inc_header.php';
$dm->inc_footer                 = 'inc/dashboards/file_hosting/views/inc_footer.php';


// **************************************************************************************************
// GENERIC
// **************************************************************************************************

$dm->theme                      = 'xdream';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'All Files',
        'icon'  => 'fa fa-rocket',
        'url'   => 'db_file_hosting.php'
    ),
    array(
        'name'  => 'Files',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Documents',
        'icon'  => 'fa fa-file-word',
        'badge' => array(19, 'secondary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Photos',
        'icon'  => 'fa fa-file-image',
        'badge' => array(45, 'secondary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Videos',
        'icon'  => 'fa fa-file-video',
        'badge' => array(65, 'secondary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Audio',
        'icon'  => 'fa fa-file-audio',
        'badge' => array(28, 'secondary'),
        'url'   => ''
    ),
    array(
        'name'  => 'Tags',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Work',
        'icon'  => 'fa fa-tag text-danger',
        'badge' => array(98, 'danger'),
        'url'   => ''
    ),
    array(
        'name'  => 'Personal',
        'icon'  => 'fa fa-tag text-success',
        'badge' => array(34, 'success'),
        'url'   => ''
    ),
    array(
        'name'  => 'Project X',
        'icon'  => 'fa fa-tag text-info',
        'badge' => array(56, 'info'),
        'url'   => ''
    ),
    array(
        'name'  => 'Trip',
        'icon'  => 'fa fa-tag text-warning',
        'badge' => array(10, 'warning'),
        'url'   => ''
    ),
    array(
        'name'  => 'Add New Tag',
        'icon'  => 'fa fa-plus text-muted',
        'url'   => ''
    )
);
