<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Table Styles</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active" aria-current="page">Styles</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Table -->

  <!-- Striped Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Striped Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-striped</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-striped table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Striped Table -->

  <!-- Hover Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Hover Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-hover</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-hover table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Hover Table -->

  <!-- Bordered Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bordered Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-bordered</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-bordered table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Bordered Table -->

  <!-- Borderless Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Borderless Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-borderless</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-borderless table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Borderless Table -->

  <!-- Small Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Small Table</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-sm</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-sm table-vcenter">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 9; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Small Table -->

  <!-- Table Head Light Background -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Table Head Light Background</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.bg-body-dark</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-vcenter">
        <thead>
          <tr class="bg-body-dark">
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Table Head Light Background -->

  <!-- Table Head Dark Background -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Table Head Dark Background</h3>
      <div class="block-options">
        <div class="block-options-item">
          <code>.table-dark</code>
        </div>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-vcenter">
        <thead>
          <tr class="table-dark">
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 1; $i < 7; $i++) { ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i; ?></th>
              <td class="fw-semibold">
                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
              </td>
              <td class="d-none d-sm-table-cell">
                <?php $dm->get_tag(); ?>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Table Head Dark Background -->

  <!-- Contextual Table -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Contextual Table</h3>
    </div>
    <div class="block-content">
      <table class="table table-borderless table-vcenter table-hover">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Name</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <th class="text-center" scope="row">1</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <th class="text-center" scope="row">2</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="table-primary">
            <th class="text-center" scope="row">3</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <th class="text-center" scope="row">4</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="table-warning">
            <th class="text-center" scope="row">5</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <th class="text-center" scope="row">6</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="table-danger">
            <th class="text-center" scope="row">7</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <th class="text-center" scope="row">8</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="table-info">
            <th class="text-center" scope="row">9</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <th class="text-center" scope="row">10</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
          <tr class="table-success">
            <th class="text-center" scope="row">11</th>
            <td class="fw-semibold"><?php $dm->get_name(); ?></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                  <i class="fa fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Contextual Table -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
