<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg');">
  <div class="bg-black-25">
    <div class="content content-full">
      <div class="py-5 text-center">
        <a class="img-link" href="be_pages_generic_profile.php">
          <?php $dm->get_avatar(10, '', 96, true); ?>
        </a>
        <h1 class="fw-bold my-2 text-white">George Taylor</h1>
        <h2 class="h4 fw-bold text-white-75">
          Product Manager <a class="text-primary-lighter" href="javascript:void(0)">@ProXdesign</a>
        </h2>
        <button type="button" class="btn btn-primary m-1">
          <i class="fa fa-fw fa-user-plus opacity-50 me-1"></i> Add
        </button>
        <button type="button" class="btn btn-secondary m-1">
          <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
  <!-- Latest Friends -->
  <h2 class="content-heading">
    <i class="si si-users me-1"></i> Latest Friends
  </h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');">
          <?php $dm->get_avatar(0, 'female', 64, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
          <div class="fs-sm text-muted">Product Designer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-plus text-muted me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle text-muted me-1"></i> Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo4.jpg');">
          <?php $dm->get_avatar(0, 'male', 64, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
          <div class="fs-sm text-muted">Senior Developer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-plus text-muted me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle text-muted me-1"></i> Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo1.jpg');">
          <?php $dm->get_avatar(0, 'male', 64, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold"><?php $dm->get_name('male'); ?></div>
          <div class="fs-sm text-muted">Junior Designer</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-plus text-muted me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle text-muted me-1"></i> Profile
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo3.jpg');">
          <?php $dm->get_avatar(0, 'female', 64, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold"><?php $dm->get_name('female'); ?></div>
          <div class="fs-sm text-muted">Marketing</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-plus text-muted me-1"></i> Add
          </a>
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-user-circle text-muted me-1"></i> Profile
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-end">
    <button type="button" class="btn btn-alt-primary">
      Check out more <i class="fa fa-arrow-right ms-1"></i>
    </button>
  </div>
  <!-- END Latest Friends -->

  <!-- Latest Projects -->
  <h2 class="content-heading">
    <i class="si si-briefcase me-1"></i> Latest Projects
  </h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-info">
          <div class="my-3">
            <i class="fab fa-2x fa-windows text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold">Windows App</div>
          <div class="fs-sm text-muted">Accounting Dashboard</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase text-muted me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-warning">
          <div class="my-3">
            <i class="fa fa-2x fa-mobile text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold">iOS App</div>
          <div class="fs-sm text-muted">Accounting Dashboard</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase text-muted me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-danger">
          <div class="my-3">
            <i class="fa fa-2x fa-globe text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold">Website Design</div>
          <div class="fs-sm text-muted">https://example.com</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase text-muted me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-3">
      <div class="block block-rounded text-center">
        <div class="block-content block-content-full bg-success">
          <div class="my-3">
            <i class="fa fa-2x fa-birthday-cake text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <div class="fw-semibold">Special Icon Set</div>
          <div class="fs-sm text-muted">3000 icons</div>
        </div>
        <div class="block-content block-content-full">
          <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
            <i class="fa fa-briefcase text-muted me-1"></i> View Project
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-end">
    <button type="button" class="btn btn-alt-primary">
      Check out more <i class="fa fa-arrow-right ms-1"></i>
    </button>
  </div>
  <!-- END Latest Projects -->

  <!-- Latest Posts -->
  <h2 class="content-heading">
    <i class="si si-note me-1"></i> Latest Posts
  </h2>
  <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <h4 class="fs-base text-primary mb-0">
        <i class="fa fa-newspaper text-muted me-1"></i> 5 things I've learned working from home
      </h4>
      <p class="fs-sm text-muted mb-0 ms-2 text-end">
        3 hours ago
      </p>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <h4 class="fs-base text-primary mb-0">
        <i class="fa fa-newspaper text-muted me-1"></i> Vue.js or React? Let’s dive in!
      </h4>
      <p class="fs-sm text-muted mb-0 ms-2 text-end">
        2 days ago
      </p>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <h4 class="fs-base text-primary mb-0">
        <i class="fa fa-newspaper text-muted me-1"></i> 10 important things I wish I knew
      </h4>
      <p class="fs-sm text-muted mb-0 ms-2 text-end">
        1 week ago
      </p>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <h4 class="fs-base text-primary mb-0">
        <i class="fa fa-newspaper text-muted me-1"></i> Bringing your productivity back
      </h4>
      <p class="fs-sm text-muted mb-0 ms-2 text-end">
        2 weeks ago
      </p>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <h4 class="fs-base text-primary mb-0">
        <i class="fa fa-newspaper text-muted me-1"></i> Creating a super smooth CSS animation
      </h4>
      <p class="fs-sm text-muted mb-0 ms-2 text-end">
        1 month ago
      </p>
    </div>
  </a>
  <div class="text-end">
    <button type="button" class="btn btn-alt-primary">
      Check out more <i class="fa fa-arrow-right ms-1"></i>
    </button>
  </div>
  <!-- END Latest Posts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
