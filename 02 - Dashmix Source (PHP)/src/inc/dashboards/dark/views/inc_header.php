<?php
/**
 * dashboards/dark/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div>
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
      <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-user"></i>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50"></i>
        </button>
        <div class="dropdown-menu p-0" aria-labelledby="page-header-user-dropdown">
          <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
            User Options
          </div>
          <div class="p-2">
            <a class="dropdown-item" href="be_pages_generic_profile.php">
              <i class="far fa-fw fa-user me-1"></i> Profile
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.php">
              <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
              <span class="badge bg-primary">3</span>
            </a>
            <a class="dropdown-item" href="be_pages_generic_invoice.php">
              <i class="far fa-fw fa-file-alt me-1"></i> Invoices
            </a>
            <div role="separator" class="dropdown-divider"></div>

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="far fa-fw fa-building me-1"></i> Settings
            </a>
            <!-- END Side Overlay -->

            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="op_auth_signin.php">
              <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="fa fa-fw fa-cogs"></i>
      </button>
      <!-- END Toggle Side Overlay -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i>
      </button>
      <!-- END Open Search Section -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-primary">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-primary-darker">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
