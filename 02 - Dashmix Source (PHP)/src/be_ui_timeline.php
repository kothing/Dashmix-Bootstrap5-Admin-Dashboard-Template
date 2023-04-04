<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Timeline</h1>
      <div class="flex-shrink-0 ms-sm-3 py-3 d-none d-xl-block">
        <!-- Toggle Timeline Mode -->
        <button class="btn btn-sm btn-alt-primary" data-toggle="class-toggle" data-target=".timeline" data-class="timeline-centered">
          <i class="fa fa-arrows-alt-h me-1"></i> Toggle Timeline Mode
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Timeline -->
  <!--
      Available classes for timeline list:

      'timeline'                                      A normal timeline with icons to the left in all screens
      'timeline timeline-centered timeline-alt'       A centered timeline with odd events to the left and even events to the right (screen width > 1200px)
      'timeline timeline-centered'                    A centered timeline with all events to the left. You can add the class 'timeline-event-alt'
                                                      to 'timeline-event' elements to position them to the right (screen width > 1200px) (useful, if you
                                                      would like to have multiple events to the left or to the right section)
  -->
  <ul class="timeline timeline-centered timeline-alt">
    <!-- Facebook Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-default">
        <i class="fab fa-facebook-f"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">New Friends</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              just now
            </div>
          </div>
        </div>
        <div class="block-content">
          <div class="row">
            <div class="col-md-6">
              <ul class="nav-items push">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                      <?php $dm->get_avatar(0, 'female', 48); ?>
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                      <div class="fs-sm text-muted">3 min ago</div>
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
                      <div class="fw-normal fs-sm text-muted">5 min ago</div>
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
                      <div class="fw-normal fs-sm text-muted">16 min ago</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="nav-items push">
                <li>
                  <a class="d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-3 ms-2 overlay-container overlay-left">
                      <?php $dm->get_avatar(0, 'female', 48); ?>
                      <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
                      <div class="fs-sm text-muted">23 min ago</div>
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
                      <div class="fw-normal fs-sm text-muted">23 min ago</div>
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
                      <div class="fw-normal fs-sm text-muted">35 min ago</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- END Facebook Event -->

    <!-- Twitter Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-info">
        <i class="fab fa-twitter"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Update</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              30 min ago
            </div>
          </div>
        </div>
        <div class="block-content">
          <div class="d-flex fs-sm">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'female', 48, true); ?>
            </a>
            <div class="flex-grow-1">
              <p>
                <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
              </p>
              <p>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-reply fa-fw text-muted"></i> Reply
                </a>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-redo fa-fw text-muted"></i> Retweet
                </a>
                <a class="text-dark me-2" href="javascript:void(0)">
                  <i class="fa fa-heart fa-fw text-muted"></i> Like
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- END Twitter Event -->

    <!-- Photos Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-success">
        <i class="fa fa-images"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">New Gallery</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              2 hrs ago
            </div>
          </div>
        </div>
        <div class="block-content">
          <div class="row items-push js-gallery img-fluid-100">
            <?php for ($i = 11; $i < 19; $i++) { ?>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                  <?php $dm->get_photo($i, false, 'img-fluid'); ?>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </li>
    <!-- END Photos Event -->

    <!-- Photos Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-danger">
        <i class="fa fa-calendar"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Meeting</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              3 hrs ago
            </div>
          </div>
        </div>
        <div class="block-content">
          <div class="d-flex fs-sm push">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <i class="fa fa-utensils fa-fw fa-3x text-danger-light"></i>
            </a>
            <div class="flex-grow-1">
              <p>
                You have a meal meeting scheduled with <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a> today at 16:18.
              </p>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- END Photos Event -->

    <!-- Post Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-xsmooth">
        <i class="far fa-file-alt"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Post</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              6 hrs ago
            </div>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small', 2); ?>
          <a class="btn btn-sm btn-alt-secondary push" href="javascript:void(0)">Read More..</a>
        </div>
      </div>
    </li>
    <!-- END Post Event -->

    <!-- System Event -->
    <li class="timeline-event">
      <div class="timeline-event-icon bg-dark">
        <i class="fa fa-cogs"></i>
      </div>
      <div class="timeline-event-block block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">System</h3>
          <div class="block-options">
            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
              1 day ago
            </div>
          </div>
        </div>
        <div class="block-content">
          <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
            <div class="flex-grow-1 me-3">
              <p class="mb-0">Core successfully <a class="alert-link" href="javascript:void(0)">updated</a> to v3.2!</p>
            </div>
            <div class="flex-shrink-0">
              <i class="fa fa-fw fa-check-circle"></i>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- END System Event -->
  </ul>
  <!-- END Timeline -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup Plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Dashmix.helpersOnLoad('jq-magnific-popup');</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
