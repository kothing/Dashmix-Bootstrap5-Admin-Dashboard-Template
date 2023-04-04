<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-full">
      <div class="py-5 text-center">
        <a class="img-link" href="be_pages_generic_profile.php">
          <?php $dm->get_avatar(10, '', 96, true); ?>
        </a>
        <h1 class="fw-bold my-2 text-white">Edit Account</h1>
        <h2 class="h4 fw-bold text-white-75">
          George Taylor
        </h2>
        <a class="btn btn-secondary" href="be_pages_generic_profile.php">
          <i class="fa fa-fw fa-arrow-left opacity-50"></i> Back to Profile
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
  <div class="block block-rounded">
    <div class="block-content">
      <form action="be_pages_generic_profile_edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <!-- User Profile -->
        <h2 class="content-heading pt-0">
          <i class="fa fa-fw fa-user-circle text-muted me-1"></i> User Profile
        </h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Your account’s vital info. Your username will be publicly visible.
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-username">Username</label>
              <input type="text" class="form-control" id="dm-profile-edit-username" name="dm-profile-edit-username" placeholder="Enter your username.." value="john.doe">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-name">Name</label>
              <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-email">Email Address</label>
              <input type="email" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" placeholder="Enter your email.." value="john.doe@example.com">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-job-title">Job Title</label>
              <input type="text" class="form-control" id="dm-profile-edit-job-title" name="dm-profile-edit-job-title" placeholder="Add your job title.." value="Product Manager">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-company">Company</label>
              <input type="text" class="form-control" id="dm-profile-edit-company" name="dm-profile-edit-company" value="@ProXdesign" readonly>
            </div>
            <div class="mb-4">
              <label class="form-label">Your Avatar</label>
              <div class="push">
                <?php $dm->get_avatar(10); ?>
              </div>
              <label class="form-label" for="dm-profile-edit-avatar">Choose a new avatar</label>
              <input class="form-control" type="file" id="dm-profile-edit-avatar">
            </div>
          </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <h2 class="content-heading pt-0">
          <i class="fa fa-fw fa-asterisk text-muted me-1"></i> Change Password
        </h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Changing your sign in password is an easy way to keep your account secure.
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-password">Current Password</label>
              <input type="password" class="form-control" id="dm-profile-edit-password" name="dm-profile-edit-password">
            </div>
            <div class="row mb-4">
              <div class="col-12">
                <label class="form-label" for="dm-profile-edit-password-new">New Password</label>
                <input type="password" class="form-control" id="dm-profile-edit-password-new" name="dm-profile-edit-password-new">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12">
                <label class="form-label" for="dm-profile-edit-password-new-confirm">Confirm New Password</label>
                <input type="password" class="form-control" id="dm-profile-edit-password-new-confirm" name="dm-profile-edit-password-new-confirm">
              </div>
            </div>
          </div>
        </div>
        <!-- END Change Password -->

        <!-- Connections -->
        <h2 class="content-heading pt-0">
          <i class="fa fa-fw fa-share-alt text-muted me-1"></i> Connections
        </h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              You can connect your account to third party networks to get extra features.
            </p>
          </div>
          <div class="col-lg-8 col-xl-7">
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 btn-alt-danger text-start" href="javascript:void(0)">
                  <i class="fab fa-fw fa-google opacity-50 me-1"></i> Connect to Google
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 btn-alt-info text-start" href="javascript:void(0)">
                  <i class="fab fa-fw fa-twitter opacity-50 me-1"></i> Connect to Twitter
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 btn-alt-primary bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>
                    <i class="fab fa-fw fa-facebook me-1"></i> John Doe
                  </span>
                  <i class="fa fa-fw fa-check me-1"></i>
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit Facebook Connection
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-10 col-md-8 col-xl-6">
                <a class="btn w-100 btn-alt-warning bg-white d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>
                    <i class="fab fa-fw fa-instagram me-1"></i> @john_doe
                  </span>
                  <i class="fa fa-fw fa-check me-1"></i>
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center fs-sm">
                <a class="btn btn-sm btn-alt-secondary rounded-pill" href="javascript:void(0)">
                  <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Edit Instagram Connection
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Connections -->

        <!-- Billing Information -->
        <h2 class="content-heading pt-0">
          <i class="fab fa-fw fa-paypal text-muted me-1"></i> Billing Information
        </h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Your billing information is never shown to other users and only used for creating your invoices.
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-company-name">Company Name (Optional)</label>
              <input type="text" class="form-control" id="dm-profile-edit-company-name" name="dm-profile-edit-company-name">
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <label class="form-label" for="dm-profile-edit-firstname">Firstname</label>
                <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
              </div>
              <div class="col-6">
                <label class="form-label" for="dm-profile-edit-lastname">Lastname</label>
                <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-street-1">Street Address 1</label>
              <input type="text" class="form-control" id="dm-profile-edit-street-1" name="dm-profile-edit-street-1">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-street-2">Street Address 2</label>
              <input type="text" class="form-control" id="dm-profile-edit-street-2" name="dm-profile-edit-street-2">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-city">City</label>
              <input type="text" class="form-control" id="dm-profile-edit-city" name="dm-profile-edit-city">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-postal">Postal code</label>
              <input type="text" class="form-control" id="dm-profile-edit-postal" name="dm-profile-edit-postal">
            </div>
            <div class="mb-4">
              <label class="form-label" for="dm-profile-edit-vat">VAT Number</label>
              <input type="text" class="form-control" id="dm-profile-edit-vat" name="dm-profile-edit-vat" value="EA00000000" disabled>
            </div>
          </div>
        </div>
        <!-- END Billing Information -->

        <!-- Submit -->
        <div class="row push">
          <div class="col-lg-8 col-xl-5 offset-lg-4">
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">
                <i class="fa fa-check-circle opacity-50 me-1"></i> Update Profile
              </button>
            </div>
          </div>
        </div>
        <!-- END Submit -->
      </form>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
