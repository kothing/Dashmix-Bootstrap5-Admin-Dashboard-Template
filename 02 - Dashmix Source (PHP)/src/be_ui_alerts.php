<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Alerts</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Alerts</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Bootstrap Alerts -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Alerts</h3>
    </div>
    <div class="block-content">
      <!-- Default -->
      <h2 class="content-heading">Default</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Use the colors which better fit the type of message you want to pass
          </p>
        </div>
        <div class="col-lg-8">
          <div class="alert alert-primary" role="alert">
            <p class="mb-0">This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-secondary" role="alert">
            <p class="mb-0">This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-success" role="alert">
            <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-info" role="alert">
            <p class="mb-0">This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-warning" role="alert">
            <p class="mb-0">This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-danger" role="alert">
            <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-dark" role="alert">
            <p class="mb-0">This is a dark alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-light" role="alert">
            <p class="mb-0">This is a light alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
        </div>
      </div>
      <!-- END Default -->

      <!-- With Icons -->
      <h2 class="content-heading">With Icons</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Choose an icon of your preference and easily add it to an alert message
          </p>
        </div>
        <div class="col-lg-8">
          <div class="alert alert-primary d-flex align-items-center" role="alert">
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-globe"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
          </div>
          <div class="alert alert-secondary d-flex align-items-center" role="alert">
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-university"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
          </div>
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-check"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
          </div>
          <div class="alert alert-info d-flex align-items-center" role="alert">
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-info-circle"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <p class="mb-0">This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
          </div>
          <div class="alert alert-warning d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-exclamation-circle"></i>
            </div>
          </div>
          <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-times-circle"></i>
            </div>
          </div>
          <div class="alert alert-dark d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">This is a dark alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-camera-retro"></i>
            </div>
          </div>
          <div class="alert alert-light d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">This is a light alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fab fa-fw fa-bitcoin"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- END With Icons -->

      <!-- Dismissible -->
      <h2 class="content-heading">Dismissible</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Adding a dismiss button in your alerts is very easy
          </p>
        </div>
        <div class="col-lg-8">
          <div class="alert alert-primary alert-dismissible" role="alert">
            <p class="mb-0">This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-secondary alert-dismissible" role="alert">
            <p class="mb-0">This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-success alert-dismissible" role="alert">
            <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-info alert-dismissible" role="alert">
            <p class="mb-0">This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <p class="mb-0">This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-dark alert-dismissible" role="alert">
            <p class="mb-0">This is a dark alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-light alert-dismissible" role="alert">
            <p class="mb-0">This is a light alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div>
      <!-- END Dismissible -->

      <!-- With Titles -->
      <h2 class="content-heading">With Titles</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can also add titles to your alert messages
          </p>
        </div>
        <div class="col-lg-8">
          <div class="alert alert-primary alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Primary</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-secondary alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Secondary</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-success alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Success</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-info alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Information</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Warning</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Error</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-dark alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Dark</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a dark alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
          <div class="alert alert-light alert-dismissible" role="alert">
            <h3 class="alert-heading fs-4 my-2">Light</h3>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="mb-0">This is a light alert message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
          </div>
        </div>
      </div>
      <!-- END With Titles -->
    </div>
  </div>
  <!-- END Bootstrap Alerts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
