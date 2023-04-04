<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Block Styles</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blocks</li>
          <li class="breadcrumb-item active" aria-current="page">Styles</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Square Blocks -->
  <h2 class="content-heading">Square Blocks</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-square card-borderless push">
        <div class="card-header bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Simple card..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-square card-borderless push">
        <div class="card-header">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          With header background..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-square push">
        <div class="card-header border-bottom-0 bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-square push">
        <div class="card-header border-bottom-0">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card with header background..
        </div>
      </div>
    </div>
  </div>
  <!-- END Square Blocks -->

  <!-- Rounded Blocks -->
  <h2 class="content-heading">Rounded Blocks</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-borderless push">
        <div class="card-header bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Simple card..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-borderless push">
        <div class="card-header">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          With header background..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card push">
        <div class="card-header border-bottom-0 bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card push">
        <div class="card-header border-bottom-0">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card with header background..
        </div>
      </div>
    </div>
  </div>
  <!-- END Rounded Blocks -->

  <!-- Blocks with Footer -->
  <h2 class="content-heading">Blocks with Footer</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Simple block..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>With header background..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-bordered">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Bordered block with header background..</p>
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-borderless push">
        <div class="card-header bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Simple card..
        </div>
        <div class="card-footer text-muted fs-sm border-top-0">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-borderless push">
        <div class="card-header">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          With header background..
        </div>
        <div class="card-footer text-muted fs-sm border-top-0">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card push">
        <div class="card-header border-bottom-0 bg-transparent">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card..
        </div>
        <div class="card-footer text-muted fs-sm border-top-0">
          Footer content..
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card push">
        <div class="card-header border-bottom-0">
          <h3 class="block-title">
            Bootstrap <small>Card</small>
          </h3>
        </div>
        <div class="card-body">
          Bordered card with header background..
        </div>
        <div class="card-footer text-muted fs-sm border-top-0">
          Footer content..
        </div>
      </div>
    </div>
  </div>
  <!-- END Blocks with Footer -->

  <!-- Block Effects -->
  <h2 class="content-heading">Block Effects</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-rounded block-fx-shadow">
        <div class="block-header block-header-default">
          <h3 class="block-title">Shadow <small>FX</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-fx-pop">
        <div class="block-header block-header-default">
          <h3 class="block-title">Pop <small>FX</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered block-fx-rotate-right">
        <div class="block-header block-header-default">
          <h3 class="block-title">Rotate Right <small>FX</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered block-fx-rotate-left">
        <div class="block-header block-header-default">
          <h3 class="block-title">Rotate Left <small>FX</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Block Effects -->

  <!-- Transparent Blocks -->
  <h2 class="content-heading">Transparent Blocks</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="block block-transparent">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="block block-transparent">
        <div class="block-header">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END Transparent Blocks -->

  <!-- Link Blocks -->
  <h2 class="content-heading">Link Blocks</h2>
  <div class="row">
    <div class="col-md-6">
      <a class="block block-rounded" href="javascript:void(0)">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Default opacity hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-rotate" href="javascript:void(0)">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Rotate hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-pop" href="javascript:void(0)">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Pop hover effect..</p>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-header block-header-default">
          <h3 class="block-title">Title <small>Subtitle</small></h3>
        </div>
        <div class="block-content">
          <p>Shadow hover effect..</p>
        </div>
      </a>
    </div>
  </div>
  <!-- END Link Blocks -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
