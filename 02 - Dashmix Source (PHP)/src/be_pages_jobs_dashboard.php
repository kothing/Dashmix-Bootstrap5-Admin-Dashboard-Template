<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Section -->
<div class="bg-body-extra-light text-center">
  <div class="content content-boxed content-full py-5 py-md-7">
    <div class="row justify-content-center">
      <div class="col-md-10 col-xl-6">
        <h1 class="h2 mb-2">
          Find your dream job <span class="text-primary">today</span>.
        </h1>
        <p class="fs-lg fw-normal text-muted">
          We offer the most complete job platform to publish your job offers and apply for your dream job.
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-10 col-lg-8 col-xl-6">
        <div class="p-2 rounded bg-body-light shadow-sm">
          <form class="d-flex align-items-center" action="be_pages_jobs_dashboard.php" method="POST" onclick="return false;">
            <div class="flex-grow-1">
              <label class="visually-hidden" for="example-job-search">Search Job</label>
              <input type="text" class="form-control form-control-lg form-control-alt" id="example-job-search" name="example-job-search" placeholder="Search Jobs..">
            </div>
            <div class="flex-grow-0 ms-2">
              <button type="submit" class="btn btn-lg btn-primary">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-5">
      <div class="px-2 px-sm-5">
        <p class="fs-3 text-dark mb-0">6,584</p>
        <p class="text-muted mb-0">
          Active Jobs
        </p>
      </div>
      <div class="px-2 px-sm-5 border-start">
        <p class="fs-3 text-dark mb-0">2,960</p>
        <p class="text-muted mb-0">
          Freelancers
        </p>
      </div>
      <div class="px-2 px-sm-5 border-start">
        <p class="fs-3 text-dark mb-0">980</p>
        <p class="text-muted mb-0">
          Companies
        </p>
      </div>
    </div>
  </div>
</div>
<!-- END Hero Section -->

<!-- Page Content -->
<div class="content content-boxed content-full">
  <!-- Categories -->
  <div class="row items-push">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xpro h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-extra-light mt-1 align-self-stretch">
          <div class="py-4">
            <i class="fa fa-2x fa-brush text-xpro"></i>
            <p class="fs-lg fw-semibold mt-3 mb-1">
              Design
            </p>
            <p class="text-muted mb-0">
              Graphic, Web, Brand, Product, Packaging etc
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xinspire h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-extra-light mt-1 align-self-stretch">
          <div class="py-4">
            <i class="fa fa-2x fa-code text-xinspire"></i>
            <p class="fs-lg fw-semibold mt-3 mb-1">
              Development
            </p>
            <p class="text-muted mb-0">
              Desktop, Web, Cloud, Mobile, Gaming etc
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xsmooth h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-extra-light mt-1 align-self-stretch">
          <div class="py-4">
            <i class="fa fa-2x fa-boxes text-xsmooth"></i>
            <p class="fs-lg fw-semibold mt-3 mb-1">
              Marketing
            </p>
            <p class="text-muted mb-0">
              Internet, Mobile, B2B, B2C, Transactional etc
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xplay h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full bg-body-extra-light mt-1 align-self-stretchv">
          <div class="py-4">
            <i class="fa fa-2x fa-pencil-alt text-xplay"></i>
            <p class="fs-lg fw-semibold mt-3 mb-1">
              Writing
            </p>
            <p class="text-muted mb-0">
              Graphic, Web, Brand, Product, Packaging etc
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Categories -->

  <!-- Jobs -->
  <div class="bg-body-extra-light">
    <table class="table table-striped table-hover table-borderless table-vcenter">
      <tbody>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-facebook"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
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
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">React</span>
                  <span class="badge bg-secondary">Social</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-codepen"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  Web Designer
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Design - 5 hours ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">Photoshop</span>
                  <span class="badge bg-secondary">Sketch</span>
                  <span class="badge bg-secondary">HTML</span>
                  <span class="badge bg-secondary">CSS</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-cloudsmith"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  SEO Ninja
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Marketing - 10 hours ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">SEO</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-cuttlefish"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  News/Post Author
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Writing - 1 day ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">WordPress</span>
                  <span class="badge bg-secondary">Joomla</span>
                  <span class="badge bg-secondary">Author</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-dashcube"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  Social Marketing Specialist
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Marketing - 2 days ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">SEO</span>
                  <span class="badge bg-secondary">Social</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  UI Designer
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Design - 2 days ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Mobile</span>
                  <span class="badge bg-secondary">Sketch</span>
                  <span class="badge bg-secondary">Adobe XD</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-buffer"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  Full Stack Developer
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Development - 3 days ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">Mobile</span>
                  <span class="badge bg-secondary">JavaScript</span>
                  <span class="badge bg-secondary">PHP</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-airbnb"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  Blog Editor
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Writing - 4 days ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">WordPress</span>
                  <span class="badge bg-secondary">Word</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-algolia"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  Frontend Developer
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Development - 1 week ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Web</span>
                  <span class="badge bg-secondary">React</span>
                  <span class="badge bg-secondary">Angular</span>
                  <span class="badge bg-secondary">Vue.js</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-sm-flex">
              <div class="ms-sm-2 me-sm-4 py-3">
                <a class="item item-rounded bg-body-dark text-dark fs-2 mb-2 mx-auto" href="javascript:void(0)">
                  <i class="fab fa-fw fa-bandcamp"></i>
                </a>
                <a class="btn btn-sm btn-primary w-100" href="be_pages_jobs_apply.php">
                  Apply
                </a>
              </div>
              <div class="py-3">
                <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                  UX Specialist for Mobile
                </a>
                <div class="fs-sm fw-semibold text-muted mb-2">
                  Design - 2 week ago
                </div>
                <p class="text-muted mb-2">
                  Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                </p>
                <div>
                  <span class="badge bg-secondary">Mobile</span>
                  <span class="badge bg-secondary">iOS</span>
                  <span class="badge bg-secondary">Android</span>
                  <span class="badge bg-secondary">UX</span>
                  <span class="badge bg-secondary">UI</span>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- END Jobs -->
</div>
<!-- END Page Content -->

<!-- Call to Action -->
<div class="bg-body-dark">
  <div class="content content-full text-center">
    <div class="py-3">
      <h3 class="mb-2 text-center">
        Subscribe today
      </h3>
      <h4 class="fw-normal text-muted text-center">
        We have the best job offerings in the world!
      </h4>
      <a class="btn btn-hero btn-primary" href="javascript:void(0)" data-toggle="click-ripple">
        Get Started
      </a>
    </div>
  </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
