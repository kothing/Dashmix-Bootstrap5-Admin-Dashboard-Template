<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Section -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-boxed content-full py-5">
      <div class="row">
        <div class="col-md-8 d-flex align-items-center py-3">
          <div class="w-100 text-center text-md-start">
            <h1 class="h2 text-white mb-2">
              Social Marketing Specialist
            </h1>
            <h2 class="h4 fs-sm text-uppercase fw-semibold text-white-75">
              Marketing - 5 hours ago
            </h2>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fab fa-fw fa-leanpub text-white-50"></i> Company Inc.
            </a>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <a class="block block-rounded block-link-shadow block-transparent bg-black-50 text-center mb-0 mx-auto" href="be_pages_jobs_apply.php">
            <div class="block-content block-content-full px-5 py-4">
              <div class="fs-2 fw-semibold text-white">
                $50-$60<span class="text-white-50">k</span>
              </div>
              <div class="fs-sm fw-semibold text-uppercase text-white-50 mt-1 push">Annual Salary</div>
              <span class="btn btn-hero btn-primary">
                <i class="fa fa-arrow-right opacity-50 me-1"></i> Apply Now
              </span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Hero Section -->

<!-- Page Content -->
<div class="content content-boxed">
  <div class="row">
    <div class="col-md-4 order-md-1">
      <!-- Job Summary -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Job Summary</h3>
        </div>
        <div class="block-content">
          <ul class="fa-ul list-icons">
            <li>
              <span class="fa-li text-primary">
                <i class="fa fa-map-marker-alt"></i>
              </span>
              <div class="fw-semibold">Location</div>
              <div class="text-muted">New York</div>
            </li>
            <li>
              <span class="fa-li text-primary">
                <i class="fa fa-briefcase"></i>
              </span>
              <div class="fw-semibold">Job Type</div>
              <div class="text-muted">Full Time</div>
            </li>
            <li>
              <span class="fa-li text-primary">
                <i class="fa fa-money-check-alt"></i>
              </span>
              <div class="fw-semibold">Salary</div>
              <div class="text-muted">$50-60k</div>
            </li>
            <li>
              <span class="fa-li text-primary">
                <i class="fa fa-clock"></i>
              </span>
              <div class="fw-semibold">Date Posted</div>
              <div class="text-muted">2 days ago</div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END Job Summary -->
    </div>
    <div class="col-md-8 order-md-0">
      <!-- Job Description -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Job Description</h3>
        </div>
        <div class="block-content">
          <p>
            Justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel.
          </p>
          <p>
            Metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
          <p>
            Habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <!-- END Job Description -->

      <!-- Similar Jobs -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Similar Jobs</h3>
        </div>
        <div class="block-content">
          <div class="row">
            <div class="col-md-6">
              <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-3">
                    <p class="fs-lg fw-semibold mb-0">
                      Dribbble
                    </p>
                    <p class="text-muted mb-0">
                      Designer
                    </p>
                  </div>
                  <div class="item item-rounded bg-body-light">
                    <i class="fab fa-dribbble fa-2x text-xsmooth text-primary"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-3">
                    <p class="fs-lg fw-semibold mb-0">
                      Facebook
                    </p>
                    <p class="text-muted mb-0">
                      Developer
                    </p>
                  </div>
                  <div class="item item-rounded bg-body-light">
                    <i class="fab fa-facebook-f fa-2x text-xmodern text-primary"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END Similar Jobs -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
