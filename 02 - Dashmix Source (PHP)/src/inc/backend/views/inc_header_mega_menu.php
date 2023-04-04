<?php
/**
 * backend/views/inc_header_mega_menu.php
 *
 * Author: pixelcave
 *
 * An example header showcasing a mega menu
 *
 */
?>

<!-- Header -->
<header id="page-header">
  <!-- Header Content -->
  <div class="content-header">
    <!-- Left Section -->
    <div class="space-x-1">
      <!-- Toggle Sidebar -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
      <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- END Toggle Sidebar -->

      <!-- Mega Menu -->
      <nav class="d-none d-lg-flex align-items-center space-x-2">
        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
          <i class="fa fa-home opacity-50 me-1"></i>
          <span>Home</span>
        </a>
        <div class="dropdown">
          <button class="btn btn-sm btn-alt-secondary" type="button" id="page-header-mega-menu-websites" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-briefcase opacity-50 me-1"></i>
            <span>Projects</span>
            <i class="fa fa-fw fa-angle-down opacity-25"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-xl dropdown-menu-mega p-0 border-0" aria-labelledby="page-header-mega-menu-websites">
            <div class="px-3 py-3 bg-primary-dark rounded-top">
              <h3 class="fs-sm text-uppercase tracking-wider fw-0 text-white mb-0">
                All Projects
              </h3>
            </div>
            <div class="p-3 bg-body-light">
              <div class="row g-3 fs-sm">
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center fw-semibold">
                      Dashmix
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center fw-semibold">
                      OneUI
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center fw-semibold">
                      Codebase
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center fw-semibold">
                      Tailkit
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center fw-semibold">
                      OneUI Vue
                    </div>
                  </a>
                </div>
                <div class="col-xxl-4">
                  <a class="block block-rounded block-link-shadow d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                      <i class="fa fa-plus text-success"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="btn btn-sm btn-alt-secondary" type="button" id="page-header-mega-menu-apps" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-star opacity-50 me-1"></i>
            <span>Favorites</span>
            <i class="fa fa-fw fa-angle-down opacity-25"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-xxl dropdown-menu-mega p-0 border-0" aria-labelledby="page-header-mega-menu-apps">
            <div class="px-3 py-3 bg-primary-dark rounded-top">
              <h3 class="fs-sm text-uppercase tracking-wider fw-semibold text-white mb-0">
                Favorite Links
              </h3>
            </div>
            <div class="p-3">
              <div class="row fs-sm">
                <div class="col-xxl-4 mt-2 mt-xxl-0">
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-code text-primary-lighter me-1"></i> VS Code
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-code-branch text-primary-lighter me-1"></i> Repository
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-figma text-primary-lighter me-1"></i> Figma
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-stack-overflow text-primary-lighter me-1"></i> Stack Overflow
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-sourcetree text-primary-lighter me-1"></i> Sourcetree
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-xxl-4">
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-file-word text-primary-lighter me-1"></i> Documents
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-file-excel text-primary-lighter me-1"></i> Spreadsheets
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-file-powerpoint text-primary-lighter me-1"></i> Presentation
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-file-alt text-primary-lighter me-1"></i> Forms
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-file-csv text-primary-lighter me-1"></i> Database
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-xxl-4 mt-2 mt-xxl-0">
                  <ul class="list list-simple-mini mb-0">
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-slack text-primary-lighter me-1"></i> Slack
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-discord text-primary-lighter me-1"></i> Discord
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-discourse text-primary-lighter me-1"></i> Discourse
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fab fa-fw fa-diaspora text-primary-lighter me-1"></i> Diaspora
                      </a>
                    </li>
                    <li>
                      <a class="fw-semibold" href="javascript:void(0)">
                        <i class="fa fa-fw fa-comments text-primary-lighter me-1"></i> Forum
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="btn btn-sm btn-alt-secondary" type="button" id="page-header-mega-menu-settings" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="fa fa-cog opacity-50 me-1"></i>
            <span>Settings</span>
            <i class="fa fa-fw fa-angle-down opacity-25"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-mega p-0 border-0" aria-labelledby="page-header-mega-menu-settings">
            <div class="px-3 py-3 bg-primary-dark rounded-top">
              <h3 class="fs-sm text-uppercase tracking-wider fw-semibold text-white mb-0">
                Profile Settings
              </h3>
            </div>
            <div class="p-3">
              <!-- Quick Settings Form -->
              <form action="be_pages_dashboard.php" method="POST" onsubmit="return false;">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="mega-settings-status" name="mega-settings-status">
                  <label class="form-check-label fw-semibold" for="mega-settings-status">Online Status</label>
                </div>
                <p class="text-muted fs-sm mb-3">
                  Make your online status visible to other users of your app
                </p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="mega-settings-notifications" name="mega-settings-notifications">
                  <label class="form-check-label fw-semibold" for="mega-settings-notifications">Notifications</label>
                </div>
                <p class="text-muted fs-sm mb-3">
                  Receive desktop notifications regarding your projects and sales
                </p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="mega-settings-updates" name="mega-settings-updates">
                  <label class="form-check-label fw-semibold" for="mega-settings-updates">Auto Updates</label>
                </div>
                <p class="text-muted fs-sm mb-0">
                  If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                </p>
              </form>
              <!-- END Quick Settings Form -->
            </div>
          </div>
        </div>
      </nav>
      <!-- END Mega Menu -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div class="space-x-1">
      <!-- User Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-user d-sm-none"></i>
          <span class="d-none d-sm-inline-block">Admin</span>
          <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
          <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
            User Options
          </div>
          <div class="p-2">
            <a class="dropdown-item" href="be_pages_generic_profile.php">
              <i class="far fa-fw fa-user me-1"></i> Profile
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.php">
              <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
              <span class="badge bg-primary rounded-pill">3</span>
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

      <!-- Notifications Dropdown -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
          <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
            Notifications
          </div>
          <ul class="nav-items my-2">
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-check-circle text-success"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">App was updated to v5.6!</div>
                  <div class="text-muted">3 min ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-user-plus text-info"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">New Subscriber was added! You now have 2580!</div>
                  <div class="text-muted">10 min ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-times-circle text-danger"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">Server backup failed to complete!</div>
                  <div class="text-muted">30 min ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">You are running out of space. Please consider upgrading your plan.</div>
                  <div class="text-muted">1 hour ago</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex text-dark py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 mx-3">
                  <i class="fa fa-fw fa-plus-circle text-primary"></i>
                </div>
                <div class="flex-grow-1 fs-sm pe-2">
                  <div class="fw-semibold">New Sale! + $30</div>
                  <div class="text-muted">2 hours ago</div>
                </div>
              </a>
            </li>
          </ul>
          <div class="p-2 border-top">
            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
              <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
            </a>
          </div>
        </div>
      </div>
      <!-- END Notifications Dropdown -->

      <!-- Toggle Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
        <i class="far fa-fw fa-list-alt"></i>
      </button>
      <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Right Section -->
  </div>
  <!-- END Header Content -->

  <!-- Header Search -->
  <div id="page-header-search" class="overlay-header bg-header-dark">
    <div class="bg-white-10">
      <div class="content-header">
        <form class="w-100" action="be_pages_generic_search.php" method="POST">
          <div class="input-group">
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
              <i class="fa fa-fw fa-times-circle"></i>
            </button>
            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Header Search -->

  <!-- Header Loader -->
  <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
  <div id="page-header-loader" class="overlay-header bg-header-dark">
    <div class="bg-white-10">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="fa fa-fw fa-sun fa-spin text-white"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header Loader -->
</header>
<!-- END Header -->
