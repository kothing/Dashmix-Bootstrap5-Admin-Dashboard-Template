<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dialogs</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Dialogs</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- SweetAlert2 (demo functionality is initialized in js/pages/be_comp_dialogs.min.js which was auto compiled from _js/pages/be_comp_dialogs.js) -->
<!-- For more info and examples, you can check out https://github.com/sweetalert2/sweetalert2 -->
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">SweetAlert2</h3>
    </div>
    <div class="block-content">
      <div class="row items-push">
        <div class="col-md-6">
          <!-- Simple -->
          <h2 class="content-heading pt-0">Simple</h2>
          <p class="text-muted mb-2">
            A dialog showing a simple message
          </p>
          <button type="button" class="js-swal-simple btn btn-alt-secondary push">
            Launch Dialog
          </button>
          <!-- END Simple -->
        </div>
        <div class="col-md-6">
          <!-- Success -->
          <h2 class="content-heading pt-md-0">Success</h2>
          <p class="text-muted mb-2">
            A dialog showing a message after a successful operation
          </p>
          <button type="button" class="js-swal-success btn btn-alt-secondary push">
            <i class="fa fa-check-circle text-success me-1"></i> Launch Dialog
          </button>
          <!-- END Success -->
        </div>
        <div class="col-md-6">
          <!-- Info -->
          <h2 class="content-heading">Info</h2>
          <p class="text-muted mb-2">
            A dialog showing an informational message
          </p>
          <button type="button" class="js-swal-info btn btn-alt-secondary push">
            <i class="fa fa-info-circle text-info me-1"></i> Launch Dialog
          </button>
          <!-- END Info -->
        </div>
        <div class="col-md-6">
          <!-- Warning -->
          <h2 class="content-heading">Warning</h2>
          <p class="text-muted mb-2">
            A dialog showing a warning message
          </p>
          <button type="button" class="js-swal-warning btn btn-alt-secondary push">
            <i class="fa fa-exclamation-triangle text-warning me-1"></i> Launch Dialog
          </button>
          <!-- END Warning -->
        </div>
        <div class="col-md-6">
          <!-- Error -->
          <h2 class="content-heading">Error</h2>
          <p class="text-muted mb-2">
            A dialog showing a message after a failed operation
          </p>
          <button type="button" class="js-swal-error btn btn-alt-secondary push">
            <i class="fa fa-times-circle text-danger me-1"></i> Launch Dialog
          </button>
          <!-- END Error -->
        </div>
        <div class="col-md-6">
          <!-- Question -->
          <h2 class="content-heading">Question</h2>
          <p class="text-muted mb-2">
            A dialog showing a question message
          </p>
          <button type="button" class="js-swal-question btn btn-alt-secondary push">
            <i class="fa fa-question-circle text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Question -->
        </div>
        <div class="col-md-6">
          <!-- Confirmation -->
          <h2 class="content-heading">Confirmation</h2>
          <p class="text-muted mb-2">
            A dialog showing a confirmation message
          </p>
          <button type="button" class="js-swal-confirm btn btn-alt-secondary push mb-md-0">
            <i class="fa fa-check-square text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Confirmation -->
        </div>
        <div class="col-md-6">
          <!-- Custom Position -->
          <h2 class="content-heading">Custom Position</h2>
          <p class="text-muted mb-2">
            A dialog showing at the top right of the screen
          </p>
          <button type="button" class="js-swal-custom-position btn btn-alt-secondary">
            <i class="fa fa-bolt text-muted me-1"></i> Launch Dialog
          </button>
          <!-- END Custom Position -->
        </div>
      </div>
    </div>
  </div>
  <!-- END SweetAlert2 -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_dialogs.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
