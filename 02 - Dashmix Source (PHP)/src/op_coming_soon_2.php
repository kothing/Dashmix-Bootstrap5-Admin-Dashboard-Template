<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo14@2x.jpg');">
  <div class="hero bg-black-25">
    <div class="hero-inner">
      <div class="content content-full">
        <div class="row justify-content-center">
          <div class="col-md-6 col-xl-4 py-5 text-center bg-black-75 rounded">
            <div class="push border-bottom border-white-op">
              <a class="link-fx fw-bold fs-1" href="index.php">
                <span class="text-white">Dash</span><span class="text-primary">mix</span>
              </a>
              <p class="text-uppercase fw-bold fs-sm text-white-75">Stay tuned, it is coming soon</p>
            </div>

            <!-- Countdown.js (.js-countdown class is initialized in js/pages/op_coming_soon.min.js which was auto compiled from _js/pages/op_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
            <div class="js-countdown"></div>

            <a class="btn btn-primary" href="be_pages_generic_blank.php">
              <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Countdown plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-countdown/jquery.countdown.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_coming_soon.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>