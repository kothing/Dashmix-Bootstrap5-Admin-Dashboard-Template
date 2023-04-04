<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Error Pages</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Error</li>
          <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="row">
    <div class="col-md-4">
      <!-- 400 -->
      <a class="block block-rounded block-link-shadow" href="op_error_400.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              400
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 400 -->
    </div>
    <div class="col-md-4">
      <!-- 401 -->
      <a class="block block-rounded block-link-shadow" href="op_error_401.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              401
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 401 -->
    </div>
    <div class="col-md-4">
      <!-- 403 -->
      <a class="block block-rounded block-link-shadow" href="op_error_403.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              403
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 403 -->
    </div>
    <div class="col-md-4">
      <!-- 404 -->
      <a class="block block-rounded block-link-shadow" href="op_error_404.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              404
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 404 -->
    </div>
    <div class="col-md-4">
      <!-- 500 -->
      <a class="block block-rounded block-link-shadow" href="op_error_500.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              500
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 500 -->
    </div>
    <div class="col-md-4">
      <!-- 503 -->
      <a class="block block-rounded block-link-shadow" href="op_error_503.php">
        <div class="block-content text-center">
          <div class="py-5">
            <p class="text-primary fs-2 fw-bold mb-0">
              503
            </p>
            <p class="fs-base text-muted fw-semibold text-uppercase">
              Error
            </p>
          </div>
        </div>
      </a>
      <!-- END 503 -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>