<?php
/**
 * landing/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of landing page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header justify-content-center justify-content-lg-between">
    <!-- Left Section -->
    <div class="d-flex align-items-center">
      <!-- Logo -->
      <a class="link-fx fs-lg fw-semibold text-dark" href="">
        Dash<span class="text-primary">mix</span>
        <small class="fw-medium"><?php echo $dm->version; ?></small>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="d-none d-lg-flex align-items-center">
      <!-- Menu -->
      <ul class="nav-main nav-main-horizontal nav-main-hover">
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-package">
            <i class="nav-main-link-icon fa fa-box"></i>
            <span class="nav-main-link-name">Package</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-dashboards">
            <i class="nav-main-link-icon fa fa-compass"></i>
            <span class="nav-main-link-name">Dashboards</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-widgets">
            <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
            <span class="nav-main-link-name">Widgets</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-layout">
            <i class="nav-main-link-icon fa fa-fire"></i>
            <span class="nav-main-link-name">Layout</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-toolkit">
            <i class="nav-main-link-icon fab fa-node-js"></i>
            <span class="nav-main-link-name">Toolkit</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link" href="#dm-features">
            <i class="nav-main-link-icon fa fa-heartbeat"></i>
            <span class="nav-main-link-name">Features</span>
          </a>
        </li>
      </ul>
      <!-- END Menu -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-sidebar-dark">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-sidebar-dark">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
