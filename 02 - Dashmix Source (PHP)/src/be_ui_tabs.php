<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Tabs</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Tabs</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Vertical Block Tabs -->
  <h2 class="content-heading">Vertical Block Tabs</h2>
  <div class="row">
    <div class="col-lg-6">
      <!-- Vertical Block Tabs Default Style -->
      <div class="block block-rounded row g-0">
        <ul class="nav nav-tabs nav-tabs-block flex-md-column col-md-4" role="tablist">
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start active" id="btabs-vertical-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-home" role="tab" aria-controls="btabs-vertical-home" aria-selected="true">
              <i class="fa fa-fw fa-home opacity-50 me-1 d-none d-sm-inline-block"></i> Home
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-profile" role="tab" aria-controls="btabs-vertical-profile" aria-selected="false">
              <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i> Profile
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-settings" role="tab" aria-controls="btabs-vertical-settings" aria-selected="false">
              <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i> Settings
            </button>
          </li>
        </ul>
        <div class="tab-content col-md-8">
          <div class="block-content tab-pane active" id="btabs-vertical-home" role="tabpanel" aria-labelledby="btabs-vertical-home-tab" tabindex="0">
            <h4 class="fw-semibold">Home Content</h4>
            <p class="fs-sm">
              Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical-profile" role="tabpanel" aria-labelledby="btabs-vertical-profile-tab" tabindex="0">
            <h4 class="fw-semibold">Profile Content</h4>
            <p class="fs-sm">
              Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical-settings" role="tabpanel" aria-labelledby="btabs-vertical-settings-tab" tabindex="0">
            <h4 class="fw-semibold">Settings Content</h4>
            <p class="fs-sm">
              Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
            </p>
          </div>
        </div>
      </div>
      <!-- END Vertical Block Tabs Default Style -->
    </div>
    <div class="col-lg-6">
      <!-- Vertical Block Tabs Default Style (Right) -->
      <div class="block block-rounded row flex-md-row-reverse g-0">
        <ul class="nav nav-tabs nav-tabs-block justify-content-end justify-content-md-start flex-md-column col-md-4" role="tablist">
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start active" id="btabs-vertical2-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical2-home" role="tab" aria-controls="btabs-vertical2-home" aria-selected="true">
              <i class="fa fa-fw fa-home opacity-50 me-1 d-none d-sm-inline-block"></i> Home
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical2-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical2-profile" role="tab" aria-controls="btabs-vertical2-profile" aria-selected="false">
              <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i> Profile
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical2-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical2-settings" role="tab" aria-controls="btabs-vertical2-settings" aria-selected="false">
              <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i> Settings
            </button>
          </li>
        </ul>
        <div class="tab-content col-md-8">
          <div class="block-content tab-pane active" id="btabs-vertical2-home" role="tabpanel" aria-labelledby="btabs-vertical2-home-tab" tabindex="0">
            <h4 class="fw-semibold">Home Content</h4>
            <p class="fs-sm">
              Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical2-profile" role="tabpanel" aria-labelledby="btabs-vertical2-profile-tab" tabindex="0">
            <h4 class="fw-semibold">Profile Content</h4>
            <p class="fs-sm">
              Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical2-settings" role="tabpanel" aria-labelledby="btabs-vertical2-settings-tab" tabindex="0">
            <h4 class="fw-semibold">Settings Content</h4>
            <p class="fs-sm">
              Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
            </p>
          </div>
        </div>
      </div>
      <!-- END Vertical Block Tabs Default Style (Right) -->
    </div>
    <div class="col-12">
      <!-- Vertical Block Tabs Default Style With Extra Info -->
      <div class="block block-rounded row g-0">
        <ul class="nav nav-tabs nav-tabs-block flex-md-column col-md-4 col-xxl-2" role="tablist">
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start active" id="btabs-vertical-info-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-home" role="tab" aria-controls="btabs-vertical-info-home" aria-selected="true">
              <i class="fa fa-fw fa-home opacity-50 me-1 d-none d-sm-inline-block"></i>
              <span>Home</span>
              <span class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2">
                Check out your main activity and any pending notifications
              </span>
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical-info-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-profile" role="tab" aria-controls="btabs-vertical-info-profile" aria-selected="false">
              <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i>
              <span>Profile</span>
              <span class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2">
                Update your public information and promote your projects
              </span>
            </button>
          </li>
          <li class="nav-item d-md-flex flex-md-column">
            <button class="nav-link text-md-start" id="btabs-vertical-info-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-settings" role="tab" aria-controls="btabs-vertical-info-settings" aria-selected="false">
              <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i>
              <span>Settings</span>
              <span class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2">
                Update your email, password and set up your recovery options
              </span>
            </button>
          </li>
        </ul>
        <div class="tab-content col-md-8 col-xxl-10">
          <div class="block-content tab-pane active" id="btabs-vertical-info-home" role="tabpanel" aria-labelledby="btabs-vertical-info-home-tab" tabindex="0">
            <h4 class="fw-semibold">Home Content</h4>
            <p class="fs-sm">
              Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
            </p>
            <p class="fs-sm">
              Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
            </p>
            <p class="fs-sm">
              Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical-info-profile" role="tabpanel" aria-labelledby="btabs-vertical-info-profile-tab" tabindex="0">
            <h4 class="fw-semibold">Profile Content</h4>
            <p class="fs-sm">
              Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
            </p>
            <p class="fs-sm">
              Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
            </p>
            <p class="fs-sm">
              Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
            </p>
          </div>
          <div class="block-content tab-pane" id="btabs-vertical-info-settings" role="tabpanel" aria-labelledby="btabs-vertical-info-settings-tab" tabindex="0">
            <h4 class="fw-semibold">Settings Content</h4>
            <p class="fs-sm">
              Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
            </p>
            <p class="fs-sm">
              Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
            </p>
            <p class="fs-sm">
              Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
            </p>
          </div>
        </div>
      </div>
      <!-- END Vertical Block Tabs Default Style With Extra Info -->
    </div>
  </div>
  <!-- END Vertical Block Tabs -->
  
  <!-- Block Tabs -->
  <h2 class="content-heading">Block Tabs</h2>
  <div class="row">
    <div class="col-lg-6">
      <!-- Block Tabs Default Style -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-static-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-settings" role="tab" aria-controls="btabs-static-settings" aria-selected="false">
              <i class="si si-settings"></i>
              <span class="visually-hidden">Settings</span>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabs-static-home" role="tabpanel" aria-labelledby="btabs-static-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-static-profile" role="tabpanel" aria-labelledby="btabs-static-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-static-settings" role="tabpanel" aria-labelledby="btabs-static-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Default Style -->

      <!-- Block Tabs Alternative Style -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-alt-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-home" role="tab" aria-controls="btabs-alt-static-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-alt-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-profile" role="tab" aria-controls="btabs-alt-static-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-alt-static-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static-settings" role="tab" aria-controls="btabs-alt-static-settings" aria-selected="false">
              <i class="si si-settings"></i>
              <span class="visually-hidden">Settings</span>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabs-alt-static-home" role="tabpanel" aria-labelledby="btabs-alt-static-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-alt-static-profile" role="tabpanel" aria-labelledby="btabs-alt-static-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-alt-static-settings" role="tabpanel" aria-labelledby="btabs-alt-static-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Alternative Style -->
    </div>
    <div class="col-lg-6">
      <!-- Block Tabs Default Style (Right) -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block justify-content-end" role="tablist">
          <li class="nav-item me-auto">
            <button class="nav-link" id="btabs-static2-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-static2-settings" role="tab" aria-controls="btabs-static2-settings" aria-selected="false">
              <i class="si si-settings"></i>
              <span class="visually-hidden">Settings</span>
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-static2-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static2-profile" role="tab" aria-controls="btabs-static2-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item">
            <button class="nav-link active" id="btabs-static2-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static2-home" role="tab" aria-controls="btabs-static2-home" aria-selected="true">Home</button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabs-static2-home" role="tabpanel" aria-labelledby="btabs-static2-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-static2-profile" role="tabpanel" aria-labelledby="btabs-static2-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-static2-settings" role="tabpanel" aria-labelledby="btabs-static2-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Default Style (Right) -->

      <!-- Block Tabs Alternative Style (Right) -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-alt justify-content-end" role="tablist">
          <li class="nav-item me-auto">
            <button class="nav-link" id="btabs-alt-static2-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static2-settings" role="tab" aria-controls="btabs-alt-static2-settings" aria-selected="false">
              <i class="si si-settings"></i>
              <span class="visually-hidden">Settings</span>
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-alt-static2-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static2-profile" role="tab" aria-controls="btabs-alt-static2-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item">
            <button class="nav-link active" id="btabs-alt-static2-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-alt-static2-home" role="tab" aria-controls="btabs-alt-static2-home" aria-selected="true">Home</button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabs-alt-static2-home" role="tabpanel" aria-labelledby="btabs-alt-static2-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-alt-static2-profile" role="tabpanel" aria-labelledby="btabs-alt-static2-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabs-alt-static2-settings" role="tabpanel" aria-labelledby="btabs-alt-static2-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Alternative Style (Right) -->
    </div>
  </div>
  <!-- END Block Tabs -->

  <!-- Block Tabs With Options -->
  <h2 class="content-heading">Block Tabs With Options</h2>
  <div class="row">
    <div class="col-lg-6">
      <!-- Block Tabs With Options Default Style -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block align-items-center" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <div class="block-options ps-3 pe-2">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                <i class="si si-close"></i>
              </button>
            </div>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabswo-static-home" role="tabpanel" aria-labelledby="btabswo-static-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs With Options Default Style -->

      <!-- Block Tabs With Button Options Default Style -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block align-items-center" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabswob-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-home" role="tab" aria-controls="btabswob-static-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabswob-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-profile" role="tab" aria-controls="btabswob-static-home" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <div class="btn-group btn-group-sm pe-2">
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-undo"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-redo"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-pencil-alt"></i>
              </button>
              <div class="btn-group btn-group-sm" role="group">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="btnGroupTabs1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="btnGroupTabs1">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell me-1"></i> News
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
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabswob-static-home" role="tabpanel" aria-labelledby="btabswob-static-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabswob-static-profile" role="tabpanel" aria-labelledby="btabswob-static-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs With Button Options Default Style -->
    </div>
    <div class="col-lg-6">
      <!-- Block Tabs With Options Default Style (Right) -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block justify-content-end align-items-center" role="tablist">
          <li class="nav-item me-auto">
            <div class="block-options ps-2 pe-3">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                <i class="si si-close"></i>
              </button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            </div>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabswo-static2-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static2-profile" role="tab" aria-controls="btabswo-static2-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item">
            <button class="nav-link active" id="btabswo-static2-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static2-home" role="tab" aria-controls="btabswo-static2-home" aria-selected="true">Home</button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabswo-static2-home" role="tabpanel" aria-labelledby="btabswo-static2-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabswo-static2-profile" role="tabpanel" aria-labelledby="btabswo-static2-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs With Options Default Style (Right) -->

      <!-- Block Tabs With Button Options Default Style (Right) -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block justify-content-end align-items-center" role="tablist">
          <li class="nav-item me-auto">
            <div class="btn-group btn-group-sm ps-2">
              <div class="btn-group btn-group-sm" role="group">
                <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="btnGroupTabs2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More
                </button>
                <div class="dropdown-menu fs-sm" aria-labelledby="btnGroupTabs2">
                  <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-bell me-1"></i> News
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
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-undo"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-redo"></i>
              </button>
              <button type="button" class="btn btn-alt-secondary">
                <i class="fa fa-fw fa-pencil-alt"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabswob-static-profile2-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-profile2" role="tab" aria-controls="btabswob-static-profile2" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item">
            <button class="nav-link active" id="btabswob-static-home2-tab" data-bs-toggle="tab" data-bs-target="#btabswob-static-home2" role="tab" aria-controls="btabswob-static-home2" aria-selected="true">Home</button>
          </li>
        </ul>
        <div class="block-content tab-content">
          <div class="tab-pane active" id="btabswob-static-home2" role="tabpanel" aria-labelledby="btabswob-static-home2-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>...</p>
          </div>
          <div class="tab-pane" id="btabswob-static-profile2" role="tabpanel" aria-labelledby="btabswob-static-profile2-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>...</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs With Button Options Default Style (Right) -->
    </div>
  </div>
  <!-- END Block Tabs With Options -->

  <!-- Block Tabs Content Animation -->
  <h2 class="content-heading">Tabs with Animation</h2>
  <div class="row">
    <div class="col-lg-6">
      <!-- Block Tabs Animated Fade -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-animated-fade-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-home" role="tab" aria-controls="btabs-animated-fade-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-animated-fade-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-profile" role="tab" aria-controls="btabs-animated-fade-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-animated-fade-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-settings" role="tab" aria-controls="btabs-animated-fade-settings" aria-selected="false">
              <i class="si si-settings"></i>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
          <div class="tab-pane fade show active" id="btabs-animated-fade-home" role="tabpanel" aria-labelledby="btabs-animated-fade-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>Content fades in..</p>
          </div>
          <div class="tab-pane fade" id="btabs-animated-fade-profile" role="tabpanel" aria-labelledby="btabs-animated-fade-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>Content fades in..</p>
          </div>
          <div class="tab-pane fade" id="btabs-animated-fade-settings" role="tabpanel" aria-labelledby="btabs-animated-fade-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>Content fades in..</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Animated Fade -->

      <!-- Block Tabs Animated Slide Left -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-animated-slideleft-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideleft-home" role="tab" aria-controls="btabs-animated-slideleft-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideleft-profile" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-animated-slideleft-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideleft-settings" role="tab" aria-controls="btabs-animated-slideleft-settings" aria-selected="false">
              <i class="si si-settings"></i>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
          <div class="tab-pane fade fade-left show active" id="btabs-animated-slideleft-home" role="tabpanel" aria-labelledby="btabs-animated-slideleft-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>Content slides in to the left..</p>
          </div>
          <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-profile" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>Content slides in to the left..</p>
          </div>
          <div class="tab-pane fade fade-left" id="btabs-animated-slideleft-settings" role="tabpanel" aria-labelledby="btabs-animated-slideleft-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>Content slides in to the left..</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Animated Slide Left -->
    </div>
    <div class="col-lg-6">
      <!-- Block Tabs Animated Slide Up -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-animated-slideup-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideup-home" role="tab" aria-controls="btabs-animated-slideup-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-animated-slideup-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideup-profile" role="tab" aria-controls="btabs-animated-slideup-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-animated-slideup-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideup-settings" role="tab" aria-controls="btabs-animated-slideup-settings" aria-selected="false">
              <i class="si si-settings"></i>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
          <div class="tab-pane fade fade-up show active" id="btabs-animated-slideup-home" role="tabpanel" aria-labelledby="btabs-animated-slideup-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>Content slides up..</p>
          </div>
          <div class="tab-pane fade fade-up" id="btabs-animated-slideup-profile" role="tabpanel" aria-labelledby="btabs-animated-slideup-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>Content slides up..</p>
          </div>
          <div class="tab-pane fade fade-up" id="btabs-animated-slideup-settings" role="tabpanel" aria-labelledby="btabs-animated-slideup-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>Content slides up..</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Animated Slide Up -->

      <!-- Block Tabs Animated Slide Right -->
      <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
          <li class="nav-item">
            <button class="nav-link active" id="btabs-animated-slideright-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideright-home" role="tab" aria-controls="btabs-animated-slideright-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="btabs-animated-slideright-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideright-profile" role="tab" aria-controls="btabs-animated-slideright-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item ms-auto">
            <button class="nav-link" id="btabs-animated-slideright-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-slideright-settings" role="tab" aria-controls="btabs-animated-slideright-settings" aria-selected="false">
              <i class="si si-settings"></i>
            </button>
          </li>
        </ul>
        <div class="block-content tab-content overflow-hidden">
          <div class="tab-pane fade fade-right show active" id="btabs-animated-slideright-home" role="tabpanel" aria-labelledby="btabs-animated-slideright-home-tab" tabindex="0">
            <h4 class="fw-normal">Home Content</h4>
            <p>Content slides in to the right..</p>
          </div>
          <div class="tab-pane fade fade-right" id="btabs-animated-slideright-profile" role="tabpanel" aria-labelledby="btabs-animated-slideright-profile-tab" tabindex="0">
            <h4 class="fw-normal">Profile Content</h4>
            <p>Content slides in to the right..</p>
          </div>
          <div class="tab-pane fade fade-right" id="btabs-animated-slideright-settings" role="tabpanel" aria-labelledby="btabs-animated-slideright-settings-tab" tabindex="0">
            <h4 class="fw-normal">Settings Content</h4>
            <p>Content slides in to the right..</p>
          </div>
        </div>
      </div>
      <!-- END Block Tabs Animated Slide Right -->
    </div>
  </div>
  <!-- END Block Tabs Content Animation -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
