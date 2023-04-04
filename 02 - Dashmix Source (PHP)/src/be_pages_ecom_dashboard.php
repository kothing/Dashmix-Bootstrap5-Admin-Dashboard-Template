<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Quick Overview -->
  <div class="row items-push">
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="be_pages_ecom_orders.php">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-primary mb-1">78</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Pending Orders
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold text-success mb-1">26%</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Profit
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold mb-1">126</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Orders Today
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-3">
      <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="javascript:void(0)">
        <div class="block-content py-5">
          <div class="fs-3 fw-semibold mb-1">$16.485</div>
          <p class="fw-semibold fs-sm text-muted text-uppercase mb-0">
            Earnings Today
          </p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Quick Overview -->

  <!-- Orders Overview -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Orders Overview</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
      <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
      <div style="height: 420px;"><canvas id="js-chartjs-overview"></canvas></div>
    </div>
  </div>
  <!-- END Orders Overview -->

  <!-- Top Products and Latest Orders -->
  <div class="row">
    <div class="col-xl-6">
      <!-- Top Products -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Top Products</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <tbody>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.965</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Diablo III</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.154</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Control</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.523</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Minecraft</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.423</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Hollow Knight</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.391</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Sekiro: Shadows Die Twice</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.218</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">NBA 2K20</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.995</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Forza Motorsport 7</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.761</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Minecraft</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.860</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Dark Souls III</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 100px;">
                  <a class="fw-semibold" href="be_pages_ecom_product_edit.php">PID.952</a>
                </td>
                <td>
                  <a class="fw-medium" href="be_pages_ecom_product_edit.php">Age of Mythology</a>
                </td>
                <td class="d-none d-sm-table-cell text-end text-nowrap">
                  <div class="text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Top Products -->
    </div>
    <div class="col-xl-6">
      <!-- Latest Orders -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Latest Orders</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <tbody>
              <tr>
                <td class="fw-semibold text-center" style="width: 100px;">
                  <a href="be_pages_ecom_order.php">ORD.7116</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-success">Delivered</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7115</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-danger">Canceled</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7114</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-success">Delivered</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7113</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-warning">Processing</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7112</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-success">Delivered</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7111</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-warning">Processing</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7110</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-success">Delivered</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7109</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-warning">Processing</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7108</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-success">Delivered</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
              <tr>
                <td class="fw-semibold text-center">
                  <a href="be_pages_ecom_order.php">ORD.7107</a>
                </td>
                <td class="d-none d-sm-table-cell">
                  <a class="fw-medium" href="be_pages_ecom_customer.php"><?php echo $dm->get_name(); ?></a>
                </td>
                <td>
                  <span class="badge bg-danger">Canceled</span>
                </td>
                <td class="fw-semibold text-end">$<?php echo rand(100, 999); ?>,00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END Latest Orders -->
    </div>
  </div>
  <!-- END Top Products and Latest Orders -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_ecom_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
