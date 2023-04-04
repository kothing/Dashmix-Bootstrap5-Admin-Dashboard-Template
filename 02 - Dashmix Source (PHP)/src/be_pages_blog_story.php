<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-top content-full text-center">
      <h1 class="fw-bold text-white mt-5 mb-3">
        Inspire a new generation of web developers
      </h1>
      <h2 class="h3 fw-normal text-white-75 mb-5">Building a new web platform.</h2>
      <p>
        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 me-2 m-1">
          <i class="fa fa-user-circle me-1"></i> by Lisa Smith
        </span>
        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-1">
          <i class="fa fa-clock me-1"></i> 10 min read
        </span>
      </p>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
  <div class="row justify-content-center">
    <div class="col-sm-8 py-5">
      <!-- Story -->
      <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
      <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
      <article class="js-gallery story">
        <?php $dm->get_text('small'); ?>
        <?php $dm->get_text('medium'); ?>
        <div class="row g-sm items-push push img-fluid-100">
          <div class="col-12 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo21@2x.jpg">
              <?php $dm->get_photo(21, true, 'img-fluid'); ?>
            </a>
          </div>
        </div>
        <?php $dm->get_text('medium'); ?>
        <div class="row g-sm items-push push img-fluid-100">
          <div class="col-4 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo22@2x.jpg">
              <?php $dm->get_photo(22, false, 'img-fluid'); ?>
            </a>
          </div>
          <div class="col-4 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo4@2x.jpg">
              <?php $dm->get_photo(4, false, 'img-fluid'); ?>
            </a>
          </div>
          <div class="col-4 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg">
              <?php $dm->get_photo(23, false, 'img-fluid'); ?>
            </a>
          </div>
        </div>

        <h3>Coding</h3>
        <?php $dm->get_text('small', 3); ?>

        <h3>Education</h3>
        <?php $dm->get_text('medium'); ?>
        <div class="row g-sm items-push push img-fluid-100">
          <div class="col-6 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo24@2x.jpg">
              <?php $dm->get_photo(24, false, 'img-fluid'); ?>
            </a>
          </div>
          <div class="col-6 animated fadeIn">
            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo25@2x.jpg">
              <?php $dm->get_photo(25, false, 'img-fluid'); ?>
            </a>
          </div>
        </div>
        <?php $dm->get_text('medium'); ?>

        <h3>Inspiration</h3>
        <?php $dm->get_text('medium', 2); ?>
      </article>
      <!-- END Story -->

      <!-- Actions -->
      <div class="mt-5 d-flex justify-content-between push">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-alt-secondary" data-bs-toggle="tooltip" title="Like Story">
            <i class="fa fa-thumbs-up text-primary"></i>
          </button>
          <button type="button" class="btn btn-alt-secondary" data-bs-toggle="tooltip" title="Recommend">
            <i class="fa fa-heart text-danger"></i>
          </button>
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-blog-story" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-share-alt opacity-50 me-1"></i> Share
          </button>
          <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-blog-story">
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fab fa-fw fa-facebook me-1"></i> Facebook
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fab fa-fw fa-twitter me-1"></i> Twitter
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
              <i class="fab fa-fw fa-linkedin me-1"></i> LinkedIn
            </a>
          </div>
        </div>
      </div>
      <!-- END Actions -->

      <!-- Comments -->
      <div class="px-4 pt-4 rounded bg-body-extra-light">
        <p class="fs-sm">
          <i class="fa fa-thumbs-up text-info"></i>
          <i class="fa fa-heart text-danger"></i>
          <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
          <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
          <a class="fw-semibold" href="javascript:void(0)">and 72 others</a>
        </p>
        <form action="be_pages_blog_story.php" method="POST" onsubmit="return false;">
          <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
        </form>
        <div class="pt-3 fs-sm">
          <div class="d-flex">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'female', 32, true); ?>
            </a>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
              </p>
              <p>
                <a class="me-1" href="javascript:void(0)">Like</a>
                <a href="javascript:void(0)">Comment</a>
              </p>
              <div class="d-flex">
                <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                  <?php $dm->get_avatar(0, 'male', 32, true); ?>
                </a>
                <div class="flex-grow-1">
                  <p class="mb-1">
                    <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                    Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </p>
                  <p>
                    <a class="me-1" href="javascript:void(0)">Like</a>
                    <a href="javascript:void(0)">Comment</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex">
            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'male', 32, true); ?>
            </a>
            <div class="flex-grow-1">
              <p class="mb-1">
                <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices.
              </p>
              <p>
                <a class="me-1" href="javascript:void(0)">Like</a>
                <a href="javascript:void(0)">Comment</a>
              </p>
              <div class="d-flex">
                <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                  <?php $dm->get_avatar(0, 'male', 32, true); ?>
                </a>
                <div class="flex-grow-1">
                  <p class="mb-1">
                    <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                    Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </p>
                  <p>
                    <a class="me-1" href="javascript:void(0)">Like</a>
                    <a href="javascript:void(0)">Comment</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Comments -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>Dashmix.helpersOnLoad(['jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
