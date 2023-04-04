<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Form Elements</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active" aria-current="page">Elements</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Elements -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Elements</h3>
    </div>
    <div class="block-content">
      <form action="be_forms_elements.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <!-- Basic Elements -->
        <h2 class="content-heading pt-0">Basic</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              The most often used inputs you know and love
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-text-input">Text</label>
              <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-email-input">Email</label>
              <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-password-input">Password</label>
              <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-textarea-input">Textarea</label>
              <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
            </div>
          </div>
        </div>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Browser’s default select boxes, showcasing both simple and multiple selections
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-select">Select</label>
              <select class="form-select" id="example-select" name="example-select">
                <option selected>Open this select menu</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
                <option value="4">Option #4</option>
                <option value="5">Option #5</option>
                <option value="6">Option #6</option>
                <option value="7">Option #7</option>
                <option value="8">Option #8</option>
                <option value="9">Option #9</option>
                <option value="10">Option #10</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-select-multiple">Multiple Select</label>
              <select class="form-select" id="example-select-multiple" name="example-select-multiple" size="5" multiple>
                <option selected>Open this select menu</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
                <option value="4">Option #4</option>
                <option value="5">Option #5</option>
                <option value="6">Option #6</option>
                <option value="7">Option #7</option>
                <option value="8">Option #8</option>
                <option value="9">Option #9</option>
                <option value="10">Option #10</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Checkboxes, radios and switches in various layouts
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label">Checkboxes</label>
              <div class="space-y-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1" checked>
                  <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                  <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default3" name="example-checkbox-default3" disabled>
                  <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Inline Checkboxes</label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1" checked>
                  <label class="form-check-label" for="example-checkbox-inline1">Option 1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                  <label class="form-check-label" for="example-checkbox-inline2">Option 2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3" disabled>
                  <label class="form-check-label" for="example-checkbox-inline3">Option 3</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Radios</label>
              <div class="space-y-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                  <label class="form-check-label" for="example-radios-default1">Option 1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                  <label class="form-check-label" for="example-radios-default2">Option 2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="example-radios-default3" name="example-radios-default" value="option2" disabled>
                  <label class="form-check-label" for="example-radios-default3">Option 3</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Inline Radios</label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked>
                  <label class="form-check-label" for="example-radios-inline1">Option 1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                  <label class="form-check-label" for="example-radios-inline2">Option 2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="example-radios-inline3" name="example-radios-inline" value="option2" disabled>
                  <label class="form-check-label" for="example-radios-inline3">Option 3</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Switches</label>
              <div class="space-y-2">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-default1" name="example-switch-default1" checked>
                  <label class="form-check-label" for="example-switch-default1">Option 1</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-default2" name="example-switch-default2">
                  <label class="form-check-label" for="example-switch-default2">Option 2</label>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-default3" name="example-switch-default3" disabled>
                  <label class="form-check-label" for="example-switch-default3">Option 3</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">Inline Switches</label>
              <div class="space-x-2">
                <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-inline1" name="example-switch-inline1" checked>
                  <label class="form-check-label" for="example-switch-inline1">Option 1</label>
                </div>
                <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-inline2" name="example-switch-inline2">
                  <label class="form-check-label" for="example-switch-inline2">Option 2</label>
                </div>
                <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="example-switch-inline3" name="example-switch-inline3" disabled>
                  <label class="form-check-label" for="example-switch-inline3">Option 3</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              File inputs, showcasing both single and multiple files
            </p>
          </div>
          <div class="col-lg-8 col-xl-5 overflow-hidden">
            <div class="mb-4">
              <label class="form-label" for="example-file-input">File Input</label>
              <input class="form-control" type="file" id="example-file-input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-file-input-multiple">File Input (Multiple)</label>
              <input class="form-control" type="file" id="example-file-input-multiple" multiple>
            </div>
          </div>
        </div>
        <!-- END Basic Elements -->

        <!-- Checkbox Blocks -->
        <h2 class="content-heading">Checkbox Blocks</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              Block based checkboxes which enable you to put any content inside them, perfect for modern selections
            </p>
          </div>
          <div class="col-lg-8">
            <div class="row items-push">
              <div class="col-md-6">
                <div class="form-check form-block">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-block1" name="example-checkbox-block1">
                  <label class="form-check-label" for="example-checkbox-block1">
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
              <div class="col-md-6">
                <div class="form-check form-block">
                  <input class="form-check-input" type="checkbox" value="" id="example-checkbox-block2" name="example-checkbox-block2" checked>
                  <label class="form-check-label" for="example-checkbox-block2">
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
            </div>
          </div>
        </div>
        <!-- END Checkbox Blocks -->

        <!-- Radio Blocks -->
        <h2 class="content-heading">Radio Blocks</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              You could also use block based radios, perfect for custom content selections such as modern pricing tables
            </p>
          </div>
          <div class="col-lg-8">
            <div class="row items-push">  
              <div class="col-md-4">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="example-radio-block1" name="example-radio-block">
                  <label class="form-check-label" for="example-radio-block1">
                    <span class="d-block fw-normal text-center my-3">
                      <span class="fs-4 fw-semibold">Personal</span>
                      <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$5<small> /m</small></span>
                      <span class="d-block mb-2">10 projects</span>
                      <span class="d-block mb-2">2 clients</span>
                      <span class="d-block mb-2">500MB</span>
                      <span class="d-block mb-2">Email Support</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="example-radio-block2" name="example-radio-block">
                  <label class="form-check-label" for="example-radio-block2">
                    <span class="d-block fw-normal text-center my-3">
                      <span class="fs-4 fw-semibold">Business</span>
                      <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$15<small> /m</small></span>
                      <span class="d-block mb-2">100 projects</span>
                      <span class="d-block mb-2">15 clients</span>
                      <span class="d-block mb-2">2GB</span>
                      <span class="d-block mb-2">Full Support</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="example-radio-block3" name="example-radio-block">
                  <label class="form-check-label" for="example-radio-block3">
                    <span class="d-block fw-normal text-center my-3">
                      <span class="fs-4 fw-semibold">VIP</span>
                      <span class="d-block fs-2 fw-light py-3 m-3 bg-body-light rounded">$30<small> /m</small></span>
                      <span class="d-block mb-2">500 projects</span>
                      <span class="d-block mb-2">50 clients</span>
                      <span class="d-block mb-2">10GB</span>
                      <span class="d-block mb-2">Full Support</span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Radio Blocks -->

        <!-- Alternative Input Style -->
        <h2 class="content-heading">Alternative Style</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can enable an alternative style with background color
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-text-input-alt">Text</label>
              <input type="text" class="form-control form-control-alt" id="example-text-input-alt" name="example-text-input-alt" placeholder="Text Input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-password-input-alt">Password</label>
              <input type="password" class="form-control form-control-alt" id="example-password-input-alt" name="example-password-input-alt" placeholder="Password Input">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-textarea-input-alt">Textarea</label>
              <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="example-textarea-input-alt" rows="7" placeholder="Textarea content.."></textarea>
            </div>
          </div>
        </div>
        <!-- END Alternative Input Style -->

        <!-- Floating Labels -->
        <h2 class="content-heading">Floating Labels</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can have pure, CSS based, floating labels
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="example-text-input-readonly-floating" name="example-text-input-readonly-floating" placeholder="Enter a username" value="john.doe" readonly>
              <label for="example-text-input-readonly-floating">Username (readonly)</label>
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="example-text-input-floating" name="example-text-input-floating" placeholder="John Doe">
              <label class="form-label" for="example-text-input-floating">Name</label>
            </div>
            <div class="form-floating mb-4">
              <input type="email" class="form-control" id="example-email-input-floating" name="example-email-input-floating" placeholder="john.doe@example.com">
              <label class="form-label" for="example-email-input-floating">Email address</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="example-password-input-floating" name="example-password-input-floating" placeholder="Password">
              <label class="form-label" for="example-password-input-floating">Password</label>
            </div>
            <div class="form-floating mb-4">
              <select class="form-select" id="example-select-floating" name="example-select-floating" aria-label="Floating label select example">
                <option selected>Select an option</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <label class="form-label" for="example-select-floating">Category</label>
            </div>
            <div class="form-floating mb-4">
              <textarea class="form-control" id="example-textarea-floating" name="example-textarea-floating" style="height: 200px" placeholder="Leave a comment here"></textarea>
              <label class="form-label" for="example-textarea-floating">Comments</label>
            </div>
          </div>
        </div>
        <!-- END Floating Labels -->

        <!-- Static Inputs -->
        <h2 class="content-heading">Static</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can easily have static readonly inputs with different styles
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-static-input-plain">Plain Text</label>
              <input type="text" readonly class="form-control-plaintext" id="example-static-input-plain" name="example-static-input-plain" value="email@example.com">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-static-input-readonly">Read Only</label>
              <input type="text" readonly class="form-control" id="example-static-input-readonly" name="example-static-input-readonly" value="email@example.com">
            </div>
          </div>
        </div>
        <!-- END Static Inputs -->

        <!-- States -->
        <h2 class="content-heading">States</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              There are various states an input can have
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-text-input-valid">Valid State</label>
              <input type="text" class="form-control is-valid" id="example-text-input-valid" name="example-text-input-valid" placeholder="Default Style..">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control form-control-alt is-valid" id="example-text-input-valid-alt" name="example-text-input-valid-alt" placeholder="Alternative Style..">
              <div class="valid-feedback">Valid feedback</div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-text-input-invalid">Invalid State</label>
              <input type="text" class="form-control is-invalid" id="example-text-input-invalid" name="example-text-input-invalid" placeholder="Default Style..">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control form-control-alt is-invalid" id="example-text-input-invalid-alt" name="example-text-input-invalid-alt" placeholder="Alternative Style..">
              <div class="invalid-feedback">Invalid feedback</div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-disabled-input">Disabled</label>
              <input type="text" class="form-control" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled State.." disabled>
            </div>
          </div>
        </div>
        <!-- END States -->

        <!-- Sizes -->
        <h2 class="content-heading">Sizes</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can also alter the size of your inputs
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-text-input-sm">Small</label>
              <input type="text" class="form-control form-control-sm" id="example-text-input-sm" name="example-text-input-sm" placeholder="form-control-sm">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control form-control-alt form-control-sm" id="example-text-input-sm-alt" name="example-text-input-sm-alt" placeholder="form-control-sm">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-text-input-normal">Normal</label>
              <input type="text" class="form-control" id="example-text-input-normal" name="example-text-input-normal" placeholder="..">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control form-control-alt" id="example-text-input-normal-alt" name="example-text-input-normal-alt" placeholder="..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-text-input-lg">Large</label>
              <input type="text" class="form-control form-control-lg" id="example-text-input-lg" name="example-text-input-lg" placeholder="form-control-lg">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control form-control-alt form-control-lg" id="example-text-input-lg-alt" name="example-text-input-lg-alt" placeholder="form-control-lg">
            </div>
          </div>
        </div>
        <!-- Sizes -->

        <!-- Grid Sizes -->
        <h2 class="content-heading">Grid Sizes</h2>
        <div class="row items-push">
          <div class="col-lg-4">
            <p class="text-muted">
              You can also take advantage of the grid to manipulate your input width
            </p>
          </div>
          <div class="col-lg-8">
            <div class="row mb-4">
              <label class="form-label col-12">Label in the Grid</label>
              <div class="col-3">
                <input type="text" class="form-control" placeholder="col-3">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-4">
                <input type="text" class="form-control" placeholder="col-4">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <input type="text" class="form-control" placeholder="col-5">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <input type="text" class="form-control" placeholder="col-6">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-7">
                <input type="text" class="form-control" placeholder="col-7">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-8">
                <input type="text" class="form-control" placeholder="col-8">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-9">
                <input type="text" class="form-control" placeholder="col-9">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-10">
                <input type="text" class="form-control" placeholder="col-10">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-11">
                <input type="text" class="form-control" placeholder="col-11">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12">
                <input type="text" class="form-control" placeholder="col-12">
              </div>
            </div>
          </div>
        </div>
        <!-- END Grid Sizes -->
      </form>
    </div>
  </div>
  <!-- END Elements -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
