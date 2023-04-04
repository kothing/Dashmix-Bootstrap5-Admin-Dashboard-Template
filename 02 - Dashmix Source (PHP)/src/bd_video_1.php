<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend_boxed/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php include 'inc/backend_boxed/views/inc_navigation.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Hero -->
  <!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
  <div class="block bg-video" data-vide-bg="<?php echo $dm->assets_folder; ?>/media/videos/tunnel" data-vide-options="posterType: jpg">
    <div class="block-content bg-primary-dark-op">
      <div class="py-4 text-center">
        <h1 class="text-white mb-2">Dashboard</h1>
        <h2 class="h4 fw-normal text-white-75">Welcome Admin, let's get started!</h2>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Dummy content -->
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-6">...</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Vide plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/vide/jquery.vide.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
