<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/wp_post/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $dm->get_css('js/plugins/dropzone/min/dropzone.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 flex-md-grow-1">
  <div class="col-md-4 col-lg-5 col-xl-3 order-md-1 bg-body-extra-light">
    <div class="content p-0">
      <!-- Toggle Settings -->
      <div class="d-md-none p-3">
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn w-100 btn-alt-info" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
          Settings
        </button>
      </div>
      <!-- END Toggle Settings -->

      <!-- Settings -->
      <div id="side-content" class="d-none d-md-block push">
        <div id="settings-accordion" role="tablist" aria-multiselectable="true">
          <div class="block mb-0">
            <div class="block-header bg-body p-0" role="tab" id="settings-accordion_h1">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s1" aria-expanded="true" aria-controls="settings-accordion_s1">Status &amp; Visibility</a>
            </div>
            <div id="settings-accordion_s1" class="collapse show" role="tabpanel" aria-labelledby="settings-accordion_h1" data-bs-parent="#settings-accordion">
              <div class="block-content">
                <div class="row mb-4">
                  <label class="col-sm-4 col-form-label" for="example-wp-visibility">Visibility</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="example-wp-visibility" name="example-wp-visibility">
                      <option value="1" selected>Public</option>
                      <option value="2">Private</option>
                      <option value="3">Password Protected</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label class="col-sm-4 col-form-label" for="example-wp-format">Post Format</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="example-wp-format" name="example-wp-format">
                      <option value="1">Gallery</option>
                      <option value="2">Link</option>
                      <option value="3">Image</option>
                      <option value="4">Quote</option>
                      <option value="5" selected>Standard</option>
                      <option value="6">Video</option>
                      <option value="7">Audio</option>
                    </select>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-stick-front" name="example-wp-stick-front">
                    <label class="form-check-label" for="example-wp-stick-front">Stick to Front Page</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-pending-review" name="example-wp-pending-review">
                    <label class="form-check-label" for="example-wp-pending-review">Pending Review</label>
                  </div>
                </div>
                <div class="row mb-4">
                  <label class="col-sm-4 col-form-label" for="example-wp-author">Author</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="example-wp-author" name="example-wp-author">
                      <option value="1" selected>Admin</option>
                      <option value="2">Author #1</option>
                      <option value="3">Author #2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h2">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s2" aria-expanded="true" aria-controls="settings-accordion_s2">Categories</a>
            </div>
            <div id="settings-accordion_s2" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h2" data-bs-parent="#settings-accordion">
              <div class="block-content block-content-full">
                <div class="mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-1" name="example-wp-cat-1">
                    <label class="form-check-label" for="example-wp-cat-1">Projects</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-2" name="example-wp-cat-2">
                    <label class="form-check-label" for="example-wp-cat-2">Work</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-3" name="example-wp-cat-3">
                    <label class="form-check-label" for="example-wp-cat-3">Tutorials</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-4" name="example-wp-cat-4">
                    <label class="form-check-label" for="example-wp-cat-4">Design</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-5" name="example-wp-cat-5">
                    <label class="form-check-label" for="example-wp-cat-5">Web Development</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-6" name="example-wp-cat-6">
                    <label class="form-check-label" for="example-wp-cat-6">Inspiration</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-cat-7" name="example-wp-cat-7">
                    <label class="form-check-label" for="example-wp-cat-7">Uncategorized</label>
                  </div>
                </div>
                <a class="link-fx fs-sm" href="javascript:void(0)">Add New Category</a>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h3">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s3" aria-expanded="true" aria-controls="settings-accordion_s3">Tags</a>
            </div>
            <div id="settings-accordion_s3" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h3" data-bs-parent="#settings-accordion">
              <div class="block-content">
                <div class="mb-4">
                  <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                  <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                  <label class="form-label" for="example-wp-tags">Add New Tags</label>
                  <select class="js-select2 form-select" id="example-wp-tags" name="example-wp-tags" style="width: 100%;" multiple>
                    <option value="1" selected>tutorial</option>
                    <option value="2">css</option>
                    <option value="3">javascript</option>
                    <option value="4">php</option>
                    <option value="5">python</option>
                    <option value="6">ruby</option>
                    <option value="7">angular</option>
                    <option value="8">react</option>
                    <option value="9">vuejs</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h4">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s4" aria-expanded="true" aria-controls="settings-accordion_s4">Featured Image</a>
            </div>
            <div id="settings-accordion_s4" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h4" data-bs-parent="#settings-accordion">
              <div class="block-content block-content-full">
                <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                <form class="dropzone" action="be_forms_plugins.php"></form>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h5">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s5" aria-expanded="true" aria-controls="settings-accordion_s5">Excerpt</a>
            </div>
            <div id="settings-accordion_s5" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h5" data-bs-parent="#settings-accordion">
              <div class="block-content">
                <div class="mb-4">
                  <label class="form-label" for="example-wp-excerpt">Write an excerpt (optional)</label>
                  <textarea class="form-control" id="example-wp-excerpt" name="example-wp-excerpt" rows="4"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h6">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s6" aria-expanded="true" aria-controls="settings-accordion_s6">Discussion</a>
            </div>
            <div id="settings-accordion_s6" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h6" data-bs-parent="#settings-accordion">
              <div class="block-content">
                <div class="mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-comments" name="example-wp-comments">
                    <label class="form-check-label" for="example-wp-comments">Allow Comments</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="example-wp-pingbacks" name="example-wp-pingbacks">
                    <label class="form-check-label" for="example-wp-pingbacks">Allow Pingbacks &amp; Trackbacks</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block mb-0">
            <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h7">
              <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s7" aria-expanded="true" aria-controls="settings-accordion_s7">Layout</a>
            </div>
            <div id="settings-accordion_s7" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h7" data-bs-parent="#settings-accordion">
              <div class="block-content">
                <div class="mb-4">
                  <label class="form-label" for="example-wp-layout-sidebar">Sidebar Settings</label>
                  <div class="fs-sm text-muted mb-2">Select the desired Page layout</div>
                  <select class="form-select" id="example-wp-layout-sidebar" name="example-wp-layout-sidebar">
                    <option value="1" selected>Default Layout</option>
                    <option value="2">No Sidebar</option>
                    <option value="3">Left Sidebar</option>
                    <option value="4">Right Sidebar</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-wp-layout-header">Header Settings</label>
                  <div class="fs-sm text-muted mb-2">Several options to change the header style on this page</div>
                  <select class="form-select" id="example-wp-layout-header" name="example-wp-layout-header">
                    <option value="1" selected>Default Header</option>
                    <option value="2">Static Header</option>
                    <option value="3">Transparent Header</option>
                    <option value="4">Glassy Sticky Header</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label" for="example-wp-layout-footer">Footer Settings</label>
                  <div class="fs-sm text-muted mb-2">Display the footer widgets?</div>
                  <select class="form-select" id="example-wp-layout-footer" name="example-wp-layout-footer">
                    <option value="1" selected>Default Footer</option>
                    <option value="2">Display widgets (no socket)</option>
                    <option value="3">Display sockets (no widgets)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Settings -->
    </div>
  </div>
  <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
    <!-- Main Content -->
    <div class="content">
      <div class="block block-rounded">
        <div class="block-content block-content-full d-flex justify-content-between border-bottom">
          <div>
            <button type="button" class="btn btn-sm btn-alt-secondary">
              <i class="fa fa-plus"></i>
            </button>
            <button type="button" class="btn btn-sm btn-alt-secondary">
              <i class="fa fa-undo"></i>
            </button>
            <button type="button" class="btn btn-sm btn-alt-secondary">
              <i class="fa fa-redo"></i>
            </button>
          </div>
          <div>
            <a class="btn btn-sm btn-alt-info" href="javascript:void(0)">Preview</a>
            <a class="btn btn-sm btn-info" href="javascript:void(0)">Publish</a>
          </div>
        </div>
        <div class="block-content">
          <form action="db_wp_post.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <input type="text" class="form-control py-4" id="post-title" name="post-title" placeholder="Add Title..">
            </div>
            <div class="mb-4">
              <!-- CKEditor (js-ckeditor id is initialized in Helpers.jsCkeditor()) -->
              <!-- For more info and examples you can check out http://ckeditor.com -->
              <textarea id="js-ckeditor" name="ckeditor">...</textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END Main Content -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Select2 Plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>
<?php $dm->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $dm->get_js('js/plugins/dropzone/min/dropzone.min.js'); ?>

<!-- Page JS Helpers (CKEditor + Select2 plugins) -->
<script>
  Dashmix.onLoad(function(){
    CKEDITOR.config.height = '460';
    Dashmix.helpers(['js-ckeditor', 'jq-select2']);
  });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
