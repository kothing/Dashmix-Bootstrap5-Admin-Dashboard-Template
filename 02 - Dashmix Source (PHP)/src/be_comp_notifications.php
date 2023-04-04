<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Notifications</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Notifications</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content position-relative">
  <!-- Bootstrap Toasts -->
  <div class="toast-container position-absolute top-0 end-0 p-3">
    <!-- Toast Example 1 -->
    <div id="toast-example-1" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="si si-bubble text-primary me-2"></i>
        <strong class="me-auto">Title</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        This is a nice notification based on Bootstrap implementation.
      </div>
    </div>
    <!-- END Toast Example 1 -->

    <!-- Toast Example 2 -->
    <div id="toast-example-2" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="si si-wrench text-danger me-2"></i>
        <strong class="me-auto">System</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        You can alert the user with a system message!
      </div>
    </div>
    <!-- END Toast Example 2 -->
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Toasts</h3>
    </div>
    <div class="block-content">
      <!-- Default -->
      <h4 class="content-heading">Default</h4>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            A nice toast with a message
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" onclick="new bootstrap.Toast(document.getElementById('toast-example-1')).show();">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Toast 1
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>new bootstrap.Toast(document.getElementById('toast-example-1')).show();</code>
          </p>
          <button type="button" class="btn btn-alt-primary push" onclick="new bootstrap.Toast(document.getElementById('toast-example-2')).show();">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Toast 2
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>new bootstrap.Toast(document.getElementById('toast-example-2')).show();</code>
          </p>
        </div>
      </div>
      <!-- END Default -->
    </div>
  </div>
  <!-- END Bootstrap Toasts -->

  <!-- Bootstrap Notify (.js-notify class is initialized in Helpers.jqNotify()) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Notify</h3>
    </div>
    <div class="block-content">
      <!-- Info -->
      <h2 class="content-heading">Info</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            A notification with an informational message
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="js-notify btn btn-alt-info push" data-type="info" data-icon="fa fa-info-circle me-1" data-message="Congrats! You've reached level 12!">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Notification
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>Dashmix.helpers('jq-notify', {type: 'info', icon: 'fa fa-info-circle me-1', message: 'Your message!'});</code>
          </p>
        </div>
      </div>
      <!-- END Info -->

      <!-- Success -->
      <h2 class="content-heading">Success</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            A notification with a success message
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="js-notify btn btn-alt-success push" data-type="success" data-icon="fa fa-check me-1" data-message="App was updated successfully to 1.2 version">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Notification
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>Dashmix.helpers('jq-notify', {type: 'success', icon: 'fa fa-check me-1', message: 'Your message!'});</code>
          </p>
        </div>
      </div>
      <!-- END Success -->

      <!-- Warning -->
      <h2 class="content-heading">Warning</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            A notification with a warning message
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="js-notify btn btn-alt-warning push" data-type="warning" data-icon="fa fa-exclamation me-1" data-message="Please make a backup before updating!">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Notification
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>Dashmix.helpers('jq-notify', {type: 'warning', icon: 'fa fa-exclamation me-1', message: 'Your message!'});</code>
          </p>
        </div>
      </div>
      <!-- END Warning -->

      <!-- Error -->
      <h2 class="content-heading">Error</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            A notification with an error message
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="js-notify btn btn-alt-danger push" data-type="danger" data-icon="fa fa-times me-1" data-message="Update failed! :-(">
            <i class="fa fa-bell me-1 opacity-50"></i> Launch Notification
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-times me-1', message: 'Your message!'});</code>
          </p>
        </div>
      </div>
      <!-- END Error -->

      <!-- Position -->
      <h2 class="content-heading">Position</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            You can show your notification in multiple screen positions
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="js-notify btn btn-alt-primary push" data-message="Your message!">
            Top Right
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p class="mb-5">
            <code>Dashmix.helpers('jq-notify', {message: 'Your message!'});</code>
          </p>
          <button type="button" class="js-notify btn btn-alt-primary push" data-align="center" data-message="Your message!">
            Top Center
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p class="mb-5">
            <code>Dashmix.helpers('jq-notify', {align: 'center', message: 'Your message!'});</code>
          </p>
          <button type="button" class="js-notify btn btn-alt-primary push" data-align="left" data-message="Your message!">
            Top Left
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p class="mb-5">
            <code>Dashmix.helpers('jq-notify', {align: 'left', message: 'Your message!'});</code>
          </p>
          <button type="button" class="js-notify btn btn-alt-primary push" data-from="bottom" data-message="Your message!">
            Bottom Right
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p class="mb-5">
            <code>Dashmix.helpers('jq-notify', {from: 'bottom', message: 'Your message!'});</code>
          </p>
          <button type="button" class="js-notify btn btn-alt-primary push" data-from="bottom" data-align="center" data-message="Your message!">
            Bottom Center
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p class="mb-5">
            <code>Dashmix.helpers('jq-notify', {from: 'bottom', align: 'center', message: 'Your message!'});</code>
          </p>
          <button type="button" class="js-notify btn btn-alt-primary push" data-from="bottom" data-align="left" data-message="Your message!">
            Bottom Left
          </button>
          <p class="fw-semibold mb-0">
            You can also trigger it with JS:
          </p>
          <p>
            <code>Dashmix.helpers('jq-notify', {from: 'bottom', align: 'left', message: 'Your message!'});</code>
          </p>
        </div>
      </div>
      <!-- END Position -->
    </div>
  </div>
  <!-- END Bootstrap Notify -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for BS Notify plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-notify/bootstrap-notify.min.js'); ?>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>Dashmix.helpersOnLoad(['jq-notify']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
