<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $dm->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $dm->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.css'); ?>
<?php $dm->get_css('js/plugins/dropzone/min/dropzone.min.css'); ?>
<?php $dm->get_css('js/plugins/flatpickr/flatpickr.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Form Plugins</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active" aria-current="page">Plugins</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.jsFlatpickr()) -->
  <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Flatpickr Datetimepicker</h3>
    </div>
    <div class="block-content block-content-full">
      <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading pt-0">Datepickers</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can easily change the date format to match your preference
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-default">Default format</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-custom">Custom format</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-friendly">Friendly format</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-friendly" name="example-flatpickr-friendly" placeholder="F j, Y" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading pt-0">Datepicker Range</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              A date range mode is available, very useful for booking or calendar web apps
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row">
              <div class="col-xl-7 mb-4">
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-range" name="example-flatpickr-range" placeholder="Select Date Range" data-mode="range" data-min-date="today">
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading pt-0">Timepicker</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can also enable a standalone or integrated timepicker
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-time-standalone">Standalone</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-time-standalone" name="example-flatpickr-time-standalone" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-time-standalone-24">Standalone (24-hour format)</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-time-standalone-24" name="example-flatpickr-time-standalone-24" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-datetime">Calendar and time picker</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-datetime" name="example-flatpickr-datetime" data-enable-time="true">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <label class="form-label" for="example-flatpickr-datetime-24">Calendar and time picker (24-hour format)</label>
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-datetime-24" name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true">
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading pt-0">Inline Mode</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              The plugin also supports an inline mode
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row">
              <div class="col-xl-7 mb-4">
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline" name="example-flatpickr-inline" placeholder="Inline Datepicker" data-inline="true">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 mb-4">
                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline-time" name="example-flatpickr-inline-time" placeholder="Inline Datetimepicker" data-inline="true" data-enable-time="true">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Flatpickr Datetimepicker -->

  <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange classes are initialized in Helpers.jqDatepicker()) -->
  <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Datepicker</h3>
    </div>
    <div class="block-content block-content-full">
      <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading pt-0">Date Formats</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can easily change the date format to match your preference
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="row">
              <div class="col-xl-4 mb-4">
                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
              </div>
              <div class="col-xl-4 mb-4">
                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
              </div>
              <div class="col-xl-4 mb-4">
                <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading">Date Range</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              A date range mode is available, very useful for booking or calendar web apps
            </p>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="mb-4">
              <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                <input type="text" class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                <span class="input-group-text fw-semibold">
                  <i class="fa fa-fw fa-arrow-right"></i>
                </span>
                <input type="text" class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
              </div>
            </div>
          </div>
        </div>
        <h2 class="content-heading">Inline Datepicker</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              The plugin also supports an inline mode
            </p>
          </div>
          <div class="col-lg-8">
            <div class="mb-4">
              <div class="js-datepicker" data-week-start="1" data-today-highlight="true"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Bootstrap Datepicker -->

  <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.jqMaxlength()) -->
  <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Bootstrap Maxlength</h3>
    </div>
    <div class="block-content block-content-full">
      <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading pt-0">Features</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Check out how many powerful options are availble
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="example-maxlength1">Normal</label>
              <input type="text" class="js-maxlength form-control" id="example-maxlength1" name="example-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength2">Threshold</label>
              <input type="text" class="js-maxlength form-control" id="example-maxlength2" name="example-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength3">Always Show</label>
              <input type="text" class="js-maxlength form-control" id="example-maxlength3" name="example-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength4">Custom Text</label>
              <input type="text" class="js-maxlength form-control" id="example-maxlength4" name="example-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-maxlength5">Themed Label</label>
              <input type="text" class="js-maxlength form-control" id="example-maxlength5" name="example-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge bg-primary" data-limit-reached-class="badge bg-primary">
            </div>
          </div>
        </div>
        <h2 class="content-heading">Position</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              You can position the tooltip in different spots
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <input type="text" class="js-maxlength form-control" id="example-maxlength6" name="example-maxlength6" maxlength="20" placeholder="Top.." data-always-show="true" data-placement="top">
            </div>
            <div class="mb-4">
              <input type="text" class="js-maxlength form-control" id="example-maxlength7" name="example-maxlength7" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
            </div>
            <div class="mb-4">
              <input type="text" class="js-maxlength form-control" id="example-maxlength8" name="example-maxlength8" maxlength="20" placeholder="Right.." data-always-show="true" data-placement="right">
            </div>
            <div class="mb-4">
              <input type="text" class="js-maxlength form-control" id="example-maxlength9" name="example-maxlength9" maxlength="20" placeholder="Bottom Right.." data-always-show="true" data-placement="bottom-right">
            </div>
          </div>
        </div>
        <h2 class="content-heading">Textarea</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              There is support for textareas as well
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="5" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END Bootstrap Maxlength -->

  <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
  <!-- For more info and examples you can check out https://github.com/select2/select2 -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Select2</h3>
    </div>
    <div class="block-content block-content-full">
      <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
        <h2 class="content-heading pt-0">Normal Select Box</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Default select input turns into a searchable and dynamic list
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <select class="js-select2 form-select" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                <option value="1">HTML</option>
                <option value="2">CSS</option>
                <option value="3">JavaScript</option>
                <option value="4">PHP</option>
                <option value="5">MySQL</option>
                <option value="6">Ruby</option>
                <option value="7">Angular</option>
                <option value="8">React</option>
                <option value="9">Vue.js</option>
              </select>
            </div>
          </div>
        </div>
        <h2 class="content-heading">Multiple Select Box</h2>
        <div class="row">
          <div class="col-lg-4">
            <p class="text-muted">
              Default multiple select input turns into a tags input
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <select class="js-select2 form-select" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                <option value="1" selected>HTML</option>
                <option value="2" selected>CSS</option>
                <option value="3">JavaScript</option>
                <option value="4">PHP</option>
                <option value="5">MySQL</option>
                <option value="6">Ruby</option>
                <option value="7">Angular</option>
                <option value="8">React</option>
                <option value="9">Vue.js</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      <h2 class="content-heading border-bottom mb-4 pb-2">Select2 in a modal</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="fs-sm text-muted">
            You can easily init it in a modal
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <button type="button" class="btn btn-alt-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-select2">Launch Modal</button>

          <!-- Select2 in a modal -->
          <div class="modal" id="modal-block-select2" tabindex="-1" role="dialog" aria-labelledby="modal-block-select2" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Select2 in a modal</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Select2 is initialized at the bottom of the page -->
                    <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <select class="js-select2 form-select" id="example-select2-modal" name="example-select2-modal" style="width: 100%;" data-container="#modal-block-select2" data-placeholder="Choose one..">
                          <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                          <option value="1">HTML</option>
                          <option value="2">CSS</option>
                          <option value="3">JavaScript</option>
                          <option value="4">PHP</option>
                          <option value="5">MySQL</option>
                          <option value="6">Ruby</option>
                          <option value="7">Angular</option>
                          <option value="8">React</option>
                          <option value="9">Vue.js</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <select class="js-select2 form-select" id="example-select2-multiple-modal" name="example-select2-multiple-modal" style="width: 100%;" data-container="#modal-block-select2" data-placeholder="Choose many.." multiple>
                          <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                          <option value="1" selected>HTML</option>
                          <option value="2" selected>CSS</option>
                          <option value="3">JavaScript</option>
                          <option value="4">PHP</option>
                          <option value="5">MySQL</option>
                          <option value="6">Ruby</option>
                          <option value="7">Angular</option>
                          <option value="8">React</option>
                          <option value="9">Vue.js</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Perfect</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Select2 in a modal -->
        </div>
      </div>
    </div>
  </div>
  <!-- END Select2 -->

  <!-- Ion Range Sliders (.js-rangeslider class is initialized in Helpers.jqRangeslider()) -->
  <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Ion Range Sliders</h3>
    </div>
    <div class="block-content block-content-full">
      <h2 class="content-heading">Examples</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Turn your inputs into modern and clean sliders
          </p>
        </div>
        <div class="col-lg-8 col-xl-6">
          <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
            <div class="mb-5">
              <label class="form-label mb-4">Normal</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider1" name="example-rangeslider1" value="25">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Min Max</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider2" name="example-rangeslider2" value="330" data-min="0" data-max="1000">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Grid</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider3" name="example-rangeslider3" value="660" data-grid="true" data-min="0" data-max="1000">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Double</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Negative</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider5" name="example-rangeslider5" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-150" data-to="150">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Step</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider6" name="example-rangeslider6" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-250" data-to="250" data-step="50">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Custom</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider7" name="example-rangeslider7" data-grid="true" data-from="5" data-values="January, February, March, April, May, June, July, August, September, October, November, December">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Prefixes</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">
            </div>
            <div class="mb-5">
              <label class="form-label mb-4">Postfixes</label>
              <input type="text" class="js-rangeslider" id="example-rangeslider9" name="example-rangeslider9" data-grid="true" data-min="-20" data-max="90" data-from="35" data-postfix="&deg;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Ion Range Sliders -->

  <!-- Masked Inputs (.js-masked-* classes are initialized in Helpers.jqMaskedInputs()) -->
  <!-- For more info and examples you can check out https://github.com/digitalBush/jquery.maskedinput -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Masked Inputs</h3>
    </div>
    <div class="block-content block-content-full">
      <h2 class="content-heading">Examples</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            It enables to easily enter a value following a specific format
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
            <div class="mb-4">
              <label class="form-label" for="example-masked-date1">Date (format 1)</label>
              <input type="text" class="js-masked-date form-control" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-date2">Date (format 2)</label>
              <input type="text" class="js-masked-date-dash form-control" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-phone">Phone</label>
              <input type="text" class="js-masked-phone form-control" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-phone-ext">Phone (Ext)</label>
              <input type="text" class="js-masked-phone-ext form-control" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-taxid">Tax ID</label>
              <input type="text" class="js-masked-taxid form-control" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-ssn">SSN</label>
              <input type="text" class="js-masked-ssn form-control" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-pkey">Product Key</label>
              <input type="text" class="js-masked-pkey form-control" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
            </div>
            <div class="mb-4">
              <label class="form-label" for="example-masked-time">Time Format</label>
              <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Masked Inputs -->

  <!-- Password Strength Meter (.js-pw-strength class is initialized in Helpers.jqPwStrength()) -->
  <!-- For more info and examples you can check out https://github.com/ablanco/jquery.pw-strength.bootstrap -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Password Strength Meter</h3>
    </div>
    <div class="block-content block-content-full">
      <h2 class="content-heading">Examples</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Super easy to init and provide info about the complexity of the given password
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <form action="be_forms_plugins.php" method="POST" onsubmit="return false;">
            <!-- Password Strength Meter Example 1 -->
            <div class="js-pw-strength-container row mb-4">
              <label class="form-label col-12" for="example-pw-strength1">Password</label>
              <div class="col-lg-8">
                <input type="password" class="js-pw-strength form-control" id="example-pw-strength1" name="example-pw-strength1">
                <div class="js-pw-strength-progress pw-strength-progress mt-1"></div>
              </div>
              <div class="col-lg-4">
                <p class="js-pw-strength-feedback form-text mb-0"></p>
              </div>
            </div>
            <div class="js-pw-strength-container mb-4">
              <label class="form-label" for="example-pw-strength2">Another Password Field</label>
              <input type="password" class="js-pw-strength form-control" id="example-pw-strength2" name="example-pw-strength2">
              <div class="js-pw-strength-progress pw-strength-progress mt-1"></div>
              <p class="js-pw-strength-feedback form-text mb-0"></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Password Strength Meter -->

  <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
  <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Dropzone</h3>
    </div>
    <div class="block-content block-content-full">
      <h2 class="content-heading">Asynchronous File Uploads</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Drag and drop sections for your file uploads
          </p>
        </div>
        <div class="col-lg-8 col-xl-5">
          <!-- DropzoneJS Container -->
          <form class="dropzone" action="be_forms_plugins.php"></form>
        </div>
      </div>
    </div>
  </div>
  <!-- END Dropzone -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider + Password Strength Meter plugins) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $dm->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $dm->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $dm->get_js('js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>
<?php $dm->get_js('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js'); ?>
<?php $dm->get_js('js/plugins/dropzone/min/dropzone.min.js'); ?>
<?php $dm->get_js('js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js'); ?>
<?php $dm->get_js('js/plugins/flatpickr/flatpickr.min.js'); ?>

<!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
<script>Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
