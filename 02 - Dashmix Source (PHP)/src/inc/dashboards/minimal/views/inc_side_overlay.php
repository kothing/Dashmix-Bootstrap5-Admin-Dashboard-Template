<?php
/**
 * dashboards/minimal/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The Side Overlay of each page
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="bg-primary">
    <div class="content-header">
      <!-- User Avatar -->
      <a class="img-link me-1" href="javascript:void(0)">
        <?php $dm->get_avatar(0, 'female', 32, true); ?>
      </a>
      <!-- END User Avatar -->

      <!-- User Info -->
      <div class="ms-2">
        <a class="text-white fw-semibold" href="javascript:void(0)"><?php $dm->get_name('female'); ?></a>
      </div>
      <!-- END User Info -->

      <!-- Close Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Side Overlay -->
    </div>
  </div>
  <!-- END Side Header -->

  <!-- Side Navigation -->
  <div class="content-side content-side-full">
    <ul class="nav-main">
      <?php $dm->build_nav(); ?>
    </ul>
  </div>
  <!-- END Side Navigation -->
</aside>
<!-- END Side Overlay -->
