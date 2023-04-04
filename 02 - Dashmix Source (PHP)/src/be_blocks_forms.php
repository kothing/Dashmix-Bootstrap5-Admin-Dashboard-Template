<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Forms in Blocks</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blocks</li>
          <li class="breadcrumb-item active" aria-current="page">Forms</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Form Submission in Options -->
  <div class="row">
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="submit" class="btn-block-option">
                <i class="fa fa-fw fa-check"></i> Submit
              </button>
              <button type="reset" class="btn-block-option">Reset</button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form-username">Username</label>
                  <input type="text" class="form-control" id="block-form-username" name="block-form-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form-password">Password</label>
                  <input type="password" class="form-control" id="block-form-password" name="block-form-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form1-remember-me" name="block-form1-remember-me">
                    <label class="form-check-label" for="block-form1-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default block-header-rtl">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="reset" class="btn-block-option">Reset</button>
              <button type="submit" class="btn-block-option">
                <i class="fa fa-fw fa-check"></i> Submit
              </button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form2-username">Username</label>
                  <input type="text" class="form-control" id="block-form2-username" name="block-form2-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form2-password">Password</label>
                  <input type="password" class="form-control" id="block-form2-password" name="block-form2-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form2-remember-me" name="block-form2-remember-me">
                    <label class="form-check-label" for="block-form2-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="submit" class="btn btn-sm btn-outline-primary">
                <i class="fa fa-check"></i> Submit
              </button>
              <button type="reset" class="btn btn-sm btn-outline-danger">Reset</button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form3-username">Username</label>
                  <input type="text" class="form-control" id="block-form3-username" name="block-form3-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form3-password">Password</label>
                  <input type="password" class="form-control" id="block-form3-password" name="block-form3-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form3-remember-me" name="block-form3-remember-me">
                    <label class="form-check-label" for="block-form3-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default block-header-rtl">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="reset" class="btn btn-sm btn-outline-danger">Reset</button>
              <button type="submit" class="btn btn-sm btn-outline-primary">
                <i class="fa fa-check"></i> Submit
              </button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form4-username">Username</label>
                  <input type="text" class="form-control" id="block-form4-username" name="block-form4-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form4-password">Password</label>
                  <input type="password" class="form-control" id="block-form4-password" name="block-form4-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form4-remember-me" name="block-form4-remember-me">
                    <label class="form-check-label" for="block-form4-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="submit" class="btn btn-sm btn-primary">
                <i class="fa fa-check opacity-50 me-1"></i> Submit
              </button>
              <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form5-username">Username</label>
                  <input type="text" class="form-control form-control-alt" id="block-form5-username" name="block-form5-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form5-password">Password</label>
                  <input type="password" class="form-control form-control-alt" id="block-form5-password" name="block-form5-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form5-remember-me" name="block-form5-remember-me">
                    <label class="form-check-label" for="block-form5-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default block-header-rtl">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
              <button type="submit" class="btn btn-sm btn-primary">
                <i class="fa fa-check opacity-50 me-1"></i> Submit
              </button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form6-username">Username</label>
                  <input type="text" class="form-control form-control-alt" id="block-form6-username" name="block-form6-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form6-password">Password</label>
                  <input type="password" class="form-control form-control-alt" id="block-form6-password" name="block-form6-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form6-remember-me" name="block-form6-remember-me">
                    <label class="form-check-label" for="block-form6-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form7-username">Username</label>
                  <input type="text" class="form-control form-control-alt" id="block-form7-username" name="block-form7-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form7-password">Password</label>
                  <input type="password" class="form-control form-control-alt" id="block-form7-password" name="block-form7-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form7-remember-me" name="block-form7-remember-me">
                    <label class="form-check-label" for="block-form7-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light">
            <button type="submit" class="btn btn-sm btn-alt-primary">
              <i class="fa fa-check opacity-50 me-1"></i> Submit
            </button>
            <button type="reset" class="btn btn-sm btn-alt-secondary">
              <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form action="be_blocks_forms.php" method="POST">
        <div class="block block-rounded">
          <div class="block-header block-header-default block-header-rtl">
            <h3 class="block-title">Block Form</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <div class="row justify-content-center py-sm-3 py-md-5">
              <div class="col-sm-10 col-md-8">
                <div class="mb-4">
                  <label class="form-label" for="block-form8-username">Username</label>
                  <input type="text" class="form-control form-control-alt" id="block-form8-username" name="block-form8-username" placeholder="Enter your username..">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="block-form8-password">Password</label>
                  <input type="password" class="form-control form-control-alt" id="block-form8-password" name="block-form8-password" placeholder="Enter your password..">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="block-form8-remember-me" name="block-form8-remember-me">
                    <label class="form-check-label" for="block-form8-remember-me">Remember Me?</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light text-end">
            <button type="reset" class="btn btn-sm btn-alt-secondary">
              <i class="fa fa-sync-alt opacity-50 me-1"></i> Reset
            </button>
            <button type="submit" class="btn btn-sm btn-alt-primary">
              <i class="fa fa-check opacity-50 me-1"></i> Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Form Submission in Options -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
