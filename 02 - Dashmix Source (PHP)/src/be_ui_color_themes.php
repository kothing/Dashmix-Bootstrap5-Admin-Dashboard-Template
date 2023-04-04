<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Color Themes</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Color Themes</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Preview Color Themes -->
  <h2 class="content-heading">Preview Color Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
      <div class="row text-center">
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-default text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="default" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">Default</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-xwork text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xWork</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-xmodern text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xModern</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-xeco text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xEco</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-xsmooth text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xSmooth</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-xinspire text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xInspire</div>
        </div>
        <div class="col-6 col-xl-4 py-4">
          <a class="item item-link-pop item-rounded bg-xdream text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xDream</div>
        </div>
        <div class="col-6 col-xl-4 py-4">
          <a class="item item-link-pop item-rounded bg-xpro text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xPro</div>
        </div>
        <div class="col-6 col-xl-4 py-4">
          <a class="item item-link-pop item-rounded bg-xplay text-white-75 mx-auto mb-3" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">xPlay</div>
        </div>
      </div>
      <hr>
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <div class="row text-center">
        <div class="col-6 col-xl-2 offset-xl-1 py-4">
          <a class="item item-link-pop item-rounded bg-sidebar-light text-muted mx-auto mb-3" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">Light Sidebar</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-sidebar-dark text-white-75 mx-auto mb-3" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">Dark Sidebar</div>
        </div>
        <div class="col-6 col-xl-2 offset-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-header-light text-muted mx-auto mb-3" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">Light Header</div>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <a class="item item-link-pop item-rounded bg-header-dark text-white-75 mx-auto mb-3" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
            <i class="fa fa-paint-brush"></i>
          </a>
          <div class="fw-semibold">Dark Header</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Preview Color Themes -->

  <!-- Primary Colors -->
  <h2 class="content-heading">Primary Colors <small>Colors of the active color theme</small></h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-lighter mx-auto mb-3"></div>
          <code>.bg-primary-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-light mx-auto mb-3"></div>
          <code>.bg-primary-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary mx-auto mb-3"></div>
          <code>.bg-primary</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-primary mx-auto mb-3"></div>
          <code>.bg-gd-primary</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-dark mx-auto mb-3"></div>
          <code>.bg-primary-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-darker mx-auto mb-3"></div>
          <code>.bg-primary-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-op mx-auto mb-3"></div>
          <code>.bg-primary-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-primary-dark-op mx-auto mb-3"></div>
          <code>.bg-primary-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-primary-lighter mb-3">Primary Lighter</div>
          <code>.text-primary-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-primary-light mb-3">Primary Light</div>
          <code>.text-primary-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-primary mb-3">Primary</div>
          <code>.text-primary</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-primary-dark mb-3">Primary Dark</div>
          <code>.text-primary-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-primary-darker mb-3">Primary Darker</div>
          <code>.text-primary-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Primary Colors -->

  <!-- Default Theme -->
  <h2 class="content-heading">Default Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-lighter mx-auto mb-3"></div>
          <code>.bg-default-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-light mx-auto mb-3"></div>
          <code>.bg-default-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default mx-auto mb-3"></div>
          <code>.bg-default</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-default mx-auto mb-3"></div>
          <code>.bg-gd-default</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-dark mx-auto mb-3"></div>
          <code>.bg-default-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-darker mx-auto mb-3"></div>
          <code>.bg-default-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-op mx-auto mb-3"></div>
          <code>.bg-default-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-default-dark-op mx-auto mb-3"></div>
          <code>.bg-default-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-default-lighter mb-3">Default Lighter</div>
          <code>.text-default-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-default-light mb-3">Default Light</div>
          <code>.text-default-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-default mb-3">Default Main</div>
          <code>.text-default</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-default-dark mb-3">Default Dark</div>
          <code>.text-default-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-default-darker mb-3">Default Darker</div>
          <code>.text-default-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Default Theme -->

  <!-- xWork Theme -->
  <h2 class="content-heading">xWork Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-lighter mx-auto mb-3"></div>
          <code>.bg-xwork-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-light mx-auto mb-3"></div>
          <code>.bg-xwork-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork mx-auto mb-3"></div>
          <code>.bg-xwork</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xwork mx-auto mb-3"></div>
          <code>.bg-gd-xwork</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-dark mx-auto mb-3"></div>
          <code>.bg-xwork-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-darker mx-auto mb-3"></div>
          <code>.bg-xwork-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-op mx-auto mb-3"></div>
          <code>.bg-xwork-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xwork-dark-op mx-auto mb-3"></div>
          <code>.bg-xwork-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xwork-lighter mb-3">xWork Lighter</div>
          <code>.text-xwork-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xwork-light mb-3">xWork Light</div>
          <code>.text-xwork-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xwork mb-3">xWork Main</div>
          <code>.text-xwork</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xwork-dark mb-3">xWork Dark</div>
          <code>.text-xwork-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xwork-darker mb-3">xWork Darker</div>
          <code>.text-xwork-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xWork Theme -->

  <!-- xModern Theme -->
  <h2 class="content-heading">xModern Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-lighter mx-auto mb-3"></div>
          <code>.bg-xmodern-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-light mx-auto mb-3"></div>
          <code>.bg-xmodern-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern mx-auto mb-3"></div>
          <code>.bg-xmodern</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xmodern mx-auto mb-3"></div>
          <code>.bg-gd-xmodern</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-dark mx-auto mb-3"></div>
          <code>.bg-xmodern-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-darker mx-auto mb-3"></div>
          <code>.bg-xmodern-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-op mx-auto mb-3"></div>
          <code>.bg-xmodern-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xmodern-dark-op mx-auto mb-3"></div>
          <code>.bg-xmodern-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xmodern-lighter mb-3">xModern Lighter</div>
          <code>.text-xmodern-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xmodern-light mb-3">xModern Light</div>
          <code>.text-xmodern-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xmodern mb-3">xModern Main</div>
          <code>.text-xmodern</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xmodern-dark mb-3">xModern Dark</div>
          <code>.text-xmodern-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xmodern-darker mb-3">xModern Darker</div>
          <code>.text-xmodern-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xModern Theme -->

  <!-- xEco Theme -->
  <h2 class="content-heading">xEco Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-lighter mx-auto mb-3"></div>
          <code>.bg-xeco-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-light mx-auto mb-3"></div>
          <code>.bg-xeco-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco mx-auto mb-3"></div>
          <code>.bg-xeco</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xeco mx-auto mb-3"></div>
          <code>.bg-gd-xeco</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-dark mx-auto mb-3"></div>
          <code>.bg-xeco-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-darker mx-auto mb-3"></div>
          <code>.bg-xeco-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-op mx-auto mb-3"></div>
          <code>.bg-xeco-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xeco-dark-op mx-auto mb-3"></div>
          <code>.bg-xeco-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xeco-lighter mb-3">xEco Lighter</div>
          <code>.text-xeco-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xeco-light mb-3">xEco Light</div>
          <code>.text-xeco-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xeco mb-3">xEco Main</div>
          <code>.text-xeco</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xeco-dark mb-3">xEco Dark</div>
          <code>.text-xeco-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xeco-darker mb-3">xEco Darker</div>
          <code>.text-xeco-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xEco Theme -->

  <!-- xSmooth Theme -->
  <h2 class="content-heading">xSmooth Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-lighter mx-auto mb-3"></div>
          <code>.bg-xsmooth-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-light mx-auto mb-3"></div>
          <code>.bg-xsmooth-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth mx-auto mb-3"></div>
          <code>.bg-xsmooth</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xsmooth mx-auto mb-3"></div>
          <code>.bg-gd-xsmooth</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-dark mx-auto mb-3"></div>
          <code>.bg-xsmooth-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-darker mx-auto mb-3"></div>
          <code>.bg-xsmooth-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-op mx-auto mb-3"></div>
          <code>.bg-xsmooth-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xsmooth-dark-op mx-auto mb-3"></div>
          <code>.bg-xsmooth-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xsmooth-lighter mb-3">xSmooth Lighter</div>
          <code>.text-xsmooth-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xsmooth-light mb-3">xSmooth Light</div>
          <code>.text-xsmooth-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xsmooth mb-3">xSmooth Main</div>
          <code>.text-xsmooth</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xsmooth-dark mb-3">xSmooth Dark</div>
          <code>.text-xsmooth-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xsmooth-darker mb-3">xSmooth Darker</div>
          <code>.text-xsmooth-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xSmooth Theme -->

  <!-- xInspire Theme -->
  <h2 class="content-heading">xInspire Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-lighter mx-auto mb-3"></div>
          <code>.bg-xinspire-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-light mx-auto mb-3"></div>
          <code>.bg-xinspire-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire mx-auto mb-3"></div>
          <code>.bg-xinspire</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xinspire mx-auto mb-3"></div>
          <code>.bg-gd-xinspire</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-dark mx-auto mb-3"></div>
          <code>.bg-xinspire-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-darker mx-auto mb-3"></div>
          <code>.bg-xinspire-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-op mx-auto mb-3"></div>
          <code>.bg-xinspire-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xinspire-dark-op mx-auto mb-3"></div>
          <code>.bg-xinspire-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xinspire-lighter mb-3">xInspire Lighter</div>
          <code>.text-xinspire-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xinspire-light mb-3">xInspire Light</div>
          <code>.text-xinspire-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xinspire mb-3">xInspire Main</div>
          <code>.text-xinspire</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xinspire-dark mb-3">xInspire Dark</div>
          <code>.text-xinspire-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xinspire-darker mb-3">xInspire Darker</div>
          <code>.text-xinspire-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xInspire Theme -->

  <!-- xDream Theme -->
  <h2 class="content-heading">xDream Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-lighter mx-auto mb-3"></div>
          <code>.bg-xdream-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-light mx-auto mb-3"></div>
          <code>.bg-xdream-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream mx-auto mb-3"></div>
          <code>.bg-xdream</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xdream mx-auto mb-3"></div>
          <code>.bg-gd-xdream</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-dark mx-auto mb-3"></div>
          <code>.bg-xdream-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-darker mx-auto mb-3"></div>
          <code>.bg-xdream-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-op mx-auto mb-3"></div>
          <code>.bg-xdream-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xdream-dark-op mx-auto mb-3"></div>
          <code>.bg-xdream-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xdream-lighter mb-3">xDream Lighter</div>
          <code>.text-xdream-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xdream-light mb-3">xDream Light</div>
          <code>.text-xdream-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xdream mb-3">xDream Main</div>
          <code>.text-xdream</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xdream-dark mb-3">xDream Dark</div>
          <code>.text-xdream-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xdream-darker mb-3">xDream Darker</div>
          <code>.text-xdream-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xDream Theme -->

  <!-- xPro Theme -->
  <h2 class="content-heading">xPro Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-lighter mx-auto mb-3"></div>
          <code>.bg-xpro-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-light mx-auto mb-3"></div>
          <code>.bg-xpro-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro mx-auto mb-3"></div>
          <code>.bg-xpro</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xpro mx-auto mb-3"></div>
          <code>.bg-gd-xpro</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-dark mx-auto mb-3"></div>
          <code>.bg-xpro-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-darker mx-auto mb-3"></div>
          <code>.bg-xpro-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-op mx-auto mb-3"></div>
          <code>.bg-xpro-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xpro-dark-op mx-auto mb-3"></div>
          <code>.bg-xpro-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xpro-lighter mb-3">xPro Lighter</div>
          <code>.text-xpro-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xpro-light mb-3">xPro Light</div>
          <code>.text-xpro-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xpro mb-3">xPro Main</div>
          <code>.text-xpro</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xpro-dark mb-3">xPro Dark</div>
          <code>.text-xpro-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xpro-darker mb-3">xPro Darker</div>
          <code>.text-xpro-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xPro Theme -->

  <!-- xPlay Theme -->
  <h2 class="content-heading">xPlay Theme</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-lighter mx-auto mb-3"></div>
          <code>.bg-xplay-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-light mx-auto mb-3"></div>
          <code>.bg-xplay-light</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay mx-auto mb-3"></div>
          <code>.bg-xplay</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-gd-xplay mx-auto mb-3"></div>
          <code>.bg-gd-xplay</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-dark mx-auto mb-3"></div>
          <code>.bg-xplay-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-darker mx-auto mb-3"></div>
          <code>.bg-xplay-darker</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-op mx-auto mb-3"></div>
          <code>.bg-xplay-op</code>
        </div>
        <div class="col-6 col-md-4 col-xl-3 py-4">
          <div class="item item-rounded bg-xplay-dark-op mx-auto mb-3"></div>
          <code>.bg-xplay-dark-op</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xplay-lighter mb-3">xPlay Lighter</div>
          <code>.text-xplay-lighter</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xplay-light mb-3">xPlay Light</div>
          <code>.text-xplay-light</code>
        </div>
        <div class="col-6 col-md-4 py-4">
          <div class="text-xplay mb-3">xPlay Main</div>
          <code>.text-xplay</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xplay-dark mb-3">xPlay Dark</div>
          <code>.text-xplay-dark</code>
        </div>
        <div class="col-6 col-md-4 col-xl-2 py-4">
          <div class="text-xplay-darker mb-3">xPlay Darker</div>
          <code>.text-xplay-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END xPlay Theme -->

  <!-- Contextual Colors -->
  <h2 class="content-heading">Contextual Colors</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-success mx-auto mb-3"></div>
          <code>.bg-success</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-info mx-auto mb-3"></div>
          <code>.bg-info</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-warning mx-auto mb-3"></div>
          <code>.bg-warning</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-danger mx-auto mb-3"></div>
          <code>.bg-danger</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-success-light mx-auto mb-3"></div>
          <code>.bg-success-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-info-light mx-auto mb-3"></div>
          <code>.bg-info-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-warning-light mx-auto mb-3"></div>
          <code>.bg-warning-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-danger-light mx-auto mb-3"></div>
          <code>.bg-danger-light</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-md-3 py-4">
          <div class="text-success mb-3">Success</div>
          <code>.text-success</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-info mb-3">Info</div>
          <code>.text-info</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-warning mb-3">Warning</div>
          <code>.text-warning</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-danger mb-3">Danger</div>
          <code>.text-danger</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-success-light mb-3">Success Light</div>
          <code>.text-success-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-info-light mb-3">Info Light</div>
          <code>.text-info-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-warning-light mb-3">Warning Light</div>
          <code>.text-warning-light</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="text-danger-light mb-3">Danger Light</div>
          <code>.text-danger-light</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Contextual Colors -->

  <!-- Gray Colors -->
  <h2 class="content-heading">Gray Colors</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-xl-2 py-4">
          <div class="item item-rounded bg-gray-lighter mx-auto mb-3"></div>
          <code>.bg-gray-lighter</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="item item-rounded bg-gray-light mx-auto mb-3"></div>
          <code>.bg-gray-light</code>
        </div>
        <div class="col-xl-4 py-4">
          <div class="item item-rounded bg-gray mx-auto mb-3"></div>
          <code>.bg-gray</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="item item-rounded bg-gray-dark mx-auto mb-3"></div>
          <code>.bg-gray-dark</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="item item-rounded bg-gray-darker mx-auto mb-3"></div>
          <code>.bg-gray-darker</code>
        </div>
      </div>
      <hr>
      <div class="row text-center">
        <div class="col-6 col-xl-2 py-4">
          <div class="text-gray-lighter mb-3">Gray Lighter</div>
          <code>.text-gray-lighter</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="text-gray-light mb-3">Gray Light</div>
          <code>.text-gray-light</code>
        </div>
        <div class="col-xl-4 py-4">
          <div class="text-gray mb-3">Gray</div>
          <code>.text-gray</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="text-gray-dark mb-3">Gray Dark</div>
          <code>.text-gray-dark</code>
        </div>
        <div class="col-6 col-xl-2 py-4">
          <div class="text-gray-darker mb-3">Gray Darker</div>
          <code>.text-gray-darker</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Gray Colors -->

  <!-- Gradient Colors -->
  <h2 class="content-heading">Gradient Colors</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-dusk mx-auto mb-3"></div>
          <code>.bg-gd-dusk</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-fruit mx-auto mb-3"></div>
          <code>.bg-gd-fruit</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-aqua mx-auto mb-3"></div>
          <code>.bg-gd-aqua</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sublime mx-auto mb-3"></div>
          <code>.bg-gd-sublime</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sea mx-auto mb-3"></div>
          <code>.bg-gd-sea</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-leaf mx-auto mb-3"></div>
          <code>.bg-gd-leaf</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-lake mx-auto mb-3"></div>
          <code>.bg-gd-lake</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sun mx-auto mb-3"></div>
          <code>.bg-gd-sun</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Gradient Colors -->

  <!-- Gradient Colors with Opacity -->
  <h2 class="content-heading">Gradient Colors with Opacity</h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-dusk-op mx-auto mb-3"></div>
          <code>.bg-gd-dusk-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-fruit-op mx-auto mb-3"></div>
          <code>.bg-gd-fruit-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-aqua-op mx-auto mb-3"></div>
          <code>.bg-gd-aqua-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sublime-op mx-auto mb-3"></div>
          <code>.bg-gd-sublime-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sea-op mx-auto mb-3"></div>
          <code>.bg-gd-sea-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-leaf-op mx-auto mb-3"></div>
          <code>.bg-gd-leaf-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-lake-op mx-auto mb-3"></div>
          <code>.bg-gd-lake-op</code>
        </div>
        <div class="col-6 col-md-3 py-4">
          <div class="item item-rounded bg-gd-sun-op mx-auto mb-3"></div>
          <code>.bg-gd-sun-op</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Gradient Colors with Opacity -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
