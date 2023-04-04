<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Button Groups</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Button Groups</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Button Groups -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Groups</h3>
    </div>
    <div class="block-content block-content-full">
      <!-- Horizontal -->
      <h2 class="content-heading">Horizontal</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Group a series of buttons together on a single line with the button group
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default Style -->
          <div class="row items-push">
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Primary">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Secondary">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Info">
                <button type="button" class="btn btn-info">Left</button>
                <button type="button" class="btn btn-info">Middle</button>
                <button type="button" class="btn btn-info">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Success">
                <button type="button" class="btn btn-success">Left</button>
                <button type="button" class="btn btn-success">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Warning">
                <button type="button" class="btn btn-warning">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-warning">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Danger">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-danger">Middle</button>
                <button type="button" class="btn btn-danger">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Dark">
                <button type="button" class="btn btn-dark">Left</button>
                <button type="button" class="btn btn-dark">Middle</button>
                <button type="button" class="btn btn-dark">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Light">
                <button type="button" class="btn btn-light">Left</button>
                <button type="button" class="btn btn-light">Middle</button>
                <button type="button" class="btn btn-light">Right</button>
              </div>
            </div>
          </div>
          <!-- END Default Style -->

          <!-- Outline Style -->
          <div class="row items-push">
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Primary">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Secondary">
                <button type="button" class="btn btn-outline-secondary">Left</button>
                <button type="button" class="btn btn-outline-secondary">Middle</button>
                <button type="button" class="btn btn-outline-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Info">
                <button type="button" class="btn btn-outline-info">Left</button>
                <button type="button" class="btn btn-outline-info">Middle</button>
                <button type="button" class="btn btn-outline-info">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Success">
                <button type="button" class="btn btn-outline-success">Left</button>
                <button type="button" class="btn btn-outline-success">Middle</button>
                <button type="button" class="btn btn-outline-success">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Warning">
                <button type="button" class="btn btn-outline-warning">Left</button>
                <button type="button" class="btn btn-outline-warning">Middle</button>
                <button type="button" class="btn btn-outline-warning">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Danger">
                <button type="button" class="btn btn-outline-danger">Left</button>
                <button type="button" class="btn btn-outline-danger">Middle</button>
                <button type="button" class="btn btn-outline-danger">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Dark">
                <button type="button" class="btn btn-outline-dark">Left</button>
                <button type="button" class="btn btn-outline-dark">Middle</button>
                <button type="button" class="btn btn-outline-dark">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Outline Light">
                <button type="button" class="btn btn-outline-light">Left</button>
                <button type="button" class="btn btn-outline-light">Middle</button>
                <button type="button" class="btn btn-outline-light">Right</button>
              </div>
            </div>
          </div>
          <!-- Outline Style -->

          <!-- Alternate Style -->
          <div class="row items-push">
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Primary">
                <button type="button" class="btn btn-alt-primary">Left</button>
                <button type="button" class="btn btn-alt-primary">Middle</button>
                <button type="button" class="btn btn-alt-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Secondary">
                <button type="button" class="btn btn-alt-secondary">Left</button>
                <button type="button" class="btn btn-alt-secondary">Middle</button>
                <button type="button" class="btn btn-alt-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Info">
                <button type="button" class="btn btn-alt-info">Left</button>
                <button type="button" class="btn btn-alt-info">Middle</button>
                <button type="button" class="btn btn-alt-info">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Success">
                <button type="button" class="btn btn-alt-success">Left</button>
                <button type="button" class="btn btn-alt-success">Middle</button>
                <button type="button" class="btn btn-alt-success">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Warning">
                <button type="button" class="btn btn-alt-warning">Left</button>
                <button type="button" class="btn btn-alt-warning">Middle</button>
                <button type="button" class="btn btn-alt-warning">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Danger">
                <button type="button" class="btn btn-alt-danger">Left</button>
                <button type="button" class="btn btn-alt-danger">Middle</button>
                <button type="button" class="btn btn-alt-danger">Right</button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="btn-group" role="group" aria-label="Horizontal Alternate Dark">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
            </div>
          </div>
          <!-- Alternate Style -->
        </div>
      </div>
      <!-- END Horizontal -->

      <!-- Vertical -->
      <h2 class="content-heading">Vertical</h2>
      <div class="row items-push">
        <div class="col-lg-4">
          <p class="text-muted">
            Make a set of buttons appear vertically stacked rather than horizontally.
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push">
            <!-- Default Style -->
            <div class="col-sm-6">
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Primary">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Secondary">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Info">
                <button type="button" class="btn btn-info">Left</button>
                <button type="button" class="btn btn-info">Middle</button>
                <button type="button" class="btn btn-info">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Success">
                <button type="button" class="btn btn-success">Left</button>
                <button type="button" class="btn btn-success">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Warning">
                <button type="button" class="btn btn-warning">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-warning">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Danger">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-danger">Middle</button>
                <button type="button" class="btn btn-danger">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Dark">
                <button type="button" class="btn btn-dark">Left</button>
                <button type="button" class="btn btn-dark">Middle</button>
                <button type="button" class="btn btn-dark">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Light">
                <button type="button" class="btn btn-light">Left</button>
                <button type="button" class="btn btn-light">Middle</button>
                <button type="button" class="btn btn-light">Right</button>
              </div>
            </div>
            <!-- END Default Style -->

            <!-- Outline Style -->
            <div class="col-sm-6">
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Primary">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Secondary">
                <button type="button" class="btn btn-outline-secondary">Left</button>
                <button type="button" class="btn btn-outline-secondary">Middle</button>
                <button type="button" class="btn btn-outline-secondary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Info">
                <button type="button" class="btn btn-outline-info">Left</button>
                <button type="button" class="btn btn-outline-info">Middle</button>
                <button type="button" class="btn btn-outline-info">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Success">
                <button type="button" class="btn btn-outline-success">Left</button>
                <button type="button" class="btn btn-outline-success">Middle</button>
                <button type="button" class="btn btn-outline-success">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Warning">
                <button type="button" class="btn btn-outline-warning">Left</button>
                <button type="button" class="btn btn-outline-warning">Middle</button>
                <button type="button" class="btn btn-outline-warning">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Danger">
                <button type="button" class="btn btn-outline-danger">Left</button>
                <button type="button" class="btn btn-outline-danger">Middle</button>
                <button type="button" class="btn btn-outline-danger">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Dark">
                <button type="button" class="btn btn-outline-dark">Left</button>
                <button type="button" class="btn btn-outline-dark">Middle</button>
                <button type="button" class="btn btn-outline-dark">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Outline Light">
                <button type="button" class="btn btn-outline-light">Left</button>
                <button type="button" class="btn btn-outline-light">Middle</button>
                <button type="button" class="btn btn-outline-light">Right</button>
              </div>
            </div>
            <!-- END Outline Style -->

            <!-- Alternate Style -->
            <div class="col-sm-6">
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Primary">
                <button type="button" class="btn btn-alt-primary">Left</button>
                <button type="button" class="btn btn-alt-primary">Middle</button>
                <button type="button" class="btn btn-alt-primary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Secondary">
                <button type="button" class="btn btn-alt-secondary">Left</button>
                <button type="button" class="btn btn-alt-secondary">Middle</button>
                <button type="button" class="btn btn-alt-secondary">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Info">
                <button type="button" class="btn btn-alt-info">Left</button>
                <button type="button" class="btn btn-alt-info">Middle</button>
                <button type="button" class="btn btn-alt-info">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Success">
                <button type="button" class="btn btn-alt-success">Left</button>
                <button type="button" class="btn btn-alt-success">Middle</button>
                <button type="button" class="btn btn-alt-success">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Warning">
                <button type="button" class="btn btn-alt-warning">Left</button>
                <button type="button" class="btn btn-alt-warning">Middle</button>
                <button type="button" class="btn btn-alt-warning">Right</button>
              </div>
              <div class="btn-group-vertical push" role="group" aria-label="Vertical Alternate Danger">
                <button type="button" class="btn btn-alt-danger">Left</button>
                <button type="button" class="btn btn-alt-danger">Middle</button>
                <button type="button" class="btn btn-alt-danger">Right</button>
              </div>
            </div>
            <!-- END Alternate Style -->
          </div>
        </div>
      </div>
      <!-- END Vertical -->

      <!-- Sizes -->
      <h2 class="content-heading">Sizes</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can easily have a small or large size for all button group variations
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push">
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-sm" role="group" aria-label="Small Horizontal Primary">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-sm" role="group" aria-label="Small Horizontal Outline Primary">
                <button type="button" class="btn btn-outline-secondary">Left</button>
                <button type="button" class="btn btn-outline-secondary">Middle</button>
                <button type="button" class="btn btn-outline-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-sm" role="group" aria-label="Small Horizontal Alternate Primary">
                <button type="button" class="btn btn-alt-secondary">Left</button>
                <button type="button" class="btn btn-alt-secondary">Middle</button>
                <button type="button" class="btn btn-alt-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Small Vertical Primary">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Small Vertical Outline Primary">
                <button type="button" class="btn btn-outline-secondary">Left</button>
                <button type="button" class="btn btn-outline-secondary">Middle</button>
                <button type="button" class="btn btn-outline-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-sm" role="group" aria-label="Small Vertical Alternate Primary">
                <button type="button" class="btn btn-alt-secondary">Left</button>
                <button type="button" class="btn btn-alt-secondary">Middle</button>
                <button type="button" class="btn btn-alt-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-lg" role="group" aria-label="Large Horizontal Primary">
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button" class="btn btn-primary">
                  =
                </button>
                <button type="button" class="btn btn-primary">
                  <i class="fa fa-arrow-right"></i></button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-lg" role="group" aria-label="Large Horizontal Outline Primary">
                <button type="button" class="btn btn-outline-secondary">
                  <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  =
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  <i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group btn-group-lg" role="group" aria-label="Large Horizontal Alternate Primary">
                <button type="button" class="btn btn-alt-secondary">
                  <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button" class="btn btn-alt-secondary">
                  =
                </button>
                <button type="button" class="btn btn-alt-secondary">
                  <i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-lg" role="group" aria-label="Large Vertical Primary">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-lg" role="group" aria-label="Large Vertical Outline Primary">
                <button type="button" class="btn btn-outline-secondary">Left</button>
                <button type="button" class="btn btn-outline-secondary">Middle</button>
                <button type="button" class="btn btn-outline-secondary">Right</button>
              </div>
            </div>
            <div class="col-sm-4 col-lg-12 col-xl-4">
              <div class="btn-group-vertical btn-group-lg" role="group" aria-label="Large Vertical Alternate Primary">
                <button type="button" class="btn btn-alt-secondary">Left</button>
                <button type="button" class="btn btn-alt-secondary">Middle</button>
                <button type="button" class="btn btn-alt-secondary">Right</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Sizes -->
    </div>
  </div>
  <!-- END Button Groups -->

  <!-- Toolbars -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Toolbars</h3>
    </div>
    <div class="block-content block-content-full">
      <!-- Default -->
      <h2 class="content-heading">Default</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Combine sets of button groups into button toolbars for more complex components
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-6">
              <!-- Default Style -->
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Primary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Primary First group">
                  <button type="button" class="btn btn-primary">1</button>
                  <button type="button" class="btn btn-primary">2</button>
                  <button type="button" class="btn btn-primary">3</button>
                  <button type="button" class="btn btn-primary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Primary Second group">
                  <button type="button" class="btn btn-primary">5</button>
                  <button type="button" class="btn btn-primary">6</button>
                  <button type="button" class="btn btn-primary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Primary Third group">
                  <button type="button" class="btn btn-primary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Secondary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Secondary First group">
                  <button type="button" class="btn btn-secondary">1</button>
                  <button type="button" class="btn btn-secondary">2</button>
                  <button type="button" class="btn btn-secondary">3</button>
                  <button type="button" class="btn btn-secondary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Secondary Second group">
                  <button type="button" class="btn btn-secondary">5</button>
                  <button type="button" class="btn btn-secondary">6</button>
                  <button type="button" class="btn btn-secondary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Secondary Third group">
                  <button type="button" class="btn btn-secondary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Info Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Info First group">
                  <button type="button" class="btn btn-info">1</button>
                  <button type="button" class="btn btn-info">2</button>
                  <button type="button" class="btn btn-info">3</button>
                  <button type="button" class="btn btn-info">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Info Second group">
                  <button type="button" class="btn btn-info">5</button>
                  <button type="button" class="btn btn-info">6</button>
                  <button type="button" class="btn btn-info">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Info Third group">
                  <button type="button" class="btn btn-info">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Success Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Success First group">
                  <button type="button" class="btn btn-success">1</button>
                  <button type="button" class="btn btn-success">2</button>
                  <button type="button" class="btn btn-success">3</button>
                  <button type="button" class="btn btn-success">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Success Second group">
                  <button type="button" class="btn btn-success">5</button>
                  <button type="button" class="btn btn-success">6</button>
                  <button type="button" class="btn btn-success">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Success Third group">
                  <button type="button" class="btn btn-success">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Warning Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Warning First group">
                  <button type="button" class="btn btn-warning">1</button>
                  <button type="button" class="btn btn-warning">2</button>
                  <button type="button" class="btn btn-warning">3</button>
                  <button type="button" class="btn btn-warning">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Warning Second group">
                  <button type="button" class="btn btn-warning">5</button>
                  <button type="button" class="btn btn-warning">6</button>
                  <button type="button" class="btn btn-warning">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Warning Third group">
                  <button type="button" class="btn btn-warning">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Danger Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Danger First group">
                  <button type="button" class="btn btn-danger">1</button>
                  <button type="button" class="btn btn-danger">2</button>
                  <button type="button" class="btn btn-danger">3</button>
                  <button type="button" class="btn btn-danger">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Danger Second group">
                  <button type="button" class="btn btn-danger">5</button>
                  <button type="button" class="btn btn-danger">6</button>
                  <button type="button" class="btn btn-danger">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Danger Third group">
                  <button type="button" class="btn btn-danger">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Dark Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Dark First group">
                  <button type="button" class="btn btn-dark">1</button>
                  <button type="button" class="btn btn-dark">2</button>
                  <button type="button" class="btn btn-dark">3</button>
                  <button type="button" class="btn btn-dark">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Dark Second group">
                  <button type="button" class="btn btn-dark">5</button>
                  <button type="button" class="btn btn-dark">6</button>
                  <button type="button" class="btn btn-dark">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Dark Third group">
                  <button type="button" class="btn btn-dark">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Light Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Light First group">
                  <button type="button" class="btn btn-light">1</button>
                  <button type="button" class="btn btn-light">2</button>
                  <button type="button" class="btn btn-light">3</button>
                  <button type="button" class="btn btn-light">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Light Second group">
                  <button type="button" class="btn btn-light">5</button>
                  <button type="button" class="btn btn-light">6</button>
                  <button type="button" class="btn btn-light">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Light Third group">
                  <button type="button" class="btn btn-light">8</button>
                </div>
              </div>
              <!-- END Default Style -->
            </div>
            <div class="col-md-6">
              <!-- Outline Style -->
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Primary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Primary First group">
                  <button type="button" class="btn btn-outline-primary">1</button>
                  <button type="button" class="btn btn-outline-primary">2</button>
                  <button type="button" class="btn btn-outline-primary">3</button>
                  <button type="button" class="btn btn-outline-primary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Primary Second group">
                  <button type="button" class="btn btn-outline-primary">5</button>
                  <button type="button" class="btn btn-outline-primary">6</button>
                  <button type="button" class="btn btn-outline-primary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Primary Third group">
                  <button type="button" class="btn btn-outline-primary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Secondary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Secondary First group">
                  <button type="button" class="btn btn-outline-secondary">1</button>
                  <button type="button" class="btn btn-outline-secondary">2</button>
                  <button type="button" class="btn btn-outline-secondary">3</button>
                  <button type="button" class="btn btn-outline-secondary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Secondary Second group">
                  <button type="button" class="btn btn-outline-secondary">5</button>
                  <button type="button" class="btn btn-outline-secondary">6</button>
                  <button type="button" class="btn btn-outline-secondary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Secondary Third group">
                  <button type="button" class="btn btn-outline-secondary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Info Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Info First group">
                  <button type="button" class="btn btn-outline-info">1</button>
                  <button type="button" class="btn btn-outline-info">2</button>
                  <button type="button" class="btn btn-outline-info">3</button>
                  <button type="button" class="btn btn-outline-info">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Info Second group">
                  <button type="button" class="btn btn-outline-info">5</button>
                  <button type="button" class="btn btn-outline-info">6</button>
                  <button type="button" class="btn btn-outline-info">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Info Third group">
                  <button type="button" class="btn btn-outline-info">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Success Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Success First group">
                  <button type="button" class="btn btn-outline-success">1</button>
                  <button type="button" class="btn btn-outline-success">2</button>
                  <button type="button" class="btn btn-outline-success">3</button>
                  <button type="button" class="btn btn-outline-success">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Success Second group">
                  <button type="button" class="btn btn-outline-success">5</button>
                  <button type="button" class="btn btn-outline-success">6</button>
                  <button type="button" class="btn btn-outline-success">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Success Third group">
                  <button type="button" class="btn btn-outline-success">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Warning Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Warning First group">
                  <button type="button" class="btn btn-outline-warning">1</button>
                  <button type="button" class="btn btn-outline-warning">2</button>
                  <button type="button" class="btn btn-outline-warning">3</button>
                  <button type="button" class="btn btn-outline-warning">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Warning Second group">
                  <button type="button" class="btn btn-outline-warning">5</button>
                  <button type="button" class="btn btn-outline-warning">6</button>
                  <button type="button" class="btn btn-outline-warning">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Warning Third group">
                  <button type="button" class="btn btn-outline-warning">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Danger Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Danger First group">
                  <button type="button" class="btn btn-outline-danger">1</button>
                  <button type="button" class="btn btn-outline-danger">2</button>
                  <button type="button" class="btn btn-outline-danger">3</button>
                  <button type="button" class="btn btn-outline-danger">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Danger Second group">
                  <button type="button" class="btn btn-outline-danger">5</button>
                  <button type="button" class="btn btn-outline-danger">6</button>
                  <button type="button" class="btn btn-outline-danger">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Danger Third group">
                  <button type="button" class="btn btn-outline-danger">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Dark Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Dark First group">
                  <button type="button" class="btn btn-outline-dark">1</button>
                  <button type="button" class="btn btn-outline-dark">2</button>
                  <button type="button" class="btn btn-outline-dark">3</button>
                  <button type="button" class="btn btn-outline-dark">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Dark Second group">
                  <button type="button" class="btn btn-outline-dark">5</button>
                  <button type="button" class="btn btn-outline-dark">6</button>
                  <button type="button" class="btn btn-outline-dark">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Dark Third group">
                  <button type="button" class="btn btn-outline-dark">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Outline Light Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Light First group">
                  <button type="button" class="btn btn-outline-light">1</button>
                  <button type="button" class="btn btn-outline-light">2</button>
                  <button type="button" class="btn btn-outline-light">3</button>
                  <button type="button" class="btn btn-outline-light">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Outline Light Second group">
                  <button type="button" class="btn btn-outline-light">5</button>
                  <button type="button" class="btn btn-outline-light">6</button>
                  <button type="button" class="btn btn-outline-light">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Outline Light Third group">
                  <button type="button" class="btn btn-outline-light">8</button>
                </div>
              </div>
              <!-- END Outline Style -->
            </div>
            <div class="col-md-6">
              <!-- Alternate Style -->
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Primary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Primary First group">
                  <button type="button" class="btn btn-alt-primary">1</button>
                  <button type="button" class="btn btn-alt-primary">2</button>
                  <button type="button" class="btn btn-alt-primary">3</button>
                  <button type="button" class="btn btn-alt-primary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Primary Second group">
                  <button type="button" class="btn btn-alt-primary">5</button>
                  <button type="button" class="btn btn-alt-primary">6</button>
                  <button type="button" class="btn btn-alt-primary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Primary Third group">
                  <button type="button" class="btn btn-alt-primary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Secondary Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Secondary First group">
                  <button type="button" class="btn btn-alt-secondary">1</button>
                  <button type="button" class="btn btn-alt-secondary">2</button>
                  <button type="button" class="btn btn-alt-secondary">3</button>
                  <button type="button" class="btn btn-alt-secondary">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Secondary Second group">
                  <button type="button" class="btn btn-alt-secondary">5</button>
                  <button type="button" class="btn btn-alt-secondary">6</button>
                  <button type="button" class="btn btn-alt-secondary">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Secondary Third group">
                  <button type="button" class="btn btn-alt-secondary">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Info Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Info First group">
                  <button type="button" class="btn btn-alt-info">1</button>
                  <button type="button" class="btn btn-alt-info">2</button>
                  <button type="button" class="btn btn-alt-info">3</button>
                  <button type="button" class="btn btn-alt-info">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Info Second group">
                  <button type="button" class="btn btn-alt-info">5</button>
                  <button type="button" class="btn btn-alt-info">6</button>
                  <button type="button" class="btn btn-alt-info">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Info Third group">
                  <button type="button" class="btn btn-alt-info">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Success Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Success First group">
                  <button type="button" class="btn btn-alt-success">1</button>
                  <button type="button" class="btn btn-alt-success">2</button>
                  <button type="button" class="btn btn-alt-success">3</button>
                  <button type="button" class="btn btn-alt-success">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Success Second group">
                  <button type="button" class="btn btn-alt-success">5</button>
                  <button type="button" class="btn btn-alt-success">6</button>
                  <button type="button" class="btn btn-alt-success">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Success Third group">
                  <button type="button" class="btn btn-alt-success">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Warning Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Warning First group">
                  <button type="button" class="btn btn-alt-warning">1</button>
                  <button type="button" class="btn btn-alt-warning">2</button>
                  <button type="button" class="btn btn-alt-warning">3</button>
                  <button type="button" class="btn btn-alt-warning">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Warning Second group">
                  <button type="button" class="btn btn-alt-warning">5</button>
                  <button type="button" class="btn btn-alt-warning">6</button>
                  <button type="button" class="btn btn-alt-warning">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Warning Third group">
                  <button type="button" class="btn btn-alt-warning">8</button>
                </div>
              </div>
              <div class="btn-toolbar mb-2" role="toolbar" aria-label="Alternate Danger Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Danger First group">
                  <button type="button" class="btn btn-alt-danger">1</button>
                  <button type="button" class="btn btn-alt-danger">2</button>
                  <button type="button" class="btn btn-alt-danger">3</button>
                  <button type="button" class="btn btn-alt-danger">4</button>
                </div>
                <div class="btn-group me-2 mb-2" role="group" aria-label="Alternate Danger Second group">
                  <button type="button" class="btn btn-alt-danger">5</button>
                  <button type="button" class="btn btn-alt-danger">6</button>
                  <button type="button" class="btn btn-alt-danger">7</button>
                </div>
                <div class="btn-group mb-2" role="group" aria-label="Alternate Danger Third group">
                  <button type="button" class="btn btn-alt-danger">8</button>
                </div>
              </div>
              <!-- END Alternate Style -->
            </div>
          </div>
        </div>
      </div>
      <!-- END Default -->

      <!-- Sizes -->
      <h2 class="content-heading">Sizes</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can easily have a small or large size for all toolbar variations
          </p>
        </div>
        <div class="col-lg-8">
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Small Primary Toolbar with button groups">
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Primary First group">
              <button type="button" class="btn btn-primary">1</button>
              <button type="button" class="btn btn-primary">2</button>
              <button type="button" class="btn btn-primary">3</button>
              <button type="button" class="btn btn-primary">4</button>
            </div>
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Primary Second group">
              <button type="button" class="btn btn-primary">5</button>
              <button type="button" class="btn btn-primary">6</button>
              <button type="button" class="btn btn-primary">7</button>
            </div>
            <div class="btn-group btn-group-sm mb-2" role="group" aria-label="Small Primary Third group">
              <button type="button" class="btn btn-primary">8</button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Small Outline Secondary Toolbar with button groups">
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Outline Secondary First group">
              <button type="button" class="btn btn-outline-secondary">1</button>
              <button type="button" class="btn btn-outline-secondary">2</button>
              <button type="button" class="btn btn-outline-secondary">3</button>
              <button type="button" class="btn btn-outline-secondary">4</button>
            </div>
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Outline Secondary Second group">
              <button type="button" class="btn btn-outline-secondary">5</button>
              <button type="button" class="btn btn-outline-secondary">6</button>
              <button type="button" class="btn btn-outline-secondary">7</button>
            </div>
            <div class="btn-group btn-group-sm mb-2" role="group" aria-label="Small Outline Secondary Third group">
              <button type="button" class="btn btn-outline-secondary">8</button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Small Alternate Secondary Toolbar with button groups">
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Alternate Secondary First group">
              <button type="button" class="btn btn-alt-secondary">1</button>
              <button type="button" class="btn btn-alt-secondary">2</button>
              <button type="button" class="btn btn-alt-secondary">3</button>
              <button type="button" class="btn btn-alt-secondary">4</button>
            </div>
            <div class="btn-group btn-group-sm me-2 mb-2" role="group" aria-label="Small Alternate Secondary Second group">
              <button type="button" class="btn btn-alt-secondary">5</button>
              <button type="button" class="btn btn-alt-secondary">6</button>
              <button type="button" class="btn btn-alt-secondary">7</button>
            </div>
            <div class="btn-group btn-group-sm mb-2" role="group" aria-label="Small Alternate Secondary Third group">
              <button type="button" class="btn btn-alt-secondary">8</button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Large Primary Toolbar with button groups">
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Small Primary First group">
              <button type="button" class="btn btn-primary">1</button>
              <button type="button" class="btn btn-primary">2</button>
              <button type="button" class="btn btn-primary">3</button>
              <button type="button" class="btn btn-primary">4</button>
            </div>
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Large Primary Second group">
              <button type="button" class="btn btn-primary">5</button>
              <button type="button" class="btn btn-primary">6</button>
              <button type="button" class="btn btn-primary">7</button>
            </div>
            <div class="btn-group btn-group-lg mb-2" role="group" aria-label="Large Primary Third group">
              <button type="button" class="btn btn-primary">8</button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Large Outline Secondary Toolbar with button groups">
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Large Outline Secondary First group">
              <button type="button" class="btn btn-outline-secondary">1</button>
              <button type="button" class="btn btn-outline-secondary">2</button>
              <button type="button" class="btn btn-outline-secondary">3</button>
              <button type="button" class="btn btn-outline-secondary">4</button>
            </div>
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Large Outline Secondary Second group">
              <button type="button" class="btn btn-outline-secondary">5</button>
              <button type="button" class="btn btn-outline-secondary">6</button>
              <button type="button" class="btn btn-outline-secondary">7</button>
            </div>
            <div class="btn-group btn-group-lg mb-2" role="group" aria-label="Large Outline Secondary Third group">
              <button type="button" class="btn btn-outline-secondary">8</button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Large Alternate Secondary Toolbar with button groups">
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Large Alternate Secondary First group">
              <button type="button" class="btn btn-alt-secondary">1</button>
              <button type="button" class="btn btn-alt-secondary">2</button>
              <button type="button" class="btn btn-alt-secondary">3</button>
              <button type="button" class="btn btn-alt-secondary">4</button>
            </div>
            <div class="btn-group btn-group-lg me-2 mb-2" role="group" aria-label="Large Alternate Secondary Second group">
              <button type="button" class="btn btn-alt-secondary">5</button>
              <button type="button" class="btn btn-alt-secondary">6</button>
              <button type="button" class="btn btn-alt-secondary">7</button>
            </div>
            <div class="btn-group btn-group-lg mb-2" role="group" aria-label="Large Alternate Secondary Third group">
              <button type="button" class="btn btn-alt-secondary">8</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Sizes -->

      <!-- Icons -->
      <h2 class="content-heading">Icons</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Using icons is ideal for creating useful toolbars
          </p>
        </div>
        <div class="col-lg-8">
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Icons Toolbar with button groups">
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons File group">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-file"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-save"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Text group">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-bold"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-italic"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-underline"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-strikethrough"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Align group">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-align-left"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-align-center"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-align-right"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons List group">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-list-ul"></i>
              </button>
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-list-ol"></i>
              </button>
            </div>
            <div class="btn-group mb-2" role="group" aria-label="Icons Archive group">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-fw fa-archive"></i>
              </button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Icons Outline Toolbar with button groups">
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Outline File group">
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-file"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-save"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Outline Text group">
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-bold"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-italic"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-underline"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-strikethrough"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Outline Align group">
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-align-left"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-align-center"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-align-right"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Outline List group">
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-list-ul"></i>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-list-ol"></i>
              </button>
            </div>
            <div class="btn-group mb-2" role="group" aria-label="Icons Outline Archive group">
              <button type="button" class="btn btn-outline-secondary">
                <i class="fa fa-fw fa-archive"></i>
              </button>
            </div>
          </div>
          <div class="btn-toolbar mb-2" role="toolbar" aria-label="Icons Alternate Toolbar with button groups">
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Alternate File group">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-file"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-save"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Alternate Text group">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-bold"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-italic"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-underline"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-strikethrough"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Alternate Align group">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-align-left"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-align-center"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-align-right"></i>
              </button>
            </div>
            <div class="btn-group me-2 mb-2" role="group" aria-label="Icons Alternate List group">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-list-ul"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-list-ol"></i>
              </button>
            </div>
            <div class="btn-group mb-2" role="group" aria-label="Icons Alternate Archive group">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-archive"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- END Icons -->
    </div>
  </div>
  <!-- END Toolbars -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
