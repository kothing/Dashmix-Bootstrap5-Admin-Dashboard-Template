<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Section -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-boxed text-center py-5">
      <h1 class="h2 text-white mb-2">
        Apply for a Job
      </h1>
      <p class="fs-lg fw-normal text-white-75 mb-0">
        3 more remaining, <a href="javascript:void(0)">upgrade your account today</a>!
      </p>
    </div>
  </div>
</div>
<!-- END Hero Section -->

<!-- Page Content -->
<div class="content content-boxed">
  <!-- Job -->
  <h2 class="content-heading">
    <i class="fa fa-check text-success me-1"></i> You are applying for the following job
  </h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="d-sm-flex">
        <div class="ms-sm-2 me-sm-4 py-2">
          <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
            <i class="fab fa-fw fa-facebook"></i>
          </a>
        </div>
        <div class="py-2">
          <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
            React Developer
          </a>
          <div class="fs-sm fw-semibold text-muted mb-2">
            Development - 3 hours ago
          </div>
          <p class="text-muted mb-2">
            Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
          </p>
          <div>
            <span class="badge bg-primary fw-semibold">Web</span>
            <span class="badge bg-primary fw-semibold">React</span>
            <span class="badge bg-primary fw-semibold">Social</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Job -->

  <!-- Apply form -->
  <h2 class="content-heading">
    <i class="fa fa-arrow-right text-info me-1"></i> To apply, please submit the form
  </h2>
  <form action="be_pages_jobs_apply.php" method="POST">
    <div class="block block-rounded">
      <!-- Personal Information section -->
      <div class="block-content block-content-full">
        <h2 class="content-heading">Personal Information</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              Let us know a bit about yourself
            </p>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="apply-firstname">Firstname</label>
              <input type="text" class="form-control" id="apply-firstname" name="apply-firstname" placeholder="What's your firstname?">
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-lastname">Lastname</label>
              <input type="text" class="form-control" id="apply-lastname" name="apply-lastname" placeholder="What's your lastname?">
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-email">Email</label>
              <input type="email" class="form-control" id="apply-email" name="apply-email" placeholder="What's your email address?">
            </div>
          </div>
        </div>
      </div>
      <!-- END Personal Information section -->

      <!-- Resume section -->
      <div class="block-content block-content-full">
        <h2 class="content-heading">Resume</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              Feel free to upload your resume, we would love to check out your work experience
            </p>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="apply-resume">Choose file</label>
              <input class="form-control" type="file" id="apply-resume">
            </div>
          </div>
        </div>
      </div>
      <!-- END Resume section -->

      <!-- Application Details section -->
      <div class="block-content">
        <h2 class="content-heading">Application Details</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              Please answer a few further questions from the employer
            </p>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="apply-question1">Why would you like to work with us?</label>
              <textarea class="form-control" rows="4" id="apply-question1" name="apply-question1"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-question2">Where are you located?</label>
              <textarea class="form-control" rows="4" id="apply-question2" name="apply-question2"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-question3">Why are you looking for a new position?</label>
              <textarea class="form-control" rows="4" id="apply-question3" name="apply-question3"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-question4">What’s not on your resume but you think we should know?</label>
              <textarea class="form-control" rows="4" id="apply-question4" name="apply-question4"></textarea>
            </div>
            <div class="mb-4">
              <label class="form-label" for="apply-question5">Anything else we should know about you?</label>
              <textarea class="form-control" rows="4" id="apply-question5" name="apply-question5"></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- END Application Details section -->

      <!-- Submit Form -->
      <div class="block-content block-content-full pt-0">
        <div class="row mb-4">
          <div class="col-lg-6 offset-lg-5">
            <button type="submit" class="btn btn-alt-primary">
              <i class="fa fa-check opacity-50 me-1"></i> Apply for this job
            </button>
          </div>
        </div>
      </div>
      <!-- END Submit Form -->
    </div>
  </form>
  <!-- END Apply Form -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
