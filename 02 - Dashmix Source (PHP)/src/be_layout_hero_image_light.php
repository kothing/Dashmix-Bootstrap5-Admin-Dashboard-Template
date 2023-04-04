<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->inc_footer = false;
$dm->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15@2x.jpg');">
  <div class="hero bg-white-90">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="display-4 fw-bold text-black mb-3">
          Dash<span class="text-primary">mix</span>
        </h1>
        <h2 class="fw-normal text-black-50 mb-5">Building your idea is a journey.</h2>
        <div>
          <a class="btn btn-hero btn-primary" href="be_layout_hero_image_light.php">
            <i class="fa fa-fw fa-rocket opacity-50 me-1"></i> Get Started
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
