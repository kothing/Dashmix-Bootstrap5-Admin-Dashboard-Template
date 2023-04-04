<?php
/**
 * dashboards/chat/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page
 *
 */
?>

<!-- Sidebar -->
<!--
  Sidebar Mini Mode - Display Helper classes

  Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
  Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

  Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
  Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
  Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
  <!-- Side Header -->
  <div class="content-header bg-primary">
    <!-- Logo -->
    <a class="fw-semibold text-white tracking-wide" href="index.php">
      <span class="smini-visible">
        D<span class="opacity-75">x</span>
      </span>
      <span class="smini-hidden">
        Dash<span class="opacity-75">mix</span>
        <span class="fw-normal">Chat</span>
      </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>
      <!-- Close Sidebar, Visible only on mobile screens -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
        <i class="fa fa-times-circle"></i>
      </a>
      <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
    <!-- People -->
    <div class="content-side">
      <form class="push" action="db_chat.php" method="POST" onsubmit="return false;">
        <div class="input-group">
          <input class="form-control form-control-alt" placeholder="Search People..">
          <span class="input-group-text input-group-text-alt">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
      <div class="block pull-x">
        <!-- Online -->
        <div class="block-content block-content-sm block-content-full bg-body-light">
          <span class="text-uppercase fs-sm fw-bold">Online</span>
        </div>
        <div class="block-content px-0">
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
        <div class="block-content block-content-sm block-content-full bg-body-light">
          <span class="text-uppercase fs-sm fw-bold">Busy</span>
        </div>
        <div class="block-content px-0">
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
        <div class="block-content block-content-sm block-content-full bg-body-light">
          <span class="text-uppercase fs-sm fw-bold">Away</span>
        </div>
        <div class="block-content px-0">
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
        <div class="block-content block-content-sm block-content-full bg-body-light">
          <span class="text-uppercase fs-sm fw-bold">Offline</span>
        </div>
        <div class="block-content px-0">
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
          <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
            <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Add People
          </a>
        </div>
        <!-- END Add People -->
      </div>
    </div>
    <!-- END People -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
