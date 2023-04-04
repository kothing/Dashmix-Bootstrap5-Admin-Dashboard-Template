<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 justify-content-center bg-body-dark">
  <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
    <!-- Sign In Block -->
    <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20@2x.jpg');">
      <div class="row g-0">
        <div class="col-md-6 order-md-1 bg-body-extra-light">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <!-- Header -->
            <div class="mb-2 text-center">
              <a class="link-fx fw-bold fs-1" href="index.php">
                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
              </a>
              <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-signin" action="be_pages_auth_all.php" method="POST">
              <div class="mb-4">
                <input type="text" class="form-control form-control-alt" id="login-username" name="login-username" placeholder="Username">
              </div>
              <div class="mb-4">
                <input type="password" class="form-control form-control-alt" id="login-password" name="login-password" placeholder="Password">
              </div>
              <div class="mb-4">
                <button type="submit" class="btn w-100 btn-hero btn-primary">
                  <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                </button>
              </div>
            </form>
            <!-- END Sign In Form -->
          </div>
        </div>
        <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="d-flex">
              <a class="flex-shrink-0 img-link me-3" href="javascript:void(0)">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </a>
              <div class="flex-grow-1">
                <p class="text-white fw-semibold mb-1">
                  Amazing framework with tons of options! It helped us build our project!
                </p>
                <a class="text-white-75 fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?>, Web Developer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Sign In Block -->
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
<?php $dm->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>