<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dropdowns</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Examples -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Examples</h3>
    </div>
    <div class="block-content">
      <!-- Normal -->
      <h2 class="content-heading">Normal</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can easily attach a dropdown to a default button and add various actions
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-default-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown-default-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-success dropdown-toggle" id="dropdown-default-success" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-success">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-info dropdown-toggle" id="dropdown-default-info" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-info">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-warning dropdown-toggle" id="dropdown-default-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" id="dropdown-default-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-dark dropdown-toggle" id="dropdown-default-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-dark">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-default-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-light">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Default Style -->
        </div>
        <div class="col-lg-4">
          <p class="text-muted">
            You can also add dropdowns to outline styled buttons
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Outline Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdown-default-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-default-outline-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-success dropdown-toggle" id="dropdown-default-outline-success" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-success">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdown-default-outline-info" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-info">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-warning dropdown-toggle" id="dropdown-default-outline-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-danger dropdown-toggle" id="dropdown-default-outline-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-dark dropdown-toggle" id="dropdown-default-outline-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-dark">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-light dropdown-toggle" id="dropdown-default-outline-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-outline-light">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Outline Style -->
        </div>
        <div class="col-lg-4">
          <p class="text-muted">
            You can also add dropdowns to alternate styled buttons
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Alternate Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-primary dropdown-toggle" id="dropdown-default-alt-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-default-alt-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-success dropdown-toggle" id="dropdown-default-alt-success" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-success">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-info dropdown-toggle" id="dropdown-default-alt-info" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-info">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-warning dropdown-toggle" id="dropdown-default-alt-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-danger dropdown-toggle" id="dropdown-default-alt-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-default-alt-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-default-alt-dark">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Alternate Style -->
        </div>
      </div>
      <!-- END Normal -->

      <!-- Split Button Dropdowns -->
      <h2 class="content-heading">Split Button Dropdowns</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Grouping your dropdowns with separate buttons is really easy
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Action</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdown-split-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-danger">Action</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdown-split-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-warning">Action</button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" id="dropdown-split-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Default Style -->

          <!-- Outline Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Action</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" id="dropdown-split-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-danger">Action</button>
                <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" id="dropdown-split-outline-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-warning">Action</button>
                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" id="dropdown-split-outline-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Outline Style -->

          <!-- Alternate Style -->
          <div class="row items-push mb-4">
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-alt-primary">Action</button>
                <button type="button" class="btn btn-alt-primary dropdown-toggle dropdown-toggle-split" id="dropdown-split-alt-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-alt-danger">Action</button>
                <button type="button" class="btn btn-alt-danger dropdown-toggle dropdown-toggle-split" id="dropdown-split-alt-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-danger">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="btn-group">
                <button type="button" class="btn btn-alt-warning">Action</button>
                <button type="button" class="btn btn-alt-warning dropdown-toggle dropdown-toggle-split" id="dropdown-split-alt-warning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-split-warning">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Alternate Style -->
        </div>
      </div>
      <!-- END Split Button Dropdowns -->

      <!-- Alignment -->
      <h2 class="content-heading">Alignment</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can align your dropmenus to the center of buttons
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown-center">
                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-align-center-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-center-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown-center">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdown-align-center-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-center-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown-center">
                <button type="button" class="btn btn-alt-primary dropdown-toggle" id="dropdown-align-center-alt-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-center-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <p class="text-muted">
            You can align your dropmenus to the right of buttons
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-align-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdown-align-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="dropdown">
                <button type="button" class="btn btn-alt-primary dropdown-toggle" id="dropdown-align-alt-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-align-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Alignment -->

      <!-- Position -->
      <h2 class="content-heading">Position</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can position your dropdown relative to your button
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Dropright -->
          <h3 class="h4">Dropright</h3>
          <div class="row items-push mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="dropdown dropright push">
                <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-dropright-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Right
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropright-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
              <div class="dropdown dropright push">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdown-dropright-outline-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Right
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropright-outline-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
              <div class="dropdown dropright push">
                <button type="button" class="btn btn-alt-primary dropdown-toggle" id="dropdown-dropright-alt-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Right
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropright-alt-primary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Dropright -->

          <!-- Dropleft -->
          <h3 class="h4 text-end">Dropleft</h3>
          <div class="text-end mb-4">
            <div class="dropdown dropleft push">
              <button type="button" class="btn btn-dark dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Left
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
              </div>
            </div>
            <div class="dropdown dropleft push">
              <button type="button" class="btn btn-outline-dark dropdown-toggle" id="dropdown-dropleft-outline-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Left
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-outline-dark">
                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
              </div>
            </div>
            <div class="dropdown dropleft push">
              <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown-dropleft-alt-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Left
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-alt-dark">
                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
              </div>
            </div>
          </div>
          <!-- END Dropleft -->

          <!-- Dropup -->
          <h3 class="h4">Dropup</h3>
          <div class="row items-push mb-3">
            <div class="col-sm-6 col-xl-3">
              <div class="dropdown dropup">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown-dropup-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Up
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropup-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="dropdown dropup">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropup-outline-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Up
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropup-outline-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="dropdown dropup">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown-dropup-alt-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Up
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdown-dropup-alt-secondary">
                  <a class="dropdown-item" href="javascript:void(0)">Action</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Dropup -->
        </div>
      </div>
      <!-- END Position -->

      <!-- Rich Content -->
      <h2 class="content-heading">Rich Content</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can use any HTML content you want in your dropdowns such as forms
          </p>
        </div>
        <div class="col-lg-8">
          <div class="dropdown push">
            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdown-content-hero-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Form in dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown-content-hero-primary">
              <form class="p-2" action="be_ui_dropdowns.php" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <label class="form-label" for="dropdown-content-form-email">Email address</label>
                  <input type="email" class="form-control" id="dropdown-content-form-email" name="dropdown-content-form-email" placeholder="email@example.com">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="dropdown-content-form-password">Password</label>
                  <input type="password" class="form-control" id="dropdown-content-form-password" name="dropdown-content-form-password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-muted fs-sm" href="javascript:void(0)">Sign up</a>
              <a class="dropdown-item text-muted fs-sm" href="javascript:void(0)">Forgot password?</a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Rich Content -->
    </div>
  </div>
  <!-- END Examples -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
