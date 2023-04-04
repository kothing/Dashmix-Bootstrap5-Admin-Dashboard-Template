<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/messages/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 flex-md-grow-1">
  <div class="col-lg-5 col-xl-3 h100-scroll">
    <div class="content">
      <!-- Toggle Side Content -->
      <div class="row g-sm d-lg-none push">
        <div class="col-12 text-center mb-4">
          <!-- Logo -->
          <a class="fs-lg fw-semibold tracking-wide text-dark" href="index.php">
            Dash<span class="opacity-75">mix</span>
            <span class="fw-normal">Messages</span>
          </a>
          <!-- END Logo -->
        </div>
        <div class="col-6">
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-primary w-100" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-bars opacity-50 me-1"></i> Menu
          </button>
        </div>
        <div class="col-6">
          <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
          <button type="button" class="btn btn-alt-primary w-100" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
            <i class="fa fa-envelope opacity-50 me-1"></i> Messages
          </button>
        </div>
      </div>
      <!-- END Toggle Side Content -->

      <!-- Side Content -->
      <div id="side-content" class="d-none d-lg-block push">
        <!-- Search Messages -->
        <form action="db_messages.php" method="POST" onsubmit="return false;">
          <div class="mb-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Messages..">
              <span class="input-group-text">
                <i class="fa fa-fw fa-search"></i>
              </span>
            </div>
          </div>
        </form>
        <!-- END Search Messages -->

        <!-- Sorting/Filtering -->
        <div class="d-flex justify-content-between mb-2">
          <div class="dropdown">
            <button type="button" class="btn btn-sm btn-link fw-semibold dropdown-toggle" id="inbox-msg-sort" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort by
            </button>
            <div class="dropdown-menu fs-sm" aria-labelledby="inbox-msg-sort">
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-sort-amount-down me-1"></i> Newest
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-sort-amount-up me-1"></i> Oldest
              </a>
            </div>
          </div>
          <div class="dropdown">
            <button type="button" class="btn btn-sm btn-link fw-semibold dropdown-toggle" id="inbox-msg-filter" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter by
            </button>
            <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="inbox-msg-filter">
              <a class="dropdown-item active" href="javascript:void(0)">
                <i class="fa fa-fw fa-asterisk me-1"></i> New
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-certificate me-1"></i> VIP
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-exclamation-circle me-1"></i> Important
              </a>
            </div>
          </div>
        </div>
        <!-- END Sorting/Filtering -->

        <!-- Messages -->
        <div class="list-group fs-sm">
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">1</span>
            <p class="fs-6 fw-bold mb-0">
              Error with modal
            </p>
            <p class="text-muted mb-2">
              There seems to be an issue when opening a modal, could you please check it..
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 3 days ago
            </p>
          </a>
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">2</span>
            <p class="fs-6 fw-bold mb-0">
              Action required
            </p>
            <p class="text-muted mb-2">
              Your account is inactive for a long time and you have to confirm your email once again..
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 1 hour ago
            </p>
          </a>
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">1</span>
            <p class="fs-6 fw-bold mb-0">
              Website Released
            </p>
            <p class="text-muted mb-2">
              Our new website is live, feel free to visit it and let us know what..
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 2 days ago
            </p>
          </a>
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">3</span>
            <p class="fs-6 fw-bold mb-0">
              New Photo Pack
            </p>
            <p class="text-muted mb-2">
              Our new photo pack is now available to go live and we couldn’t be more excited..
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 3 min ago
            </p>
          </a>
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">9</span>
            <p class="fs-6 fw-bold mb-0">
              You have a new message
            </p>
            <p class="text-muted mb-2">
              Hi there, please check your profile, there is a new message waiting for you.
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 4 hours ago
            </p>
          </a>
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-primary m-1 float-end">6</span>
            <p class="fs-6 fw-bold mb-0">
              Best of last week
            </p>
            <p class="text-muted mb-2">
              Last week has been full of new releases and products from indie developers.
            </p>
            <p class="fs-sm text-muted mb-0">
              <strong><?php $dm->get_name(); ?></strong>, 2 days ago
            </p>
          </a>
        </div>
        <!-- END Messages -->
      </div>
      <!-- END Side Content -->
    </div>
  </div>
  <div class="col-lg-7 col-xl-9 h100-scroll bg-body-dark">
    <!-- Main Content -->
    <div class="content">
      <!-- Message -->
      <div class="block block-rounded">
        <div class="block-content block-content-sm block-content-full bg-body-light">
          <div class="d-flex py-3">
            <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-right">
              <?php $dm->get_avatar(0, 'female', 48); ?>
              <i class="far fa-circle text-white overlay-item fs-sm bg-success rounded-circle"></i>
            </div>
            <div class="flex-grow-1">
              <div class="row">
                <div class="col-sm-7">
                  <a class="fw-semibold link-fx" href="javascript:void(0)">Mary Taylor</a>
                  <div class="fs-sm text-muted">m.taylor@example.com</div>
                </div>
                <div class="col-sm-5 d-sm-flex align-items-sm-center">
                  <div class="fs-sm text-muted text-sm-end w-100 mt-2 mt-sm-0">
                    <p class="mb-0">April 2, 2018</p>
                    <p class="mb-0">12:30</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <p>Dear Admin,</p>
          <?php $dm->get_text(); ?>
          <?php $dm->get_text('small'); ?>
          <p>All the best,</p>
          <p>Mary</p>
        </div>
        <div class="block-content bg-body-light">
          <div class="row g-sm">
            <div class="col-4 col-xl-2">
              <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(16, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                  <div class="options-overlay-content">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download"></i>
                    </a>
                  </div>
                </div>
              </div>
              <p class="fs-sm text-muted pt-2">
                <i class="fa fa-paperclip"></i> 1a.jpg (785Kb)
              </p>
            </div>
            <div class="col-4 col-xl-2">
              <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                  <div class="options-overlay-content">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download"></i>
                    </a>
                  </div>
                </div>
              </div>
              <p class="fs-sm text-muted pt-2">
                <i class="fa fa-paperclip"></i> 1b.jpg (685kb)
              </p>
            </div>
            <div class="col-4 col-xl-2">
              <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(9, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                  <div class="options-overlay-content">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download"></i>
                    </a>
                  </div>
                </div>
              </div>
              <p class="fs-sm text-muted pt-2">
                <i class="fa fa-paperclip"></i> 1c.jpg (698kb)
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- END Message -->

      <!-- Reply -->
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.jsCkeditor5()) -->
          <!-- For more info and examples you can check out http://ckeditor.com -->
          <!-- CKEditor 5 Classic Container -->
          <div id="js-ckeditor5-classic"></div>
          <button type="button" class="btn btn-alt-primary mt-2">Send Message</button>
        </div>
      </div>
      <!-- END Reply -->
    </div>
    <!-- END Main Content -->
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/ckeditor5-classic/build/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>Dashmix.helpersOnLoad(['js-ckeditor5']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
