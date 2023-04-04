<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$dm->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$dm->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$dm->inc_header                 = 'inc/backend/views/inc_header.php';
$dm->inc_footer                 = 'inc/backend/views/inc_footer.php';


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

$dm->l_m_content                = 'narrow';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$dm->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-location-arrow',
        'badge' => array(8, 'primary'),
        'url'   => 'be_pages_dashboard.php'
    ),
    array(
        'name'  => 'Page Kits',
        'icon'  => 'fa fa-clone',
        'sub'   => array(
            array(
                'name'  => 'Generic',
                'sub'   => array(
                    array(
                        'name'  => 'Blank',
                        'url'   => 'be_pages_generic_blank.php'
                    ),
                    array(
                        'name'  => 'Blank (Block)',
                        'url'   => 'be_pages_generic_blank_block.php'
                    ),
                    array(
                        'name'  => 'Search',
                        'url'   => 'be_pages_generic_search.php'
                    ),
                    array(
                        'name'  => 'Profile',
                        'url'   => 'be_pages_generic_profile.php'
                    ),
                    array(
                        'name'  => 'Profile Edit',
                        'url'   => 'be_pages_generic_profile_edit.php'
                    ),
                    array(
                        'name'  => 'Profile v2',
                        'url'   => 'be_pages_generic_profile_v2.php'
                    ),
                    array(
                        'name'  => 'Profile v2 Edit',
                        'url'   => 'be_pages_generic_profile_v2_edit.php'
                    ),
                    array(
                        'name'  => 'Inbox',
                        'url'   => 'be_pages_generic_inbox.php'
                    ),
                    array(
                        'name'  => 'Invoice',
                        'url'   => 'be_pages_generic_invoice.php'
                    ),
                    array(
                        'name'  => 'FAQ',
                        'url'   => 'be_pages_generic_faq.php'
                    ),
                    array(
                        'name'  => 'Upgrade Plan',
                        'url'   => 'be_pages_generic_upgrade_plan.php'
                    ),
                    array(
                        'name'  => 'Sidebar with Mini Nav',
                        'url'   => 'be_pages_sidebar_mini_nav.php'
                    )
                )
            ),
            array(
                'name'  => 'e-Commerce',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_ecom_dashboard.php'
                    ),
                    array(
                        'name'  => 'Orders',
                        'url'   => 'be_pages_ecom_orders.php'
                    ),
                    array(
                        'name'  => 'Order',
                        'url'   => 'be_pages_ecom_order.php'
                    ),
                    array(
                        'name'  => 'Products',
                        'url'   => 'be_pages_ecom_products.php'
                    ),
                    array(
                        'name'  => 'Product Edit',
                        'url'   => 'be_pages_ecom_product_edit.php'
                    ),
                    array(
                        'name'  => 'Customer',
                        'url'   => 'be_pages_ecom_customer.php'
                    ),
                )
            ),
            array(
                'name'  => 'Projects',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_projects_dashboard.php'
                    ),
                    array(
                        'name'  => 'Project Tasks',
                        'url'   => 'be_pages_projects_tasks.php'
                    ),
                    array(
                        'name'  => 'Create',
                        'url'   => 'be_pages_projects_create.php'
                    ),
                    array(
                        'name'  => 'Edit',
                        'url'   => 'be_pages_projects_edit.php'
                    )
                )
            ),
            array(
                'name'  => 'Jobs',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_jobs_dashboard.php'
                    ),
                    array(
                        'name'  => 'Listing',
                        'url'   => 'be_pages_jobs_listing.php'
                    ),
                    array(
                        'name'  => 'Apply',
                        'url'   => 'be_pages_jobs_apply.php'
                    ),
                    array(
                        'name'  => 'Post',
                        'url'   => 'be_pages_jobs_post.php'
                    )
                )
            ),
            array(
                'name'  => 'Education',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_education_dashboard.php'
                    ),
                    array(
                        'name'  => 'Course',
                        'url'   => 'be_pages_education_course.php'
                    ),
                    array(
                        'name'  => 'Authors',
                        'url'   => 'be_pages_education_authors.php'
                    )
                )
            ),
            array(
                'name'  => 'Forum',
                'sub'   => array(
                    array(
                        'name'  => 'Categories',
                        'url'   => 'be_pages_forum_categories.php'
                    ),
                    array(
                        'name'  => 'Topics',
                        'url'   => 'be_pages_forum_topics.php'
                    ),
                    array(
                        'name'  => 'Discussion',
                        'url'   => 'be_pages_forum_discussion.php'
                    )
                )
            ),
            array(
                'name'  => 'Blog',
                'sub'   => array(
                    array(
                        'name'  => 'Classic',
                        'url'   => 'be_pages_blog_classic.php'
                    ),
                    array(
                        'name'  => 'List',
                        'url'   => 'be_pages_blog_list.php'
                    ),
                    array(
                        'name'  => 'Grid',
                        'url'   => 'be_pages_blog_grid.php'
                    ),
                    array(
                        'name'  => 'Story',
                        'url'   => 'be_pages_blog_story.php'
                    ),
                    array(
                        'name'  => 'Story Cover',
                        'url'   => 'be_pages_blog_story_cover.php'
                    ),
                    array(
                        'name'  => 'Manage Posts',
                        'url'   => 'be_pages_blog_post_manage.php'
                    ),
                    array(
                        'name'  => 'Add Post',
                        'url'   => 'be_pages_blog_post_add.php'
                    ),
                    array(
                        'name'  => 'Edit Post',
                        'url'   => 'be_pages_blog_post_edit.php'
                    )
                )
            ),
            array(
                'name'  => 'Boxed Backend',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'bd_dashboard.php'
                    ),
                    array(
                        'name'  => 'Search',
                        'url'   => 'bd_search.php'
                    ),
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
                    )
                )
            ),
            array(
                'name'  => 'Special',
                'sub'   => array(
                    array(
                        'name'  => 'Checkout',
                        'url'   => 'op_checkout.php'
                    ),
                    array(
                        'name'  => 'Maintenance',
                        'url'   => 'op_maintenance.php'
                    ),
                    array(
                        'name'  => 'Status',
                        'url'   => 'op_status.php'
                    ),
                    array(
                        'name'  => 'Installation',
                        'url'   => 'op_installation.php'
                    ),
                    array(
                        'name'  => 'Coming Soon',
                        'url'   => 'op_coming_soon.php'
                    ),
                    array(
                        'name'  => 'Coming Soon 2',
                        'url'   => 'op_coming_soon_2.php'
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Base',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Blocks',
        'icon'  => 'fa fa-border-all',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks_styles.php'
            ),
            array(
                'name'  => 'Options',
                'url'   => 'be_blocks_options.php'
            ),
            array(
                'name'  => 'Forms',
                'url'   => 'be_blocks_forms.php'
            ),
            array(
                'name'  => 'Themed',
                'url'   => 'be_blocks_themed.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => 'Widgets',
        'icon'  => 'fa fa-boxes',
        'sub'   => array(
            array(
                'name'  => 'Tiles',
                'url'   => 'be_widgets_tiles.php'
            ),
            array(
                'name'  => 'Statistics',
                'url'   => 'be_widgets_stats.php'
            ),
            array(
                'name'  => 'Media',
                'url'   => 'be_widgets_media.php'
            ),
            array(
                'name'  => 'Users',
                'url'   => 'be_widgets_users.php'
            ),
            array(
                'name'  => 'Blog',
                'url'   => 'be_widgets_blog.php'
            ),
            array(
                'name'  => 'Various',
                'url'   => 'be_widgets_various.php'
            )
        )
    ),
    array(
        'name'  => 'Layout',
        'icon'  => 'fa fa-vector-square',
        'sub'   => array(
            array(
                'name'  => 'Page',
                'sub'   => array(
                    array(
                        'name'  => 'Default',
                        'url'   => 'be_layout_page_default.php'
                    ),
                    array(
                        'name'  => 'Flipped',
                        'url'   => 'be_layout_page_flipped.php'
                    ),
                    array(
                        'name'  => 'Native Scrolling',
                        'url'   => 'be_layout_page_native_scrolling.php'
                    )
                )
            ),
            array(
                'name'  => 'Main Content',
                'sub'   => array(
                    array(
                        'name'  => 'Full Width',
                        'url'   => 'be_layout_content_main_full_width.php'
                    ),
                    array(
                        'name'  => 'Narrow',
                        'url'   => 'be_layout_content_main_narrow.php'
                    ),
                    array(
                        'name'  => 'Boxed',
                        'url'   => 'be_layout_content_main_boxed.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Content',
                'sub'   => array(
                    array(
                        'name'  => 'Left',
                        'url'   => 'be_layout_content_side_left.php'
                    ),
                    array(
                        'name'  => 'Right',
                        'url'   => 'be_layout_content_side_right.php'
                    )
                )
            ),
            array(
                'name'  => 'Hero',
                'sub'   => array(
                    array(
                        'name'  => 'Color',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_color_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_color_light.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Image',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_image_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_image_light.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Video',
                        'sub'   => array(
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_hero_video_dark.php'
                            ),
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_hero_video_light.php'
                            )
                        )
                    )
                )
            ),
            array(
                'name'  => 'Header',
                'sub'   => array(
                    array(
                        'name'  => 'Fixed',
                        'sub'   => array(
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_header_fixed_light.php'
                            ),
                            array(
                                'name'  => 'Light Glass',
                                'url'   => 'be_layout_header_fixed_light_glass.php'
                            ),
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_header_fixed_dark.php'
                            ),
                            array(
                                'name'  => 'Dark Glass',
                                'url'   => 'be_layout_header_fixed_dark_glass.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Static',
                        'sub'   => array(
                            array(
                                'name'  => 'Light',
                                'url'   => 'be_layout_header_static_light.php'
                            ),
                            array(
                                'name'  => 'Light Glass',
                                'url'   => 'be_layout_header_static_light_glass.php'
                            ),
                            array(
                                'name'  => 'Dark',
                                'url'   => 'be_layout_header_static_dark.php'
                            ),
                            array(
                                'name'  => 'Dark Glass',
                                'url'   => 'be_layout_header_static_dark_glass.php'
                            )
                        )
                    ),
                )
            ),
            array(
                'name'  => 'Footer',
                'sub'   => array(
                    array(
                        'name'  => 'Static',
                        'url'   => 'be_layout_footer_static.php'
                    ),
                    array(
                        'name'  => 'Fixed',
                        'url'   => 'be_layout_footer_fixed.php'
                    )
                )
            ),
            array(
                'name'  => 'Sidebar',
                'sub'   => array(
                    array(
                        'name'  => 'Mini',
                        'url'   => 'be_layout_sidebar_mini.php'
                    ),
                    array(
                        'name'  => 'Light',
                        'url'   => 'be_layout_sidebar_light.php'
                    ),
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_sidebar_dark.php'
                    ),
                    array(
                        'name'  => 'Hidden',
                        'url'   => 'be_layout_sidebar_hidden.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Overlay',
                'sub'   => array(
                    array(
                        'name'  => 'Visible',
                        'url'   => 'be_layout_side_overlay_visible.php'
                    ),
                    array(
                        'name'  => 'Hover Mode',
                        'url'   => 'be_layout_side_overlay_mode_hover.php'
                    ),
                    array(
                        'name'  => 'No Page Overlay',
                        'url'   => 'be_layout_side_overlay_no_page_overlay.php'
                    )
                )
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_layout_api.php'
            )
        )
    ),
    array(
        'name'  => 'Interface',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Elements',
        'icon'  => 'fa fa-flask',
        'sub'   => array(
            array(
                'name'  => 'Icon Packs',
                'url'   => 'be_ui_icons.php'
            ),
            array(
                'name'  => 'Grid',
                'url'   => 'be_ui_grid.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'be_ui_typography.php'
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'be_ui_navigation.php'
            ),
            array(
                'name'  => 'Horizontal Nav',
                'url'   => 'be_ui_navigation_horizontal.php'
            ),
            array(
                'name'  => 'Mega Menu',
                'url'   => 'be_ui_mega_menu.php'
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'be_ui_tabs.php'
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'be_ui_buttons.php'
            ),
            array(
                'name'  => 'Button Groups',
                'url'   => 'be_ui_buttons_groups.php'
            ),
            array(
                'name'  => 'Dropdowns',
                'url'   => 'be_ui_dropdowns.php'
            ),
            array(
                'name'  => 'Progress',
                'url'   => 'be_ui_progress.php'
            ),
            array(
                'name'  => 'Alerts',
                'url'   => 'be_ui_alerts.php'
            ),
            array(
                'name'  => 'Tooltips',
                'url'   => 'be_ui_tooltips.php'
            ),
            array(
                'name'  => 'Popovers',
                'url'   => 'be_ui_popovers.php'
            ),
            array(
                'name'  => 'Accordion',
                'url'   => 'be_ui_accordion.php'
            ),
            array(
                'name'  => 'Modals',
                'url'   => 'be_ui_modals.php'
            ),
            array(
                'name'  => 'Images Overlay',
                'url'   => 'be_ui_images.php'
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'be_ui_timeline.php'
            ),
            array(
                'name'  => 'Ribbons',
                'url'   => 'be_ui_ribbons.php'
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'be_ui_animations.php'
            ),
            array(
                'name'  => 'Backgrounds',
                'url'   => 'be_ui_backgrounds.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'be_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => 'Tables',
        'icon'  => 'fa fa-grip-horizontal',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_tables_styles.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'be_tables_responsive.php'
            ),
            array(
                'name'  => 'Helpers',
                'url'   => 'be_tables_helpers.php'
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'be_tables_pricing.php'
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'be_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => 'Forms',
        'icon'  => 'fa fa-sticky-note',
        'sub'   => array(
            array(
                'name'  => 'Elements',
                'url'   => 'be_forms_elements.php'
            ),
            array(
                'name'  => 'Layouts',
                'url'   => 'be_forms_layouts.php'
            ),
            array(
                'name'  => 'Input Groups',
                'url'   => 'be_forms_input_groups.php'
            ),
            array(
                'name'  => 'Plugins',
                'url'   => 'be_forms_plugins.php'
            ),
            array(
                'name'  => 'Editors',
                'url'   => 'be_forms_editors.php'
            ),
            array(
                'name'  => 'CKEditor 5',
                'sub'   => array(
                    array(
                        'name'  => 'Classic',
                        'url'   => 'be_forms_ckeditor5_classic.php'
                    ),
                    array(
                        'name'  => 'Inline',
                        'url'   => 'be_forms_ckeditor5_inline.php'
                    ),
                )
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'be_forms_validation.php'
            )
        )
    ),
    array(
        'name'  => 'Extend',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'fa fa-wrench',
        'sub'   => array(
            array(
                'name'  => 'Chat',
                'url'   => 'be_comp_chat.php'
            ),
            array(
                'name'  => 'Onboarding',
                'url'   => 'be_comp_onboarding.php'
            ),
            array(
                'name'  => 'Nestable',
                'url'   => 'be_comp_nestable.php'
            ),
            array(
                'name'  => 'Dialogs',
                'url'   => 'be_comp_dialogs.php'
            ),
            array(
                'name'  => 'Notifications',
                'url'   => 'be_comp_notifications.php'
            ),
            array(
                'name'  => 'Loaders',
                'url'   => 'be_comp_loaders.php'
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Carousel',
                'url'   => 'be_comp_carousel.php'
            ),
            array(
                'name'  => 'Offcanvas',
                'url'   => 'be_comp_offcanvas.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            )
        )
    ),
    array(
        'name'  => 'Main Menu',
        'icon'  => 'fa fa-cog',
        'sub'   => array(
            array(
                'name'  => '1.1 Item',
                'icon'  => 'fa fa-inbox',
                'url'   => '#'
            ),
            array(
                'name'  => '1.2 Item',
                'icon'  => 'fa fa-fire',
                'url'   => '#'
            ),
            array(
                'name'  => '1.3 Item',
                'icon'  => 'fa fa-share-alt',
                'url'   => '#'
            ),
            array(
                'name'  => 'Sub Level 2',
                'badge' => 3,
                'sub'   => array(
                    array(
                        'name'  => '2.1 Item',
                        'icon'  => 'fa fa-tag',
                        'badge' => array(2, 'info'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => '2.2 Item',
                        'icon'  => 'fa fa-chart-pie',
                        'badge' => array(2, 'danger'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => '2.3 Item',
                        'icon'  => 'fa fa-sticky-note',
                        'badge' => array(3, 'warning'),
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Sub Level 3',
                        'sub'   => array(
                            array(
                                'name'  => '3.1 Item',
                                'icon'  => 'fa fa-map',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => '3.2 Item',
                                'icon'  => 'fa fa-coffee',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => '3.3 Item',
                                'icon'  => 'fa fa-user-astronaut',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Sub Level 4',
                                'sub'   => array(
                                    array(
                                        'name'  => '4.1 Item',
                                        'icon'  => 'fa fa-heart',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => '4.2 Item',
                                        'icon'  => 'fa fa-search',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => '4.3 Item',
                                        'icon'  => 'fa fa-microphone',
                                        'url'   => '#'
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Dashboards',
        'icon'  => 'fa fa-rocket',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_dashboard_all.php'
            ),
            array(
                'name'  => 'Corporate v1',
                'url'   => 'be_pages_dashboard_v1.php'
            ),
            array(
                'name'  => 'Social',
                'url'   => 'db_social.php'
            ),
            array(
                'name'  => 'Messages',
                'url'   => 'db_messages.php'
            ),
            array(
                'name'  => 'Dark',
                'url'   => 'db_dark.php'
            ),
            array(
                'name'  => 'Minimal',
                'url'   => 'db_minimal.php'
            ),
            array(
                'name'  => 'Modern',
                'url'   => 'db_modern.php'
            ),
            array(
                'name'  => 'Classic Boxed',
                'url'   => 'db_classic_boxed.php'
            ),
            array(
                'name'  => 'Banking',
                'url'   => 'db_banking.php'
            ),
            array(
                'name'  => 'Crypto',
                'url'   => 'db_crypto.php'
            ),
            array(
                'name'  => 'Hosting',
                'url'   => 'db_hosting.php'
            ),
            array(
                'name'  => 'Booking',
                'url'   => 'db_booking.php'
            ),
            array(
                'name'  => 'Gaming',
                'url'   => 'db_gaming.php'
            ),
            array(
                'name'  => 'Tasks',
                'url'   => 'db_tasks.php'
            ),
            array(
                'name'  => 'Medical',
                'url'   => 'db_medical.php'
            ),
            array(
                'name'  => 'Travel',
                'url'   => 'db_travel.php'
            ),
            array(
                'name'  => 'Social Compact',
                'url'   => 'db_social_compact.php'
            ),
            array(
                'name'  => 'Chat',
                'url'   => 'db_chat.php'
            ),
            array(
                'name'  => 'Analytics',
                'url'   => 'db_analytics.php'
            ),
            array(
                'name'  => 'Corporate Slim',
                'url'   => 'db_corporate_slim.php'
            ),
            array(
                'name'  => 'WP Post',
                'url'   => 'db_wp_post.php'
            ),
            array(
                'name'  => 'File Hosting',
                'url'   => 'db_file_hosting.php'
            )
        )
    ),
    array(
        'name'  => 'Auth',
        'icon'  => 'fa fa-user-friends',
        'sub'   => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_auth_all.php'
            ),
            array(
                'name'  => 'Sign In',
                'url'   => 'op_auth_signin.php'
            ),
            array(
                'name'  => 'Sign In Box',
                'url'   => 'op_auth_signin_box.php'
            ),
            array(
                'name'  => 'Sign In Box Alt',
                'url'   => 'op_auth_signin_box_alt.php'
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'op_auth_signup.php'
            ),
            array(
                'name'  => 'Sign Up Box',
                'url'   => 'op_auth_signup_box.php'
            ),
            array(
                'name'  => 'Sign Up Box Alt',
                'url'   => 'op_auth_signup_box_alt.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'op_auth_lock.php'
            ),
            array(
                'name'  => 'Lock Screen Box',
                'url'   => 'op_auth_lock_box.php'
            ),
            array(
                'name'  => 'Lock Screen Box Alt',
                'url'   => 'op_auth_lock_box_alt.php'
            ),
            array(
                'name'  => 'Pass Reminder',
                'url'   => 'op_auth_reminder.php'
            ),
            array(
                'name'  => 'Pass Reminder Box',
                'url'   => 'op_auth_reminder_box.php'
            ),
            array(
                'name'  => 'Pass Reminder Box Alt',
                'url'   => 'op_auth_reminder_box_alt.php'
            )
        )
    ),
    array(
        'name'  => 'Error',
        'icon'  => 'fa fa-ghost',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_error_all.php'
            ),
            array(
                'name'  => '400',
                'url'   => 'op_error_400.php'
            ),
            array(
                'name'  => '401',
                'url'   => 'op_error_401.php'
            ),
            array(
                'name'  => '403',
                'url'   => 'op_error_403.php'
            ),
            array(
                'name'  => '404',
                'url'   => 'op_error_404.php'
            ),
            array(
                'name'  => '500',
                'url'   => 'op_error_500.php'
            ),
            array(
                'name'  => '503',
                'url'   => 'op_error_503.php'
            )
        )
    ),
    array(
        'name'  => 'Get Started',
        'icon'  => 'fa fa-coffee',
        'sub'   => array(
            array(
                'name'  => 'Backend',
                'url'   => 'gs_backend.php'
            ),
            array(
                'name'  => 'Backend Boxed',
                'url'   => 'gs_backend_boxed.php'
            ),
            array(
                'name'  => 'Landing',
                'url'   => 'gs_landing.php'
            ),
            array(
                'name'  => 'RTL Backend',
                'url'   => 'gs_rtl_backend.php'
            ),
            array(
                'name'  => 'RTL Backend Boxed',
                'url'   => 'gs_rtl_backend_boxed.php'
            ),
            array(
                'name'  => 'RTL Landing',
                'url'   => 'gs_rtl_landing.php'
            ),
        )
    )
);
