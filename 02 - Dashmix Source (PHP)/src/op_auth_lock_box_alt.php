<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9@2x.jpg');">
  <div class="row g-0 justify-content-center bg-black-75">
    <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
      <!-- Lock Block -->
      <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
          <!-- Header -->
          <div class="mb-2 text-center">
            <a class="link-fx fw-bold fs-1" href="index.php">
              <span class="text-dark">Dash</span><span class="text-primary">mix</span>
            </a>
            <p class="text-uppercase fw-bold fs-sm text-muted">Account Lock Screen</p>
          </div>
          <div class="text-center push">
            <div class="d-inline-block p-4 rounded bg-body">
              <?php $dm->get_avatar(0, 'male', 64, true); ?>
              <a class="d-block fw-semibold mt-2" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
              <div class="fs-sm fw-semibold text-muted">Web Developer</div>
            </div>
          </div>
          <!-- END Header -->

          <!-- Lock Form -->
          <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/op_auth_lock.min.js which was auto compiled from _js/pages/op_auth_lock.js) -->
          <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
          <form class="js-validation-lock" action="be_pages_auth_all.php" method="POST">
            <div class="mb-4">
              <div class="input-group input-group-lg">
                <input type="password" class="form-control" id="lock-password" name="lock-password" placeholder="Password..">
                <span class="input-group-text">
                  <i class="fa fa-asterisk"></i>
                </span>
              </div>
            </div>
            <div class="text-center mb-4">
              <button type="submit" class="btn btn-hero btn-primary">
                <i class="fa fa-fw fa-lock-open opacity-50 me-1"></i> Unlock
              </button>
            </div>
          </form>
          <!-- END Lock Form -->
        </div>
      </div>
      <!-- END Lock Block -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Validation plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/vide/jquery.vide.min.js'); ?>
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>