<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/nestable2/jquery.nestable.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Nestable2</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Nestable</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Nestable2, .js-nestable-* classes are initialized in js/pages/be_comp_nestable.min.js which was auto compiled from _js/pages/be_comp_nestable.js -->
  <!-- For more info and examples you can check out https://github.com/RamonSmit/Nestable2 -->

  <!-- Connected lists -->
  <h2 class="content-heading">Connected lists</h2>
  <div class="row">
    <div class="col-xl-4">
      <!-- Simple -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Simple</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-connected-simple dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">Bootstrap</div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="2">
                    <div class="dd-handle">Themes</div>
                  </li>
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">Documentation</div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="4">
                <div class="dd-handle">Learning</div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="5">
                    <div class="dd-handle">Code</div>
                  </li>
                  <li class="dd-item" data-id="6">
                    <div class="dd-handle">Tutorials</div>
                  </li>
                  <li class="dd-item" data-id="7">
                    <div class="dd-handle">Articles</div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="8">
                <div class="dd-handle">Design</div>
              </li>
              <li class="dd-item" data-id="9">
                <div class="dd-handle">Coding</div>
              </li>
              <li class="dd-item" data-id="10">
                <div class="dd-handle">Marketing</div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END Simple -->
    </div>
    <div class="col-xl-4">
      <!-- With Icons -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Icons</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-connected-icons dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="11">
                <div class="dd-handle">
                  <i class="fa fa-bold text-muted me-1"></i> Bootstrap
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="12">
                    <div class="dd-handle">
                      <i class="fa fa-brush text-muted me-1"></i> Themes
                    </div>
                  </li>
                  <li class="dd-item" data-id="13">
                    <div class="dd-handle">
                      <i class="fa fa-file text-muted me-1"></i> Documentation
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="14">
                <div class="dd-handle">
                  <i class="fa fa-graduation-cap text-muted me-1"></i> Learning
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="15">
                    <div class="dd-handle">
                      <i class="fa fa-code text-muted me-1"></i> Code
                    </div>
                  </li>
                  <li class="dd-item" data-id="16">
                    <div class="dd-handle">
                      <i class="fa fa-pencil-alt text-muted me-1"></i> Tutorials
                    </div>
                  </li>
                  <li class="dd-item" data-id="17">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-muted me-1"></i> Articles
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="18">
                <div class="dd-handle">
                  <i class="fa fa-bezier-curve text-muted me-1"></i> Design
                </div>
              </li>
              <li class="dd-item" data-id="19">
                <div class="dd-handle">
                  <i class="fa fa-terminal text-muted me-1"></i> Coding
                </div>
              </li>
              <li class="dd-item" data-id="20">
                <div class="dd-handle">
                  <i class="fa fa-burn text-muted me-1"></i> Marketing
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END With Icons -->
    </div>
    <div class="col-xl-4">
      <!-- Tree View -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Tree View</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-connected-treeview dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="21">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Photos
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="22">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_1.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="23">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_2.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="24">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_3.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="25">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_4.jpg
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="26">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Videos
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="27">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> Trailer.mov
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="28">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Notes
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="29">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> Trip.docx
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="30">
                <div class="dd-handle">
                  <i class="fa fa-file-alt text-info me-1"></i> Backup.zip
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END Tree View -->
    </div>
  </div>
  <!-- END Connected lists -->

  <!-- Unconnected lists -->
  <h2 class="content-heading">Unconnected lists</h2>
  <div class="row">
    <div class="col-xl-4">
      <!-- Simple -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Simple</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-simple dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">Bootstrap</div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="2">
                    <div class="dd-handle">Themes</div>
                  </li>
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">Documentation</div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="4">
                <div class="dd-handle">Learning</div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="5">
                    <div class="dd-handle">Code</div>
                  </li>
                  <li class="dd-item" data-id="6">
                    <div class="dd-handle">Tutorials</div>
                  </li>
                  <li class="dd-item" data-id="7">
                    <div class="dd-handle">Articles</div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="8">
                <div class="dd-handle">Design</div>
              </li>
              <li class="dd-item" data-id="9">
                <div class="dd-handle">Coding</div>
              </li>
              <li class="dd-item" data-id="10">
                <div class="dd-handle">Marketing</div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END Simple -->
    </div>
    <div class="col-xl-4">
      <!-- With Icons -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Icons</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-icons dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">
                  <i class="fa fa-bold text-muted me-1"></i> Bootstrap
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="2">
                    <div class="dd-handle">
                      <i class="fa fa-brush text-muted me-1"></i> Themes
                    </div>
                  </li>
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">
                      <i class="fa fa-file text-muted me-1"></i> Documentation
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="4">
                <div class="dd-handle">
                  <i class="fa fa-graduation-cap text-muted me-1"></i> Learning
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="5">
                    <div class="dd-handle">
                      <i class="fa fa-code text-muted me-1"></i> Code
                    </div>
                  </li>
                  <li class="dd-item" data-id="6">
                    <div class="dd-handle">
                      <i class="fa fa-pencil-alt text-muted me-1"></i> Tutorials
                    </div>
                  </li>
                  <li class="dd-item" data-id="7">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-muted me-1"></i> Articles
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="8">
                <div class="dd-handle">
                  <i class="fa fa-bezier-curve text-muted me-1"></i> Design
                </div>
              </li>
              <li class="dd-item" data-id="9">
                <div class="dd-handle">
                  <i class="fa fa-terminal text-muted me-1"></i> Coding
                </div>
              </li>
              <li class="dd-item" data-id="10">
                <div class="dd-handle">
                  <i class="fa fa-burn text-muted me-1"></i> Marketing
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END With Icons -->
    </div>
    <div class="col-xl-4">
      <!-- Tree View -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Tree View</h3>
        </div>
        <div class="block-content block-content-full">
          <div class="js-nestable-treeview dd">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Photos
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="2">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_1.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_2.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="4">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_3.jpg
                    </div>
                  </li>
                  <li class="dd-item" data-id="5">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> trip_image_4.jpg
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="6">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Videos
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="7">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> Trailer.mov
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="8">
                <div class="dd-handle">
                  <i class="fa fa-folder text-warning me-1"></i> Notes
                </div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="9">
                    <div class="dd-handle">
                      <i class="fa fa-file-alt text-info me-1"></i> Trip.docx
                    </div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="10">
                <div class="dd-handle">
                  <i class="fa fa-file-alt text-info me-1"></i> Backup.zip
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- END Tree View -->
    </div>
  </div>
  <!-- END Unconnected lists -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Nestable plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/nestable2/jquery.nestable.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_nestable.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
