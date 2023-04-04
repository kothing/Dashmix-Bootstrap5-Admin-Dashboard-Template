<?php
/**
 * dashboards/tasks/views/inc_header.php
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
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->
    </div>
    <!-- END Left Section -->

    <!-- Middle Section -->
    <div>
      <!-- Logo -->
      <a class="fw-semibold text-dual tracking-wide" href="index.php">
        Dash<span class="opacity-75">mix</span>
        <span class="fw-normal">Tasks</span>
      </a>
      <!-- END Logo -->
    </div>
    <!-- END Middle Section -->

    <!-- Right Section -->
    <div>
      <!-- Shortcuts Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-shortcuts-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-th-large"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-shortcuts-dropdown">
          <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22.jpg');">
            <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
              <div class="fs-4">
                Projects
              </div>
              <div class="fs-6 fw-normal text-white-75">
                Most Recent
              </div>
            </div>
          </div>
          <div class="row g-0 bg-body-extra-light push">
            <div class="col-6">
              <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full ratio ratio-4x3">
                  <div class="d-flex justify-content-center align-items-center">
                    <div>
                      <i class="fa fa-2x fa-briefcase text-success"></i>
                      <div class="fw-semibold mt-2">Acme Inc</div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full ratio ratio-4x3">
                  <div class="d-flex justify-content-center align-items-center">
                    <div>
                      <i class="fa fa-2x fa-briefcase text-warning"></i>
                      <div class="fw-semibold mt-2">Example.com</div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full ratio ratio-4x3">
                  <div class="d-flex justify-content-center align-items-center">
                    <div>
                      <i class="fa fa-2x fa-briefcase text-info"></i>
                      <div class="fw-semibold mt-2">Store Inc</div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full ratio ratio-4x3">
                  <div class="d-flex justify-content-center align-items-center">
                    <div>
                      <i class="fa fa-2x fa-briefcase text-danger"></i>
                      <div class="fw-semibold mt-2">Test Ltd</div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Shortcuts Dropdown -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-white">
    <div class="content-header">
      <form class="w-100" action="be_pages_generic_search.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
            <i class="fa fa-fw fa-times-circle"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-white">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-2x fa-sun fa-spin"></i>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
