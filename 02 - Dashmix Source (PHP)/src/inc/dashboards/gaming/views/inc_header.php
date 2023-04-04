<?php
/**
 * dashboards/gaming/views/inc_header.php
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
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary me-1" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-server"></i>
          <span class="d-none d-sm-inline ms-1">Server: MC_1685</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0" aria-labelledby="page-header-user-dropdown">
          <div class="rounded-top fw-semibold text-center bg-body-light p-3">
            <div class="mb-1">
              <i class="fa fa-users opacity-50 me-1"></i> 12/16
            </div>
            <span class="badge bg-success d-inline-block mb-3">
              <i class="fa fa-spinner fa-spin me-1"></i> Running
            </span>
            <div class="row g-sm">
              <div class="col-6">
                <button type="button" class="btn btn-sm btn-primary w-100">
                  <i class="fa fa-stop opacity-50 me-1"></i> Stop
                </button>
              </div>
              <div class="col-6">
                <button type="button" class="btn btn-sm btn-alt-primary w-100">
                  <i class="fa fa-redo opacity-50 me-1"></i> Restart
                </button>
              </div>
            </div>
          </div>
          <div class="p-2">
            <a class="dropdown-item" href="javascript:void(0)">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold">
                  Server: MC_2345
                </span>
                <i class="fa fa-fw fa-server ms-1"></i>
              </div>
              <div class="fs-sm">
                <i class="fa fa-circle text-success me-1"></i> Friends
              </div>
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold">
                  Server: MC_0092
                </span>
                <i class="fa fa-fw fa-server ms-1"></i>
              </div>
              <div class="fs-sm">
                <i class="fa fa-circle text-danger me-1"></i> Family
              </div>
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-semibold">
                  Server: MC_5679
                </span>
                <i class="fa fa-fw fa-server ms-1"></i>
              </div>
              <div class="fs-sm">
                <i class="fa fa-circle text-success me-1"></i> Personal
              </div>
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              <div>
                <span class="fw-semibold">Add New Server</span>
                <p class="fs-sm text-muted mb-0">
                  $10 per month
                </p>
              </div>
              <i class="fa fa-fw fa-plus text-primary ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- END User Dropdown -->

      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="fa fa-fw fa-cogs"></i>
      </button>
      <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-primary">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control border-0" placeholder="Search your network.." id="page-header-search-input" name="page-header-search-input">
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
