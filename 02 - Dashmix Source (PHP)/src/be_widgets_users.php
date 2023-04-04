<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Users</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Widgets</li>
          <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Simple -->
  <h2 class="content-heading">Simple</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'male', 48); ?>
          <div class="ms-3 text-end">
            <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Web Developer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'male', 48); ?>
          <div class="ms-3 text-end">
            <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Web Designer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex flex-row-reverse align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'female', 48); ?>
          <div class="me-3">
            <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Writer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex flex-row-reverse align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'female', 48); ?>
          <div class="me-3">
            <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
            <p class="fs-sm fw-medium text-muted mb-0">
              CEO
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-primary" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'female', 48, true); ?>
          <div class="ms-3 text-end">
            <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
            <p class="fs-sm text-white-75 mb-0">
              Writer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-gd-sublime" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'female', 48, true); ?>
          <div class="ms-3 text-end">
            <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
            <p class="fs-sm text-white-75 mb-0">
              CEO
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-primary-dark" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex flex-row-reverse align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'male', 48, true); ?>
          <div class="me-3">
            <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
            <p class="fs-sm text-white-75 mb-0">
              Web Developer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-gd-dusk" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex flex-row-reverse align-items-center justify-content-between">
          <?php $dm->get_avatar(0, 'male', 48, true); ?>
          <div class="me-3">
            <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
            <p class="fs-sm text-white-75 mb-0">
              Web Designer
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male'); ?>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female'); ?>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Investor
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-light">
          <?php $dm->get_avatar(0, 'male'); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Writer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-light">
          <?php $dm->get_avatar(0, 'female'); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-gd-sea">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Writer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-gd-fruit">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-dark">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-gd-aqua">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Investor
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-gd-primary text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-black-10">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Writer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-gd-sun text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-black-10">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-primary-dark text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-black-10">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded bg-gd-sublime text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-black-10">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Investor
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Simple -->

  <!-- Icons -->
  <h2 class="content-heading">Icons</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Consultant
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-university text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                Master
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-users text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                22k Friends
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Designer
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-building text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                7 Projects
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-newspaper text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                15 Articles
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Author
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-id-card text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                VIP
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-star text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                Elite
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male'); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Consultant
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-box text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                3 Projects
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-star text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                15 Reviews
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-gd-sea">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-gd-sea-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Author
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-id-card text-danger"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                VIP
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-star text-danger"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                Elite
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-primary-darker">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-primary-dark">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Consultant
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-box text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                3 Projects
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-star text-body-color-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                15 Reviews
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-primary">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-primary-light">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Consultant
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-university text-primary"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                Master
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-users text-primary"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                22k Friends
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-gd-dusk">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full block-content-sm bg-gd-dusk-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Designer
          </p>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-building text-xsmooth"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                7 Projects
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-newspaper text-xsmooth"></i>
              </p>
              <p class="fs-sm fw-medium text-muted mb-0">
                15 Articles
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-primary border-bottom border-white-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
        </div>
        <div class="block-content block-content-full bg-primary">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-primary border-2">
                <i class="far fa-fw fa-file-word text-primary"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                14 Docs
              </p>
            </div>
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-primary border-2">
                <i class="far fa-fw fa-file-word text-primary"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                2 PDFs
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-success border-bottom border-white-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
        </div>
        <div class="block-content block-content-full bg-success">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-success border-2">
                <i class="fa fa-fw fa-images text-success"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                17 Photos
              </p>
            </div>
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-success border-2">
                <i class="fa fa-fw fa-gamepad text-success"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                65 Games
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-warning border-bottom border-white-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
        </div>
        <div class="block-content block-content-full bg-warning">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-warning border-2">
                <i class="far fa-fw fa-hdd text-warning"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                3 Servers
              </p>
            </div>
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-warning border-2">
                <i class="far fa-fw fa-envelope text-warning"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                14 Messages
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-danger border-bottom border-white-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
        </div>
        <div class="block-content block-content-full bg-danger">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full">
          <div class="row g-sm">
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-danger border-2">
                <i class="far fa-fw fa-calendar text-danger"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                3 Events
              </p>
            </div>
            <div class="col-6">
              <div class="item item-circle mb-3 mx-auto border border-danger border-2">
                <i class="far fa-fw fa-comment text-danger"></i>
              </div>
              <p class="fs-sm fw-medium text-muted mb-0">
                35 Comments
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Icons -->

  <!-- Images -->
  <h2 class="content-heading">Images</h2>
  <div class="row">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Designer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Author
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
        <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full">
          <p class="fw-semibold mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm fw-medium text-muted mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-primary-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Designer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-primary-dark-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Author
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-white-90">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-black-75 mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-black-50">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
        <div class="block-content bg-primary-op">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-primary-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Designer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
        <div class="block-content bg-primary-dark-op">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-primary-dark-op">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Author
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');" href="javascript:void(0)">
        <div class="block-content bg-white-90">
          <?php $dm->get_avatar(0, 'female', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-white-90">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('female'); ?></p>
          <p class="fs-sm fw-medium text-black-75 mb-0">
            Developer
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');" href="javascript:void(0)">
        <div class="block-content bg-black-50">
          <?php $dm->get_avatar(0, 'male', 0, true); ?>
        </div>
        <div class="block-content block-content-full bg-black-50">
          <p class="fw-semibold text-white mb-0"><?php $dm->get_name('male'); ?></p>
          <p class="fs-sm text-white-75 mb-0">
            Consultant
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-white">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('female'); ?></p>
        </div>
        <div class="block-content block-content-full bg-primary-op">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-white">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-lg fa-star text-primary"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                14 Reviews
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-lg fa-briefcase text-primary"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                5 Projects
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-white">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('female'); ?></p>
        </div>
        <div class="block-content block-content-full bg-primary-dark-op">
          <?php $dm->get_avatar(0, 'female', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-white">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-lg fa-gem text-primary-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                92 Awards
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="fa fa-fw fa-lg fa-building text-primary-dark"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                Booking
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-white">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('male'); ?></p>
        </div>
        <div class="block-content block-content-full bg-white-75">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-white">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="fab fa-fw fa-lg fa-bitcoin text-black-50"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                Bitcoin
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-lg fa-images text-black-50"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                Images
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');" href="javascript:void(0)">
        <div class="block-content block-content-full block-content-sm bg-white">
          <p class="fw-semibold text-black mb-0"><?php $dm->get_name('male'); ?></p>
        </div>
        <div class="block-content block-content-full bg-black-50">
          <?php $dm->get_avatar(0, 'male', 0, true, 'img-avatar-rounded'); ?>
        </div>
        <div class="block-content block-content-full bg-white">
          <div class="row g-sm">
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-lg fa-id-card text-black-50"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                VIP
              </p>
            </div>
            <div class="col-6">
              <p class="mb-2">
                <i class="far fa-fw fa-lg fa-star text-black-50"></i>
              </p>
              <p class="fs-sm fw-medium text-black-75 mb-0">
                Elite
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Images -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
