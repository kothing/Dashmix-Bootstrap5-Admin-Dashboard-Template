<?php
/**
 * dashboards/tasks/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page (Backend pages)
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
  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll full-height">
    <!-- Side Header - Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <a class="content-header bg-black-10 justify-content-center text-danger d-lg-none" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
      <i class="fa fa-2x fa-times-circle"></i>
    </a>
    <!-- END Side Header - Close Side Overlay -->

    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <?php $dm->build_nav(); ?>
      </ul>
    </div>
    <!-- END Side Navigation -->

    <!-- Side Actions -->
    <div class="content-side smini-hide">
      <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
        <i class="fa fa-plus opacity-50 me-1"></i> Add Project
      </a>
    </div>
    <!-- END Side Actions -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
