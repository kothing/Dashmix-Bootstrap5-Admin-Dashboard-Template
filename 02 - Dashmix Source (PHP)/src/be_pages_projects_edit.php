<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo13@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-full">
      <h1 class="fs-2 text-white my-2">
        <i class="fa fa-pencil-alt text-white-50 me-1"></i> Edit project
      </h1>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="block block-rounded block-bordered">
    <div class="block-content">
      <form action="be_pages_projects_edit.php" method="POST">
        <!-- Vital Info -->
        <h2 class="content-heading pt-0">Vital Info</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Some vital information about your project
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dm-project-edit-name">
                Name <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" id="dm-project-edit-name" name="dm-project-edit-name" placeholder="eg: example.com" value="Acme Inc">
            </div>
            <div class="row mb-4">
              <div class="col-lg-8">
                <label class="form-label" for="dm-project-edit-category">
                  Category <span class="text-danger">*</span>
                </label>
                <select class="form-select" id="dm-project-edit-category" name="dm-project-edit-category">
                  <option value="0">Select a category</option>
                  <option value="design-web">Web Design</option>
                  <option value="design-logo">Logo Design</option>
                  <option value="design-ux-ui">UX/UI Design</option>
                  <option value="dev-web">Web Development</option>
                  <option value="dev-app" selected>App Development</option>
                  <option value="dev-mobile">Mobile Development</option>
                  <option value="identity">Identity</option>
                  <option value="marketing">Marketing</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- END Vital Info -->

        <!-- Optional Info -->
        <h2 class="content-heading pt-0">Optional Info</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              You can add more details if you like but it is not required
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dm-project-edit-description">Description</label>
              <textarea class="form-control" id="dm-project-edit-description" name="dm-project-edit-description" rows="6" placeholder="What is this project about?">This is an important project where we should focus our main efforts for the next few years.</textarea>
            </div>
            <div class="row mb-4">
              <div class="col-md-6">
                <!-- Bootstrap Datepicker (.js-datepicker class are initialized in Helpers.jqDatepicker()) -->
                <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                <label class="form-label" for="dm-project-edit-deadline">Deadline</label>
                <input type="text" class="js-datepicker form-control" id="dm-project-edit-deadline" name="dm-project-edit-deadline" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" value="11/06/2023">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-6">
                <label class="form-label" for="dm-project-edit-color">Color</label>
                <input type="text" class="form-control" id="dm-project-edit-color" name="dm-project-edit-color" value="#0665d0">
              </div>
            </div>
          </div>
        </div>
        <!-- END Optional Info -->

        <!-- People -->
        <h2 class="content-heading pt-0">People</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Assigned people to this project
            </p>
          </div>
          <div class="col-lg-8">
            <div class="row items-push">
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-1" name="dm-project-edit-people-1" checked>
                  <label class="form-check-label" for="dm-project-edit-people-1">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(8, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('female'); ?></span>
                        <span class="d-block fs-sm text-muted">Web Designer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-2" name="dm-project-edit-people-2" checked>
                  <label class="form-check-label" for="dm-project-edit-people-2">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(9, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('male'); ?></span>
                        <span class="d-block fs-sm text-muted">Web Developer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-3" name="dm-project-edit-people-3">
                  <label class="form-check-label" for="dm-project-edit-people-3">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(10, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('male'); ?></span>
                        <span class="d-block fs-sm text-muted">Graphic Designer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-4" name="dm-project-edit-people-4">
                  <label class="form-check-label" for="dm-project-edit-people-4">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(4, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('female'); ?></span>
                        <span class="d-block fs-sm text-muted">Developer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-5" name="dm-project-edit-people-5" checked>
                  <label class="form-check-label" for="dm-project-edit-people-5">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(5, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('female'); ?></span>
                        <span class="d-block fs-sm text-muted">Marketing</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-6" name="dm-project-edit-people-6" checked>
                  <label class="form-check-label" for="dm-project-edit-people-6">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(11, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('male'); ?></span>
                        <span class="d-block fs-sm text-muted">Designer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-7" name="dm-project-edit-people-7">
                  <label class="form-check-label" for="dm-project-edit-people-7">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(15, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('male'); ?></span>
                        <span class="d-block fs-sm text-muted">Marketing</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-8" name="dm-project-edit-people-8">
                  <label class="form-check-label" for="dm-project-edit-people-8">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(14, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('male'); ?></span>
                        <span class="d-block fs-sm text-muted">Mobile Developer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="form-check form-block">
                  <input type="checkbox" class="form-check-input" id="dm-project-edit-people-9" name="dm-project-edit-people-9" checked>
                  <label class="form-check-label" for="dm-project-edit-people-9">
                    <span class="d-flex align-items-center">
                      <?php $dm->get_avatar(2, '', 48); ?>
                      <span class="ms-2">
                        <span class="fw-bold"><?php $dm->get_name('female'); ?></span>
                        <span class="d-block fs-sm text-muted">Lawyer</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END People -->

        <!-- Submit -->
        <div class="row push">
          <div class="col-lg-8 col-xl-5 offset-lg-4">
            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">
                <i class="fa fa-check-circle me-1 opacity-50"></i> Update Project
              </button>
            </div>
          </div>
        </div>
        <!-- END Submit -->
      </form>
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for BS Datepicker plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>

<!-- Page JS Helpers (BS Datepicker plugin) -->
<script>Dashmix.helpersOnLoad(['jq-datepicker']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>