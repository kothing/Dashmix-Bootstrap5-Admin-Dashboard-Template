<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_style = 'light-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-dark bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-full content-top">
      <div class="py-4 text-center">
        <h1 class="fw-bold text-white mb-2">
          Modern CSS for Developers
        </h1>
        <h2 class="h3 fw-normal text-white-75">
          All the tips and tricks you need to know to be a pro
        </h2>
        <a class="btn btn-hero btn-primary" href="javascript:void(0)" data-toggle="click-ripple">
          <i class="fa fa-play opacity-50 me-1"></i> Start Series
        </a>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
  <!-- Meta -->
  <div class="row items-push">
    <div class="col-md-6">
      <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full text-center bg-body-light">
          <?php $dm->get_avatar(0, 'male', 64, true); ?>
          <div class="mt-2">
            <p class="fw-semibold mb-0">
              John Doe <span class="fw-normal text-muted mb-0">| CSS Guru</span>
            </p>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="row g-sm">
            <div class="col-6">
              <div class="item item-circle mx-auto">
                <i class="fa fa-fw fa-boxes fa-2x text-dark"></i>
              </div>
              <p class="text-muted mb-0">
                16 Courses
              </p>
            </div>
            <div class="col-6">
              <div class="item item-circle mx-auto">
                <i class="fa fa-fw fa-users fa-2x text-dark"></i>
              </div>
              <p class="text-muted mb-0">
                17k Customers
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
        <div class="block-content">
          <table class="table table-borderless table-striped">
            <tbody>
              <tr>
                <td>
                  <span class="text-warning">
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                    <i class="fa fa-fw fa-star"></i>
                  </span>
                  <span class="fw-medium text-muted">(790 reviews)</span>
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-heart me-1 text-danger"></i> 590 Favorites
                </td>
              </tr>
              <tr>
              <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-calendar me-1"></i> 2 weeks ago
                </td>
              </tr>
              <tr>
              <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-shopping-basket me-1"></i> 1750 Sales
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fa fa-fw fa-tags me-1"></i>
                  <span class="badge bg-primary">CSS</span>
                  <span class="badge bg-primary">Sass</span>
                  <span class="badge bg-primary">Less</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END Meta -->

  <!-- Lessons -->
  <div class="block block-rounded block-bordered">
    <div class="block-content">
      <table class="table table-striped table-borderless table-vcenter">
        <tbody>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                01
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 1</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 20:52
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Introduction to Flexbox
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                02
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 2</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 11:03
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Grid vs Flexbox
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                03
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 3</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 17:23
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Component Design
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                04
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 4</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 32:15
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Refactoring to Utility Classes
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                05
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 5</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 21:33
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Basic Layouts
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                06
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 6</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 17:26
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Navigation Patterns
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                07
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 7</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 19:18
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Pricing Tables
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                08
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 8</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 23:02
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Ads design
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                09
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 9</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 12:15
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Mobile-First Design
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center w-25 d-none d-md-table-cell">
              <a class="item item-circle bg-primary text-white fs-2 mx-auto" href="javascript:void(0)">
                10
              </a>
            </td>
            <td>
              <div class="py-4">
                <div class="fs-sm fw-bold text-uppercase mb-2">
                  <span class="text-muted me-3">Episode 10</span>
                  <span class="text-primary">
                    <i class="fa fa-clock"></i> 18:69
                  </span>
                </div>
                <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                  Conclusions
                </a>
                <p class="text-muted mb-0">
                  Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                </p>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Lessons -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
