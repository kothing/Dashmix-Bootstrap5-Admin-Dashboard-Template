<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20@2x.jpg');">
  <div class="row g-0 justify-content-end bg-xwork-op">
    <!-- Main Section -->
    <div class="hero-static col-md-5 d-flex flex-column bg-body-extra-light">
      <!-- Header -->
      <div class="flex-grow-0 p-5">
        <a class="link-fx fw-bold fs-2" href="index.php">
          <span class="text-dark">Dash</span><span class="text-primary">mix</span>
        </a>
        <p class="text-uppercase fw-bold fs-sm text-muted mb-0">
          Premium Dashboard UI
        </p>
      </div>
      <!-- END Header -->

      <!-- Content -->
      <div class="flex-grow-1 d-flex align-items-center p-5 bg-body-light">
        <div class="w-100">
          <p class="text-danger fs-4 fw-bold text-uppercase mb-2">
            401 Error
          </p>
          <h1 class="fw-bold mb-2">
            Not Authorized
          </h1>
          <p class="fs-4 fw-medium text-muted mb-5">
            We are sorry but you are not authorized to access this page.
          </p>
          <a class="btn btn-lg btn-alt-danger" href="be_pages_error_all.php">
            <i class="fa fa-arrow-left opacity-50 me-1"></i> Back to all Errors
          </a>
        </div>
      </div>
      <!-- END Content -->

      <!-- Footer -->
      <ul class="list-inline flex-gow-1 p-5 fs-sm fw-medium mb-0">
        <li class="list-inline-item">
          <a class="text-muted" href="javascript:void(0)">
            Dashboard
          </a>
        </li> 
        <li class="list-inline-item">
          <a class="text-muted" href="javascript:void(0)">
            Support
          </a>
        </li> 
        <li class="list-inline-item">
          <a class="text-muted" href="javascript:void(0)">
            Contact
          </a>
        </li>
      </ul>
      <!-- END Footer -->
    </div>
    <!-- END Main Section -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>