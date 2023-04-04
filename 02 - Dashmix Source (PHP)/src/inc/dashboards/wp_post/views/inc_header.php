<?php
/**
 * dashboards/wp_post/views/inc_header.php
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

      <!-- Website Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-website-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-home"></i>
          <span class="d-none d-sm-inline ms-1">Website</span>
        </button>
        <div class="dropdown-menu p-0" aria-labelledby="page-header-website-dropdown">
          <div class="p-2">
            <a class="dropdown-item mb-0" href="index.php">
              <i class="fa fa-fw fa-globe me-1"></i> Visit Site
            </a>
          </div>
        </div>
      </div>
      <!-- END Website Dropdown -->

      <!-- Comments -->
      <a class="btn btn-alt-secondary d-none d-sm-inline-block" href="javascript:void(0)">
        <i class="fa fa-fw fa-comment"></i>
        <span class="badge bg-black-50">3</span>
      </a>
      <!-- END Comments -->

      <!-- New Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-new-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-plus"></i>
          <span class="d-none d-sm-inline ms-1">New</span>
        </button>
        <div class="dropdown-menu p-0" aria-labelledby="page-header-new-dropdown">
          <div class="p-2">
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fa fa-fw fa-thumbtack me-1"></i> Post
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fa fa-fw fa-camera me-1"></i> Media
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fa fa-fw fa-file me-1"></i> Page
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fa fa-fw fa-user me-1"></i> User
            </a>
          </div>
        </div>
      </div>
      <!-- END New Dropdown -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="d-none d-lg-inline me-2">Howdy, John Doe</span>
          <i class="fa fa-angle-down opacity-50"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" aria-labelledby="page-header-user-dropdown">
          <div class="row g-0">
            <div class="col-6 d-flex align-items-center justify-content-center bg-body-light p-2">
              <?php $dm->get_avatar(10, '', 96, true); ?>
            </div>
            <div class="col-6 p-2 bg-body-extra-light">
              <a class="dropdown-item" href="be_pages_generic_profile.php">
                John Doe
                <div class="fs-sm text-muted">johndoe</div>
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                Edit My Profile
              </a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item" href="op_auth_signin.php">
                Log Out
              </a>
            </div>
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
          <input type="text" class="form-control border-0" placeholder="Search WP Post.." id="page-header-search-input" name="page-header-search-input">
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
