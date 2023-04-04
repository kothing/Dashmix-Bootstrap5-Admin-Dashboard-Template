<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Layout API</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Layout</li>
          <li class="breadcrumb-item active" aria-current="page">API</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Sidebar Visibility -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sidebar Visibility</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Opens or Closes the Sidebar based on its current state
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_toggle">Toggle Sidebar</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_toggle"&gt;Toggle Sidebar&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Open -->
      <h2 class="content-heading">Open</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Opens the Sidebar
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_open">Open Sidebar</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_open"&gt;Open Sidebar&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_open');</code>
          </p>
        </div>
      </div>
      <!-- END Open -->

      <!-- Close -->
      <h2 class="content-heading">Close</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Closes the Sidebar
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_close">Close Sidebar</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_close"&gt;Close Sidebar&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_close');</code>
          </p>
        </div>
      </div>
      <!-- END Close -->
    </div>
  </div>
  <!-- END Sidebar Visibility -->

  <!-- Sidebar Position -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sidebar Position</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Sidebar position to the left or to the right based on its current position
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_pos_toggle">Toggle Sidebar Position</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_pos_toggle"&gt;Toggle Sidebar Position&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_pos_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Right -->
      <h2 class="content-heading">Right</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Moves the Sidebar to the right
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_pos_right">Right Sidebar Position</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_pos_right"&gt;Right Sidebar Position&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_pos_right');</code>
          </p>
        </div>
      </div>
      <!-- END Right -->

      <!-- Left -->
      <h2 class="content-heading">Left</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Moves the Sidebar to the left
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_pos_left">Left Sidebar Position</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_pos_left"&gt;Left Sidebar Position&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_pos_left');</code>
          </p>
        </div>
      </div>
      <!-- END Left -->
    </div>
  </div>
  <!-- END Sidebar Position -->

  <!-- Sidebar Mini -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sidebar Mini</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles the Sidebar Mini mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_mini_toggle">Toggle Mini Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_mini_toggle"&gt;Toggle Mini Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_mini_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Enable -->
      <h2 class="content-heading">Enable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Enables the Sidebar Mini mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_mini_on">Enable Mini Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_mini_on"&gt;Enable Mini Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_mini_on');</code>
          </p>
        </div>
      </div>
      <!-- END Enable -->

      <!-- Disable -->
      <h2 class="content-heading">Disable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Disables the Sidebar Mini mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_mini_off">Disable Mini Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_mini_off"&gt;Disable Mini Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_mini_off');</code>
          </p>
        </div>
      </div>
      <!-- END Disable -->
    </div>
  </div>
  <!-- END Sidebar Mini -->

  <!-- Sidebar Styles -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Sidebar Styles</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles Sidebar style between light and dark variations
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_style_toggle">Toggle Sidebar Style</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_style_toggle"&gt;Toggle Sidebar Style&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_style_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Light -->
      <h2 class="content-heading">Light</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Sidebar to light variation (works with Dark Mode off)
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_style_light">Light Themed Sidebar</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_style_light"&gt;Light Themed Sidebar&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_style_light');</code>
          </p>
        </div>
      </div>
      <!-- END Light -->

      <!-- Dark -->
      <h2 class="content-heading">Dark</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Sidebar to dark variation
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="sidebar_style_dark">Dark Themed Sidebar</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="sidebar_style_dark"&gt;Dark Themed Sidebar&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('sidebar_style_dark');</code>
          </p>
        </div>
      </div>
      <!-- END Dark -->
    </div>
  </div>
  <!-- END Sidebar Styles -->

  <!-- Side Overlay Visibility -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Side Overlay Visibility</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Opens or Closes the Side Overlay based on its current state
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_toggle">Toggle Side Overlay</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_toggle"&gt;Toggle Side Overlay&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Open -->
      <h2 class="content-heading">Open</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Opens the Side Overlay
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_open">Open Side Overlay</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_open"&gt;Open Side Overlay&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_open');</code>
          </p>
        </div>
      </div>
      <!-- END Open -->

      <!-- Close -->
      <h2 class="content-heading">Close</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Closes the Side Overlay
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_close">Close Side Overlay</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_close"&gt;Close Side Overlay&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_close');</code>
          </p>
        </div>
      </div>
      <!-- END Close -->
    </div>
  </div>
  <!-- END Side Overlay Visibility -->

  <!-- Side Overlay Hover Mode -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Side Overlay Hover Mode</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles the Side Overlay hover mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_mode_hover_toggle">Toggle Hover Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_mode_hover_toggle"&gt;Toggle Hover Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_mode_hover_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Enable -->
      <h2 class="content-heading">Enable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Enables the Side Overlay hover mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_mode_hover_on">Enable Hover Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_mode_hover_on"&gt;Enable Hover Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_mode_hover_on');</code>
          </p>
        </div>
      </div>
      <!-- END Enable -->

      <!-- Disable -->
      <h2 class="content-heading">Disable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Disables the Side Overlay hover mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="side_overlay_mode_hover_off">Disable Hover Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="side_overlay_mode_hover_off"&gt;Disable Hover Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('side_overlay_mode_hover_off');</code>
          </p>
        </div>
      </div>
      <!-- END Disable -->
    </div>
  </div>
  <!-- END Side Overlay Hover Mode -->

  <!-- Header Mode -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Header Mode</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles Header mode between static and fixed
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_mode_toggle">Toggle Header Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_mode_toggle"&gt;Toggle Header Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_mode_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Static -->
      <h2 class="content-heading">Static</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Header to static mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_mode_static">Static Header</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_mode_static"&gt;Static Header&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_mode_static');</code>
          </p>
        </div>
      </div>
      <!-- END Static -->

      <!-- Fixed -->
      <h2 class="content-heading">Fixed</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Header to fixed mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_mode_fixed">Fixed Header</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_mode_fixed"&gt;Fixed Header&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_mode_fixed');</code>
          </p>
        </div>
      </div>
      <!-- END Fixed -->
    </div>
  </div>
  <!-- END Header Mode -->

  <!-- Header Glass -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Header Glass</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles the Header glass variation
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_glass_toggle">Toggle Header Glass</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_glass_toggle"&gt;Toggle Header Glass&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_glass_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Enable -->
      <h2 class="content-heading">Enable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Enables the Header glass variation
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_glass_on">Enable Header Glass</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_glass_on"&gt;Enable Header Glass&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_glass_on');</code>
          </p>
        </div>
      </div>
      <!-- END Enable -->

      <!-- Disable -->
      <h2 class="content-heading">Disable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Disables the Header glass variation
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_glass_off">Disable Header Glass</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_glass_off"&gt;Disable Header Glass&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_glass_off');</code>
          </p>
        </div>
      </div>
      <!-- END Disable -->
    </div>
  </div>
  <!-- END Header Glass -->

  <!-- Header Styles -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Header Styles</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles Header style between light and dark variations
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_style_toggle">Toggle Header Style</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_style_toggle"&gt;Toggle Header Style&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_style_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Light -->
      <h2 class="content-heading">Light</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Header to light variation (works with Dark Mode off)
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_style_light">Light Themed Header</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_style_light"&gt;Light Themed Header&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_style_light');</code>
          </p>
        </div>
      </div>
      <!-- END Light -->

      <!-- Dark -->
      <h2 class="content-heading">Dark</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Header to dark variation
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="header_style_dark">Dark Themed Header</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="header_style_dark"&gt;Dark Themed Header&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('header_style_dark');</code>
          </p>
        </div>
      </div>
      <!-- END Dark -->
    </div>
  </div>
  <!-- END Header Styles -->

  <!-- Footer Mode -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Footer Mode</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles Footer mode between static and fixed
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="footer_mode_toggle">Toggle Footer Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="footer_mode_toggle"&gt;Toggle Footer Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('footer_mode_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Static -->
      <h2 class="content-heading">Static</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Footer to static mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="footer_mode_static">Static Footer</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="footer_mode_static"&gt;Static Footer&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('footer_mode_static');</code>
          </p>
        </div>
      </div>
      <!-- END Static -->

      <!-- Fixed -->
      <h2 class="content-heading">Fixed</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the Footer to fixed mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="footer_mode_fixed">Fixed Footer</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="footer_mode_fixed"&gt;Fixed Footer&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('footer_mode_fixed');</code>
          </p>
        </div>
      </div>
      <!-- END Fixed -->
    </div>
  </div>
  <!-- END Footer Mode -->

  <!-- Main Content -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Main Content</h3>
    </div>
    <div class="block-content">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles between all available content layouts (boxed, narrow and full width)
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="content_layout_toggle">Toggle Content Layout</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="content_layout_toggle"&gt;Toggle Content Layout&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('content_layout_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Boxed -->
      <h2 class="content-heading">Boxed</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the content layout to boxed
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="content_layout_boxed">Boxed Content Layout</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="content_layout_boxed"&gt;Boxed Content Layout&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('content_layout_boxed');</code>
          </p>
        </div>
      </div>
      <!-- END Boxed -->

      <!-- Narrow -->
      <h2 class="content-heading">Narrow</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the content layout to narrow
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="content_layout_narrow">Narrow Content Layout</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="content_layout_narrow"&gt;Narrow Content Layout&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('content_layout_narrow');</code>
          </p>
        </div>
      </div>
      <!-- END Narrow -->

      <!-- Full Width -->
      <h2 class="content-heading">Full Width</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Sets the content layout to full width
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="content_layout_full_width">Full Width Content Layout</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="content_layout_full_width"&gt;Full Width Content Layout&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('content_layout_full_width');</code>
          </p>
        </div>
      </div>
      <!-- END Full Width -->
    </div>
  </div>
  <!-- END Main Content -->

  <!-- Dark Mode -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Dark Mode</h3>
    </div>
    <div class="block-content block-content-full">
      <!-- Toggle -->
      <h2 class="content-heading">Toggle</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Toggles Dark Mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="dark_mode_toggle">Toggle Dark Mode</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="dark_mode_toggle"&gt;Toggle Dark Mode&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('dark_mode_toggle');</code>
          </p>
        </div>
      </div>
      <!-- END Toggle -->

      <!-- Disable Dark Mode -->
      <h2 class="content-heading">Disable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Disables Dark Mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="dark_mode_off">Dark Mode Off</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="dark_mode_off"&gt;Dark Mode Off&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('dark_mode_off');</code>
          </p>
        </div>
      </div>
      <!-- END Disable Dark Mode -->

      <!-- Enable Dark Mode -->
      <h2 class="content-heading">Enable</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Enables Dark Mode
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-alt-primary push" data-toggle="layout" data-action="dark_mode_on">Dark Mode On</button>
          <p class="fw-semibold mb-0">
            Button Based
          </p>
          <p>
            <code>&lt;button type="button" class="btn btn-dark" data-toggle="layout" data-action="dark_mode_on"&gt;Dark Mode On&lt;/button&gt;</code>
          </p>
          <p class="fw-semibold mb-0">
            JS Code
          </p>
          <p>
            <code>Dashmix.layout('dark_mode_on');</code>
          </p>
        </div>
      </div>
      <!-- END Enable Dark Mode -->
    </div>
  </div>
  <!-- END Dark Mode -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
