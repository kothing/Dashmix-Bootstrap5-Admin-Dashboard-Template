<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19@2x.jpg');">
  <div class="row g-0 justify-content-center bg-primary-dark-op">
    <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
      <!-- Sign In Block -->
      <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
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
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Username">
                <span class="input-group-text">
                  <i class="fa fa-user-circle"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked>
                <label class="form-check-label" for="login-remember-me">Remember Me</label>
              </div>
              <div class="fw-semibold fs-sm py-1">
                <a href="javascript:void(0)">Forgot Password?</a>
              </div>
            </div>
            <div class="text-center mb-4">
              <button type="submit" class="btn btn-hero btn-primary">
                <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
              </button>
            </div>
          </form>
          <!-- END Sign In Form -->
        </div>
        <div class="block-content bg-body">
          <div class="d-flex justify-content-center text-center push">
            <a class="item item-circle item-tiny me-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xwork" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xmodern" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xeco" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xsmooth" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xinspire" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xdream" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#"></a>
            <a class="item item-circle item-tiny me-1 bg-xpro" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#"></a>
            <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#"></a>
          </div>
        </div>
      </div>
      <!-- END Sign In Block -->
    </div>
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