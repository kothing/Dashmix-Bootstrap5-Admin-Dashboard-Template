<?php
/**
 * dashboards/social/views/inc_sidebar.php
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
  <!-- Side Header (mini Sidebar mode) -->
  <div class="smini-visible-block">
    <div class="content-header bg-primary">
      <!-- Logo -->
      <a class="fw-semibold text-white tracking-wide" href="index.php">
        D<span class="opacity-75">x</span>
      </a>
      <!-- END Logo -->
    </div>
  </div>
  <!-- END Side Header (mini Sidebar mode) -->

  <!-- Side Header (normal Sidebar mode) -->
  <div class="smini-hidden">
    <div class="content-header justify-content-lg-center bg-primary">
      <!-- Logo -->
      <a class="fw-semibold text-white tracking-wide" href="index.php">
        Dash<span class="opacity-75">mix</span>
        <span class="fw-normal">Social</span>
      </a>
      <!-- END Logo -->

      <!-- Options -->
      <div class="d-lg-none">
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
  <!-- END Side Header (normal Sidebar mode) -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
    <!-- User Info -->
    <div class="smini-hidden">
      <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
        <a class="img-link d-inline-block" href="javascript:void(0)">
          <?php $dm->get_avatar(8, '', 48, true); ?>
        </a>
        <div class="ms-3">
          <a class="fw-semibold text-dual" href="javascript:void(0)">Stella Smith</a>
          <div class="fs-sm text-dual">Developer</div>
        </div>
      </div>
    </div>
    <!-- END User Info -->

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
