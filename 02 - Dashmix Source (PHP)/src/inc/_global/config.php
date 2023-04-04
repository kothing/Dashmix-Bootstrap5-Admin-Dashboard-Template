<?php
/**
 * _global/config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include required classes
require 'inc/_classes/Template.php';


// **************************************************************************************************
// TEMPLATE OBJECT
// **************************************************************************************************

//                              : Name, version and assets folder's name
$dm                             = new Template('Dashmix', '5.5', 'assets');


// **************************************************************************************************
// GLOBAL META & OPEN GRAPH DATA
// **************************************************************************************************

//                              : The data is added in the <head> section of the page
$dm->author                     = 'pixelcave';
$dm->robots                     = 'noindex, nofollow';
$dm->title                      = 'Dashmix - Bootstrap 5 Admin Template &amp; UI Framework';
$dm->description                = 'Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest';

//                              : The url of your site, used in Open Graph Meta Data (eg 'https://example.com')
$dm->og_url_site                = '';

//                              : The url of your image/logo, used in Open Graph Meta Data (eg 'https://example.com/assets/img/your_logo.png')
$dm->og_url_image               = '';


// **************************************************************************************************
// GLOBAL GENERIC
// **************************************************************************************************

// ''                           : default color theme
// 'xwork'                      : xWork color theme
// 'xmodern'                    : xModern color theme
// 'xeco'                       : xEco color theme
// 'xsmooth'                    : xSmooth color theme
// 'xinspire'                   : xInspire color theme
// 'xdream'                     : xDream color theme
// 'xpro'                       : xPro color theme
// 'xplay'                      : xPlay color theme
$dm->theme                      = '';

// true                         : Enables Page Loader screen
// false                        : Disables Page Loader screen
$dm->page_loader                = false;

// true                          : Remembers active color theme and dark mode between pages using
//                                 localStorage when set through
//                                 - Theme helper buttons [data-toggle="theme"],
//                                 - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
//                                 - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')
// false                         : Does not remember the active color theme and Dark Mode
$dm->remember_theme             = false;


// **************************************************************************************************
// GLOBAL DARK MODE
// **************************************************************************************************

// true                          : Dark Mode enabled
// false                         : Dark Mode disabled
$dm->l_dark_mode                = false;


// **************************************************************************************************
// GLOBAL INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$dm->inc_side_overlay           = '';
$dm->inc_sidebar                = '';
$dm->inc_header                 = '';
$dm->inc_footer                 = '';


// **************************************************************************************************
// GLOBAL SIDEBAR & SIDE OVERLAY
// **************************************************************************************************

// true                         : Left Sidebar and right Side Overlay
// false                        : Right Sidebar and left Side Overlay
$dm->l_sidebar_left             = true;

// true                         : Mini hoverable Sidebar (screen width > 991px)
// false                        : Normal mode
$dm->l_sidebar_mini             = false;

// true                         : Visible Sidebar (screen width > 991px)
// false                        : Hidden Sidebar (screen width > 991px)
$dm->l_sidebar_visible_desktop  = true;

// true                         : Visible Sidebar (screen width < 992px)
// false                        : Hidden Sidebar (screen width < 992px)
$dm->l_sidebar_visible_mobile   = false;

// true                         : Dark themed Sidebar
// false                        : Light themed Sidebar
$dm->l_sidebar_dark             = false;

// true                         : Hoverable Side Overlay (screen width > 991px)
// false                        : Normal mode
$dm->l_side_overlay_hoverable   = false;

// true                         : Visible Side Overlay
// false                        : Hidden Side Overlay
$dm->l_side_overlay_visible     = false;

// true                         : Enables a visible clickable (closes Side Overlay) Page Overlay when Side Overlay opens
// false                        : Disables Page Overlay when Side Overlay opens
$dm->l_page_overlay             = true;

// true                         : Custom scrolling (screen width > 991px)
// false                        : Native scrolling
$dm->l_side_scroll              = true;


// **************************************************************************************************
// GLOBAL HEADER
// **************************************************************************************************

// true                         : Fixed Header
// false                        : Static Header
$dm->l_header_fixed             = true;

// 'light'                      : Light themed Header
// 'dark'                       : Dark themed Header
// 'light-glass'                : Light themed Header with transparency by default (absolute position,
//                                perfect for light images underneath - solid light background
//                                on scroll if the Header is also set as fixed)
// 'dark-glass'                 : Dark themed Header with transparency by default (absolute position,
//                                perfect for dark images underneath - solid dark background
//                                on scroll if the Header is also set as fixed)
$dm->l_header_style             = 'dark';


// **************************************************************************************************
// GLOBAL FOOTER
// **************************************************************************************************

// true                         : Fixed Footer
// false                        : Static Footer
$dm->l_footer_fixed             = false;


// **************************************************************************************************
// GLOBAL MAIN CONTENT
// **************************************************************************************************

// ''                           : Full width Main Content
// 'boxed'                      : Full width Main Content with a specific maximum width (screen width > 1200px)
// 'narrow'                     : Full width Main Content with a percentage width (screen width > 1200px)
$dm->l_m_content                = '';


// **************************************************************************************************
// GLOBAL MAIN MENU
// **************************************************************************************************

// It will get compared with the url of each menu link to make the link active and set up main menu accordingly
// If you are using query strings to load different pages, you can use the following value: basename($_SERVER['REQUEST_URI'])
$dm->main_nav_active            = basename($_SERVER['PHP_SELF']);

// You can use the following array to create your main menu
$dm->main_nav                   = array();
