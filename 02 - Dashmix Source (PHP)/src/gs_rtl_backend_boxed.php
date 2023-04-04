<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/get_started/rtl_backend_boxed/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Navigation -->
<div class="bg-sidebar-dark">
  <div class="content">
    <!-- Toggle Main Navigation -->
    <div class="d-lg-none push">
      <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
      <button type="button" class="btn w-100 btn-primary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
        Menu
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- END Toggle Main Navigation -->

    <!-- Main Navigation -->
    <div id="main-navigation" class="d-none d-lg-block push">
      <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
        <?php $dm->build_nav(false, true); ?>
        <li class="nav-main-heading">Extra</li>
        <li class="nav-main-item me-lg-auto">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-brush"></i>
            <span class="nav-main-link-name d-lg-none">Themes</span>
          </a>
          <ul class="nav-main-submenu nav-main-submenu-left">
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                <i class="nav-main-link-icon fa fa-circle text-default"></i>
                <span class="nav-main-link-name">Default</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                <span class="nav-main-link-name">xWork</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                <span class="nav-main-link-name">xModern</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                <span class="nav-main-link-name">xEco</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                <span class="nav-main-link-name">xSmooth</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                <span class="nav-main-link-name">xInspire</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                <span class="nav-main-link-name">xDream</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                <span class="nav-main-link-name">xPro</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#">
                <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                <span class="nav-main-link-name">xPlay</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END Main Navigation -->
  </div>
</div>
<!-- END Navigation -->

<!-- Page Content -->
<div class="content">
  <!-- Your Block -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Title <small>Get Started</small>
      </h3>
      <div class="block-options ps-0 pe-3">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
          <i class="si si-pin"></i>
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
          <i class="si si-close"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <p>
        Create your own awesome project!
      </p>
    </div>
  </div>
  <!-- END Your Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
