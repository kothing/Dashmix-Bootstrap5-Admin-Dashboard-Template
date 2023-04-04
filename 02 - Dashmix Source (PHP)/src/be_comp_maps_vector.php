<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/jvectormap/dist/jquery-jvectormap.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Vector Maps</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Vector Maps are initialized in js/pages/be_comp_maps_vector.min.js which was auto compiled from _js/pages/be_comp_maps_vector.js -->
<!-- For more info and examples you can check out http://jvectormap.com/documentation/-->
<div class="content">
  <!-- Maps Row -->
  <div class="row">
    <div class="col-12">
      <!-- World Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">World</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- World Map Container -->
          <div class="js-vector-map-world" style="height: 500px;"></div>
        </div>
      </div>
      <!-- END World Map -->
    </div>
    <div class="col-xl-6">
      <!-- Europe Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Europe</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Europe Map Container -->
          <div class="js-vector-map-europe"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END Europe Map -->
    </div>
    <div class="col-xl-6">
      <!-- USA Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">USA</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- USA Map Container -->
          <div class="js-vector-map-usa"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END USA Map -->
    </div>
    <div class="col-xl-6">
      <!-- India Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">India</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- India Map Container -->
          <div class="js-vector-map-india"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END India Map -->
    </div>
    <div class="col-xl-6">
      <!-- China Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">China</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- China Map Container -->
          <div class="js-vector-map-china"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END China Map -->
    </div>
    <div class="col-xl-6">
      <!-- Australia Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Australia</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Australia Map Container -->
          <div class="js-vector-map-australia"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END Australia Map -->
    </div>
    <div class="col-xl-6">
      <!-- South Africa Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">South Africa</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- South Africa Map Container -->
          <div class="js-vector-map-south-africa"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END South Africa Map -->
    </div>
    <div class="col-xl-6">
      <!-- France Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">France</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- France Map Container -->
          <div class="js-vector-map-france"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END France Map -->
    </div>
    <div class="col-xl-6">
      <!-- Germany Map -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Germany</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Germany Map Container -->
          <div class="js-vector-map-germany"  style="height: 400px;"></div>
        </div>
      </div>
      <!-- END Germany Map -->
    </div>
  </div>
  <!-- END Vector Maps Row -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Vector Map plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jvectormap/dist/jquery-jvectormap.min.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-au-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-cn-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-de-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-europe-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-fr-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-in-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-us-aea-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js'); ?>
<?php $dm->get_js('js/plugins/jvectormap/maps/jquery-jvectormap-za-mill-en.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_maps_vector.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
