<?php
/**
 * dashboards/crypto/views/inc_header.php
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
      <!-- Logo -->
      <a class="fw-semibold text-dual tracking-wide" href="index.php">
        Dash<span class="opacity-75">mix</span>
        <span class="fw-normal">Crypto</span>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php $dm->get_avatar(12, '', 32, true); ?>
          <i class="fa fa-fw fa-angle-down ms-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0" aria-labelledby="page-header-user-dropdown">
          <div class="rounded-top fw-semibold text-center p-3 border-bottom bg-body-light">
            <div class="mb-2">
              <?php $dm->get_avatar(12, '', 48, true); ?>
            </div>
            <a class="fw-semibold" href="javascript:void(0)">George Taylor</a>
            <div class="fs-sm">g.taylor@example.com</div>
          </div>
          <div class="p-2">
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fa fa-fw fa-cog text-gray me-1"></i> Settings
            </a>
            <a class="dropdown-item mb-0" href="javascript:void(0)">
              <i class="fa fa-fw fa-envelope-open text-gray me-1"></i> Contact Support
            </a>
          </div>
          <div class="p-2 border-top border-bottom">
            <a class="dropdown-item fw-semibold mb-0" href="javascript:void(0)">
              <i class="fa fa-fw fa-user-friends text-gray me-1"></i> Invite friends and get $20!
            </a>
          </div>
          <div class="p-2">
            <a class="dropdown-item mb-0" href="op_auth_signin.php">
              <i class="fa fa-fw fa-arrow-alt-circle-left text-gray me-1"></i> Sign Out
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
  <div id="page-header-search" class="overlay-header bg-primary">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
          <input type="text" class="form-control border-0" placeholder="Search.." id="page-header-search-input" name="page-header-search-input">
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
