<?php
/**
 * backend/views/inc_sidebar_mini_nav.php
 *
 * Author: pixelcave
 *
 * An example sidebar showcasing a mini vertical navigation along with the main navigation
 *
 */
?>

<!-- Sidebar -->
<!--
  Sidebar Mini Mode is not supported with mini navigation
-->
<nav id="sidebar" class="with-mini-nav" aria-label="Main Navigation">
  <!-- Sidebar Mini Nav -->
  <div class="sidebar-mini-nav">
    <!-- Logo -->
    <a href="index.php" class="mini-nav-item h-header">
      <i class="fa fa-times text-primary-light fs-lg"></i>
    </a>
    <!-- END Logo -->

    <!-- Mini Main Nav -->
    <nav class="flex-grow-1 space-y-1">
      <a class="mini-nav-item" href="javascript:void(0)">
        <i class="fa fa-briefcase fs-sm"></i>
      </a>
      <a class="mini-nav-item" href="javascript:void(0)">
        <i class="fa fa-chart-pie fs-sm"></i>
      </a>
      <a class="mini-nav-item" href="javascript:void(0)">
        <i class="fa fa-users fs-sm"></i>
      </a>
    </nav>
    <!-- END Mini Main Nav -->

    <!-- Mini User Nav -->
    <nav class="space-y-1 pb-2">
      <a class="mini-nav-item" href="be_pages_generic_profile.php">
        <i class="fa fa-cog fs-sm"></i>
      </a>
      <a class="mini-nav-item" href="op_auth_signin.php">
        <i class="fa fa-lock fs-sm"></i>
      </a>
    </nav>
    <!-- END Mini User Nav -->
  </div>
  <!-- END Sidebar Mini Nav -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll full-height">
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
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
          </button>
          <!-- END Toggle Sidebar Style -->
          
          <!-- Dark Mode -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
            <i class="far fa-moon" id="dark-mode-toggler"></i>
          </button>
          <!-- END Dark Mode -->

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

    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <?php $dm->build_nav(); ?>
      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
