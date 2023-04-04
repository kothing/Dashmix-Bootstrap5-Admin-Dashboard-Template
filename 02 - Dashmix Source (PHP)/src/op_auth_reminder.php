<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg');">
  <div class="row g-0 bg-gd-fruit-op">
    <!-- Main Section -->
    <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
      <div class="p-3 w-100">
        <!-- Header -->
        <div class="text-center">
          <a class="link-fx fw-bold fs-1" href="index.php">
            <span class="text-dark">Dash</span><span class="text-primary">mix</span>
          </a>
          <p class="text-uppercase fw-bold fs-sm text-muted">Password Reminder</p>
        </div>
        <!-- END Header -->

        <!-- Reminder Form -->
        <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <div class="row g-0 justify-content-center">
          <div class="col-sm-8 col-xl-6">
            <form class="js-validation-reminder" action="be_pages_auth_all.php" method="POST">
              <div class="py-3 mb-4">
                <input type="text" class="form-control form-control-lg form-control-alt" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
              </div>
              <div class="text-center mb-4">
                <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                  <i class="fa fa-fw fa-reply opacity-50 me-1"></i> Password Reminder
                </button>
                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                  <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signin.php">
                    <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                  </a>
                  <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signup.php">
                    <i class="fa fa-plus opacity-50 me-1"></i> New Account
                  </a>
                </p>
              </div>
            </form>
          </div>
        </div>
        <!-- END Reminder Form -->
      </div>
    </div>
    <!-- END Main Section -->

    <!-- Meta Info Section -->
    <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
      <div class="p-3">
        <p class="display-4 fw-bold text-white mb-0">
          Be ready to fail..
        </p>
        <p class="fs-1 fw-semibold text-white-75 mb-0">
          ..to be able to succeed!
        </p>
      </div>
    </div>
    <!-- END Meta Info Section -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_reminder.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>