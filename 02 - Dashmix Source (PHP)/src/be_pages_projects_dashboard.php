<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo13@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-full">
      <div class="d-flex justify-content-between align-items-center">
        <h1 class="flex-grow-1 fs-2 text-white my-2">
          <i class="fa fa-boxes text-white-50 me-1"></i> All Projects
        </h1>
        <a class="btn btn-primary my-2" href="be_pages_projects_create.php">
          <i class="fa fa-fw fa-plus opacity-50"></i>
          <span class="d-none d-sm-inline ms-1">New Project</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <form action="be_pages_projects_dashboard.php" method="POST" onsubmit="return false;">
    <div class="row items-push">
      <div class="col-sm-6 col-xl-3">
        <div class="input-group">
          <span class="input-group-text">
            <i class="fa fa-search"></i>
          </span>
          <input type="text" class="form-control border-start-0" id="dm-projects-search" name="dm-projects-search" placeholder="Search Projects..">
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 offset-xl-6">
        <select class="form-select" id="dm-projects-filter" name="dm-projects-filter">
          <option value="all">All (6)</option>
          <option value="active">Active (3)</option>
          <option value="pending">Pending (1)</option>
          <option value="planning">Planning (1)</option>
          <option value="canceled">Canceled (1)</option>
        </select>
      </div>
    </div>
  </form>
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Project #1 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> September 25
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">example.com</a>
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
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(3, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #1 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #2 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> October 12
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">Acme Inc</a>
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
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(5, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #2 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #3 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> November 9
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">Store LTD</a>
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
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(13, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(10, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(3, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #3 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #4 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> October 22
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">Social Inc</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">App Development</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(8, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(7, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(15, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #4 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #5 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> April 15
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">Demo Inc</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">Marketing</h4>
          <div class="push">
            <span class="badge bg-success text-uppercase fw-bold py-2 px-3">Active</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(14, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(9, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(1, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #5 -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Project #6 -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header">
          <div class="flex-grow-1 text-muted fs-sm fw-semibold">
            <i class="fa fa-clock me-1"></i> June 29
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
        <div class="block-content bg-body-light text-center">
          <h3 class="fs-4 fw-bold mb-1">
            <a href="be_pages_projects_tasks.php">Inspired Inc</a>
          </h3>
          <h4 class="fs-6 text-muted mb-3">Web Development</h4>
          <div class="push">
            <span class="badge bg-danger text-uppercase fw-bold py-2 px-3">Canceled</span>
          </div>
        </div>
        <div class="block-content text-center">
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(11, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(4, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(14, '', 48); ?>
          </a>
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(16, '', 48); ?>
          </a>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="be_pages_projects_tasks.php">
                <i class="fa fa-eye me-1 opacity-50"></i> View
              </a>
            </div>
            <div class="col-6">
              <a class="btn w-100 btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-archive me-1 opacity-50"></i> Archive
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Project #6 -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>