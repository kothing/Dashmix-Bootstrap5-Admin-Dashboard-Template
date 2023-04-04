<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Various</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Widgets</li>
          <li class="breadcrumb-item active" aria-current="page">Various</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Weather -->
  <h2 class="content-heading">Weather</h2>
  <div class="row">
    <div class="col-xl-8">
      <!-- Multiple Days -->
      <div class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');">
        <div class="block-content d-flex justify-content-between pt-4 pb-7 text-white bg-black-50">
          <div>
            <p class="fs-3 fw-semibold mb-0">
              Flachau, Austria
            </p>
            <p class="text-white-75 mb-0">
              Mostly Cloudy
            </p>
          </div>
          <p class="fs-1 mb-0 text-end">
            <strong>12</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
        <div class="block-content p-0 bg-body-light">
          <div class="row g-0 text-center">
            <div class="col-6 col-xl-2 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Mon
              </p>
              <div class="fs-lg">
                <strong>11&deg; C</strong><br>
                <small class="text-muted">Sunny</small>
              </div>
            </div>
            <div class="col-6 col-xl-2 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Tue
              </p>
              <div class="fs-lg">
                <strong>14&deg; C</strong><br>
                <small class="text-muted">Sunny</small>
              </div>
            </div>
            <div class="col-6 col-xl-2 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Wed
              </p>
              <div class="fs-lg">
                <strong>15&deg; C</strong><br>
                <small class="text-muted">Cloudy</small>
              </div>
            </div>
            <div class="col-6 col-xl-2 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Thu
              </p>
              <div class="fs-lg">
                <strong>6&deg; C</strong><br>
                <small class="text-muted">Cloudy</small>
              </div>
            </div>
            <div class="col-6 col-xl-2 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Fri
              </p>
              <div class="fs-lg">
                <strong>8&deg; C</strong><br>
                <small class="text-muted">Rainy</small>
              </div>
            </div>
            <div class="col-6 col-xl-2 border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Sat
              </p>
              <div class="fs-lg">
                <strong>13&deg; C</strong><br>
                <small class="text-muted">Sunny</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Multiple Days -->
    </div>
    <div class="col-xl-4">
      <!-- Two Days -->
      <div class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo4.jpg');">
        <div class="block-content d-flex justify-content-between pt-4 pb-7 text-white bg-primary-op">
          <div>
            <p class="fs-3 fw-semibold mb-0">
              London, UK
            </p>
            <p class="text-white-75 mb-0">
              Mostly Sunny
            </p>
          </div>
          <p class="fs-1 mb-0 text-end">
            <strong>19</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
        <div class="block-content p-0 bg-body-light">
          <div class="row g-0 text-center">
            <div class="col-6 border-end border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Mon
              </p>
              <div class="fs-lg">
                <strong>15&deg; C</strong><br>
                <small class="text-muted">Cloudy</small>
              </div>
            </div>
            <div class="col-6 border-bottom p-3">
              <p class="fs-sm fw-semibold text-uppercase mb-1">
                Tue
              </p>
              <div class="fs-lg">
                <strong>14&deg; C</strong><br>
                <small class="text-muted">Rainy</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Two Days -->
    </div>
    <div class="col-xl-4">
      <!-- Single Day #1 -->
      <div class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');">
        <div class="block-content d-flex justify-content-between align-items-center py-5 text-white bg-black-25">
          <div>
            <p class="fs-4 fw-bold mb-0">
              New York, USA
            </p>
            <p class="fs-lg mb-0">
              <strong>15</strong>&deg; <span class="text-white-75">C</span>
            </p>
          </div>
          <p class="text-end mb-0">
            <i class="fa fa-sun fa-3x"></i>
          </p>
        </div>
      </div>
      <!-- END Single Day #1 -->
    </div>
    <div class="col-xl-4">
      <!-- Single Day #2 -->
      <div class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo2.jpg');">
        <div class="block-content d-flex justify-content-between align-items-center py-5 text-white bg-black-50">
          <div>
            <p class="fs-4 fw-bold mb-0">
              Oslo, Norway
            </p>
            <p class="fs-lg mb-0">
              <strong>-1</strong>&deg; <span class="text-white-75">C</span>
            </p>
          </div>
          <p class="text-end mb-0">
            <i class="fa fa-snowflake fa-3x"></i>
          </p>
        </div>
      </div>
      <!-- END Single Day #2 -->
    </div>
    <div class="col-xl-4">
      <!-- Single Day #3 -->
      <div class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo6.jpg');">
        <div class="block-content d-flex justify-content-between align-items-center py-5 text-white bg-black-25">
          <div>
            <p class="fs-4 fw-bold mb-0">
              Hanoi, Vietnam
            </p>
            <p class="fs-lg mb-0">
              <strong>18</strong>&deg; <span class="text-white-75">C</span>
            </p>
          </div>
          <p class="text-end mb-0">
            <i class="fa fa-cloud-sun-rain fa-3x"></i>
          </p>
        </div>
      </div>
      <!-- END Single Day #3 -->
    </div>
  </div>
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <!-- Single Day #4 -->
      <div class="block block-rounded bg-xpro text-white h-100 mb-0">
        <div class="block-content text-center py-5">
          <p class="mb-4">
            <i class="fa fa-cloud-sun-rain fa-3x"></i>
          </p>
          <p class="fs-4 fw-bold mb-0">
            Auckland, NZ
          </p>
          <p class="fs-lg mb-0">
            <strong>18</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
      </div>
      <!-- END Single Day #4 -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Single Day #5 -->
      <div class="block block-rounded bg-xsmooth text-white h-100 mb-0">
        <div class="block-content text-center py-5">
          <p class="mb-4">
            <i class="fa fa-cloud-moon-rain fa-3x"></i>
          </p>
          <p class="fs-4 fw-bold mb-0">
            Ho Chi Minh, Vietnam
          </p>
          <p class="fs-lg mb-0">
            <strong>38</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
      </div>
      <!-- END Single Day #5 -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Single Day #6 -->
      <div class="block block-rounded bg-xdream text-white h-100 mb-0">
        <div class="block-content text-center py-5">
          <p class="mb-4">
            <i class="fa fa-cloud-sun-rain fa-3x"></i>
          </p>
          <p class="fs-4 fw-bold mb-0">
            Bangkok, Thailand
          </p>
          <p class="fs-lg mb-0">
            <strong>34</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
      </div>
      <!-- END Single Day #6 -->
    </div>
    <div class="col-md-6 col-xl-3">
      <!-- Single Day #7 -->
      <div class="block block-rounded bg-xinspire text-white h-100 mb-0">
        <div class="block-content text-center py-5">
          <p class="mb-4">
            <i class="fa fa-cloud-showers-heavy fa-3x"></i>
          </p>
          <p class="fs-4 fw-bold mb-0">
            Singapore
          </p>
          <p class="fs-lg mb-0">
            <strong>28</strong>&deg; <span class="text-white-75">C</span>
          </p>
        </div>
      </div>
      <!-- END Single Day #7 -->
    </div>
  </div>
  <!-- END Weather -->

  <!-- Projects -->
  <h2 class="content-heading">Projects</h2>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #1 -->
      <a class="block block-rounded block-link-shadow h-100 mb-0" href="javascript:void(0)">
        <div class="block-content p-0 progress" style="height: 2px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0">
              InspireX
            </p>
            <p class="text-muted mb-0">
              Web App
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-rocket text-muted"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #1 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #2 -->
      <a class="block block-rounded block-link-shadow h-100 mb-0" href="javascript:void(0)">
        <div class="block-content p-0 progress" style="height: 2px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0">
              example.com
            </p>
            <p class="text-muted mb-0">
              Logo Design
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-brush text-muted"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #2 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #3 -->
      <a class="block block-rounded block-link-shadow h-100 mb-0" href="javascript:void(0)">
        <div class="block-content p-0 progress" style="height: 2px;">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0">
              DashPro
            </p>
            <p class="text-muted mb-0">
              UI Design
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-vector-square text-muted"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #3 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #4 -->
      <a class="block block-rounded block-transparent block-link-pop bg-gd-fruit h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0 text-white">
              InspireX
            </p>
            <p class="text-white-75 mb-0">
              Web App
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-rocket text-white-50"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #4 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #5 -->
      <a class="block block-rounded block-transparent block-link-pop bg-gd-leaf h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0 text-white">
              example.com
            </p>
            <p class="text-white-75 mb-0">
              Logo Design
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-brush text-white-50"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #5 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project Overview #6 -->
      <a class="block block-rounded block-transparent block-link-pop bg-gd-sea h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0 text-white">
              DashPro
            </p>
            <p class="text-white-75 mb-0">
              UI Design
            </p>
          </div>
          <div class="ms-3 item">
            <i class="fa fa-2x fa-vector-square text-white-50"></i>
          </div>
        </div>
      </a>
      <!-- END Project Overview #6 -->
    </div>
  </div>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Detailed Project #1 -->
      <div class="block block-rounded block-fx-pop h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> July 10
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="be_pages_projects_edit.php">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Project
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">example.com</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">UX/UI Design</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(2, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(3, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 text-muted"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Detailed Project #1 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Detailed Project #2 -->
      <div class="block block-rounded block-fx-pop h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> June 3
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="be_pages_projects_edit.php">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Project
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Acme Inc</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">Logo Design</h4>
          <div class="push">
            <span class="badge bg-warning text-uppercase fw-bold py-2 px-3">Pending</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(5, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 text-muted"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Detailed Project #2 -->
    </div>
    <div class="col-xl-4">
      <!-- Detailed Project #3 -->
      <div class="block block-rounded block-fx-pop h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> April 7
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-users me-1"></i> People
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bell me-1"></i> Alerts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-check-double me-1"></i> Tasks
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="be_pages_projects_edit.php">
                  <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Project
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content bg-body text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="javascript:void(0)">Store LTD</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">Web Development</h4>
          <div class="push">
            <span class="badge bg-info text-uppercase fw-bold py-2 px-3">Planning</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(6, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(13, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 48); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(3, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 text-muted"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Detailed Project #3 -->
    </div>
  </div>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Alternative Project #1 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-content bg-gd-primary py-6 text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a class="text-white link-fx" href="javascript:void(0)">Store LTD</a>
          </h3>
          <h4 class="fs-6 text-white-75 mb-0">Web Development</h4>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <span class="badge bg-info text-uppercase fw-bold py-2 px-3">Planning</span>
        </div>
        <div class="block-content block-content-full text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(6, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(13, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 32); ?>
          </a>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-user-plus me-1 text-muted"></i> Add People
              </a>
            </div>
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Alternative Project #1 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Alternative Project #2 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-content bg-gd-dusk py-6 text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a class="text-white link-fx" href="javascript:void(0)">Acme Inc</a>
          </h3>
          <h4 class="fs-6 text-white-75 mb-0">Logo Design</h4>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <span class="badge bg-warning text-uppercase fw-bold py-2 px-3">Pending</span>
        </div>
        <div class="block-content block-content-full text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(1, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(12, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(5, '', 32); ?>
          </a>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-user-plus me-1 text-muted"></i> Add People
              </a>
            </div>
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Alternative Project #2 -->
    </div>
    <div class="col-xl-4">
      <!-- Alternative Project #3 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-content bg-gd-lake py-6 text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a class="text-white link-fx" href="javascript:void(0)">example.com</a>
          </h3>
          <h4 class="fs-6 text-white-75 mb-0">UX/UI Design</h4>
        </div>
        <div class="block-content block-content-full text-center bg-body-light">
          <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
        </div>
        <div class="block-content block-content-full text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(6, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(3, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(14, '', 32); ?>
          </a>
          <a class="img-link my-1 me-1 ms-n3" href="javascript:void(0)">
            <?php $dm->get_avatar(15, '', 32); ?>
          </a>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-user-plus me-1 text-muted"></i> Add People
              </a>
            </div>
            <div class="col-6">
              <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-eye me-1 text-muted"></i> View
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Alternative Project #3 -->
    </div>
  </div>
  <!-- END Projects -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
