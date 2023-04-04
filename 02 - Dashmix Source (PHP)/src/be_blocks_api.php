<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Block API</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blocks</li>
          <li class="breadcrumb-item active" aria-current="page">API</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Blocks API, functionality initialized in Template._uiApiBlocks() -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Usage with JavaScript</h3>
    </div>
    <div class="block-content">
      <p class="mb-0">
        Using block API is easy. You will just have to pass your mode as well as your block’s id:
      </p>
      <p>
        <code>Dashmix.block('mode', '#block-id');</code>
      </p>
      <div class="row items-push">
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-bordered table-vcenter mb-0">
              <thead>
                <tr class="bg-body-dark">
                  <th style="width: 25%;">Live Test</th>
                  <th style="min-width: 160px;">Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('content_toggle', '#my-block');">Toggle Content</button>
                  </td>
                  <td>
                    <code>content_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('content_hide', '#my-block');">Hide Content</button>
                  </td>
                  <td>
                    <code>content_hide</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('content_show', '#my-block');">Show Content</button>
                  </td>
                  <td>
                    <code>content_show</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('state_toggle', '#my-block');">Toggle State</button>
                  </td>
                  <td>
                    <code>state_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('state_loading', '#my-block');">State Loading</button>
                  </td>
                  <td>
                    <code>state_loading</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('state_normal', '#my-block');">State Normal</button>
                  </td>
                  <td>
                    <code>state_normal</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('fullscreen_toggle', '#my-block');">Toggle Fullscreen</button>
                  </td>
                  <td>
                    <code>fullscreen_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('fullscreen_on', '#my-block');">Fullscreen On</button>
                  </td>
                  <td>
                    <code>fullscreen_on</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('fullscreen_off', '#my-block');">Fullscreen Off</button>
                  </td>
                  <td>
                    <code>fullscreen_off</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('pinned_toggle', '#my-block');">Toggle Pinned</button>
                  </td>
                  <td>
                    <code>pinned_toggle</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('pinned_on', '#my-block');">Pinned On</button>
                  </td>
                  <td>
                    <code>pinned_on</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('pinned_off', '#my-block');">Pinned Off</button>
                  </td>
                  <td>
                    <code>pinned_off</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('close', '#my-block');">Close</button>
                  </td>
                  <td>
                    <code>close</code>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-alt-primary w-100" onclick="Dashmix.block('open', '#my-block');">Open</button>
                  </td>
                  <td>
                    <code>open</code>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="block block-rounded block-bordered" id="my-block">
            <div class="block-header block-header-default">
              <h3 class="block-title">Test Block</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <?php $dm->get_text('medium'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Blocks API -->

  <!-- Interactive Options, functionality initialized in Template._uiApiBlocks() -->
  <!-- In fullscreen and content toggle buttons, icon classes are auto added from Template._uiApiBlocks() -->
  <h2 class="content-heading">Interactive Options</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Toggle</h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Close</h3>
          <div class="block-options">
            <!-- To close a block, just add the following properties to your button: data-toggle="block-option" data-action="close" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Maximize</h3>
          <div class="block-options">
            <!-- To toggle fullscreen a block, just add the following properties to your button: data-toggle="block-option" data-action="fullscreen_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Refresh</h3>
          <div class="block-options">
            <!--
            To activate loading state to a block, just add the following properties to your button: data-toggle="block-option" data-action="state_toggle"
            If you also add the property data-action-mode="demo" the loading state will be disabled in 2 seconds for demostration purposes

            Without the demo mode, you can restore the block to its normal state by using the following JS code: Dashmix.block('state_normal', '#block-id');
            You can use it after you've loaded successfully your data (please check Block API)
            -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pinned</h3>
          <div class="block-options">
            <!-- To toggle pinned position to a block, just add the following properties to your button: data-toggle="block-option" data-action="pinned_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-hidden">
        <div class="block-header block-header-default">
          <h3 class="block-title">Content <small>Hidden by default</small></h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">All Options</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
              <i class="si si-close"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('medium'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Interactive Options -->

  <!-- Interactive Options with Bootstrap Buttons, functionality initialized in Template._uiApiBlocks() -->
  <!-- In fullscreen and content toggle buttons, icon classes are auto added from Template._uiApiBlocks() -->
  <h2 class="content-heading">Interactive Options with Bootstrap Buttons</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Toggle</h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn btn-sm btn-primary" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Close</h3>
          <div class="block-options">
            <!-- To close a block, just add the following properties to your button: data-toggle="block-option" data-action="close" -->
            <button type="button" class="btn btn-sm btn-danger" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Maximize</h3>
          <div class="block-options">
            <!-- To toggle fullscreen a block, just add the following properties to your button: data-toggle="block-option" data-action="fullscreen_toggle" -->
            <button type="button" class="btn btn-sm btn-dark" data-toggle="block-option" data-action="fullscreen_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Refresh</h3>
          <div class="block-options">
            <!--
            To activate loading state to a block, just add the following properties to your button: data-toggle="block-option" data-action="state_toggle"
            If you also add the property data-action-mode="demo" the loading state will be disabled in 2 seconds for demostration purposes

            Without the demo mode, you can restore the block to its normal state by using the following JS code: Dashmix.block('state_normal', '#block-id');
            You can use it after you've loaded successfully your data (please check Block API)
            -->
            <button type="button" class="btn btn-sm btn-success" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pinned</h3>
          <div class="block-options">
            <!-- To toggle pinned position to a block, just add the following properties to your button: data-toggle="block-option" data-action="pinned_toggle" -->
            <button type="button" class="btn btn-sm btn-info" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-hidden">
        <div class="block-header block-header-default">
          <h3 class="block-title">Content <small>Hidden by default</small></h3>
          <div class="block-options">
            <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
            <button type="button" class="btn btn-sm btn-warning" data-toggle="block-option" data-action="content_toggle"></button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">All Options</h3>
          <div class="block-options">
            <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="block-option" data-action="pinned_toggle">
              <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="block-option" data-action="content_toggle"></button>
            <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="block-option" data-action="close">
              <i class="si si-close"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('medium'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Interactive Options with Bootstrap Buttons -->

  <!-- Loading Indicators -->
  <h2 class="content-heading">Loading Indicators</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Cog</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-location">
        <div class="block-header block-header-default">
          <h3 class="block-title">Location</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-energy">
        <div class="block-header block-header-default">
          <h3 class="block-title">Energy</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-refresh">
        <div class="block-header block-header-default">
          <h3 class="block-title">Refresh</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-sun">
        <div class="block-header block-header-default">
          <h3 class="block-title">Sun</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-mode-loading-repeat">
        <div class="block-header block-header-default">
          <h3 class="block-title">Repeat</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- END Loading Indicators -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
