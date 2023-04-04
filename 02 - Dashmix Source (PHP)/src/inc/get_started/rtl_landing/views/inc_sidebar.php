<?php
/**
 * get_started/rtl_landing/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page
 *
 */
?>

<!-- Sidebar -->
<!--
  Sidebar Mini Mode - Display Helper classes

  Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
  Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

  Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
  Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
  Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
  <!-- Side Header -->
  <div class="bg-header-dark">
    <div class="content-header bg-white-5">
      <!-- Logo -->
      <a class="fw-semibold text-white tracking-wide" href="index.php">
        <span class="smini-visible">
          D<span class="opacity-75">x</span>
        </span>
        <span class="smini-hidden">
          Dash<span class="opacity-75">mix</span>
        </span>
      </a>
      <!-- END Logo -->

      <!-- Options -->
      <div>
        <!-- Toggle Sidebar Style -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');">
          <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
        </button>
        <!-- END Toggle Sidebar Style -->

        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
          <i class="fa fa-times-circle"></i>
        </button>
        <!-- END Close Sidebar -->
      </div>
      <!-- END Options -->
    </div>
  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <?php $dm->build_nav(); ?>
        <li class="nav-main-heading">Extra</li>
        <li class="nav-main-item ms-lg-auto">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-brush"></i>
            <span class="nav-main-link-name">Themes</span>
          </a>
          <ul class="nav-main-submenu nav-main-submenu-right">
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                <i class="nav-main-link-icon fa fa-circle text-default"></i>
                <span class="nav-main-link-name">Default</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                <span class="nav-main-link-name">xWork</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                <span class="nav-main-link-name">xModern</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                <span class="nav-main-link-name">xEco</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                <span class="nav-main-link-name">xSmooth</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                <span class="nav-main-link-name">xInspire</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                <span class="nav-main-link-name">xDream</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                <span class="nav-main-link-name">xPro</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                <span class="nav-main-link-name">xPlay</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
