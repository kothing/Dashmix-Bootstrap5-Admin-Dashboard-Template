<?php
/**
 * dashboards/social_compact/views/inc_side_overlay.php
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
  <div class="bg-primary">
    <div class="content-header">
      <div class="fs-lg fw-light text-white">
        <i class="fa fa-users me-1"></i> People
      </div>

      <!-- Close Side Overlay -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Side Overlay -->
    </div>
  </div>
  <!-- END Side Header -->

  <!-- Side Content -->
  <div class="content-side">
    <form class="push" action="db_social_compact.php" method="POST" onsubmit="return false;">
      <div class="input-group">
        <input class="form-control" placeholder="Search People..">
        <span class="input-group-text">
          <i class="fa fa-fw fa-search"></i>
        </span>
      </div>
    </form>
    <div class="block pull-x">
      <!-- Online -->
      <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Online</span>
      </div>
      <div class="block-content">
        <ul class="nav-items">
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fs-sm text-muted">Photographer</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'male', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                <div class="fw-normal fs-sm text-muted">Web Designer</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fw-normal fs-sm text-muted">Web Developer</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- Online -->

      <!-- Busy -->
      <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Busy</span>
      </div>
      <div class="block-content">
        <ul class="nav-items">
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fw-normal fs-sm text-muted">UI Designer</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- END Busy -->

      <!-- Away -->
      <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Away</span>
      </div>
      <div class="block-content">
        <ul class="nav-items">
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'male', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                <div class="fw-normal fs-sm text-muted">Copywriter</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fw-normal fs-sm text-muted">Writer</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- END Away -->

      <!-- Offline -->
      <div class="block-content block-content-sm block-content-full bg-body">
        <span class="text-uppercase fs-sm fw-bold">Offline</span>
      </div>
      <div class="block-content">
        <ul class="nav-items">
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'male', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                <div class="fw-normal fs-sm text-muted">Teacher</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fw-normal fs-sm text-muted">Photographer</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'female', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
              </div>
            </a>
          </li>
          <li>
            <a class="d-flex py-2" href="javascript:void(0)">
              <div class="flex-shrink-0 mx-3 overlay-container">
                <?php $dm->get_avatar(0, 'male', 48); ?>
                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
              </div>
              <div class="flex-grow-1">
                <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                <div class="fw-normal fs-sm text-muted">UX Specialist</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- END Offline -->

      <!-- Add People -->
      <div class="block-content border-top">
        <a class="btn btn-alt-primary w-100" href="javascript:void(0)">
          <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Add People
        </a>
      </div>
      <!-- END Add People -->
    </div>
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
