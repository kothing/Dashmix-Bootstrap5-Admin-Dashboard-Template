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
          Acme Inc <span class="fs-base fw-medium text-white-75">Web Development</span>
        </h1>
        <a class="btn btn-dark my-2" href="be_pages_projects_edit.php">
          <i class="fa fa-fw fa-pencil-alt opacity-50"></i>
          <span class="d-none d-sm-inline ms-1">Edit Project</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="row g-0 flex-md-grow-1">
  <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
    <div class="content">
      <!-- Toggle Side Content -->
      <div class="d-md-none push">
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn w-100 btn-hero btn-dark" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
          Project Details
        </button>
      </div>
      <!-- END Toggle Side Content -->

      <!-- Side Content -->
      <div id="side-content" class="d-none d-md-block push">
        <!-- Completion -->
        <h2 class="h4 fw-normal mb-3">Completion</h2>
        <div class="progress push">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 34%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <span class="fs-sm fw-semibold">34%</span>
          </div>
        </div>
        <!-- END Completion -->

        <!-- About -->
        <h2 class="h4 fw-normal my-3">About</h2>
        <p class="mb-2">
          This is an important project where we should focus our main efforts for the next few years.
        </p>
        <p class="text-muted">
          November 6, 2023
        </p>
        <!-- END About -->

        <!-- People -->
        <h2 class="h4 fw-normal my-3">People</h2>
        <p>
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
          <a class="img-link m-1" href="javascript:void(0)">
            <?php $dm->get_avatar(12, '', 48); ?>
          </a>
        </p>
        <!-- END People -->
      </div>
      <!-- END Side Content -->
    </div>
  </div>
  <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
    <!-- Main Content -->
    <div class="content content-full">
      <!-- Tasks, custom functionality is initialized in js/pages/be_pages_projects_tasks.min.js which was auto compiled from _js/pages/be_pages_projects_tasks.js -->
      <div class="js-tasks">
        <!-- Add task -->
        <form id="js-task-form" action="be_pages_projects_tasks.php" method="POST">
          <input class="form-control form-control-lg fs-base" type="text" id="js-task-input" name="js-task-input" placeholder="Add a task and press enter..">
        </form>
        <!-- END Add task -->

        <!-- Tasks List -->
        <h2 class="content-heading pb-0 mb-3 border-0 d-flex align-items-top space-x-2">
          <span>Active</span>
          <span class="fs-base">
            <span class="js-task-badge badge rounded-pill bg-primary animated fadeIn"></span>
          </span>
        </h2>
        <div class="js-task-list">
          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="9" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id9" name="tasks-cb-id9">
                    <label class="form-check-label" for="tasks-cb-id9"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  Backend framework
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="8" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id8" name="tasks-cb-id8">
                    <label class="form-check-label" for="tasks-cb-id8"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  Customer on-boarding process
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="7" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id7" name="tasks-cb-id7">
                    <label class="form-check-label" for="tasks-cb-id7"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  Logo design
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="6" data-task-completed="false" data-task-starred="false">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id6" name="tasks-cb-id6">
                    <label class="form-check-label" for="tasks-cb-id6"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  Website Marketing
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->
        </div>
        <!-- END Tasks List -->

        <!-- Starred Tasks List -->
        <h2 class="content-heading pb-0 mb-3 border-0 d-flex align-items-top space-x-2">
          <span>Starred</span>
          <span class="fs-base">
            <span class="js-task-badge-starred badge rounded-pill bg-primary animated fadeIn"></span>
          </span>
        </h2>
        <div class="js-task-list-starred">
          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="5" data-task-completed="false" data-task-starred="true">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id5" name="tasks-cb-id5">
                    <label class="form-check-label" for="tasks-cb-id5"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  Brand Identity
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="fa fa-star"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->

          <!-- Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="4" data-task-completed="false" data-task-starred="true">
            <table class="table table-borderless table-vcenter mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id4" name="tasks-cb-id4">
                    <label class="form-check-label" for="tasks-cb-id4"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  UI design and implementation
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="fa fa-star"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Task -->
        </div>
        <!-- END Starred Tasks List -->

        <!-- Tasks List Completed -->
        <h2 class="content-heading pb-0 mb-3 border-0 d-flex align-items-top space-x-2">
          <span>Completed</span>
          <span class="fs-base">
            <span class="js-task-badge-completed badge rounded-pill bg-primary animated fadeIn"></span>
          </span>
        </h2>
        <div class="js-task-list-completed">
          <!-- Completed Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="3" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter bg-body mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id3" name="tasks-cb-id3" checked>
                    <label class="form-check-label" for="tasks-cb-id3"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  <del>Website and App Wireframes</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->

          <!-- Completed Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="2" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter bg-body mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id2" name="tasks-cb-id2" checked>
                    <label class="form-check-label" for="tasks-cb-id2"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  <del>Contract Signing</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->

          <!-- Completed Task -->
          <div class="js-task block block-rounded mb-2 animated fadeIn" data-task-id="1" data-task-completed="true" data-task-starred="false">
            <table class="table table-borderless table-vcenter bg-body mb-0">
              <tr>
                <td class="text-center pe-0" style="width: 38px;">
                  <div class="js-task-status form-check">
                    <input type="checkbox" class="form-check-input" id="tasks-cb-id1" name="tasks-cb-id1" checked>
                    <label class="form-check-label" for="tasks-cb-id1"></label>
                  </div>
                </td>
                <td class="js-task-content fw-semibold ps-0">
                  <del>Explore ideas</del>
                </td>
                <td class="text-end" style="width: 100px;">
                  <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                    <i class="far fa-star fa-fw"></i>
                  </button>
                  <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                    <i class="fa fa-times fa-fw"></i>
                  </button>
                </td>
              </tr>
            </table>
          </div>
          <!-- END Completed Task -->
        </div>
        <!-- END Tasks List Completed -->
      </div>
      <!-- END Tasks -->
    </div>
    <!-- END Main Content -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Tasks demo functionality) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_projects_tasks.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>