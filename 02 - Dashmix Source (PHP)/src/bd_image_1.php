<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend_boxed/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php include 'inc/backend_boxed/views/inc_navigation.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Hero -->
  <div class="block block-rounded bg-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15@2x.jpg');">
    <div class="block-content bg-primary-dark-op">
      <div class="py-4 text-center">
        <h1 class="text-white mb-2">Backend Dashboard</h1>
        <h2 class="h4 fw-normal text-white-75">
          You have <a class="text-white" href="javascript:void(0)">3 new notifications!</a>
        </h2>
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
<?php require 'inc/_global/views/footer_end.php'; ?>
