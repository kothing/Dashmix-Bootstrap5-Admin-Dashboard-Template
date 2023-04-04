<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Authentication Pages</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Auth</li>
          <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Cover Auth Pages -->
  <h2 class="content-heading">Cover Auth Pages</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Sign In -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signin.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-sign-in-alt fa-3x text-info me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign In</p>
                <p class="text-muted mb-0">Log in to your dashboard</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign In -->
    </div>
    <div class="col-md-6">
      <!-- Sign Up -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signup.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-plus fa-3x text-success me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign Up</p>
                <p class="text-muted mb-0">Register for a new account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign Up -->
    </div>
    <div class="col-md-6">
      <!-- Lock -->
      <a class="block block-rounded block-link-shadow" href="op_auth_lock.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-lock fa-3x text-danger me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Lock</p>
                <p class="text-muted mb-0">Locking your account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Lock -->
    </div>
    <div class="col-md-6">
      <!-- Password Reminder -->
      <a class="block block-rounded block-link-shadow" href="op_auth_reminder.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-lightbulb fa-3x text-warning me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Password Reminder</p>
                <p class="text-muted mb-0">If you forget your password</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Password Reminder -->
    </div>
  </div>
  <!-- END Cover Auth Pages -->

  <!-- Box Auth Pages -->
  <h2 class="content-heading">Box Auth Pages</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Sign In Box -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signin_box.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-user-secret fa-3x text-default me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign In Box</p>
                <p class="text-muted mb-0">Log in to your dashboard</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign In Box -->
    </div>
    <div class="col-md-6">
      <!-- Sign Up Box -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signup_box.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-user-plus fa-3x text-success me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign Up Box</p>
                <p class="text-muted mb-0">Register for a new account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign Up Box -->
    </div>
    <div class="col-md-6">
      <!-- Lock Box -->
      <a class="block block-rounded block-link-shadow" href="op_auth_lock_box.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-user-lock fa-3x text-danger me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Lock Box</p>
                <p class="text-muted mb-0">Locking your account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Lock Box -->
    </div>
    <div class="col-md-6">
      <!-- Password Reminder Box -->
      <a class="block block-rounded block-link-shadow" href="op_auth_reminder_box.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="fa fa-user-shield fa-3x text-warning me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Password Reminder Box</p>
                <p class="text-muted mb-0">If you forget your password</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Password Reminder Box -->
    </div>
  </div>
  <!-- END Box Auth Pages -->

  <!-- Box Alt Auth Pages -->
  <h2 class="content-heading">Box Alt Auth Pages</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Sign In Box Alt -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signin_box_alt.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="si si-login fa-3x text-default me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign In Box Alt</p>
                <p class="text-muted mb-0">Log in to your dashboard</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign In Box Alt -->
    </div>
    <div class="col-md-6">
      <!-- Sign Up Box Alt -->
      <a class="block block-rounded block-link-shadow" href="op_auth_signup_box_alt.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="si si-plus fa-3x text-success me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Sign Up Box Alt</p>
                <p class="text-muted mb-0">Register for a new account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Sign Up Box Alt -->
    </div>
    <div class="col-md-6">
      <!-- Lock Box Alt -->
      <a class="block block-rounded block-link-shadow" href="op_auth_lock_box_alt.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="si si-lock fa-3x text-danger me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Lock Box Alt</p>
                <p class="text-muted mb-0">Locking your account</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Lock Box Alt -->
    </div>
    <div class="col-md-6">
      <!-- Password Reminder Box Alt -->
      <a class="block block-rounded block-link-shadow" href="op_auth_reminder_box_alt.php">
        <div class="block-content block-content-full">
          <div class="row py-4">
            <div class="col-4 d-flex align-items-center justify-content-end border-end py-4">
              <i class="si si-shield fa-3x text-warning me-2"></i>
            </div>
            <div class="col-8 d-flex align-items-center">
              <div class="ms-2">
                <p class="fs-lg fw-semibold mb-0">Password Reminder Box Alt</p>
                <p class="text-muted mb-0">If you forget your password</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      <!-- END Password Reminder Box Alt -->
    </div>
  </div>
  <!-- END Box Alt Auth Pages -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>