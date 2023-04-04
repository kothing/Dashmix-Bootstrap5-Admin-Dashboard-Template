<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Buttons</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Buttons</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Buttons Styles -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Styles</h3>
    </div>
    <div class="block-content">
      <!-- Default -->
      <h2 class="content-heading">Default</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            The default button style with various colors to choose from. Prefer using 2 or max 3 button color variations in your web project to provide a better UX and make it more accesible for your users.
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push-2x text-center text-sm-start">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-primary">Primary</button>
              <div class="mt-2">
                <code>btn-primary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-secondary">Secondary</button>
              <div class="mt-2">
                <code>btn-secondary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-success">Success</button>
              <div class="mt-2">
                <code>btn-success</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-info">Info</button>
              <div class="mt-2">
                <code>btn-info</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-warning">Warning</button>
              <div class="mt-2">
                <code>btn-warning</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-danger">Danger</button>
              <div class="mt-2">
                <code>btn-danger</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-dark">Dark</button>
              <div class="mt-2">
                <code>btn-dark</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-light">Light</button>
              <div class="mt-2">
                <code>btn-light</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Default -->

      <!-- Outline -->
      <h2 class="content-heading">Outline</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Outline styles are also available for all previous color variations
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push-2x text-center text-sm-start">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-primary">Primary</button>
              <div class="mt-2">
                <code>btn-outline-primary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <div class="mt-2">
                <code>btn-outline-secondary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-success">Success</button>
              <div class="mt-2">
                <code>btn-outline-success</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-info">Info</button>
              <div class="mt-2">
                <code>btn-outline-info</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-warning">Warning</button>
              <div class="mt-2">
                <code>btn-outline-warning</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-danger">Danger</button>
              <div class="mt-2">
                <code>btn-outline-danger</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-dark">Dark</button>
              <div class="mt-2">
                <code>btn-outline-dark</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-light">Light</button>
              <div class="mt-2">
                <code>btn-outline-light</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Outline -->

      <!-- Alternate -->
      <h2 class="content-heading">Alternate Style</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            The alternate button style offers a more subtle design style.
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push-2x text-center text-sm-start">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-primary">Primary</button>
              <div class="mt-2">
                <code>btn-alt-primary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-secondary">Secondary</button>
              <div class="mt-2">
                <code>btn-alt-secondary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-success">Success</button>
              <div class="mt-2">
                <code>btn-alt-success</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-info">Info</button>
              <div class="mt-2">
                <code>btn-alt-info</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-warning">Warning</button>
              <div class="mt-2">
                <code>btn-alt-warning</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-danger">Danger</button>
              <div class="mt-2">
                <code>btn-alt-danger</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Alternate -->

      <!-- Hero -->
      <h2 class="content-heading">Hero</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Perfect style to use in landing pages or for call to action buttons
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row items-push-2x text-center text-sm-start">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-primary">Primary</button>
              <div class="mt-2">
                <code>btn-hero btn-primary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-secondary">Secondary</button>
              <div class="mt-2">
                <code>btn-hero btn-secondary</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-success">Success</button>
              <div class="mt-2">
                <code>btn-hero btn-success</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-info">Info</button>
              <div class="mt-2">
                <code>btn-hero btn-info</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-warning">Warning</button>
              <div class="mt-2">
                <code>btn-hero btn-warning</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-danger">Danger</button>
              <div class="mt-2">
                <code>btn-hero btn-danger</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-dark">Dark</button>
              <div class="mt-2">
                <code>btn-hero btn-dark</code>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-light">Light</button>
              <div class="mt-2">
                <code>btn-hero btn-light</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Hero -->
    </div>
  </div>
  <!-- END Buttons Styles -->

  <!-- Button Effects -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Effects</h3>
    </div>
    <div class="block-content">
      <!-- Ripple -->
      <!-- Ripple functionality ([data-toggle="click-ripple"] is initialized in Helpers.dmRipple()) -->
      <h2 class="content-heading">Ripple</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Inspired by Material design, adding a ripple animation on click is just a data attribute away <code>data-toggle=&quot;click-ripple&quot;</code>
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-primary" data-toggle="click-ripple">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-secondary" data-toggle="click-ripple">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-success" data-toggle="click-ripple">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-info" data-toggle="click-ripple">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-warning" data-toggle="click-ripple">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-danger" data-toggle="click-ripple">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-dark" data-toggle="click-ripple">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-light" data-toggle="click-ripple">Light</button>
            </div>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-primary" data-toggle="click-ripple">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-secondary" data-toggle="click-ripple">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-success" data-toggle="click-ripple">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-info" data-toggle="click-ripple">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-warning" data-toggle="click-ripple">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-danger" data-toggle="click-ripple">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-dark" data-toggle="click-ripple">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-light" data-toggle="click-ripple">Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-primary" data-toggle="click-ripple">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-secondary" data-toggle="click-ripple">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-success" data-toggle="click-ripple">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-info" data-toggle="click-ripple">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-warning" data-toggle="click-ripple">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-danger" data-toggle="click-ripple">Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-primary" data-toggle="click-ripple">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-secondary" data-toggle="click-ripple">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-success" data-toggle="click-ripple">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-info" data-toggle="click-ripple">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-warning" data-toggle="click-ripple">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-danger" data-toggle="click-ripple">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-dark" data-toggle="click-ripple">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-light" data-toggle="click-ripple">Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Ripple -->
    </div>
  </div>
  <!-- END Button Effects -->

  <!-- Button Variations -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Variations</h3>
    </div>
    <div class="block-content">
      <!-- Small Size -->
      <h2 class="content-heading">Small Size</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can use the classes <code>btn-sm</code> and <code>btn-sm</code> to make your buttons smaller
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-light">Light</button>
            </div>
          </div>
          <!-- Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-outline-light">Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-alt-danger">Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-sm btn-hero btn-light">Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Small Size -->

      <!-- Large Size -->
      <h2 class="content-heading">Large Size</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can use the classes <code>btn-lg</code> and <code>btn-lg</code> to make your buttons larger
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-light">Light</button>
            </div>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-outline-light">Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-alt-danger">Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-lg btn-hero btn-light">Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Large Size -->

      <!-- Square -->
      <h2 class="content-heading">Square</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can remove border radius from your buttons if you are looking for a sharp look by using the class <code>rounded-0</code>
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-light">Light</button>
            </div>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-outline-light">Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-alt-danger">Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-0 btn-hero btn-light">Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Square -->

      <!-- Rounded -->
      <h2 class="content-heading">Rounded</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Fully rounded buttons are available for all available button styles
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-light">Light</button>
            </div>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-outline-light">Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-alt-danger">Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-primary">Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-secondary">Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-success">Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-info">Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-warning">Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-danger">Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-dark">Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn rounded-pill btn-hero btn-light">Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Rounded -->

      <!-- Disabled -->
      <h2 class="content-heading">Disabled</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            If an action is not available in a specific state of your website/app, you can easily disable your buttons
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-primary" disabled>Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-secondary" disabled>Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-success" disabled>Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-info" disabled>Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-warning" disabled>Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-danger" disabled>Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-dark" disabled>Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-light" disabled>Light</button>
            </div>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-success" disabled>Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-info" disabled>Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-dark" disabled>Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-outline-light" disabled>Light</button>
            </div>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-primary" disabled>Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-secondary" disabled>Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-success" disabled>Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-info" disabled>Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-warning" disabled>Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-alt-danger" disabled>Danger</button>
            </div>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="row items-push text-center text-sm-start mb-4">
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-primary" disabled>Primary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-secondary" disabled>Secondary</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-success" disabled>Success</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-info" disabled>Info</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-warning" disabled>Warning</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-danger" disabled>Danger</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-dark" disabled>Dark</button>
            </div>
            <div class="col-sm-6 col-xl-4">
              <button type="button" class="btn btn-hero btn-light" disabled>Light</button>
            </div>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Disabled -->

      <!-- Icons -->
      <h2 class="content-heading">Icons</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            You can use any of the <a href="be_ui_icons.php">available icons</a> in your buttons to visualize its intended action
          </p>
        </div>
        <div class="col-lg-8">
          <!-- Default -->
          <h3 class="h4">Default Style</h3>
          <div class="mb-4">
            <button type="button" class="btn btn-success me-1 mb-3">
              <i class="fa fa-fw fa-plus me-1"></i> Add User
            </button>
            <button type="button" class="btn btn-info me-1 mb-3">
              <i class="fa fa-fw fa-download me-1"></i> Download
            </button>
            <button type="button" class="btn btn-warning me-1 mb-3">
              <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
            </button>
            <button type="button" class="btn btn-primary me-1 mb-3">
              <i class="fa fa-fw fa-upload me-1"></i> Upload
            </button>
            <button type="button" class="btn btn-secondary me-1 mb-3">
              <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
            </button>
            <button type="button" class="btn btn-danger me-1 mb-3">
              <i class="fa fa-fw fa-times me-1"></i> Delete
            </button>
            <button type="button" class="btn btn-primary me-1 mb-3">
              <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
            </button>
            <button type="button" class="btn btn-secondary me-1 mb-3">
              <i class="fa fa-fw fa-play me-1"></i> Play
            </button>
            <button type="button" class="btn btn-dark me-1 mb-3">
              <i class="fa fa-fw fa-box me-1"></i> 10 Products
            </button>
          </div>
          <!-- END Default -->

          <!-- Outline -->
          <h3 class="h4">Outline Style</h3>
          <div class="mb-4">
            <button type="button" class="btn btn-outline-success me-1 mb-3">
              <i class="fa fa-fw fa-plus me-1"></i> Add User
            </button>
            <button type="button" class="btn btn-outline-info me-1 mb-3">
              <i class="fa fa-fw fa-download me-1"></i> Download
            </button>
            <button type="button" class="btn btn-outline-warning me-1 mb-3">
              <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
            </button>
            <button type="button" class="btn btn-outline-primary me-1 mb-3">
              <i class="fa fa-fw fa-upload me-1"></i> Upload
            </button>
            <button type="button" class="btn btn-outline-secondary me-1 mb-3">
              <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
            </button>
            <button type="button" class="btn btn-outline-danger me-1 mb-3">
              <i class="fa fa-fw fa-times me-1"></i> Delete
            </button>
            <button type="button" class="btn btn-outline-primary me-1 mb-3">
              <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
            </button>
            <button type="button" class="btn btn-outline-secondary me-1 mb-3">
              <i class="fa fa-fw fa-play me-1"></i> Play
            </button>
            <button type="button" class="btn btn-outline-dark me-1 mb-3">
              <i class="fa fa-fw fa-box me-1"></i> 10 Products
            </button>
          </div>
          <!-- END Outline -->

          <!-- Alternate -->
          <h3 class="h4">Alternate Style</h3>
          <div class="mb-4">
            <button type="button" class="btn btn-alt-success me-1 mb-3">
              <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Add User
            </button>
            <button type="button" class="btn btn-alt-info me-1 mb-3">
              <i class="fa fa-fw fa-download opacity-50 me-1"></i> Download
            </button>
            <button type="button" class="btn btn-alt-warning me-1 mb-3">
              <i class="fa fa-fw fa-exclamation-triangle opacity-50 me-1"></i> Are you sure?
            </button>
            <button type="button" class="btn btn-alt-primary me-1 mb-3">
              <i class="fa fa-fw fa-upload opacity-50 me-1"></i> Upload
            </button>
            <button type="button" class="btn btn-alt-secondary me-1 mb-3">
              <i class="fab fa-fw fa-bluetooth opacity-50-b me-1"></i> 3 Connections
            </button>
            <button type="button" class="btn btn-alt-danger me-1 mb-3">
              <i class="fa fa-fw fa-times opacity-50 me-1"></i> Delete
            </button>
            <button type="button" class="btn btn-alt-primary me-1 mb-3">
              <i class="fa fa-fw fa-thumbs-up opacity-50 me-1"></i> Like
            </button>
            <button type="button" class="btn btn-alt-secondary me-1 mb-3">
              <i class="fa fa-fw fa-play opacity-50 me-1"></i> Play
            </button>
            <button type="button" class="btn btn-alt-primary me-1 mb-3">
              <i class="fa fa-fw fa-box opacity-50 me-1"></i> 10 Products
            </button>
          </div>
          <!-- END Alternate -->

          <!-- Hero -->
          <h3 class="h4">Hero Style</h3>
          <div class="mb-4">
            <button type="button" class="btn btn-hero btn-success me-1 mb-3">
              <i class="fa fa-fw fa-plus me-1"></i> Add User
            </button>
            <button type="button" class="btn btn-hero btn-info me-1 mb-3">
              <i class="fa fa-fw fa-download me-1"></i> Download
            </button>
            <button type="button" class="btn btn-hero btn-warning me-1 mb-3">
              <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Are you sure?
            </button>
            <button type="button" class="btn btn-hero btn-primary me-1 mb-3">
              <i class="fa fa-fw fa-upload me-1"></i> Upload
            </button>
            <button type="button" class="btn btn-hero btn-secondary me-1 mb-3">
              <i class="fab fa-fw fa-bluetooth-b me-1"></i> 3 Connections
            </button>
            <button type="button" class="btn btn-hero btn-danger me-1 mb-3">
              <i class="fa fa-fw fa-times me-1"></i> Delete
            </button>
            <button type="button" class="btn btn-hero btn-primary me-1 mb-3">
              <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
            </button>
            <button type="button" class="btn btn-hero btn-secondary me-1 mb-3">
              <i class="fa fa-fw fa-play me-1"></i> Play
            </button>
            <button type="button" class="btn btn-hero btn-dark me-1 mb-3">
              <i class="fa fa-fw fa-box me-1"></i> 10 Products
            </button>
          </div>
          <!-- END Hero -->
        </div>
      </div>
      <!-- END Icons -->

      <!-- Be Creative -->
      <h2 class="content-heading">Be Creative</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Mix any of the available classes to create the button style you want to use in your project
          </p>
        </div>
        <div class="col-lg-8">
          <button type="button" class="btn btn-lg rounded-0 btn-hero btn-secondary me-1 mb-3">
            <i class="fa fa-fw fa-wifi me-1"></i> Wifi Available
          </button>
          <button type="button" class="btn rounded-pill btn-danger me-1 mb-3">
            <i class="fa fa-fw fa-times me-1"></i> Rounded
          </button>
          <button type="button" class="btn btn-success me-1 mb-3">
            <i class="fa fa-fw fa-check"></i>
          </button>
          <button type="button" class="btn btn-sm btn-warning me-1 mb-3">
            <i class="fa fa-fw fa-exclamation-circle"></i>
          </button>
          <button type="button" class="btn btn-lg btn-outline-primary me-1 mb-3">
            <i class="fab fa-fw fa-instagram me-1"></i> Post your image
          </button>
          <button type="button" class="btn rounded-pill btn-hero btn-success me-1 mb-3">
            <i class="fa fa-fw fa-pencil-alt"></i>
          </button>
          <button type="button" class="btn btn-lg btn-secondary me-1 mb-3">
            <i class="fab fa-fw fa-youtube me-1"></i> YouTube
          </button>
          <button type="button" class="btn btn-sm rounded-0 btn-outline-warning me-1 mb-3">
            <i class="far fa-fw fa-envelope me-1"></i> Messages
          </button>
          <button type="button" class="btn btn-sm btn-hero btn-dark me-1 mb-3">
            <i class="fab fa-fw fa-dribbble me-1"></i> Dribbble
          </button>
          <button type="button" class="btn btn-sm btn-primary me-1 mb-3">
            <i class="fa fa-fw fa-archive me-1"></i> Archive
          </button>
          <button type="button" class="btn btn-sm btn-secondary me-1 mb-3">
            <i class="fa fa-fw fa-wrench me-1"></i> Preferences
          </button>
          <button type="button" class="btn btn-lg rounded-0 btn-light me-1 mb-3">
            <i class="fa fa-fw fa-cog me-1"></i> Options
          </button>
          <button type="button" class="btn btn-alt-danger me-1 mb-3">
            <i class="fa fa-fw fa-times opacity-50 me-1"></i> Delete
          </button>
          <button type="button" class="btn btn-alt-primary me-1 mb-3">
            <i class="fa fa-fw fa-thumbs-up me-1"></i> Like
          </button>
          <button type="button" class="btn btn-sm rounded-pill btn-outline-dark me-1 mb-3">
            <i class="fa fa-fw fa-image me-1"></i> Picture
          </button>
          <button type="button" class="btn btn-lg btn-warning me-1 mb-3">
            <i class="fa fa-fw fa-tint me-1"></i> Themes
          </button>
          <button type="button" class="btn btn-sm btn-hero btn-primary me-1 mb-3">
            <i class="fa fa-fw fa-arrow-down me-1"></i> Down
          </button>
          <button type="button" class="btn btn-lg rounded-pill btn-hero btn-success me-1 mb-3">
            <i class="si si-rocket me-1"></i> Launch Product
          </button>
          <button type="button" class="btn btn-sm rounded-0 btn-hero btn-info me-1 mb-3">
            <i class="si si-chemistry me-1"></i> Lab
          </button>
        </div>
      </div>
      <!-- END Be Creative -->
    </div>
  </div>
  <!-- END Button Variations -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
