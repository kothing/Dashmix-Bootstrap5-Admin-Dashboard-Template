<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 justify-content-center bg-body-dark">
  <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
    <!-- Lock Block -->
    <!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
    <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-video" data-vide-bg="<?php echo $dm->assets_folder; ?>/media/videos/city_night" data-vide-options="posterType: jpg">
      <div class="row g-0">
        <div class="col-md-6 order-md-1 bg-body-extra-light">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <!-- Header -->
            <div class="mb-2 text-center">
              <a class="link-fx fw-bold fs-1" href="index.php">
                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
              </a>
              <p class="text-uppercase fw-bold fs-sm text-muted">Account Lock Screen</p>
            </div>
            <!-- END Header -->

            <!-- Lock Form -->
            <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/op_auth_lock.min.js which was auto compiled from _js/pages/op_auth_lock.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-lock" action="be_pages_auth_all.php" method="POST">
              <div class="mb-4">
                <input type="password" class="form-control form-control-alt" id="lock-password" name="lock-password" placeholder="Password..">
              </div>
              <div class="text-center mb-4">
                <button type="submit" class="btn w-100 btn-hero btn-primary">
                  <i class="fa fa-fw fa-lock-open opacity-50 me-1"></i> Unlock
                </button>
              </div>
            </form>
            <!-- END Lock Form -->
          </div>
        </div>
        <div class="col-md-6 order-md-0 bg-xplay-op d-flex align-items-center">
          <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6 text-center">
            <?php $dm->get_avatar(0, 'male', 64, true); ?>
            <a class="d-block text-white fs-lg fw-semibold mt-3" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
            <div class="text-white-75">Web Developer</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Lock Block -->
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