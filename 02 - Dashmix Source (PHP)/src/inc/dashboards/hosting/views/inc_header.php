<?php
/**
 * dashboards/hosting/views/inc_header.php
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
      <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-fw fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search..</span>
      </button>
      <!-- END Open Search Section -->

      <!-- Search form in larger screens -->
      <form class="d-none d-lg-inline-block" action="be_pages_generic_search.php" method="POST">
        <input type="text" class="form-control form-control-alt rounded-pill px-4" placeholder="Search.." id="page-header-search-input-full" name="page-header-search-input-full">
      </form>
      <!-- END Search form in larger screens -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="d-none d-lg-inline mx-1">mattd@example.com</span>
          <span class="badge rounded-pill bg-success">PRO</span>
          <i class="fa fa-fw fa-angle-down ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0" aria-labelledby="page-header-user-dropdown">
          <div class="bg-primary rounded-top fw-semibold text-white text-center p-3">
            <?php $dm->get_avatar(16, '', 64, true); ?>
            <div class="pt-2">
              <a class="text-white fw-semibold" href="be_pages_generic_profile.php">Matt Doe</a>
            </div>
          </div>
          <div class="p-2">
            <div class="row g-0">
              <div class="col-6 pe-2 border-end">
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Profile
                  <i class="fa fa-fw fa-user opacity-50 ms-1"></i>
                </a>
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Settings
                  <i class="fa fa-fw fa-cog opacity-50 ms-1"></i>
                </a>
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Billing
                  <i class="fa fa-fw fa-money-check-alt opacity-50 ms-1"></i>
                </a>
              </div>
              <div class="col-6 ps-2">
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Servers
                  <i class="fa fa-fw fa-server opacity-50 ms-1"></i>
                </a>
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Domains
                  <i class="fa fa-fw fa-globe opacity-50 ms-1"></i>
                </a>
                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                  Plans
                  <i class="fa fa-fw fa-chess-rook opacity-50 ms-1"></i>
                </a>
              </div>
            </div>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="op_auth_signin.php">
              Sign Out
              <i class="fa fa-fw fa-sign-out-alt text-danger ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->
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
          <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control border-0" placeholder="Search Application.." id="page-header-search-input" name="page-header-search-input">
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
