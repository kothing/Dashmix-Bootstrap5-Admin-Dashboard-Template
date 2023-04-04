<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Input Groups</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active" aria-current="page">Input Groups</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Groups -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Groups</h3>
    </div>
    <div class="block-content">
      <form action="be_forms_input_groups.php" method="POST" onsubmit="return false;">
        <!-- Text -->
        <h2 class="content-heading pt-0">Text</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Prepend or Append Text next to your inputs, useful if you you would like to add extra info
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  Name
                </span>
                <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group1-input2" name="example-group1-input2">
                <span class="input-group-text">
                  Email
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  $
                </span>
                <input type="text" class="form-control text-center" id="example-group1-input3" name="example-group1-input3" placeholder="00">
                <span class="input-group-text">,00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  Name
                </span>
                <input type="text" class="form-control form-control-alt" id="example-group1-input1-alt" name="example-group1-input1-alt">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group1-input2-alt" name="example-group1-input2-alt">
                <span class="input-group-text input-group-text-alt">
                  Email
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  $
                </span>
                <input type="text" class="form-control form-control-alt text-center" id="example-group1-input3-alt" name="example-group1-input3-alt" placeholder="00">
                <span class="input-group-text input-group-text-alt">,00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">@</span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group1-floating1" name="example-group1-floating1" placeholder="Username">
                  <label for="example-group1-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group1-floating2" name="example-group1-floating2" placeholder="Email">
                  <label for="example-group1-floating2">Email</label>
                </div>
                <span class="input-group-text">@gmail.com</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">$</span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group1-floating3" name="example-group1-floating3" placeholder="Ammount">
                  <label for="example-group1-floating3">Amount</label>
                </div>
                <span class="input-group-text">,00</span>
              </div>
            </div>
          </div>
        </div>
        <!-- END Text -->

        <!-- Icons -->
        <h2 class="content-heading">Icons</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Prepend or Append Icons next to your inputs to visualize the context
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="far fa-user"></i>
                </span>
                <input type="text" class="form-control" id="example-group2-input1" name="example-group2-input1">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group2-input2" name="example-group2-input2">
                <span class="input-group-text">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fa fa-euro-sign"></i>
                </span>
                <input type="text" class="form-control text-center" id="example-group2-input3" name="example-group2-input3" placeholder="..">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  <i class="far fa-user"></i>
                </span>
                <input type="text" class="form-control form-control-alt" id="example-group2-input1-alt" name="example-group2-input1-alt">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group2-input2-alt" name="example-group2-input2-alt">
                <span class="input-group-text input-group-text-alt">
                  <i class="far fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text input-group-text-alt">
                  <i class="fa fa-euro-sign"></i>
                </span>
                <input type="text" class="form-control form-control-alt text-center" id="example-group2-input3-alt" name="example-group2-input3-alt" placeholder="..">
                <span class="input-group-text input-group-text-alt">
                  <i class="si si-wallet"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="far fa-fw fa-user"></i>
                </span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group2-floating1" name="example-group2-floating1" placeholder="Username">
                  <label for="example-group2-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group2-floating2" name="example-group2-floating2" placeholder="Email">
                  <label for="example-group2-floating2">Email</label>
                </div>
                <span class="input-group-text">
                  <i class="far fa-fw fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fa fa-fw fa-euro-sign"></i>
                </span>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group2-floating3" name="example-group2-floating3" placeholder="Ammount">
                  <label for="example-group2-floating3">Amount</label>
                </div>
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
        </div>
        <!-- END Icons -->

        <!-- Buttons -->
        <h2 class="content-heading">Buttons</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Prepend or Append Buttons next to your inputs to add related actions
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control" id="example-group3-input1" name="example-group3-input1" placeholder="Name">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group3-input2" name="example-group3-input2" placeholder="Email">
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control" id="example-group3-input3" name="example-group3-input3" placeholder="Search">
                <button type="button" class="btn btn-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input1-alt" name="example-group3-input1-alt" placeholder="Name">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group3-input2-alt" name="example-group3-input2-alt" placeholder="Email">
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input3-alt" name="example-group3-input3-alt" placeholder="Search">
                <button type="button" class="btn btn-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-primary">
                  <i class="fa fa-search me-1"></i> Search
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input1-alt2" name="example-group3-input1-alt2" placeholder="Name">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group3-input2-alt2" name="example-group3-input2-alt2" placeholder="Email">
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-primary">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <input type="text" class="form-control form-control-alt" id="example-group3-input3-alt2" name="example-group3-input3-alt2" placeholder="Search">
                <button type="button" class="btn btn-alt-info">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-search me-1 opacity-50"></i> Search
                </button>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group3-floating1" name="example-group3-floating1" placeholder="Username">
                  <label for="example-group3-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group3-floating2" name="example-group3-floating2" placeholder="Email">
                  <label for="example-group3-floating2">Email</label>
                </div>
                <button type="button" class="btn btn-secondary">Submit</button>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </button>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group3-floating3" name="example-group3-floating3" placeholder="Search">
                  <label for="example-group3-floating3">Search</label>
                </div>
                <button type="button" class="btn btn-info">
                  <i class="fab fa-fw fa-twitter"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- END Buttons -->

        <!-- Dropdowns -->
        <h2 class="content-heading">Dropdowns</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Prepend or Append dropdowns next to your inputs
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">Options</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control" id="example-group4-input1" name="example-group4-input1" placeholder="Name" aria-label="Text input with dropdown button">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control" id="example-group4-input2" name="example-group4-input2" placeholder="Email" aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control" id="example-group4-input3" name="example-group4-input3" placeholder=".." aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-secondary">Options</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input1-alt" name="example-group4-input1-alt" placeholder="Name" aria-label="Text input with dropdown button">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group4-input2-alt" name="example-group4-input2-alt" placeholder="Email" aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input3-alt" name="example-group4-input3-alt" placeholder=".." aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-alt-success">Options</button>
                <button type="button" class="btn btn-alt-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input1-alt2" name="example-group4-input1-alt2" placeholder="Name" aria-label="Text input with dropdown button">
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <input type="email" class="form-control form-control-alt" id="example-group4-input2-alt2" name="example-group4-input2-alt2" placeholder="Email" aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-alt-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
                <button type="button" class="btn btn-alt-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <input type="text" class="form-control form-control-alt" id="example-group4-input3-alt2" name="example-group4-input3-alt2" placeholder=".." aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-alt-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <button type="button" class="btn btn-primary">Options</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group4-floating1" name="example-group4-floating1" placeholder="Username">
                  <label for="example-group4-floating1">Username</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group">
                <div class="form-floating">
                  <input type="email" class="form-control" id="example-group4-floating2" name="example-group4-floating2" placeholder="Email">
                  <label for="example-group4-floating2">Email</label>
                </div>
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group dropup">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="example-group4-floating3" name="example-group4-floating3" placeholder="Search">
                  <label for="example-group4-floating3">Search</label>
                </div>
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-bell me-1"></i> News
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="far fa-fw fa-envelope me-1"></i> Messages
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Dropdowns -->
      </form>
    </div>
  </div>
  <!-- END Groups -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
