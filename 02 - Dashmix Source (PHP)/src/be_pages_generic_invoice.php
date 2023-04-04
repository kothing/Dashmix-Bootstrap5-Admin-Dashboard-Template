<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light d-print-none">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Invoice</h1>
      <button type="button" class="btn btn-alt-primary my-2">
        <i class="fa fa-fw fa-plus me-1"></i> New Invoice
      </button>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
  <!-- Invoice -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">#INV01364</h3>
      <div class="block-options">
        <!-- Print Page functionality is initialized dmPrint() -->
        <button type="button" class="btn-block-option" onclick="Dashmix.helpers('dm-print');">
          <i class="si si-printer me-1"></i> Print Invoice
        </button>
      </div>
    </div>
    <div class="block-content">
      <div class="p-sm-4 p-xl-7">
        <!-- Invoice Info -->
        <div class="row mb-5">
          <!-- Company Info -->
          <div class="col-6">
            <p class="h3">Company</p>
            <address>
              Street Address<br>
              State, City<br>
              Region, Postal Code<br>
              ltd@example.com
            </address>
          </div>
          <!-- END Company Info -->

          <!-- Client Info -->
          <div class="col-6 text-end">
            <p class="h3">Client</p>
            <address>
              Street Address<br>
              State, City<br>
              Region, Postal Code<br>
              ctr@example.com
            </address>
          </div>
          <!-- END Client Info -->
        </div>
        <!-- END Invoice Info -->

        <!-- Table -->
        <div class="table-responsive push">
          <table class="table table-bordered">
            <thead class="bg-body">
              <tr>
                <th class="text-center" style="width: 60px;"></th>
                <th>Product</th>
                <th class="text-center" style="width: 90px;">Qnt</th>
                <th class="text-end" style="width: 120px;">Unit</th>
                <th class="text-end" style="width: 120px;">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td>
                  <p class="fw-semibold mb-1">Logo Creation</p>
                  <div class="text-muted">Logo and business cards design</div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$1.800,00</td>
                <td class="text-end">$1.800,00</td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td>
                  <p class="fw-semibold mb-1">Online Store Design &amp; Development</p>
                  <div class="text-muted">Design/Development for all popular modern browsers</div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$20.000,00</td>
                <td class="text-end">$20.000,00</td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td>
                  <p class="fw-semibold mb-1">App Design</p>
                  <div class="text-muted">Promotional mobile application</div>
                </td>
                <td class="text-center">
                  <span class="badge rounded-pill bg-primary">1</span>
                </td>
                <td class="text-end">$3.200,00</td>
                <td class="text-end">$3.200,00</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Subtotal</td>
                <td class="text-end">$25.000,00</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                <td class="text-end">20%</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                <td class="text-end">$5.000,00</td>
              </tr>
              <tr>
                <td colspan="4" class="fw-bold text-uppercase text-end bg-body-light">Total Due</td>
                <td class="fw-bold text-end bg-body-light">$30.000,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END Table -->

        <!-- Footer -->
        <p class="text-muted text-center my-5">
          Thank you for doing business with us.
        </p>
        <!-- END Footer -->
      </div>
    </div>
  </div>
  <!-- END Invoice -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>