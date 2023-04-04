<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/file_hosting/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 flex-md-grow-1">
  <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
    <div class="content">
      <!-- Toggle Storage Info -->
      <div class="d-md-none push">
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn w-100 btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
          Storage Info
        </button>
      </div>
      <!-- END Toggle Storage Info -->

      <!-- Storage Info -->
      <div id="side-content" class="d-none d-md-block push">
        <!-- Current Status -->
        <div class="block block-rounded">
          <div class="block-content">
            <h4 class="h5 text-muted mb-2">Storage</h4>
            <p class="h1 fw-bold mb-1">
              920GB
              <span class="fs-sm text-muted">of 1TB</span>
            </p>
            <div class="progress push" style="height: 5px;">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="fs-sm text-muted">
              <a href="javascript:void(0)">Upgrade Plan?</a>
            </p>
          </div>
        </div>
        <!-- END Current Status -->

        <!-- Storage Stats -->
        <div class="block block-rounded mb-2">
          <div class="block-content border-bottom">
            <h4 class="h5 text-muted mb-2">Documents</h4>
            <p class="h2 fw-bold mb-1">
              80GB
              <span class="fs-sm text-muted">of 1TB</span>
            </p>
            <div class="progress push" style="height: 5px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="block-content border-bottom">
            <h4 class="h5 text-muted mb-2">Photos</h4>
            <p class="h2 fw-bold mb-1">
              40GB
              <span class="fs-sm text-muted">of 1TB</span>
            </p>
            <div class="progress push" style="height: 5px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="block-content border-bottom">
            <h4 class="h5 text-muted mb-2">Videos</h4>
            <p class="h2 fw-bold mb-1">
              780GB
              <span class="fs-sm text-muted">of 1TB</span>
            </p>
            <div class="progress push" style="height: 5px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="block-content">
            <h4 class="h5 text-muted mb-2">Audio</h4>
            <p class="h2 fw-bold mb-1">
              20GB
              <span class="fs-sm text-muted">of 1TB</span>
            </p>
            <div class="progress push" style="height: 5px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <!-- END Storage Stats -->
      </div>
      <!-- END Storage Status -->
    </div>
  </div>
  <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
    <div class="content">
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt bg-body-extra-light px-4 py-2 rounded push fs-sm">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">
              <i class="fa fa-home"></i>
            </a>
          </li>
          <li class="breadcrumb-item" aria-current="page">
            <div class="dropdown d-inline">
              <a href="javascript:void(0)" id="example-dropdown-folder" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Work <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </a>
              <div class="dropdown-menu fs-sm" aria-labelledby="example-dropdown-folder">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> Personal
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> Travel
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> Meeting
                </a>
              </div>
            </div>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <div class="dropdown d-inline">
              <a href="javascript:void(0)" id="example-dropdown-folder-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Project X <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </a>
              <div class="dropdown-menu fs-sm" aria-labelledby="example-dropdown-folder-2">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> WordPress Theme
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> Admin Template
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-folder me-1"></i> Web App
                </a>
              </div>
            </div>
          </li>
        </ol>
      </nav>
      <!-- END Breadcrumb -->

      <!-- Folders -->
      <h2 class="content-heading border-black-op">
        <i class="far fa-fw fa-folder me-1"></i> Folders (4)
      </h2>
      <div class="row items-push">
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Inspiration Folder -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Inspiration Folder Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2">
                  <i class="fa fa-folder fa-4x text-info"></i>
                </p>
                <p class="fw-semibold fs-lg mb-0">
                  Inspiration
                </p>
                <p class="fs-sm text-muted">
                  14 Files
                </p>
              </div>
            </div>
            <!-- END Inspiration Folder Block -->

            <!-- Inspiration Folder Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-share opacity-50 me-1"></i> Open
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-pencil-alt me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Inspiration Folder Hover Options -->
          </div>
          <!-- END Inspiration Folder -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Source Code Folder -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Source Code Folder Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2">
                  <i class="fa fa-folder fa-4x text-info"></i>
                </p>
                <p class="fw-semibold fs-lg mb-0">
                  Source Code
                </p>
                <p class="fs-sm text-muted">
                  25 Files
                </p>
              </div>
            </div>
            <!-- END Source Code Folder Block -->

            <!-- Source Code Folder Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-share opacity-50 me-1"></i> Open
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-pencil-alt me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Source Code Folder Hover Options -->
          </div>
          <!-- END Source Code Folder -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- PSDs Folder -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- PSDs Folder Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2">
                  <i class="fa fa-folder fa-4x text-info"></i>
                </p>
                <p class="fw-semibold fs-lg mb-0">
                  PSDs
                </p>
                <p class="fs-sm text-muted">
                  67 Files
                </p>
              </div>
            </div>
            <!-- END PSDs Folder Block -->

            <!-- PSDs Folder Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-share opacity-50 me-1"></i> Open
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-pencil-alt me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END PSDs Folder Hover Options -->
          </div>
          <!-- END PSDs Folder -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Backup Folder -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Backup Folder Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2">
                  <i class="fa fa-folder fa-4x text-info"></i>
                </p>
                <p class="fw-semibold fs-lg mb-0">
                  Backup
                </p>
                <p class="fs-sm text-muted">
                  3 Files
                </p>
              </div>
            </div>
            <!-- END Backup Folder Block -->

            <!-- Backup Folder Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-share opacity-50 me-1"></i> Open
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-pencil-alt me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Backup Folder Hover Options -->
          </div>
          <!-- END Backup Folder -->
        </div>
      </div>
      <!-- END Folders -->

      <!-- Files -->
      <h2 class="content-heading border-black-op">
        <i class="far fa-fw fa-file me-1"></i> Files (7)
      </h2>
      <div class="row items-push">
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <?php $dm->get_photo(22, false, 'img-fluid'); ?>
                </p>
                <p class="fw-semibold text-break mb-0">
                  background_1.jpg
                </p>
                <p class="fs-sm text-muted">
                  0.9mb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <?php $dm->get_photo(21, false, 'img-fluid'); ?>
                </p>
                <p class="fw-semibold text-break mb-0">
                  background_2.jpg
                </p>
                <p class="fs-sm text-muted">
                  3.4mb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <?php $dm->get_photo(24, false, 'img-fluid'); ?>
                </p>
                <p class="fw-semibold text-break mb-0">
                  background_3.jpg
                </p>
                <p class="fs-sm text-muted">
                  2.3mb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <i class="fa fa-fw fa-4x fa-file-alt text-muted"></i>
                </p>
                <p class="fw-semibold text-break mb-0">
                  notes.txt
                </p>
                <p class="fs-sm text-muted">
                  3kb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <i class="fa fa-fw fa-4x fa-file-excel text-danger"></i>
                </p>
                <p class="fw-semibold text-break mb-0">
                  Accounting.xlsx
                </p>
                <p class="fs-sm text-muted">
                  33kb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <i class="fa fa-fw fa-4x fa-file-word text-default"></i>
                </p>
                <p class="fw-semibold text-break mb-0">
                  Research.docx
                </p>
                <p class="fs-sm text-muted">
                  50kb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
          <!-- Example File -->
          <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
            <!-- Example File Block -->
            <div class="options-item block block-rounded block-transparent mb-0 w-100">
              <div class="block-content text-center">
                <p class="mb-2 overflow-hidden">
                  <i class="fa fa-fw fa-4x fa-file-powerpoint text-warning"></i>
                </p>
                <p class="fw-semibold text-break mb-0">
                  Presentation.pptx
                </p>
                <p class="fs-sm text-muted">
                  4.5mb
                </p>
              </div>
            </div>
            <!-- END Example File Block -->

            <!-- Example File Hover Options -->
            <div class="options-overlay rounded bg-primary-dark-op">
              <div class="options-overlay-content">
                <div class="mb-3">
                  <a class="btn btn-primary" href="javascript:void(0)">
                    <i class="fa fa-eye opacity-50 me-1"></i> View
                  </a>
                </div>
                <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-download me-1"></i>
                  </a>
                  <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                    <i class="fa fa-trash me-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END Example File Hover Options -->
          </div>
          <!-- END Example File -->
        </div>
      </div>
      <!-- END Files -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
