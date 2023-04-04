<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/banking/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Quick Overview -->
  <h2 class="content-heading">
    <i class="fa fa-angle-right text-muted me-1"></i> Quick Overview
  </h2>
  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <div class="row text-center">
        <div class="col-md-4 py-3">
          <div class="fs-1 fw-light text-dark mb-1">
            $49.680
          </div>
          <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Balance</a>
        </div>
        <div class="col-md-4 py-3">
          <div class="fs-1 fw-light text-success mb-1">
            +$780
          </div>
          <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Income Today</a>
        </div>
        <div class="col-md-4 py-3">
          <div class="fs-1 fw-light text-danger mb-1">
            -$49
          </div>
          <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Expenses Today</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Quick Overview -->

  <!-- Cards -->
  <h2 class="content-heading">
    <i class="fa fa-angle-right text-muted me-1"></i> Cards (3)
  </h2>
  <div class="row">
    <div class="col-xl-4">
      <!-- Card #1 -->
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
          <div class="ribbon-box">$2.000,00</div>
          <div class="py-3 text-center">
            <i class="fa fa-credit-card fa-4x text-gray"></i>
            <p class="fs-lg text-dark mt-3 mb-0">
              Henry Harrison
            </p>
            <p class="text-muted mb-3">
              4309-xxxx-xxxx-7898
            </p>
            <p class="fs-sm fw-bold text-muted mb-0">
              VISA
            </p>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm text-center bg-body-light">
          <span class="fs-sm text-muted">Active through May 2025</span>
        </div>
      </a>
      <!-- END Card #1 -->
    </div>
    <div class="col-xl-4">
      <!-- Card #2 -->
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
          <div class="ribbon-box">$3.500,00</div>
          <div class="py-3 text-center">
            <i class="fa fa-credit-card fa-4x text-gray"></i>
            <p class="fs-lg text-dark mt-3 mb-0">
              Example LTD
            </p>
            <p class="text-muted mb-3">
              9852-xxxx-xxxx-9852
            </p>
            <p class="fs-sm fw-bold text-muted mb-0">
              AMERICAN EXPRESS
            </p>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm text-center bg-body-light">
          <span class="fs-sm text-muted">Active through October 2028</span>
        </div>
      </a>
      <!-- END Card #2 -->
    </div>
    <div class="col-xl-4">
      <!-- Card #3 -->
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
          <div class="ribbon-box">$5.000,00</div>
          <div class="py-3 text-center">
            <i class="fa fa-credit-card fa-4x text-gray"></i>
            <p class="fs-lg text-dark mt-3 mb-0">
              Henry Harrison
            </p>
            <p class="text-muted mb-3">
              1020-xxxx-xxxx-6981
            </p>
            <p class="fs-sm fw-bold text-muted mb-0">
              MasterClub
            </p>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm text-center bg-body-light">
          <span class="fs-sm text-muted">Active through July 2027</span>
        </div>
      </a>
      <!-- END Card #3 -->
    </div>
  </div>
  <!-- END Cards -->

  <!-- Bank Accounts -->
  <h2 class="content-heading">
    <i class="fa fa-angle-right text-muted me-1"></i> Bank Accounts (2)
  </h2>
  <div class="row">
    <div class="col-lg-6">
      <!-- Bank Account #1 -->
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0">
              US 632-9854-<span class="text-default">485</span>
            </p>
            <p class="text-muted mb-0">
              $8.982,00
            </p>
          </div>
          <div class="ms-3">
            <i class="fa fa-piggy-bank fa-2x text-gray"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm text-center bg-body-light">
          <span class="fs-sm text-muted">$1.200,00 in monthly charges</span>
        </div>
      </a>
      <!-- END Bank Account #1 -->
    </div>
    <div class="col-lg-6">
      <!-- Bank Account #2 -->
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
          <div>
            <p class="fs-lg fw-semibold mb-0">
              US 632-5525-<span class="text-default">796</span>
            </p>
            <p class="text-muted mb-0">
              $40.698,00
            </p>
          </div>
          <div class="ms-3">
            <i class="fa fa-piggy-bank fa-2x text-gray"></i>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm text-center bg-body-light">
          <span class="fs-sm text-muted">$2.350,00 in monthly charges</span>
        </div>
      </a>
      <!-- END Bank Account #2 -->
    </div>
  </div>
  <!-- END Bank Accounts -->

  <!-- Latest Transactions -->
  <h2 class="content-heading">
    <i class="fa fa-angle-right text-muted me-1"></i> Latest Transactions
  </h2>
  <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <div>
        <p class="fs-lg fw-semibold mb-0">
          +$250,00
        </p>
        <p class="text-muted mb-0">
          xxx-485 Account
        </p>
      </div>
      <div class="ms-3">
        <i class="fa fa-arrow-left text-success"></i>
      </div>
    </div>
    <div class="block-content block-content-full block-content-sm bg-body-light">
      <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 10, 2018 - 10:06</strong></span>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow border-start border-danger border-3"href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <div>
        <p class="fs-lg fw-semibold mb-0">
          -$540,00
        </p>
        <p class="text-muted mb-0">
          xxx-7898 VISA
        </p>
      </div>
      <div class="ms-3">
        <i class="fa fa-arrow-right text-danger"></i>
      </div>
    </div>
    <div class="block-content block-content-full block-content-sm bg-body-light">
      <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 5, 2018 - 08:46</strong></span>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <div>
        <p class="fs-lg fw-semibold mb-0">
          +$120,00
        </p>
        <p class="text-muted mb-0">
          xxx-485 Account
        </p>
      </div>
      <div class="ms-3">
        <i class="fa fa-arrow-left text-success"></i>
      </div>
    </div>
    <div class="block-content block-content-full block-content-sm bg-body-light">
      <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 25, 2018 - 12:25</strong></span>
    </div>
  </a>
  <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
      <div>
        <p class="fs-lg fw-semibold mb-0">
          +$698,00
        </p>
        <p class="text-muted mb-0">
          xxx-796 Account
        </p>
      </div>
      <div class="ms-3">
        <i class="fa fa-arrow-left text-success"></i>
      </div>
    </div>
    <div class="block-content block-content-full block-content-sm bg-body-light">
      <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 23, 2018 - 14:23</strong></span>
    </div>
  </a>
  <!-- END Latest Transactions -->

  <!-- View More -->
  <div class="text-center">
    <a class="btn btn-sm btn-alt-secondary fw-semibold" href="javascript:void(0)">
      <i class="fa fa-arrow-down opacity-50 me-1"></i> View More..
    </a>
  </div>
  <!-- END View More -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
