<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/medical/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <!-- Quick Menu -->
  <div class="pt-4 px-4 bg-body-dark rounded push">
    <div class="row items-push">
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-envelope opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Inbox</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-pencil-alt opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Profile</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-wrench opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Settings</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-plus-circle opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Patient</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-plus-circle opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Event</p>
          </div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-xl-2">
        <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
          <div class="block-content">
            <p class="mb-2 d-none d-sm-block text-primary">
              <i class="fa fa-plus-circle opacity-50 fa-2x"></i>
            </p>
            <p class="fw-semibold fs-sm text-uppercase">Add Payment</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- END Quick Menu -->

  <!-- Overview -->
  <div class="row">
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="mb-3">
              <i class="far fa-calendar fa-3x text-xinspire"></i>
            </div>
            <div class="fs-4 fw-semibold">120 Appointments</div>
            <div class="text-muted">8 are scheduled for today!</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="mb-3">
              <i class="fa fa-user-md fa-3x text-xsmooth"></i>
            </div>
            <div class="fs-4 fw-semibold">150 Patients</div>
            <div class="text-muted">3 were added today!</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="py-4 text-center">
            <div class="mb-3">
              <i class="fab fa-paypal fa-3x text-info"></i>
            </div>
            <div class="fs-4 fw-semibold">3 Payments</div>
            <div class="text-muted">Pending for tomorrow.</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Overview -->

  <!-- Patients -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Current Patients</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-striped table-borderless table-vcenter mb-0">
          <thead>
            <tr class="bg-body-dark">
              <th style="width: 100px;">ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Condition</th>
              <th>Added</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">1254</a>
              </td>
              <td>
                <strong>Roy</strong>
              </td>
              <td>
                <strong>Obrien</strong>
              </td>
              <td>
                <span class="badge bg-success">Normal</span>
              </td>
              <td>
                <span class="text-muted">today</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">1253</a>
              </td>
              <td>
                <strong>Bobby</strong>
              </td>
              <td>
                <strong>Lane</strong>
              </td>
              <td>
                <span class="badge bg-info">Stable</span>
              </td>
              <td>
                <span class="text-muted">today</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">1252</a>
              </td>
              <td>
                <strong>Amanda</strong>
              </td>
              <td>
                <strong>Ray</strong>
              </td>
              <td>
                <span class="badge bg-danger">Critical</span>
              </td>
              <td>
                <span class="text-muted">3 days ago</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">1251</a>
              </td>
              <td>
                <strong>Rose</strong>
              </td>
              <td>
                <strong>Alvarado</strong>
              </td>
              <td>
                <span class="badge bg-warning">Pending..</span>
              </td>
              <td>
                <span class="text-muted">4 days ago</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">1250</a>
              </td>
              <td>
                <strong>Jose</strong>
              </td>
              <td>
                <strong>Fowler</strong>
              </td>
              <td>
                <span class="badge bg-info">Stable</span>
              </td>
              <td>
                <span class="text-muted">5 days ago</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Patients -->

  <!-- Appointments -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Appointments</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-striped table-borderless table-vcenter mb-0">
          <thead>
            <tr class="bg-body-dark">
              <th style="width: 100px;">ID</th>
              <th>Patient</th>
              <th class="text-center">First time?</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98526</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 10:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98525</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 12:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98524</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Today at 14:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98523</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-times-circle text-danger"></i>
              </td>
              <td>
                Today at 16:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98522</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-check-circle text-success"></i>
              </td>
              <td>
                Tomorrow at 08:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">98521</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td class="text-center">
                <i class="fa fa-times-circle text-danger"></i>
              </td>
              <td>
                Tomorrow at 10:00
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-redo text-dark me-1"></i> Reschedule
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Appointments -->

  <!-- Payments -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Open Payments</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
        <button type="button" class="btn-block-option">
          <i class="si si-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-striped table-borderless table-vcenter mb-0">
          <thead>
            <tr class="bg-body-dark">
              <th style="width: 100px;">ID</th>
              <th>Patient</th>
              <th>Invoice</th>
              <th>Due</th>
              <th>Actions</th>
              <th class="text-end">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">005874</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td>
                <a href="javascript:void(0)">
                  INV_005874.pdf
                </a>
              </td>
              <td>
                <span class="badge bg-primary">tomorrow</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt text-info me-1"></i> Edit
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
              <td class="text-end">
                $1.500,00
              </td>
            </tr>
            <tr>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">005873</a>
              </td>
              <td>
                <a href="javascript:void(0)"><?php echo $dm->get_name(); ?></a>
              </td>
              <td>
                <a href="javascript:void(0)">
                  INV_005873.pdf
                </a>
              </td>
              <td>
                <span class="badge bg-primary">tomorrow</span>
              </td>
              <td>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-pencil-alt text-info me-1"></i> Edit
                </a>
                <a class="btn btn-sm btn-alt-secondary m-1" href="javascript:void(0)">
                  <i class="fa fa-times text-danger me-1"></i> Cancel
                </a>
              </td>
              <td class="text-end">
                $1.200,00
              </td>
            </tr>
            <tr>
              <td colspan="5" class="text-end">
                <strong class="text-uppercase">Total Due</strong>
              </td>
              <td class="text-end">
                <strong>$2.700,00</strong>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Payments -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
