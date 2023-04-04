<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/corporate_slim/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-header-dark">
  <div class="content content-full">
    <div class="row pt-3">
      <div class="col-md py-3 d-md-flex align-items-md-center text-center">
        <h1 class="text-white mb-0">
          <span class="fw-semibold">Dashboard</span>
          <span class="fw-medium fs-base text-white-75 d-block d-md-inline-block">Welcome John</span>
        </h1>
      </div>
      <div class="col-md py-3 d-md-flex align-items-md-center justify-content-md-end text-center">
        <button type="button" class="btn btn-primary me-1">
          <i class="fa fa-plus opacity-50 me-1"></i> New Project
        </button>
        <button type="button" class="btn btn-primary">
          <i class="fa fa-cog"></i>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="bg-body-extra-light">
  <div class="content content-full">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <!-- END Breadcrumb -->

    <!-- Quick Menu -->
    <div class="row">
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-compass fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">Home</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-modern ribbon-primary text-center" href="javascript:void(0)">
          <div class="ribbon-box">2</div>
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-envelope-open fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">Inbox</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-modern ribbon-success text-center" href="javascript:void(0)">
          <div class="ribbon-box">3</div>
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-briefcase fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">Projects</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-chart-pie fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">Statistics</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-modern ribbon-primary text-center" href="javascript:void(0)">
          <div class="ribbon-box">24</div>
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-user-tie fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">People</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content">
            <p class="my-2">
              <i class="fa fa-file-word fa-2x text-muted"></i>
            </p>
            <p class="fw-semibold">Documents</p>
          </div>
        </a>
      </div>
    </div>
    <!-- END Quick Menu -->

    <!-- Statistics -->
    <div class="row">
      <div class="col-md-6">
        <div class="block block-rounded block-bordered block-mode-loading-refresh">
          <div class="block-header">
            <h3 class="block-title">Projects</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="fa fa-sync"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="fa fa-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content p-2">
            <!-- Chart.js Charts are initialized in js/pages/db_corporate_slim.min.js which was auto compiled from _js/pages/db_corporate_slim.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-corporate-slim-projects"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="block block-rounded block-bordered block-mode-loading-refresh">
          <div class="block-header">
            <h3 class="block-title">Tickets</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="fa fa-sync"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="fa fa-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content p-2">
            <!-- Chart.js Charts are initialized in js/pages/db_corporate_slim.min.js which was auto compiled from _js/pages/db_corporate_slim.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-corporate-slim-tickets"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- END Statistics -->

    <!-- Quick Stats -->
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-bordered" href="javascript:void(0)">
          <div class="block-content p-2">
            <div class="py-5 text-center bg-body-light rounded">
              <div class="fs-2 fw-bold mb-0">45</div>
              <div class="fs-sm fw-semibold text-uppercase">All Projects</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-bordered" href="javascript:void(0)">
          <div class="block-content p-2">
            <div class="py-5 text-center bg-body-light rounded">
              <div class="fs-2 fw-bold mb-0">4</div>
              <div class="fs-sm fw-semibold text-uppercase">Pending Tasks</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-bordered" href="javascript:void(0)">
          <div class="block-content p-2">
            <div class="py-5 text-center bg-body-light rounded">
              <div class="fs-2 fw-bold mb-0">19</div>
              <div class="fs-sm fw-semibold text-uppercase">Tickets</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-bordered" href="javascript:void(0)">
          <div class="block-content p-2">
            <div class="py-5 text-center bg-body-light rounded">
              <div class="fs-2 fw-bold mb-0">2</div>
              <div class="fs-sm fw-semibold text-uppercase">Meetings</div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <!-- END Quick Stats -->

    <!-- People and Tickets -->
    <div class="row items-push">
      <div class="col-xl-6">
        <!-- People -->
        <div class="block block-rounded block-bordered block-mode-loading-refresh h-100 mb-0">
          <div class="block-header border-bottom">
            <h3 class="block-title">People</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="fa fa-sync"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="fa fa-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
              <thead>
                <tr class="text-uppercase">
                  <th class="fw-bold text-center" style="width: 120px;">Photo</th>
                  <th class="fw-bold">Name</th>
                  <th class="d-none d-sm-table-cell fw-bold text-center">Projects</th>
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
                  <td class="d-none d-sm-table-cell fs-base text-center">
                    <span class="badge bg-dark">2</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="View Colleague">
                      <i class="fa fa-fw fa-user-circle"></i>
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
                  <td class="d-none d-sm-table-cell fs-base text-center">
                    <span class="badge bg-warning">4</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="View Colleague">
                      <i class="fa fa-fw fa-user-circle"></i>
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
                  <td class="d-none d-sm-table-cell fs-base text-center">
                    <span class="badge bg-dark">2</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="View Colleague">
                      <i class="fa fa-fw fa-user-circle"></i>
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
                  <td class="d-none d-sm-table-cell fs-base text-center">
                    <span class="badge bg-success">12</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="View Colleague">
                      <i class="fa fa-fw fa-user-circle"></i>
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
                  <td class="d-none d-sm-table-cell fs-base text-center">
                    <span class="badge bg-warning">6</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="View Colleague">
                      <i class="fa fa-fw fa-user-circle"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- END People -->
      </div>
      <div class="col-xl-6">
        <!-- Tickets -->
        <div class="block block-rounded block-bordered block-mode-loading-refresh h-100 mb-0">
          <div class="block-header border-bottom">
            <h3 class="block-title">Tickets</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="fa fa-sync"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="fa fa-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
              <thead>
                <tr class="text-uppercase">
                  <th class="fw-bold">Product</th>
                  <th class="d-none d-sm-table-cell fw-bold">Date</th>
                  <th class="fw-bold">State</th>
                  <th class="fw-bold text-center" style="width: 60px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: X</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">today</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-warning">Awaiting..</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: X</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">today</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-warning">Awaiting..</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project X</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">today</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-warning">Awaiting..</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: X</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">yesterday</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-success">Solved</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: Inspire</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">yesterday</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-success">Solved</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: Inspire</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">yesterday</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-success">Solved</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: Point</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">yesterday</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-success">Solved</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Project: Point</span>
                  </td>
                  <td class="d-none d-sm-table-cell">
                    <span class="fs-sm text-muted">yesterday</span>
                  </td>
                  <td>
                    <span class="fw-semibold text-danger">Deleted</span>
                  </td>
                  <td class="text-center">
                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                      <i class="fa fa-fw fa-life-ring"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Tickets -->
      </div>
    </div>
    <!-- END People and Tickets -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/db_corporate_slim.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
