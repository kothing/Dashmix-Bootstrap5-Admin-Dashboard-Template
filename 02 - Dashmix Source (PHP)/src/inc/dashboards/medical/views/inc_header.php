<?php
/**
 * dashboards/medical/views/inc_header.php
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
      <!-- Notifications Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-flag"></i>
          <span class="badge rounded-pill bg-success">3</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-notifications-dropdown">
          <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo25.jpg');">
            <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
              <div class="fs-4">Notifications</div>
              <div class="fs-6 fw-normal text-white-75">3 New!</div>
            </div>
          </div>
          <ul class="nav-items my-2">
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">New patient was added successfully</div>
                  <div>Mike Smith</div>
                  <div class="text-muted">15 min ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fab fa-fw fa-paypal text-info"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">New payment of $350 was received!</div>
                  <div>From Carol Taylor</div>
                  <div class="text-muted">10 min ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-calendar text-warning"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">New appointment was scheduled!</div>
                  <div>Today at 15:00 with John Doe</div>
                  <div class="text-muted">30 min ago</div>
                </div>
              </a>
            </li>
          </ul>
          <div class="p-2 border-top">
            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
              <i class="fa fa-fw fa-eye me-1"></i> View All
            </a>
          </div>
        </div>
      </div>
      <!-- END Notifications Dropdown -->

      <!-- Shortcuts Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-alt-secondary" id="page-header-shortcuts-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-th-large"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-shortcuts-dropdown">
          <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo21.jpg');">
            <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
              <div class="fs-4">Quick Apps</div>
              <div class="fs-6 fw-normal text-white-75">Shortcuts</div>
            </div>
          </div>
          <div class="row g-0 bg-body-extra-light push">
            <div class="col-6">
              <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                <div class="block-content block-content-full ratio ratio-4x3">
                  <div class="d-flex justify-content-center align-items-center">
                    <div>
                      <i class="fa fa-2x fa-user-md text-xsmooth"></i>
                      <div class="fs-sm fw-semibold mt-2 text-uppercase">Patients</div>
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
                      <i class="fa fa-2x fa-comments text-xmodern"></i>
                      <div class="fs-sm fw-semibold mt-2 text-uppercase">Forum</div>
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
                      <i class="fa fa-2x fa-book text-xeco"></i>
                      <div class="fs-sm fw-semibold mt-2 text-uppercase">Knowledge</div>
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
                      <i class="fa fa-2x fa-calendar text-xinspire"></i>
                      <div class="fs-sm fw-semibold mt-2 text-uppercase">Schedule</div>
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
