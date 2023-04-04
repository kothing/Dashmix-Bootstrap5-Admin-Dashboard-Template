<?php
/**
 * get_started/backend/views/inc_side_overlay.php
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
  <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/bg_side_overlay_header.jpg');">
    <div class="bg-primary-op">
      <div class="content-header">
        <!-- User Avatar -->
        <a class="img-link me-1" href="javascript:void(0)">
          <?php $dm->get_avatar(10, '', 48); ?>
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ms-2">
          <a class="text-white fw-semibold" href="javascript:void(0)">John Doe</a>
          <div class="text-white-75 fs-sm">Administrator</div>
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
    <div class="block block-transparent pull-x pull-t">
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
              <div class="row g-sm text-center">
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
          </div>
        </div>
        <!-- END Settings Tab -->

        <!-- People -->
        <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
          <div class="block mb-0">
            <!-- Section -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Section</span>
            </div>
            <div class="block-content">
              <p>
                ...
              </p>
            </div>
            <!-- Section -->
          </div>
        </div>
        <!-- END People -->

        <!-- Profile -->
        <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
          <div class="block mb-0">
            <!-- Section -->
            <div class="block-content block-content-sm block-content-full bg-body">
              <span class="text-uppercase fs-sm fw-bold">Section</span>
            </div>
            <div class="block-content">
              <p>
                ...
              </p>
            </div>
            <!-- Section -->
          </div>
        </div>
        <!-- END Profile -->
      </div>
    </div>
    <!-- END Side Overlay Tabs -->
  </div>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
