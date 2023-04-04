<?php
/**
 * backend/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page (Backend pages)
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header -->
  <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/bg_side_overlay_header.jpg');">
    <div class="bg-primary-op">
      <div class="content-header">
        <!-- User Avatar -->
        <a class="img-link me-1" href="be_pages_generic_profile.php">
          <?php $dm->get_avatar(10, '', 48); ?>
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ms-2">
          <a class="text-white fw-semibold" href="be_pages_generic_profile.php">George Taylor</a>
          <div class="text-white-75 fs-sm">Full Stack Developer</div>
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
  </div>
  <!-- END Side Header -->

  <!-- Side Content -->
  <div class="content-side">
    <!-- Side Overlay Tabs -->
    <div class="block block-transparent pull-x pull-t mb-0">
      <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
            <i class="fa fa-fw fa-cog"></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
            <i class="far fa-fw fa-user-circle"></i>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
            <i class="far fa-fw fa-edit"></i>
          </button>
        </li>
      </ul>
      <div class="block-content tab-content overflow-hidden">
        <!-- Settings Tab -->
        <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab" tabindex="0">
          <div class="block mb-0">
            <!-- Color Themes -->
            <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
            </div>
            <div class="block-content block-content-full">
              <div class="row g-sm text-center">
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                    Default
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#">
                    xWork
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#">
                    xModern
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#">
                    xEco
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#">
                    xSmooth
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#">
                    xInspire
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#">
                    xDream
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#">
                    xPro
                  </a>
                </div>
                <div class="col-4 mb-1">
                  <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#">
                    xPlay
                  </a>
                </div>
                <div class="col-12">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" href="be_ui_color_themes.php">All Color Themes</a>
                </div>
              </div>
            </div>
            <!-- END Color Themes -->

            <!-- Sidebar -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
            </div>
            <div class="block-content block-content-full">
              <div class="row g-sm text-center">
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                </div>
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                </div>
              </div>
            </div>
            <!-- END Sidebar -->

            <!-- Header -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Header</span>
            </div>
            <div class="block-content block-content-full">
              <div class="row g-sm text-center mb-2">
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                </div>
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                </div>
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                </div>
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                </div>
              </div>
            </div>
            <!-- END Header -->

            <!-- Content -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Content</span>
            </div>
            <div class="block-content block-content-full">
              <div class="row g-sm text-center">
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                </div>
                <div class="col-6 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                </div>
                <div class="col-12 mb-1">
                  <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                </div>
              </div>
            </div>
            <!-- END Content -->

            <!-- Layout API -->
            <div class="block-content block-content-full border-top">
              <a class="btn w-100 btn-alt-primary" href="be_layout_api.php">
                <i class="fa fa-fw fa-flask me-1"></i> Layout API
              </a>
            </div>
            <!-- END Layout API -->
          </div>
        </div>
        <!-- END Settings Tab -->

        <!-- People -->
        <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
          <div class="block mb-0">
            <!-- Online -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Online</span>
            </div>
            <div class="block-content">
              <ul class="nav-items">
                <li>
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
                  <a class="d-flex py-2" href="be_pages_generic_profile.php">
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
            <div class="block-content block-content-full border-top">
              <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Add People
              </a>
            </div>
            <!-- END Add People -->
          </div>
        </div>
        <!-- END People -->

        <!-- Profile -->
        <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
          <form action="be_pages_dashboard.php" method="POST" onsubmit="return false;">
            <div class="block mb-0">
              <!-- Personal -->
              <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Personal</span>
              </div>
              <div class="block-content block-content-full">
                <div class="mb-4">
                  <label class="form-label">Username</label>
                  <input type="text" readonly class="form-control" id="so-profile-username-static" value="Admin">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="so-profile-name">Name</label>
                  <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="so-profile-email">Email</label>
                  <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                </div>
              </div>
              <!-- END Personal -->

              <!-- Password Update -->
              <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Password Update</span>
              </div>
              <div class="block-content block-content-full">
                <div class="mb-4">
                  <label class="form-label" for="so-profile-password">Current Password</label>
                  <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="so-profile-new-password">New Password</label>
                  <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                  <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                </div>
              </div>
              <!-- END Password Update -->

              <!-- Options -->
              <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase fs-sm fw-bold">Options</span>
              </div>
              <div class="block-content">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                  <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                </div>
                <p class="text-muted fs-sm">
                  Make your online status visible to other users of your app
                </p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                  <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                </div>
                <p class="text-muted fs-sm">
                  Receive desktop notifications regarding your projects and sales
                </p>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                  <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                </div>
                <p class="text-muted fs-sm">
                  If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                </p>
              </div>
              <!-- END Options -->

              <!-- Submit -->
              <div class="block-content block-content-full border-top">
                <button type="submit" class="btn w-100 btn-alt-primary">
                  <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                </button>
              </div>
              <!-- END Submit -->
            </div>
          </form>
        </div>
        <!-- END Profile -->
      </div>
    </div>
    <!-- END Side Overlay Tabs -->
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
