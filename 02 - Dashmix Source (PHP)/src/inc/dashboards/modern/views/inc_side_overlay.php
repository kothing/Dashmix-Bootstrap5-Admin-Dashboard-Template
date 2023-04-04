<?php
/**
 * dashboards/modern/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
  <!-- Side Header - Close Side Overlay -->
  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
  <a class="content-header bg-body-light justify-content-center text-danger" data-toggle="layout" data-action="side_overlay_close" href="javascript:void(0)">
    <i class="fa fa-2x fa-times-circle"></i>
  </a>
  <!-- END Side Header - Close Side Overlay -->

  <!-- Side Content -->
  <form action="db_modern.php" method="POST" onsubmit="return false;">
    <div class="content-side">
      <div class="block pull-x">
        <!-- Personal -->
        <div class="block-content block-content-sm block-content-full bg-body-dark">
          <span class="text-uppercase fs-sm fw-bold">Personal</span>
        </div>
        <div class="block-content block-content-full">
          <div class="mb-4">
            <label class="form-label" for="so-profile-name">Name</label>
            <input type="text" class="form-control form-control-alt" id="so-profile-name" name="so-profile-name" value="George Taylor">
          </div>
          <div class="mb-4">
            <label class="form-label" for="so-profile-email">Email</label>
            <input type="email" class="form-control form-control-alt" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
          </div>
        </div>
        <!-- END Personal -->

        <!-- Password Update -->
        <div class="block-content block-content-sm block-content-full bg-body-dark">
          <span class="text-uppercase fs-sm fw-bold">Password Update</span>
        </div>
        <div class="block-content">
          <div class="mb-4">
            <label class="form-label" for="so-profile-password">Current Password</label>
            <input type="password" class="form-control form-control-alt" id="so-profile-password" name="so-profile-password">
          </div>
          <div class="mb-4">
            <label class="form-label" for="so-profile-new-password">New Password</label>
            <input type="password" class="form-control form-control-alt" id="so-profile-new-password" name="so-profile-new-password">
          </div>
          <div class="mb-4">
            <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
            <input type="password" class="form-control form-control-alt" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
          </div>
        </div>
        <!-- END Password Update -->

        <!-- Submit -->
        <div class="block-content border-top">
          <button type="submit" class="btn w-100 btn-alt-primary">
            <i class="fa fa-fw fa-save opacity-50 me-1"></i> Save
          </button>
        </div>
        <!-- END Submit -->
      </div>
    </div>
  </form>
  <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
