<?php
/**
 * dashboards/corporate_slim/views/inc_sidebar.php
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
  <div class="content-header bg-primary">
    <!-- Logo -->
    <a class="fw-semibold text-white tracking-wide" href="index.php">
      Dash<span class="opacity-75">mix</span>
      <span class="fw-normal">Slim</span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>
      <!-- Close Sidebar, Visible only on mobile screens -->
      <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
    <!-- User Info -->
    <div class="smini-hidden">
      <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
        <a class="img-link d-inline-block" href="javascript:void(0)">
          <?php $dm->get_avatar(13, '', 48, true); ?>
        </a>
        <div class="ms-3">
          <a class="fw-semibold text-dual" href="javascript:void(0)">John Doe</a>
          <div class="fs-sm text-dual">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- END User Info -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
      <ul class="nav-main">
        <?php $dm->build_nav(); ?>
      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
