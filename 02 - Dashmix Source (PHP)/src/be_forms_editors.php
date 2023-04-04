<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/simplemde/simplemde.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Form Editors</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active" aria-current="page">Editors</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- SimpleMDE Editor (js-simplemde class is initialized in Helpers.jsSimpleMDE()) -->
  <!-- For more info and examples you can check out https://github.com/NextStepWebs/simplemde-markdown-editor -->
  <h2 class="content-heading">SimpleMDE</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Markdown Editor</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <!-- SimpleMDE Container -->
          <textarea class="js-simplemde" id="simplemde" name="simplemde">Hello SimpleMDE!</textarea>
        </div>
      </form>
    </div>
  </div>
  <!-- END SimpleMDE Editor -->

  <!-- CKEditor 4 (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
  <!-- For more info and examples you can check out http://ckeditor.com -->
  <h2 class="content-heading">CKEditor 4</h2>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Inline Editor</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <!-- CKEditor 4 Inline Container -->
          <div id="js-ckeditor-inline">Hello inline CKEditor 4! Click this text to edit it!</div>
        </div>
      </form>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Full Editor</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
        <div class="mb-4">
          <!-- CKEditor 4 Classic Container -->
          <textarea id="js-ckeditor" name="ckeditor">Hello classic CKEditor 4!</textarea>
        </div>
      </form>
    </div>
  </div>
  <!-- END CKEditor 4 -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/simplemde/simplemde.min.js'); ?>
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>

<!-- Page JS Helpers (SimpleMDE + CKEditor plugins) -->
<script>Dashmix.helpersOnLoad(['js-ckeditor', 'js-simplemde']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
