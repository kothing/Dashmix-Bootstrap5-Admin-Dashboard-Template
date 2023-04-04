<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Gallery</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
<!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
<div class="content">
  <!-- Simple Gallery -->
  <h2 class="content-heading">Simple</h2>
  <div class="row items-push js-gallery img-fluid-100">
    <?php for ($i = 10; $i < 22; $i++) { ?>
      <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
          <?php $dm->get_photo($i, false, 'img-fluid'); ?>
        </a>
      </div>
    <?php } ?>
  </div>
  <!-- END Simple Gallery -->

  <!-- Advanced Gallery -->
  <h2 class="content-heading">Advanced</h2>
  <div class="row items-push js-gallery">
    <?php for ($i = 12; $i > 0; $i--) { ?>
      <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
          <?php $dm->get_photo($i, false, 'img-fluid options-item'); ?>
          <div class="options-overlay bg-black-75">
            <div class="options-overlay-content">
              <h3 class="h4 text-white mb-1">Title</h3>
              <h4 class="h6 text-white-75 mb-3">More Info</h4>
              <a class="btn btn-sm btn-primary img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                <i class="fa fa-search-plus opacity-50 me-1"></i> View
              </a>
              <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                <i class="fa fa-pencil-alt opacity-50 me-1"></i> Edit
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <!-- END Advanced Gallery -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Dashmix.helpersOnLoad(['jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
