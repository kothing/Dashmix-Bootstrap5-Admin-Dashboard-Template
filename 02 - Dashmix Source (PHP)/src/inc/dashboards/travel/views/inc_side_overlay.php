<?php
/**
 * dashboards/travel/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="content-header bg-dark">
    <div class="fw-semibold text-white">
      Downtown Apartment
    </div>

    <!-- Close Side Overlay -->
    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
      <i class="fa fa-times-circle"></i>
    </a>
    <!-- END Close Side Overlay -->
  </div>
  <!-- END Side Header -->

  <!-- Gallery -->
  <!-- Slick Slider (.js-slider class is initialized in Helpers.jqSlick()) -->
  <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
  <div class="js-slider slick-nav-black slick-nav-hover slick-dotted-inner slick-dotted-white img-fluid-100" data-dots="true" data-arrows="true" data-autoplay="true" data-autoplay-speed="3000">
    <div>
      <?php $dm->get_photo(26, true, 'img-fluid'); ?>
    </div>
    <div>
      <?php $dm->get_photo(28, true, 'img-fluid'); ?>
    </div>
    <div>
      <?php $dm->get_photo(29, true, 'img-fluid'); ?>
    </div>
    <div>
      <?php $dm->get_photo(30, true, 'img-fluid'); ?>
    </div>
  </div>
  <!-- END Gallery -->

  <!-- Info -->
  <div class="content-side content-side-full">
    <h5 class="h2 fw-light text-center mb-2">
      $150 <span class="fs-3 text-muted">per night</span>
    </h5>
    <div class="text-warning text-center push">
      <i class="fa fa-fw fa-star"></i>
      <i class="fa fa-fw fa-star"></i>
      <i class="fa fa-fw fa-star"></i>
      <i class="fa fa-fw fa-star"></i>
      <i class="fa fa-fw fa-star"></i>
      <span class="text-muted">(19)</span>
    </div>
    <div class="row text-center border-top border-bottom bg-body-light pull-x push">
      <div class="col-6 border-bottom border-end">
        <p class="py-3 mb-0">
          <i class="fa fa-fw fa-bed text-muted me-1"></i> <strong>2</strong> Bedrooms
        </p>
      </div>
      <div class="col-6 border-bottom">
        <p class="py-3 mb-0">
          <i class="fa fa-fw fa-bath text-muted me-1"></i> <strong>1</strong> Bathroom
        </p>
      </div>
      <div class="col-6 border-end">
        <p class="py-3 mb-0">
          <i class="fa fa-fw fa-check text-success me-1"></i> Wifi
        </p>
      </div>
      <div class="col-6">
        <p class="py-3 mb-0">
          <i class="fa fa-fw fa-check text-success me-1"></i> Breakfast
        </p>
      </div>
    </div>
    <p class="fs-sm fw-medium">
      Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
    </p>
    <div class="row g-sm">
      <div class="col-6">
        <a class="btn btn-sm btn-primary w-100" href="javascript:void(0)">
          Rent
        </a>
      </div>
      <div class="col-6">
        <a class="btn btn-sm btn-alt-primary w-100" href="javascript:void(0)">
          View More
        </a>
      </div>
    </div>
  </div>
  <!-- END Info -->
</aside>
<!-- END Side Overlay -->
