<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light mb-3">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Background Overlays</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Backgrounds</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Light Overlay -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15@2x.jpg');">
  <div class="bg-white-90">
    <div class="content py-6">
      <h3 class="text-center text-black-75 mb-0">
        Light Overlay
      </h3>
    </div>
  </div>
</div>
<!-- END Light Overlay -->

<!-- Dark Overlay -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo14@2x.jpg');">
  <div class="bg-black-75">
    <div class="content py-6">
      <h3 class="text-center text-white mb-0">
        Dark Overlay
      </h3>
    </div>
  </div>
</div>
<!-- END Dark Overlay -->

<!-- Primary Color Overlay -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16@2x.jpg');">
  <div class="bg-primary-op">
    <div class="content py-6">
      <h3 class="text-center text-white mb-0">
        Primary Color Overlay
      </h3>
    </div>
  </div>
</div>
<!-- END Primary Color Overlay -->

<!-- Primary Dark Color Overlay -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16@2x.jpg');">
  <div class="bg-primary-dark-op">
    <div class="content py-6">
      <h3 class="text-center text-white mb-0">
        Primary Dark Color Overlay
      </h3>
    </div>
  </div>
</div>
<!-- END Primary Dark Color Overlay -->

<!-- Light Overlay from left -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12@2x.jpg');">
  <div class="bg-gd-white-op-l">
    <div class="content py-6">
      <h3 class="text-black-75 text-center text-sm-start mb-0">
        Light Overlay from left
      </h3>
    </div>
  </div>
</div>
<!-- END Light Overlay from left -->

<!-- Light Overlay from right -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12@2x.jpg');">
  <div class="bg-gd-white-op-r">
    <div class="content py-6">
      <h3 class="text-black-75 text-center text-sm-end mb-0">
        Light Overlay from right
      </h3>
    </div>
  </div>
</div>
<!-- END Light Overlay from right -->

<!-- Light Overlay from center -->
<div class="bg-image my-3" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12@2x.jpg');">
  <div class="bg-gd-white-op-rl">
    <div class="content py-6">
      <h3 class="text-black-75 text-center mb-0">
        Light Overlay from center
      </h3>
    </div>
  </div>
</div>
<!-- END Light Overlay from center -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
