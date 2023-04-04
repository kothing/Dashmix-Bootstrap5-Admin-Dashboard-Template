<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->page_loader = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Page &amp; Header Loaders</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Loaders</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Header Loader (functionality is initialized Template.__uiApiLayout()) -->
  <!-- Header Loader HTML markup can be found in the header (#page-header) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Header Loader</h3>
    </div>
    <div class="block-content">
      <p>You can use the layout API to start the header loader and stop it on demand. It is better to be used when the header is also set to fixed, so it is always visible.</p>

      <!-- Start -->
      <h2 class="content-heading pt-0">Start</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Starting the header loader is very easy and you can either do it on button click or from JS code
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-primary push" data-toggle="layout" data-action="header_loader_on">Start Header Loader</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-success" data-toggle="layout" data-action="header_loader_on"&gt;Start Header Loader&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_loader_on');</code>
          </p>
        </div>
      </div>
      <!-- END Start -->

      <!-- Stop -->
      <h2 class="content-heading">Stop</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            The same applies for stoping it as well, it is very straightforward to use it
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_loader_off">Stop Header Loader</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_loader_off"&gt;Stop Header Loader&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_loader_off');</code>
          </p>
        </div>
      </div>
      <!-- END Stop -->
    </div>
  </div>
  <!-- END Header Loader -->

  <!-- Page Loader (functionality is initialized Template._uiHandlePageLoader()) -->
  <!-- Page Loader HTML markup can be found at the top of the page after <body> tag (#page-loader) -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Page Loader</h3>
    </div>
    <div class="block-content">
      <!-- Usage -->
      <h2 class="content-heading">Usage</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Using the Page Loader is very simple
          </p>
        </div>
        <div class="col-lg-8">
          <p>
            You can add the following markup after the body tag and the loading screen will be enabled and auto hide once the page loads (you can add a <code>.bg-*</code> class for a custom background color): <code>&lt;div id=&QUOT;page-loader&QUOT; class=&QUOT;show&QUOT;&gt;&lt;/div&gt;</code>
          </p>
          <p>You can also show or hide the loading screen at any time by using <code>Dashmix.loader('show')</code> or <code>Dashmix.loader('hide')</code> respectively. If you like to add a custom background color, you can dynamically add a <code>.bg-*</code> class to your page loader, for example <code>Dashmix.loader('show', 'bg-danger')</code></p>
        </div>
      </div>
      <!-- END Usage -->

      <!-- Preview -->
      <h2 class="content-heading">Preview</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Have a look at Page Loader in action
          </p>
        </div>
        <div class="col-lg-8">
          <p class="mb-5">
            <button type="button" class="btn btn-primary" onclick="Dashmix.loader('show', 'bg-primary');
                setTimeout(function () {
                  Dashmix.loader('hide');
                }, 3000);">Preview Page Loader</button>
          </p>
          <div class="row items-push-3x">
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-dusk" onclick="Dashmix.loader('show', 'bg-gd-dusk');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-fruit" onclick="Dashmix.loader('show', 'bg-gd-fruit');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-aqua" onclick="Dashmix.loader('show', 'bg-gd-aqua');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-sublime" onclick="Dashmix.loader('show', 'bg-gd-sublime');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-sea" onclick="Dashmix.loader('show', 'bg-gd-sea');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-leaf" onclick="Dashmix.loader('show', 'bg-gd-leaf');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-lake" onclick="Dashmix.loader('show', 'bg-gd-lake');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
            <div class="col-6 col-md-3">
              <a class="item item-rounded bg-gd-sun" onclick="Dashmix.loader('show', 'bg-gd-sun');
                  setTimeout(function () {
                    Dashmix.loader('hide');
                  }, 3000);" href="javascript:void(0)"></a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Preview -->
    </div>
  </div>
  <!-- END Page Loader -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
