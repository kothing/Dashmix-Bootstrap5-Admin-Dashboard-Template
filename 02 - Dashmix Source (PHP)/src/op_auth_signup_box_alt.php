<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo14@2x.jpg');">
  <div class="row g-0 justify-content-center bg-black-75">
    <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
      <!-- Sign Up Block -->
      <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
          <!-- Header -->
          <div class="mb-2 text-center">
            <a class="link-fx fw-bold fs-1" href="index.php">
              <span class="text-dark">Dash</span><span class="text-primary">mix</span>
            </a>
            <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
          </div>
          <!-- END Header -->

          <!-- Sign Up Form -->
          <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
          <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
          <form class="js-validation-signup" action="be_pages_auth_all.php" method="POST">
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" id="signup-username" name="signup-username" placeholder="Username">
                <span class="input-group-text">
                  <i class="fa fa-user-circle"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Email">
                <span class="input-group-text">
                  <i class="fa fa-envelope-open"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Password">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mb-4 bg-body rounded py-2 px-3">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms">
                <label class="form-check-label" for="signup-terms">I agree</label>
              </div>
              <div class="fw-semibold fs-sm py-1">
                <a class="fw-semibold fs-sm" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">Terms &amp; Conditions</a>
              </div>
            </div>
            <div class="text-center mb-4">
              <button type="submit" class="btn btn-hero btn-primary">
                <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
              </button>
            </div>
          </form>
          <!-- END Sign Up Form -->
        </div>
      </div>
    </div>
    <!-- END Sign Up Block -->
  </div>
  
  <!-- Terms Modal -->
  <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="block block-themed block-transparent mb-0">
          <div class="block-header bg-success">
            <h3 class="block-title">Terms &amp; Conditions</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <?php $dm->get_text('medium', 2); ?>
          </div>
          <div class="block-content block-content-full text-end bg-body">
            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Terms Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_signup.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>