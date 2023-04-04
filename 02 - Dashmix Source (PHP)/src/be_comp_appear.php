<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Appear</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Appear</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Appear ([data-toggle="appear"] is initialized in Helpers.jqAppear()) -->
<!-- For more info and examples you can check out https://github.com/bas2k/jquery.appear -->
<div class="content">
  <h2 class="content-heading">Basic <small>Animate elements and make them visible on scrolling</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-info text-white mx-auto">
              <i class="fa fa-2x fa-train"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Train</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-danger text-white mx-auto">
              <i class="fa fa-2x fa-plane"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Aeroplane</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-dark text-white mx-auto">
              <i class="fa fa-2x fa-car"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Car</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Appear -->

  <!-- Animation Classes -->
  <h2 class="content-heading">Animated <small>You can use the animation classes of your choice</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-warning text-white mx-auto">
              <i class="si fa-2x si-briefcase"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Projects</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-info text-white mx-auto">
              <i class="si fa-2x si-game-controller"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Games</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-class="animated flash">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-success text-white mx-auto">
              <i class="si fa-2x fa-2x si-music-tone"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Music</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Animation Classes -->

  <!-- Offset -->
  <h2 class="content-heading">Offset <small>You can add an offset, to make the element appear sooner or later</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="-200">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-danger-light text-danger mx-auto">
              <i class="si fa-2x si-directions"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Directions</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="200">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-warning-light text-warning mx-auto">
              <i class="si fa-2x si-energy"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Energy</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="-400">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-info-light text-info mx-auto">
              <i class="si fa-2x si-chemistry"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Lab</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Offset -->

  <!-- Timeouts -->
  <h2 class="content-heading">Timeouts <small>You can delay the animation, creating nice effects</small></h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="-200">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-body text-primary mx-auto">
              <i class="si fa-2x si-badge"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Awards</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="200">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-body text-danger mx-auto">
              <i class="si fa-2x si-book-open"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Books</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="400">
        <div class="block-content block-content-full">
          <div class="py-5 text-center">
            <div class="item item-2x item-circle bg-body text-success mx-auto">
              <i class="si fa-2x si-bar-chart"></i>
            </div>
            <div class="fs-4 fw-semibold pt-3 mb-0">Statistics</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Timeouts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Appear plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-appear/jquery.appear.min.js'); ?>

<!-- Page JS Helpers (jQuery Appear plugin) -->
<script>Dashmix.helpersOnLoad(['jq-appear']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
