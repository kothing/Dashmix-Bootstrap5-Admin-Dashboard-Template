<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Charts</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active" aria-current="page">Charts</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Chart.js Charts are initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
  <h2 class="content-heading">Chart.js</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Lines Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Lines</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Lines Chart Container -->
            <canvas id="js-chartjs-lines"></canvas>
          </div>
        </div>
      </div>
      <!-- END Lines Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Bars Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Bars</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Bars Chart Container -->
            <canvas id="js-chartjs-bars"></canvas>
          </div>
        </div>
      </div>
      <!-- END Bars Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Radar Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Radar</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Radar Chart Container -->
            <canvas id="js-chartjs-radar"></canvas>
          </div>
        </div>
      </div>
      <!-- END Radar Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Pie Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pie</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Pie Chart Container -->
            <canvas id="js-chartjs-pie"></canvas>
          </div>
        </div>
      </div>
      <!-- END Pie Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Donut Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Donut</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Donut Chart Container -->
            <canvas id="js-chartjs-donut"></canvas>
          </div>
        </div>
      </div>
      <!-- END Donut Chart -->
    </div>
    <div class="col-xl-6">
      <!-- Polar Area Chart -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Polar Area</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full text-center">
          <div class="py-3">
            <!-- Polar Area Chart Container -->
            <canvas id="js-chartjs-polar"></canvas>
          </div>
        </div>
      </div>
      <!-- END Polar Area Chart -->
    </div>
  </div>
  <!-- END Chart.js Charts -->

  <!-- Easy Pie Chart (.js-pie-chart class is initialized in Helpers.jqEasyPieChart()) -->
  <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
  <!-- Randomize Values Buttons functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
  <h2 class="content-heading">Easy Pie Chart</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Simple -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Simple</h3>
          <div class="block-options">
            <button type="button" class="js-pie-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#e04f1a" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>25mb<br><small class="text-muted">/100mb</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffb119" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>50%</span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#8dc451" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>90<br><small class="text-muted">/100</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#e04f1a" data-track-color="#e9e9e9">
                <span>25mb<br><small class="text-muted">/100mb</small></span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffb119" data-track-color="#e9e9e9">
                <span>50%</span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#8dc451" data-track-color="#e9e9e9">
                <span>90<br><small class="text-muted">/100</small></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Simple -->
    </div>
    <div class="col-xl-6">
      <!-- Avatar -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Avatar</h3>
          <div class="block-options">
            <button type="button" class="js-pie-randomize btn-block-option" data-bs-toggle="tooltip" title="Randomize">
              <i class="fa fa-random"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#e04f1a" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffb119" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#8dc451" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#e04f1a" data-track-color="#e9e9e9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffb119" data-track-color="#e9e9e9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Pie Chart Container -->
              <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#8dc451" data-track-color="#e9e9e9">
                <span>
                  <?php $dm->get_avatar(); ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Avatar -->
    </div>
  </div>
  <!-- END Easy Pie Chart -->

  <!-- Sparkline Charts (.js-sparkline class is initialized in Helpers.jqSparkline() -->
  <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
  <h2 class="content-heading">Sparkline</h2>
  <div class="row">
    <div class="col-xl-6">
      <!-- Lines -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Lines</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Line 1 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[9,5,2,4,6,1,3,5]"
                    data-line-color="#ffb119"
                    data-fill-color="#ffb119"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-semibold mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Line 2 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[590,610,980,1100,480,1380,963,1258]"
                    data-line-color="#8dc451"
                    data-fill-color="#8dc451"
                    data-tooltip-prefix="$"></span>
              <div class="fw-semibold mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Line 3 Container -->
              <span class="js-sparkline" data-type="line"
                    data-points="[5,12,13,14,8,6,7,9]"
                    data-line-color="#3c90df"
                    data-fill-color="#3c90df"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-semibold mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Lines -->
    </div>
    <div class="col-xl-6">
      <!-- Bars -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Bars</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Bar 1 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[9,5,2,4,6,1,3,5]"
                    data-bar-color="#ffb119"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-semibold mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Bar 2 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[590,610,980,1100,480,1380,963,1258]"
                    data-bar-color="#8dc451"
                    data-tooltip-prefix="$"></span>
              <div class="fw-semibold mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Bar 3 Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[5,12,13,14,8,6,7,9]"
                    data-bar-color="#3c90df"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-semibold mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Bars -->
    </div>
    <div class="col-xl-6">
      <!-- Pie -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pie</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Pie 1 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[34,69,54,23]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-suffix="Tickets"></span>
              <div class="fw-semibold mt-2">
                Tickets
              </div>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Pie 2 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[1350,1240,1100,950]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-prefix="$"></span>
              <div class="fw-semibold mt-2">
                Earnings
              </div>
            </div>
            <div class="col-12 col-md-4 py-3">
              <!-- Sparkline Pie 3 Container -->
              <span class="js-sparkline" data-type="pie"
                    data-points="[590,475,385,314]"
                    data-width="80px"
                    data-height="80px"
                    data-tooltip-suffix="Sales"></span>
              <div class="fw-semibold mt-2">
                Sales
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Pie -->
    </div>
    <div class="col-xl-6">
      <!-- Tristate -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Tristate</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full">
          <div class="row text-center">
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 1 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[1,0,1,0,-1,-1,1,1]"></span>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 2 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[-1,-1,1,1,1,0,1,-1]"></span>
            </div>
            <div class="col-6 col-md-4 py-3">
              <!-- Sparkline Tristate 3 Container -->
              <span class="js-sparkline" data-type="tristate" data-height="110px" data-points="[0,-1,0,1,-1,0,1,-1]"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- END Tristate -->
    </div>
  </div>
  <!-- END Sparkline Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Easy Pie Chart + jQuery Sparkline plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $dm->get_js('js/plugins/chart.js/chart.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_charts.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script>Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
