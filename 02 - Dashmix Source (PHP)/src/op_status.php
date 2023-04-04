<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="hero-static bg-body-extra-light">
  <div class="content content-full">
    <div class="px-3 py-5">
      <div class="mb-5 text-center">
        <a class="link-fx fw-bold fs-1" href="index.php">
          <span class="text-dark">Dash</span><span class="text-primary">mix</span>
        </a>
        <p class="text-uppercase fw-bold fs-sm text-muted">Status Page</p>
      </div>
      <div class="row g-0 d-flex justify-content-center">
        <div class="col-md-6 col-xl-4">
          <div class="d-flex justify-content-between">
            <a class="btn btn-sm btn-hero btn-primary" href="be_pages_generic_blank.php">
              <i class="fa fa-arrow-left opacity-50 me-1"></i> Dashboard
            </a>
            <a class="btn btn-sm btn-hero btn-success" href="javascript:void(0)">
              <i class="fa fa-rss opacity-50"></i> <span class="d-none d-sm-inline-block ms-1">Subscribe</span>
            </a>
          </div>
          <hr>
          <div class="alert alert-warning d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">API is currently under maintenance. Please stand by for a while as we are working on it.</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>
            </div>
          </div>
          <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">Helpdesk service is experiencing some issues but our ninja developers are on it and should be back shortly!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-2x fa-bug"></i>
            </div>
          </div>
          <ul class="list-group push">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Backend
              <span class="badge rounded-pill bg-success">Operational</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Frontend
              <span class="badge rounded-pill bg-success">Operational</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              API
              <span class="badge rounded-pill bg-warning">Maintenance</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Payments
              <span class="badge rounded-pill bg-success">Operational</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Helpdesk
              <span class="badge rounded-pill bg-danger">Down</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>