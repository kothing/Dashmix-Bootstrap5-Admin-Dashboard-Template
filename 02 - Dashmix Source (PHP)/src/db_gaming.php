<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/gaming/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/bg_minecraft.png');">
  <div class="bg-black-10">
    <div class="content content-full content-top">
      <div class="pt-5 pb-4 text-center">
        <h1 class="h2 fw-bold mb-2 text-white">
          Server: MC_1685
        </h1>
        <h2 class="h5 text-white-75 mb-0">
          1GHz - 1GB RAM
        </h2>
        <span class="badge bg-success mt-2">
          <i class="fa fa-spinner fa-spin me-1"></i> Running
        </span>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
  <!-- Live Stats -->
  <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.jqSparkline() -->
  <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
  <div class="row">
    <div class="col-md-6">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content d-flex justify-content-between">
          <div class="me-3">
            <p class="text-muted mb-0">
              People Online
            </p>
            <p class="fs-3 fw-light mb-0">
              12 <small>/16</small>
            </p>
          </div>
          <div>
            <i class="fa fa-2x fa-users text-xeco-lighter"></i>
          </div>
        </div>
        <div class="block-content block-content-full overflow-hidden">
          <!-- Sparkline Gaming People Online Container -->
          <span class="js-sparkline" data-type="line"
                data-points="[4,2,3,5,6,3,4,6]"
                data-width="100%"
                data-height="110px"
                data-chart-range-min="0"
                data-line-color="#83b451"
                data-fill-color="rgba(104,149,80,.1)"
                data-spot-color="transparent"
                data-min-spot-color="transparent"
                data-max-spot-color="transparent"
                data-highlight-spot-color="#83b451"
                data-highlight-line-color="#83b451"
                data-tooltip-suffix="People"></span>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-lg-flex align-items-lg-center justify-content-lg-between">
          <div class="text-center text-lg-start">
            <!-- Sparkline Gaming CPU Usage Container -->
            <span id="dm-gaming-sl-cpu" class="js-sparkline" data-type="line"
                  data-points="[12,15,15,13,14,21,32,21,12,13,12,32]"
                  data-width="160px"
                  data-height="60px"
                  data-chart-range-min="0"
                  data-chart-range-max="100"
                  data-line-color="#ffb119"
                  data-fill-color="rgba(255,177,25,.1)"
                  data-spot-color="transparent"
                  data-min-spot-color="transparent"
                  data-max-spot-color="transparent"
                  data-highlight-spot-color="#ffb119"
                  data-highlight-line-color="#ffb119"
                  data-tooltip-suffix="%"></span>
          </div>
          <div class="text-center text-lg-end mt-4 mt-lg-0 ms-lg-3">
            <p class="text-muted mb-0">
              CPU Usage
            </p>
            <p class="fs-3 fw-light mb-0">
              <span id="dm-gaming-sl-cpu-current">32</span>%
            </p>
          </div>
        </div>
      </a>
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-content block-content-full d-lg-flex align-items-lg-center justify-content-lg-between">
          <div class="text-center text-lg-start">
            <!-- Sparkline Gaming RAM Usage Container -->
            <span id="dm-gaming-sl-ram" class="js-sparkline" data-type="line"
                  data-points="[250,230,220,250,245,290,283,262,254,274,289,250]"
                  data-width="160px"
                  data-height="60px"
                  data-chart-range-min="0"
                  data-chart-range-max="1000"
                  data-line-color="#de4f28"
                  data-fill-color="rgba(224,79,26,.1)"
                  data-spot-color="transparent"
                  data-min-spot-color="transparent"
                  data-max-spot-color="transparent"
                  data-highlight-spot-color="#de4f28"
                  data-highlight-line-color="#de4f28"
                  data-tooltip-suffix="MB"></span>
          </div>
          <div class="text-center text-lg-end mt-4 mt-lg-0 ms-lg-3">
            <p class="text-muted mb-0">
              RAM Usage
            </p>
            <p class="fs-3 fw-light mb-0">
              <span id="dm-gaming-sl-ram-current">250</span>MB
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- END Live Stats -->

  <!-- Console -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Console Log</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="fa fa-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <form action="db_gaming.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" id="dm-gaming-send-command" name="dm-gaming-send-command" placeholder="...">
          <button type="submit" class="btn btn-primary">Send Command</button>
        </div>
      </form>
    </div>
    <div class="block-content block-content-full">
      <div class="bg-body-dark rounded p-3">
        <pre class="mb-0"><code class="fs-sm">[12:00:02] MC_1685: Server started!
[12:00:03] MC_1685: Using 243MB of RAM
[12:00:05] MC_1685: Spawning.. 15%
[12:00:06] MC_1685: Spawning.. 56%
[12:00:09] MC_1685: Spawning.. 78%
[12:00:10] MC_1685: Spawning.. 100%, Done!
[12:03:32] MC_1685: 'johngamer' Player joined the server!
[12:03:43] MC_1685: 'craft3222' Player joined the server!
[12:04:54] MC_1685: 'minec34' Player joined the server!
[12:05:55] MC_1685: 'matth' Player joined the server!</code></pre>
      </div>
    </div>
  </div>
  <!-- END Console -->

  <!-- Plugins -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Plugins</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="fa fa-plus"></i> Add New
        </button>
        <button type="button" class="btn-block-option">
          <i class="fa fa-wrench"></i>
        </button>
      </div>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-hover table-striped table-vcenter">
          <thead>
            <tr>
              <th>Name</th>
              <th class="text-center">Version</th>
              <th class="text-center">Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="fw-semibold mb-1">
                  WorldEdit
                </p>
                <p class="fs-sm text-muted">
                  An in-game map editor for both creative and survival modes
                </p>
              </td>
              <td class="text-center">
                <span class="fs-sm">v7.3.3</span>
              </td>
              <td class="text-center">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="dm-gaming-plugin1" name="dm-gaming-plugin1" value="1" checked>
                  <label class="form-check-label" for="dm-gaming-plugin1"></label>
                </div>
              </td>
              <td class="text-center">
                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">Uninstall</a>
              </td>
            </tr>
            <tr>
              <td>
                <p class="fw-semibold mb-1">
                  PermissionsEx
                </p>
                <p class="fs-sm text-muted">
                  It is a new permissions plugin, based on Permissions ideas and supports all of its features.
                </p>
              </td>
              <td class="text-center">
                <span class="fs-sm">v2.5.0</span>
              </td>
              <td class="text-center">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="dm-gaming-plugin2" name="dm-gaming-plugin2" value="1" checked>
                  <label class="form-check-label" for="dm-gaming-plugin2"></label>
                </div>
              </td>
              <td class="text-center">
                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">Uninstall</a>
              </td>
            </tr>
            <tr>
              <td>
                <p class="fw-semibold mb-1">
                  WorldGuard
                </p>
                <p class="fs-sm text-muted">
                  It is a powerful plugin with a large bag of tricks for server owners, server map makers, regular survival servers, and everyone in between!
                </p>
              </td>
              <td class="text-center">
                <span class="fs-sm">v10.1.2</span>
              </td>
              <td class="text-center">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="dm-gaming-plugin3" name="dm-gaming-plugin3" value="1" checked>
                  <label class="form-check-label" for="dm-gaming-plugin3"></label>
                </div>
              </td>
              <td class="text-center">
                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">Uninstall</a>
              </td>
            </tr>
            <tr>
              <td>
                <p class="fw-semibold mb-1">
                  Vault
                </p>
                <p class="fs-sm text-muted">
                  A Permissions, Chat, &amp; Economy API to give plugins easy hooks into these systems without needing to hook or depend on each individual plugin themselves.
                </p>
              </td>
              <td class="text-center">
                <span class="fs-sm">v1.9.2</span>
              </td>
              <td class="text-center">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="dm-gaming-plugin4" name="dm-gaming-plugin4" value="1" checked>
                  <label class="form-check-label" for="dm-gaming-plugin4"></label>
                </div>
              </td>
              <td class="text-center">
                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">Uninstall</a>
              </td>
            </tr>
            <tr>
              <td>
                <p class="fw-semibold mb-1">
                  Essentials
                </p>
                <p class="fs-sm text-muted">
                  Essentials offers over 100 commands and features useful on just about every server.
                </p>
              </td>
              <td class="text-center">
                <span class="fs-sm">v2.8.8</span>
              </td>
              <td class="text-center">
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="dm-gaming-plugin5" name="dm-gaming-plugin5" value="1">
                  <label class="form-check-label" for="dm-gaming-plugin5"></label>
                </div>
              </td>
              <td class="text-center">
                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">Uninstall</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- END Plugins -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for jQuery Sparkline plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugin) -->
<script>Dashmix.helpersOnLoad('jq-sparkline');</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
