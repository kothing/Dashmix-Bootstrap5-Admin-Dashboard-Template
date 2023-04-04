<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Navigation</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Navigation</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Breadcrumb -->
  <h2 class="content-heading">Breadcrumb</h2>
  <div class="row items-push">
    <div class="col-xl-6">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
        </div>
        <div class="block-content">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb push">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">User</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Settings</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Billing</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Alternative</h3>
        </div>
        <div class="block-content">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt push">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">User</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Settings</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Billing</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- END Breadcrumb -->

  <!-- List Groups -->
  <h2 class="content-heading">List Groups</h2>
  <div class="row">
    <div class="col-xl-4">
      <!-- Default List Groups -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default Style</h3>
        </div>
        <div class="block-content">
          <ul class="list-group push">
            <li class="list-group-item">This is a simple</li>
            <li class="list-group-item">List Group</li>
            <li class="list-group-item">For showcasing</li>
            <li class="list-group-item">A list of items</li>
          </ul>
        </div>
      </div>
      <!-- END Default List Groups -->
    </div>
    <div class="col-xl-4">
      <!-- With Badges -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Badges</h3>
        </div>
        <div class="block-content">
          <ul class="list-group push">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              This is a simple
              <span class="badge rounded-pill bg-info">5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              List Group
              <span class="badge rounded-pill bg-success">4</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              For showcasing
              <span class="badge rounded-pill bg-danger">8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A list of items
              <span class="badge rounded-pill bg-warning">7</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- END With Badges -->
    </div>
    <div class="col-xl-4">
      <!-- With Links -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Links</h3>
        </div>
        <div class="block-content">
          <div class="list-group push">
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" href="javascript:void(0)">
              This is a simple
              <span class="badge rounded-pill bg-black-50">1</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
              List Group
              <span class="badge rounded-pill bg-black-50">2</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled" href="javascript:void(0)">
              For showcasing
            </a>
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
              A list of items
              <span class="badge rounded-pill bg-black-50">7</span>
            </a>
          </div>
        </div>
      </div>
      <!-- END With Links -->
    </div>
  </div>
  <!-- END List Groups -->

  <!-- Navigation Pills -->
  <h2 class="content-heading">Navigation Pills</h2>
  <div class="row items-push">
    <div class="col-xl-6">
      <!-- Default Pills -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default Style</h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END Default Pills -->
    </div>
    <div class="col-xl-6">
      <!-- With Icons -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Icons</h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">
                <i class="fa fa-fw fa-home me-1"></i> Home
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-pencil-alt me-1"></i> Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-wrench"></i>
              </a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active" href="javascript:void(0)">
                <i class="fa fa-fw fa-home me-1"></i> Home
              </a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-pencil-alt me-1"></i> Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-fw fa-wrench me-1"></i> Tools
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END With Icons -->
    </div>
    <div class="col-xl-6">
      <!-- With Badges -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">With Badges</h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills push">
            <li class="nav-item me-1">
              <a class="nav-link active d-flex align-items-center" href="javascript:void(0)">
                Home
                <span class="badge rounded-pill bg-black-50 ms-1">3</span>
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link d-flex align-items-center" href="javascript:void(0)">
                Settings
                <span class="badge rounded-pill bg-black-50 ms-1">1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-wrench"></i>
              </a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column push">
            <li class="nav-item mb-1">
              <a class="nav-link active d-flex justify-content-between align-items-center" href="javascript:void(0)">
                Home
                <span class="badge rounded-pill bg-black-50 ms-1">3</span>
              </a>
            </li>
            <li class="nav-item mb-1">
              <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                Settings
                <span class="badge rounded-pill bg-black-50 ms-1">1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END With Badges -->
    </div>
    <div class="col-xl-6">
      <!-- Justified -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Justified</h3>
        </div>
        <div class="block-content">
          <ul class="nav nav-pills nav-justified push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Profile</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Billing</a>
            </li>
          </ul>
          <ul class="nav nav-pills nav-justified push">
            <li class="nav-item me-1">
              <a class="nav-link active" href="javascript:void(0)">Home</a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Tools</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- END Justified -->
    </div>
  </div>
  <!-- END Navigation Pills -->

  <!-- Pagination -->
  <h2 class="content-heading">Pagination</h2>
  <div class="row items-push">
    <div class="col-xl-6">
      <!-- Default Pagination -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Default</h3>
        </div>
        <div class="block-content">
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- END Default Pagination -->
    </div>
    <div class="col-xl-6">
      <!-- Disabled and Active States -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Disabled and Active States</h3>
        </div>
        <div class="block-content">
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- END Disabled and Active States -->
    </div>
    <div class="col-xl-12">
      <!-- Alignment -->
      <div class="block block-rounded h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Alignment</h3>
        </div>
        <div class="block-content">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                  <span class="visually-hidden">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                  <span class="visually-hidden">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- END Alignment -->
    </div>
  </div>
  <!-- END Pagination -->

  <!-- User List -->
  <h2 class="content-heading">User List</h2>
  <div class="row items-push">
    <div class="col-xl-6">
      <div class="block h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Spacy</h3>
        </div>
        <div class="block-content">
          <ul class="nav-items push">
            <li>
              <a class="d-flex py-3" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fs-sm text-muted">Full Stack Developer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-3" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                  <?php $dm->get_avatar(0, 'male', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Photographer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-3" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                  <?php $dm->get_avatar(0, 'male', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                  <div class="fw-normal fs-sm text-muted">UI Designer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-3" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Web Designer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-3" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-bottom">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Writer</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="block h-100 mb-0">
        <div class="block-header block-header-default">
          <h3 class="block-title">Minimal</h3>
        </div>
        <div class="block-content">
          <ul class="nav-items push">
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fs-sm text-muted">Photographer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'male', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Web Designer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fw-normal fs-sm text-muted">UI Designer</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'male', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Copywriter</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'male', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Teacher</div>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex py-2" href="javascript:void(0)">
                <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                  <?php $dm->get_avatar(0, 'female', 48); ?>
                  <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                </div>
                <div class="flex-grow-1">
                  <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                  <div class="fw-normal fs-sm text-muted">Subsciber</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- END User List -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
