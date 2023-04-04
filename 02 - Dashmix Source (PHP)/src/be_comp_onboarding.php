<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/slick-carousel/slick.css'); ?>
<?php $dm->get_css('js/plugins/slick-carousel/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Onboarding Modal</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Onboarding</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="block block-rounded">
    <div class="block-content text-center">
      <p>
        Your main content behind your onboarding modal..
      </p>
    </div>
  </div>

  <!-- Dummy content -->
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-content">
      <p class="text-center py-8">...</p>
    </div>
  </div>
  <!-- END Dummy content -->

  <!-- Onboarding Modal -->
  <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content rounded overflow-hidden bg-image bg-image-bottom border-0" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo23.jpg');">
        <div class="row">
          <div class="col-md-5">
            <div class="p-3 text-end text-md-start">
              <a class="fw-semibold text-white" href="#" data-bs-dismiss="modal" aria-label="Close">
                Skip Intro
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="bg-body-extra-light shadow-lg">
              <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                <div class="p-5">
                  <i class="fa fa-award fa-3x text-muted my-4"></i>
                  <h3 class="fs-2 fw-light mb-2">Welcome to your app!</h3>
                  <p class="text-muted">
                    This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                  </p>
                  <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                    More Info <i class="fa fa-arrow-right ms-1"></i>
                  </button>
                </div>
                <div class="slick-slide p-5">
                  <h3 class="fs-2 fw-light mb-2">Invoices</h3>
                  <p class="text-muted">
                    They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                  </p>
                  <h3 class="fs-2 fw-light mb-2">Backup</h3>
                  <p class="text-muted">
                    Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                  </p>
                  <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                    Complete Profile <i class="fa fa-arrow-right ms-1"></i>
                  </button>
                </div>
                <div class="slick-slide p-5">
                  <i class="fa fa-user-check fa-3x text-muted my-4"></i>
                  <h3 class="fs-2 fw-light">Let us know your name</h3>
                  <form class="mb-3">
                    <div class="mb-4">
                      <input type="text" class="form-control form-control-alt" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                    </div>
                    <div class="mb-4">
                      <input type="text" class="form-control form-control-alt" id="onboard-last-name" name="onboard-last-name" placeholder="Enter your last name..">
                    </div>
                  </form>
                  <button type="button" class="btn btn-primary mb-4" data-bs-dismiss="modal" aria-label="Close">
                    Get Started <i class="fa fa-check opacity-50 ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Onboarding Modal -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Slick Slider plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/slick-carousel/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_onboarding.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
