<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 justify-content-center bg-body-dark">
  <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
    <!-- Reminder Block -->
    <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');">
      <div class="row g-0">
        <div class="col-md-6 order-md-1 bg-body-extra-light">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <!-- Header -->
            <div class="mb-2 text-center">
              <a class="link-fx fw-bold fs-1" href="index.php">
                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
              </a>
              <p class="text-uppercase fw-bold fs-sm text-muted">Password Reminder</p>
            </div>
            <!-- END Header -->

            <!-- Reminder Form -->
            <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-reminder" action="be_pages_auth_all.php" method="POST">
              <div class="mb-4">
                <input type="text" class="form-control form-control-alt" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
              </div>
              <div class="text-center mb-4">
                <button type="submit" class="btn w-100 btn-hero btn-primary">
                  <i class="fa fa-fw fa-reply opacity-50 me-1"></i> Reset Password
                </button>
              </div>
            </form>
            <!-- END Reminder Form -->
          </div>
        </div>
        <div class="col-md-6 order-md-0 bg-gd-fruit-op d-flex align-items-center">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6 text-center">
            <p class="fs-2 fw-bold text-white mb-0">
              Be ready to fail..
            </p>
            <p class="fs-3 fw-semibold text-white-75 mb-0">
              ..to be able to succeed!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- END Reminder Block -->
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