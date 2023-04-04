<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Icon Packs</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Icon Packs</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Search Section -->
  <!-- Icon search functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
  <form class="js-form-icon-search push" action="be_ui_icons.php" method="POST">
    <div class="input-group input-group-lg">
      <input type="text" class="js-icon-search form-control" placeholder="Try user or facebook..">
      <span class="input-group-text">
        <i class="fa fa-search"></i>
      </span>
    </div>
  </form>
  <!-- END Search Section -->

  <!-- Font Awesome Regular -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="regular-counter"></span>) Font Awesome Regular <small class="text-lowercase"><code>far fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="regular-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Regular -->

  <!-- Font Awesome Solid -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="solid-counter"></span>) Font Awesome Solid <small class="text-lowercase"><code>fa fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="solid-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Solid -->

  <!-- Font Awesome Brands -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(<span id="brands-counter"></span>) Font Awesome Brands <small class="text-lowercase"><code>fab fa-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <!-- Auto populated icons, functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
      <div id="brands-container" class="js-icon-list row items-push-2x text-center"></div>
    </div>
  </div>
  <!-- END Font Awesome Brands -->

  <!-- Simple Line Icons -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">(162) Simple Line Icons <small><code>si si-*</code></small></h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
      </div>
    </div>
    <div class="block-content">
      <div class="js-icon-list row items-push-2x text-center">
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-action-redo fa-2x"></i></p>
          <code>action-redo</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-action-undo fa-2x"></i></p>
          <code>action-undo</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-anchor fa-2x"></i></p>
          <code>anchor</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-down fa-2x"></i></p>
          <code>arrow-down</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-left fa-2x"></i></p>
          <code>arrow-left</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-right fa-2x"></i></p>
          <code>arrow-right</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-arrow-up fa-2x"></i></p>
          <code>arrow-up</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-badge fa-2x"></i></p>
          <code>badge</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bag fa-2x"></i></p>
          <code>bag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-ban fa-2x"></i></p>
          <code>ban</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bar-chart fa-2x"></i></p>
          <code>bar-chart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-basket fa-2x"></i></p>
          <code>basket</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-basket-loaded fa-2x"></i></p>
          <code>basket-loaded</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bell fa-2x"></i></p>
          <code>bell</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-book-open fa-2x"></i></p>
          <code>book-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-briefcase fa-2x"></i></p>
          <code>briefcase</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bubble fa-2x"></i></p>
          <code>bubble</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bubbles fa-2x"></i></p>
          <code>bubbles</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-bulb fa-2x"></i></p>
          <code>bulb</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-calculator fa-2x"></i></p>
          <code>calculator</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-calendar fa-2x"></i></p>
          <code>calendar</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-end fa-2x"></i></p>
          <code>call-end</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-in fa-2x"></i></p>
          <code>call-in</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-call-out fa-2x"></i></p>
          <code>call-out</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-camcorder fa-2x"></i></p>
          <code>camcorder</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-camera fa-2x"></i></p>
          <code>camera</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-check fa-2x"></i></p>
          <code>check</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-chemistry fa-2x"></i></p>
          <code>chemistry</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-clock fa-2x"></i></p>
          <code>clock</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-close fa-2x"></i></p>
          <code>close</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cloud-download fa-2x"></i></p>
          <code>cloud-download</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cloud-upload fa-2x"></i></p>
          <code>cloud-upload</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-compass fa-2x"></i></p>
          <code>compass</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-end fa-2x"></i></p>
          <code>control-end</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-forward fa-2x"></i></p>
          <code>control-forward</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-pause fa-2x"></i></p>
          <code>control-pause</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-play fa-2x"></i></p>
          <code>control-play</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-rewind fa-2x"></i></p>
          <code>control-rewind</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-control-start fa-2x"></i></p>
          <code>control-start</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-credit-card fa-2x"></i></p>
          <code>credit-card</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-crop fa-2x"></i></p>
          <code>crop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cup fa-2x"></i></p>
          <code>cup</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cursor fa-2x"></i></p>
          <code>cursor</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-cursor-move fa-2x"></i></p>
          <code>cursor-move</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-diamond fa-2x"></i></p>
          <code>diamond</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-direction fa-2x"></i></p>
          <code>direction</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-directions fa-2x"></i></p>
          <code>directions</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-disc fa-2x"></i></p>
          <code>disc</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-dislike fa-2x"></i></p>
          <code>dislike</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-doc fa-2x"></i></p>
          <code>doc</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-docs fa-2x"></i></p>
          <code>docs</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-drawer fa-2x"></i></p>
          <code>drawer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-drop fa-2x"></i></p>
          <code>drop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-earphones fa-2x"></i></p>
          <code>earphones</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-earphones-alt fa-2x"></i></p>
          <code>earphones-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-emoticon-smile fa-2x"></i></p>
          <code>emoticon-smile</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-energy fa-2x"></i></p>
          <code>energy</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope fa-2x"></i></p>
          <code>envelope</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope-letter fa-2x"></i></p>
          <code>envelope-letter</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-envelope-open fa-2x"></i></p>
          <code>envelope-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-equalizer fa-2x"></i></p>
          <code>equalizer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-eye fa-2x"></i></p>
          <code>eye</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-eyeglasses fa-2x"></i></p>
          <code>eyeglasses</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-feed fa-2x"></i></p>
          <code>feed</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-film fa-2x"></i></p>
          <code>film</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-fire fa-2x"></i></p>
          <code>fire</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-flag fa-2x"></i></p>
          <code>flag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-folder fa-2x"></i></p>
          <code>folder</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-folder-alt fa-2x"></i></p>
          <code>folder-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-frame fa-2x"></i></p>
          <code>frame</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-game-controller fa-2x"></i></p>
          <code>game-controller</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-ghost fa-2x"></i></p>
          <code>ghost</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-globe fa-2x"></i></p>
          <code>globe</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-globe-alt fa-2x"></i></p>
          <code>globe-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-graduation fa-2x"></i></p>
          <code>graduation</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-graph fa-2x"></i></p>
          <code>graph</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-grid fa-2x"></i></p>
          <code>grid</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-handbag fa-2x"></i></p>
          <code>handbag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-heart fa-2x"></i></p>
          <code>heart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-home fa-2x"></i></p>
          <code>home</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-hourglass fa-2x"></i></p>
          <code>hourglass</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-info fa-2x"></i></p>
          <code>info</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-key fa-2x"></i></p>
          <code>key</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-layers fa-2x"></i></p>
          <code>layers</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-like fa-2x"></i></p>
          <code>like</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-link fa-2x"></i></p>
          <code>link</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-list fa-2x"></i></p>
          <code>list</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-lock fa-2x"></i></p>
          <code>lock</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-lock-open fa-2x"></i></p>
          <code>lock-open</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-login fa-2x"></i></p>
          <code>login</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-logout fa-2x"></i></p>
          <code>logout</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-loop fa-2x"></i></p>
          <code>loop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magic-wand fa-2x"></i></p>
          <code>magic-wand</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnet fa-2x"></i></p>
          <code>magnet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier fa-2x"></i></p>
          <code>magnifier</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier-add fa-2x"></i></p>
          <code>magnifier-add</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-magnifier-remove fa-2x"></i></p>
          <code>magnifier-remove</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-map fa-2x"></i></p>
          <code>map</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-microphone fa-2x"></i></p>
          <code>microphone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-mouse fa-2x"></i></p>
          <code>mouse</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-moustache fa-2x"></i></p>
          <code>moustache</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-music-tone fa-2x"></i></p>
          <code>music-tone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-music-tone-alt fa-2x"></i></p>
          <code>music-tone-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-note fa-2x"></i></p>
          <code>note</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-notebook fa-2x"></i></p>
          <code>notebook</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-paper-clip fa-2x"></i></p>
          <code>paper-clip</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-paper-plane fa-2x"></i></p>
          <code>paper-plane</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pencil fa-2x"></i></p>
          <code>pencil</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-picture fa-2x"></i></p>
          <code>picture</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pie-chart fa-2x"></i></p>
          <code>pie-chart</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pin fa-2x"></i></p>
          <code>pin</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-plane fa-2x"></i></p>
          <code>plane</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-playlist fa-2x"></i></p>
          <code>playlist</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-plus fa-2x"></i></p>
          <code>plus</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-pointer fa-2x"></i></p>
          <code>pointer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-power fa-2x"></i></p>
          <code>power</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-present fa-2x"></i></p>
          <code>present</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-printer fa-2x"></i></p>
          <code>printer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-puzzle fa-2x"></i></p>
          <code>puzzle</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-question fa-2x"></i></p>
          <code>question</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-refresh fa-2x"></i></p>
          <code>refresh</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-reload fa-2x"></i></p>
          <code>reload</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-rocket fa-2x"></i></p>
          <code>rocket</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-desktop fa-2x"></i></p>
          <code>screen-desktop</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-smartphone fa-2x"></i></p>
          <code>screen-smartphone</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-screen-tablet fa-2x"></i></p>
          <code>screen-tablet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-settings fa-2x"></i></p>
          <code>settings</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-share fa-2x"></i></p>
          <code>share</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-share-alt fa-2x"></i></p>
          <code>share-alt</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-shield fa-2x"></i></p>
          <code>shield</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-shuffle fa-2x"></i></p>
          <code>shuffle</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-size-actual fa-2x"></i></p>
          <code>size-actual</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-size-fullscreen fa-2x"></i></p>
          <code>size-fullscreen</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-dribbble fa-2x"></i></p>
          <code>social-dribbble</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-dropbox fa-2x"></i></p>
          <code>social-dropbox</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-facebook fa-2x"></i></p>
          <code>social-facebook</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-tumblr fa-2x"></i></p>
          <code>social-tumblr</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-twitter fa-2x"></i></p>
          <code>social-twitter</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-social-youtube fa-2x"></i></p>
          <code>social-youtube</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-speech fa-2x"></i></p>
          <code>speech</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-speedometer fa-2x"></i></p>
          <code>speedometer</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-star fa-2x"></i></p>
          <code>star</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-support fa-2x"></i></p>
          <code>support</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-symbol-female fa-2x"></i></p>
          <code>symbol-female</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-symbol-male fa-2x"></i></p>
          <code>symbol-male</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-tag fa-2x"></i></p>
          <code>tag</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-target fa-2x"></i></p>
          <code>target</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-trash fa-2x"></i></p>
          <code>trash</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-trophy fa-2x"></i></p>
          <code>trophy</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-umbrella fa-2x"></i></p>
          <code>umbrella</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user fa-2x"></i></p>
          <code>user</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-female fa-2x"></i></p>
          <code>user-female</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-follow fa-2x"></i></p>
          <code>user-follow</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-following fa-2x"></i></p>
          <code>user-following</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-user-unfollow fa-2x"></i></p>
          <code>user-unfollow</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-users fa-2x"></i></p>
          <code>users</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-vector fa-2x"></i></p>
          <code>vector</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-1 fa-2x"></i></p>
          <code>volume-1</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-2 fa-2x"></i></p>
          <code>volume-2</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-volume-off fa-2x"></i></p>
          <code>volume-off</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-wallet fa-2x"></i></p>
          <code>wallet</code>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <p><i class="si si-wrench fa-2x"></i></p>
          <code>wrench</code>
        </div>
      </div>
    </div>
  </div>
  <!-- END Simple Line Icons -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_ui_icons.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
