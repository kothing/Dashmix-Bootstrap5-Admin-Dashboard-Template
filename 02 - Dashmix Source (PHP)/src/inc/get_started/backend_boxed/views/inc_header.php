<?php
/**
 * get_started/backend_boxed/views/inc_header.php
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
    <div class="d-flex align-items-center">
      <!-- Logo -->
      <a class="fw-semibold text-dual tracking-wide" href="index.php">
        Dash<span class="opacity-75">mix</span>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- Open Search Section -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-alt-secondary ms-2" data-toggle="layout" data-action="header_search_on">
        <i class="fa fa-search"></i>
      </button>
      <!-- END Open Search Section -->

      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle"></i>
          <i class="fa fa-angle-down opacity-50 ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
          <div class="rounded-top fw-semibold text-white bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');">
            <div class="p-3 bg-black-50 rounded-top">
              <div class="d-flex align-items-center">
                <?php $dm->get_avatar(1, '', 48, true); ?>
                <div class="ms-3">
                  <a class="text-white fw-semibold" href="javascript:void(0)">Admin</a>
                  <div class="fs-sm text-white-75">admin@example.com</div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              <div>
                <i class="fa fa-fw fa-globe text-muted me-1"></i>
                Projects
              </div>
              <span class="badge rounded-pill bg-primary">3</span>
            </a>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              <div>
                <i class="fa fa-fw fa-sync-alt text-muted me-1"></i>
                Servers
              </div>
              <span class="badge rounded-pill bg-primary">3</span>
            </a>
            <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
              <div>
                <i class="fa fa-fw fa-users text-muted me-1"></i>
                Customers
              </div>
              <span class="badge rounded-pill bg-primary">3</span>
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
              <i class="fa fa-fw fa-user-circle text-muted me-1"></i>
              Profile
            </a>
            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
              <i class="fab fa-fw fa-paypal text-muted me-1"></i>
              Billing
            </a>
            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">
              <i class="fa fa-fw fa-wrench text-muted me-1"></i>
              Preferences
            </a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center mb-0" href="javascript:void(0)">
              <i class="fa fa-fw fa-sign-out-alt text-danger me-1"></i>
              Log Out
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
      <form class="w-100" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search your projects.." id="page-header-search-input" name="page-header-search-input">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
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
        <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
