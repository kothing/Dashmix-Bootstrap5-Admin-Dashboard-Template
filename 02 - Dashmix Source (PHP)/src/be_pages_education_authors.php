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
<div class="bg-dark bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo21@2x.jpg');">
  <div class="bg-black-75">
    <div class="content content-full content-top">
      <div class="py-4 text-center">
        <h1 class="fw-bold text-white mb-2">
          Our Top Selling Authors
        </h1>
        <h2 class="h3 fw-normal text-white-75">
          Explore the authors with the best selling courses
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
  <!-- Authors -->
  <div class="block block-rounded block-bordered">
    <div class="block-content">
      <div class="table-responsive push">
        <table class="table table-hover table-striped table-borderless table-vcenter mb-0">
          <tbody>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('male'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">36 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">5680 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-up text-success me-1"></i> 86.850
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('male'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">78 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">6052 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-down text-danger me-1"></i> 85.760
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'female', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('female'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">62 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">5741 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-up text-success me-1"></i> 83.320
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'female', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('female'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">16 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">4780 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-up text-success me-1"></i> 77.210
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'female', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('female'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">23 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">4158 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-down text-danger me-1"></i> 75.550
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('male'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">31 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">3790 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-down text-danger me-1"></i> 74.001
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('male'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">150 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">4599 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-up text-success me-1"></i> 73.981
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 140px;">
                <?php $dm->get_avatar(0, 'male', 64, true); ?>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <a class="link-fx fw-bold d-inline-block" href="javascript:void(0)">
                      <?php $dm->get_name('male'); ?>
                    </a>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">98 Courses</a>
                  </p>
                </div>
              </td>
              <td style="min-width: 200px;">
                <div class="py-4">
                  <p class="mb-0">
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    <a class="fs-sm fw-bold text-uppercase text-muted me-3" href="javascript:void(0)">9630 Ratings</a>
                  </p>
                </div>
              </td>
              <td class="text-end" style="min-width: 160px;">
                <p class="fs-3 text-dark mb-0">
                  <i class="fa fa-angle-up text-success me-1"></i> 68.651
                </p>
                <a class="fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">
                  Sales
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Authors -->

  <!-- Pagination -->
  <div class="block block-rounded block-bordered">
    <div class="block-content">
      <nav aria-label="Best Selling Authors">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-left"></i>
              </span>
              <span class="visually-hidden">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-right"></i>
              </span>
              <span class="visually-hidden">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- END Pagination -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
