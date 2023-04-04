<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Themed Blocks</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blocks</li>
          <li class="breadcrumb-item active" aria-current="page">Themed</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Image Themed Blocks -->
  <h2 class="content-heading">Image</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');">
        <div class="block-header bg-primary-dark-op">
          <h3 class="block-title">Primary opacity</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-body-extra-light">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17.jpg');">
        <div class="block-header bg-black-50">
          <h3 class="block-title">Black opacity</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-body-extra-light">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo6.jpg');">
        <div class="block-header bg-primary-dark-op">
          <h3 class="block-title">Rounded with primary opacity</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-body-extra-light">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo21.jpg');">
        <div class="block-header bg-black-50">
          <h3 class="block-title">Rounded with black opacity</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-body-extra-light">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo24.jpg');">
        <div class="block-header bg-primary-dark-op">
          <h3 class="block-title">Full Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-primary-dark-op text-white-75">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9.jpg');">
        <div class="block-header bg-black-50">
          <h3 class="block-title">Full Rounded Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-black-50 text-white-75">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo8.jpg');">
        <div class="block-header bg-primary-dark-op">
          <h3 class="block-title">Full Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-primary-dark-op text-white-75">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo11.jpg');">
        <div class="block-header bg-black-50">
          <h3 class="block-title">Full Rounded Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-black-50 text-white-75">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');">
        <div class="block-header bg-gd-dusk-op">
          <h3 class="block-title">Full Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-black-75 text-white-75">
          <p>Now with gradient overlay in the header!</p>
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo13.jpg');">
        <div class="block-header bg-gd-sun-op">
          <h3 class="block-title">Full Rounded Block</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content bg-black-75 text-white-75">
          <p>Now with gradient overlay in the header!</p>
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Image Themed Blocks -->

  <!-- Square Themed Blocks -->
  <h2 class="content-heading">Square</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header">
          <h3 class="block-title">Primary</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-primary-light">
          <h3 class="block-title">Primary Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-primary-dark">
          <h3 class="block-title">Primary Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-primary-darker">
          <h3 class="block-title">Primary Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-dusk">
          <h3 class="block-title">Dusk</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-fruit">
          <h3 class="block-title">Fruit</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-aqua">
          <h3 class="block-title">Aqua</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-sublime">
          <h3 class="block-title">Sublime</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-sea">
          <h3 class="block-title">Sea</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-leaf">
          <h3 class="block-title">Leaf</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-lake">
          <h3 class="block-title">Lake</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gd-sun">
          <h3 class="block-title">Sun</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-default-light">
          <h3 class="block-title">Default Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-default-dark">
          <h3 class="block-title">Default Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-default-darker">
          <h3 class="block-title">Default Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xwork">
          <h3 class="block-title">xWork</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xwork-light">
          <h3 class="block-title">xWork Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xwork-dark">
          <h3 class="block-title">xWork Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xwork-darker">
          <h3 class="block-title">xWork Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xmodern">
          <h3 class="block-title">xModern</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xmodern-light">
          <h3 class="block-title">xModern Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xmodern-dark">
          <h3 class="block-title">xModern Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xmodern-darker">
          <h3 class="block-title">xModern Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xeco">
          <h3 class="block-title">xEco</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xeco-light">
          <h3 class="block-title">xEco Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xeco-dark">
          <h3 class="block-title">xEco Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xeco-darker">
          <h3 class="block-title">xEco Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xsmooth">
          <h3 class="block-title">xSmooth</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xsmooth-light">
          <h3 class="block-title">xSmooth Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xsmooth-dark">
          <h3 class="block-title">xSmooth Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xsmooth-darker">
          <h3 class="block-title">xSmooth Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xinspire">
          <h3 class="block-title">xInspire</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xinspire-light">
          <h3 class="block-title">xInspire Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xinspire-dark">
          <h3 class="block-title">xInspire Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-xinspire-darker">
          <h3 class="block-title">xInspire Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-success">
          <h3 class="block-title">Success</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-info">
          <h3 class="block-title">Info</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-warning">
          <h3 class="block-title">Warning</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-danger">
          <h3 class="block-title">Danger</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gray">
          <h3 class="block-title">Gray</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-muted">
          <h3 class="block-title">Gray Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-gray-darker">
          <h3 class="block-title">Gray Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-themed">
        <div class="block-header bg-black">
          <h3 class="block-title">Black</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Square Themed Blocks -->

  <!-- Rounded Themed Blocks -->
  <h2 class="content-heading">Rounded</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header">
          <h3 class="block-title">Primary</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-primary-light">
          <h3 class="block-title">Primary Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-primary-dark">
          <h3 class="block-title">Primary Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-primary-darker">
          <h3 class="block-title">Primary Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-dusk">
          <h3 class="block-title">Dusk</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-fruit">
          <h3 class="block-title">Fruit</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-aqua">
          <h3 class="block-title">Aqua</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-sublime">
          <h3 class="block-title">Sublime</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-sea">
          <h3 class="block-title">Sea</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-leaf">
          <h3 class="block-title">Leaf</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-lake">
          <h3 class="block-title">Lake</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gd-sun">
          <h3 class="block-title">Sun</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-default">
          <h3 class="block-title">Default</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-default-light">
          <h3 class="block-title">Default Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-default-dark">
          <h3 class="block-title">Default Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-default-darker">
          <h3 class="block-title">Default Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xwork">
          <h3 class="block-title">xWork</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xwork-light">
          <h3 class="block-title">xWork Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xwork-dark">
          <h3 class="block-title">xWork Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xwork-darker">
          <h3 class="block-title">xWork Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xmodern">
          <h3 class="block-title">xModern</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xmodern-light">
          <h3 class="block-title">xModern Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xmodern-dark">
          <h3 class="block-title">xModern Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xmodern-darker">
          <h3 class="block-title">xModern Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xeco">
          <h3 class="block-title">xEco</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xeco-light">
          <h3 class="block-title">xEco Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xeco-dark">
          <h3 class="block-title">xEco Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xeco-darker">
          <h3 class="block-title">xEco Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xsmooth">
          <h3 class="block-title">xSmooth</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xsmooth-light">
          <h3 class="block-title">xSmooth Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xsmooth-dark">
          <h3 class="block-title">xSmooth Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xsmooth-darker">
          <h3 class="block-title">xSmooth Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xinspire">
          <h3 class="block-title">xInspire</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xinspire-light">
          <h3 class="block-title">xInspire Light</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xinspire-dark">
          <h3 class="block-title">xInspire Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-xinspire-darker">
          <h3 class="block-title">xInspire Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-success">
          <h3 class="block-title">Success</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-info">
          <h3 class="block-title">Info</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-warning">
          <h3 class="block-title">Warning</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-danger">
          <h3 class="block-title">Danger</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gray">
          <h3 class="block-title">Gray</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-muted">
          <h3 class="block-title">Gray Dark</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-gray-darker">
          <h3 class="block-title">Gray Darker</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-themed">
        <div class="block-header bg-black">
          <h3 class="block-title">Black</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content">
          <p>Block’s content..</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Rounded Themed Blocks -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
