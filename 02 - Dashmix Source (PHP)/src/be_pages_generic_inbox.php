<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_m_content = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row g-0 flex-md-grow-1">
  <div class="col-md-4 col-lg-5 col-xl-3">
    <div class="content">
      <!-- Toggle Side Content -->
      <div class="d-md-none push">
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn w-100 btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
          Inbox Menu
        </button>
      </div>
      <!-- END Toggle Side Content -->

      <!-- Side Content -->
      <div id="side-content" class="d-none d-md-block push">
        <!-- New Message -->
        <button type="button" class="btn w-100 btn-alt-primary mb-3">
          <i class="fa fa-plus opacity-50 me-1"></i> New Message
        </button>
        <!-- END New Message -->

        <!-- Search Messages -->
        <form action="be_pages_generic_inbox.php" method="POST" onsubmit="return false;">
          <div class="mb-4">
            <div class="input-group">
              <input type="text" class="form-control border-0" placeholder="Search Messages..">
              <span class="input-group-text border-0 bg-body-extra-light">
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
                <i class="fa fa-fw fa-archive me-1"></i> Archived
              </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-times-circle me-1"></i> Deleted
              </a>
            </div>
          </div>
        </div>
        <!-- END Sorting/Filtering -->

        <!-- Messages -->
        <div class="list-group fs-sm">
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-dark m-1 float-end">3</span>
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
            <span class="badge rounded-pill bg-dark m-1 float-end">2</span>
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
            <span class="badge rounded-pill bg-dark m-1 float-end">9</span>
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
            <span class="badge rounded-pill bg-dark m-1 float-end">6</span>
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
          <a class="list-group-item list-group-item-action" href="javascript:void(0)">
            <span class="badge rounded-pill bg-dark m-1 float-end">1</span>
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
            <span class="badge rounded-pill bg-dark m-1 float-end">1</span>
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
        </div>
        <!-- END Messages -->
      </div>
      <!-- END Side Content -->
    </div>
  </div>
  <div class="col-md-8 col-lg-7 col-xl-9 bg-body-dark">
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
                  <a class="fw-semibold link-fx" href="be_pages_generic_profile.php">Sara Fields</a>
                  <div class="fs-sm text-muted">s.fields@example.com</div>
                </div>
                <div class="col-sm-5 d-sm-flex align-items-sm-center">
                  <div class="fs-sm text-muted text-sm-end w-100 mt-2 mt-sm-0">
                    <p class="mb-0">March 15, 2018</p>
                    <p class="mb-0">14:25</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <p>Dear John,</p>
          <?php $dm->get_text('small'); ?>
          <p>Best Regards,</p>
          <p>Sara</p>
        </div>
        <div class="block-content bg-body-light">
          <div class="row g-sm">
            <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-3">
              <div class="options-container fx-item-zoom-in">
                <?php $dm->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                  <div class="options-overlay-content">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download me-1"></i> Download
                    </a>
                  </div>
                </div>
              </div>
              <p class="fs-sm text-muted pt-2">
                <i class="fa fa-paperclip"></i> Mountain.jpg (785Kb)
              </p>
            </div>
            <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-3">
              <div class="options-container fx-item-zoom-in">
                <?php $dm->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                  <div class="options-overlay-content">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download me-1"></i> Download
                    </a>
                  </div>
                </div>
              </div>
              <p class="fs-sm text-muted pt-2">
                <i class="fa fa-paperclip"></i> Fireplace.jpg (685kb)
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
