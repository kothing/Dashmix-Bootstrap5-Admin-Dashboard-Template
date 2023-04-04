<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/dark/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/bg_dashboard.jpg');">
  <div class="bg-black-75">
    <div class="content content-full">
      <div class="row my-3">
        <div class="col-md-6 d-md-flex align-items-md-center">
          <div class="py-4 py-md-0 text-center text-md-start">
            <h1 class="fs-2 text-white mb-2">Dashboard</h1>
            <h2 class="fs-lg fw-normal text-white-75 mb-0">Welcome to your overview</h2>
          </div>
        </div>
        <div class="col-md-6 d-md-flex align-items-md-center">
          <div class="row w-100 text-center">
            <div class="col-6 col-xl-4 offset-xl-4">
              <p class="fs-3 fw-semibold text-white mb-0">
                860
              </p>
              <p class="fs-sm fw-semibold text-white-75 text-uppercase mb-0">
                <i class="far fa-chart-bar opacity-75 me-1"></i> Sales
              </p>
            </div>
            <div class="col-6 col-xl-4">
              <p class="fs-3 fw-semibold text-white mb-0">
                $8.960
              </p>
              <p class="fs-sm fw-semibold text-white-75 text-uppercase mb-0">
                <i class="far fa-chart-bar opacity-75 me-1"></i> Earnings
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Quick Stats -->
  <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.jqSparkline() -->
  <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="d-flex align-items-center justify-content-between p-1">
            <div class="me-3">
              <p class="text-muted mb-0">
                Users
              </p>
              <p class="fs-3 mb-0">
                680
              </p>
            </div>
            <div>
              <!-- Sparkline Dashboard Users Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[640,630,660,640,660,650,670,680]"
                    data-width="90px"
                    data-height="40px"
                    data-line-color="#82b54b"
                    data-fill-color="transparent"
                    data-spot-color="transparent"
                    data-min-spot-color="transparent"
                    data-max-spot-color="transparent"
                    data-highlight-spot-color="#82b54b"
                    data-highlight-line-color="#82b54b"
                    data-tooltip-suffix="Users"></span>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="d-flex align-items-center justify-content-between p-1">
            <div class="me-3">
              <p class="text-muted mb-0">
                Tickets
              </p>
              <p class="fs-3 mb-0">
                32
              </p>
            </div>
            <div>
              <!-- Sparkline Dashboard Tickets Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[21,17,19,35,34,25,18,32]"
                    data-width="90px"
                    data-height="40px"
                    data-line-color="#e04f1a"
                    data-fill-color="transparent"
                    data-spot-color="transparent"
                    data-min-spot-color="transparent"
                    data-max-spot-color="transparent"
                    data-highlight-spot-color="#e04f1a"
                    data-highlight-line-color="#e04f1a"
                    data-tooltip-suffix="Tickets"></span>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="d-flex align-items-center justify-content-between p-1">
            <div class="me-3">
              <p class="text-muted mb-0">
                Projects
              </p>
              <p class="fs-3 mb-0">
                19
              </p>
            </div>
            <div>
              <!-- Sparkline Dashboard Projects Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[17,19,15,12,13,14,18,19]"
                    data-width="90px"
                    data-height="40px"
                    data-line-color="#3c90df"
                    data-fill-color="transparent"
                    data-spot-color="transparent"
                    data-min-spot-color="transparent"
                    data-max-spot-color="transparent"
                    data-highlight-spot-color="#3c90df"
                    data-highlight-line-color="#3c90df"
                    data-tooltip-suffix="Projects"></span>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="d-flex align-items-center justify-content-between p-1">
            <div class="me-3">
              <p class="text-muted mb-0">
                Sales
              </p>
              <p class="fs-3 mb-0">
                256
              </p>
            </div>
            <div>
              <!-- Sparkline Dashboard Sales Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[268,225,236,262,259,280,232,256]"
                    data-width="90px"
                    data-height="40px"
                    data-line-color="#343a40"
                    data-fill-color="transparent"
                    data-spot-color="transparent"
                    data-min-spot-color="transparent"
                    data-max-spot-color="transparent"
                    data-highlight-spot-color="#343a40"
                    data-highlight-line-color="#343a40"
                    data-tooltip-suffix="Sales"></span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Quick Stats -->

  <!-- Main Chart -->
  <div class="block block-rounded block-mode-loading-refresh">
    <div class="block-header block-header-default">
      <h3 class="block-title">Earnings</h3>
      <div class="block-options">
        <div class="btn-group btn-group-sm me-2" role="group" aria-label="Earnings Select Date Group">
          <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-week" autocomplete="off">
          <label class="btn btn-primary" for="dashboard-chart-options-week" data-toggle="dashboard-chart-set-week">Week</label>

          <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-month" autocomplete="off">
          <label class="btn btn-primary" for="dashboard-chart-options-month" data-toggle="dashboard-chart-set-month">Month</label>

          <input type="radio" class="btn-check" name="dashboard-chart-options" id="dashboard-chart-options-year" autocomplete="off" checked>
          <label class="btn btn-primary" for="dashboard-chart-options-year" data-toggle="dashboard-chart-set-year">Year</label>
        </div>
        <button type="button" class="btn-block-option align-middle" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full overflow-hidden">
      <div class="pull-x pull-b">
        <!-- Chart.js Dashboard Earnings Container -->
        <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js -->
        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
        <canvas id="js-chartjs-dashboard-earnings" height="380"></canvas>
      </div>
    </div>
  </div>
  <!-- END Main Chart -->

  <!-- Users and Purchases -->
  <div class="row items-push">
    <div class="col-xl-6">
      <!-- Users -->
      <div class="block block-rounded block-mode-loading-refresh h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Users</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-cloud-download"></i>
            </button>
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="si si-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-user me-1"></i> New Users
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-bookmark me-1"></i> VIP Users
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt"></i> Manage
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-dark">
          <form action="be_pages_dashboard.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Search Users..">
          </form>
        </div>
        <div class="block-content">
          <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
            <thead>
              <tr class="text-uppercase">
                <th class="fw-bold text-center" style="width: 120px;">Avatar</th>
                <th class="fw-bold">Name</th>
                <th class="d-none d-sm-table-cell fw-bold">Access</th>
                <th class="fw-bold text-center" style="width: 60px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <?php $dm->get_avatar(0, 'female', 32, true); ?>
                </td>
                <td>
                  <div class="fw-semibold fs-base"><?php $dm->get_name('female'); ?></div>
                  <div class="text-muted">carol@example.com</div>
                </td>
                <td class="d-none d-sm-table-cell fs-base">
                  <span class="badge bg-dark">VIP</span>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <?php $dm->get_avatar(0, 'male', 32, true); ?>
                </td>
                <td>
                  <div class="fw-semibold fs-base"><?php $dm->get_name('male'); ?></div>
                  <div class="text-muted">smith@example.com</div>
                </td>
                <td class="d-none d-sm-table-cell fs-base">
                  <span class="badge bg-black-50">Pro</span>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <?php $dm->get_avatar(0, 'male', 32, true); ?>
                </td>
                <td>
                  <div class="fw-semibold fs-base"><?php $dm->get_name('male'); ?></div>
                  <div class="text-muted">john@example.com</div>
                </td>
                <td class="d-none d-sm-table-cell fs-base">
                  <span class="badge bg-dark">VIP</span>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <?php $dm->get_avatar(0, 'female', 32, true); ?>
                </td>
                <td>
                  <div class="fw-semibold fs-base"><?php $dm->get_name('female'); ?></div>
                  <div class="text-muted">lori@example.com</div>
                </td>
                <td class="d-none d-sm-table-cell fs-base">
                  <span class="badge bg-black-50">Pro</span>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <?php $dm->get_avatar(0, 'male', 32, true); ?>
                </td>
                <td>
                  <div class="fw-semibold fs-base"><?php $dm->get_name('male'); ?></div>
                  <div class="text-muted">jack@example.com</div>
                </td>
                <td class="d-none d-sm-table-cell fs-base">
                  <span class="badge bg-success">Free</span>
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit User">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Users -->
    </div>
    <div class="col-xl-6">
      <!-- Purchases -->
      <div class="block block-rounded block-mode-loading-refresh h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Purchases</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-cloud-download"></i>
            </button>
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="si si-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-sync fa-spin text-warning me-1"></i> Pending
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-times-circle text-danger me-1"></i> Cancelled
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-check-circle text-success me-1"></i> Completed
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-eye me-1"></i> View All
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-dark">
          <form action="be_pages_dashboard.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Search Purchases..">
          </form>
        </div>
        <div class="block-content">
          <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
            <thead>
              <tr class="text-uppercase">
                <th class="fw-bold">Product</th>
                <th class="d-none d-sm-table-cell fw-bold">Date</th>
                <th class="fw-bold">Status</th>
                <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                <th class="fw-bold text-center" style="width: 60px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="fw-semibold">iPhone X</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-warning">Pending..</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $999,99
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">MacBook Pro 15"</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-warning">Pending..</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $2.299,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">Nvidia GTX 1080 Ti</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-warning">Pending..</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $1200,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">Playstation 4 Pro</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">today</span>
                </td>
                <td>
                  <span class="fw-semibold text-danger">Cancelled</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $399,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">Nintendo Switch</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $349,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">iPhone X</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $999,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">Echo Dot</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $39,99
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="fw-semibold">Xbox One X</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <span class="fs-sm text-muted">yesterday</span>
                </td>
                <td>
                  <span class="fw-semibold text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  $499,00
                </td>
                <td class="text-center">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Purchases -->
    </div>
  </div>
  <!-- END Users and Purchases -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Sparkline plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $dm->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_dashboard_v1.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline plugin) -->
<script>Dashmix.helpersOnLoad(['jq-sparkline']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
