<?php
/**
 * backend_boxed/views/inc_navigation.php
 *
 * Author: pixelcave
 *
 * The navigation section of each page
 *
 */
?>

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
        <li class="nav-main-item ms-lg-auto">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-brush"></i>
            <span class="nav-main-link-name d-lg-none">Themes</span>
          </a>
          <ul class="nav-main-submenu nav-main-submenu-right">
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