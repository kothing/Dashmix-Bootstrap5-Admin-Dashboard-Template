<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Accordion</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Elements</li>
          <li class="breadcrumb-item active" aria-current="page">Accordion</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Accordion Examples -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Examples</h3>
    </div>
    <div class="block-content">
      <!-- Single Item -->
      <h2 class="content-heading">Single Item</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            An accordion can have one active item at a time
          </p>
        </div>
        <div class="col-lg-8 push">
          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion_h1">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q1" aria-expanded="true" aria-controls="accordion_q1">1.1 Accordion Title</a>
              </div>
              <div id="accordion_q1" class="collapse show" role="tabpanel" aria-labelledby="accordion_h1" data-bs-parent="#accordion">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion_h2">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q2" aria-expanded="true" aria-controls="accordion_q2">1.2 Accordion Title</a>
              </div>
              <div id="accordion_q2" class="collapse" role="tabpanel" aria-labelledby="accordion_h2" data-bs-parent="#accordion">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion_h3">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q3" aria-expanded="true" aria-controls="accordion_q3">1.3 Accordion Title</a>
              </div>
              <div id="accordion_q3" class="collapse" role="tabpanel" aria-labelledby="accordion_h3" data-bs-parent="#accordion">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion_h4">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q4" aria-expanded="true" aria-controls="accordion_q4">1.4 Accordion Title</a>
              </div>
              <div id="accordion_q4" class="collapse" role="tabpanel" aria-labelledby="accordion_h4" data-bs-parent="#accordion">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion_h5">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q5" aria-expanded="true" aria-controls="accordion_q5">1.5 Accordion Title</a>
              </div>
              <div id="accordion_q5" class="collapse" role="tabpanel" aria-labelledby="accordion_h5" data-bs-parent="#accordion">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Single Item -->

      <!-- Multiple Items -->
      <h2 class="content-heading">Multiple Items</h2>
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            An accordion can have multiple active items at a time
          </p>
        </div>
        <div class="col-lg-8 push">
          <div id="accordion2" role="tablist" aria-multiselectable="true">
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion2_h1">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q1" aria-expanded="true" aria-controls="accordion2_q1">2.1 Accordion Title</a>
              </div>
              <div id="accordion2_q1" class="collapse show" role="tabpanel" aria-labelledby="accordion2_h1">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion2_h2">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q2" aria-expanded="true" aria-controls="accordion2_q2">2.2 Accordion Title</a>
              </div>
              <div id="accordion2_q2" class="collapse" role="tabpanel" aria-labelledby="accordion2_h2">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion2_h3">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q3" aria-expanded="true" aria-controls="accordion2_q3">2.3 Accordion Title</a>
              </div>
              <div id="accordion2_q3" class="collapse" role="tabpanel" aria-labelledby="accordion2_h3">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion2_h4">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q4" aria-expanded="true" aria-controls="accordion2_q4">2.4 Accordion Title</a>
              </div>
              <div id="accordion2_q4" class="collapse" role="tabpanel" aria-labelledby="accordion2_h4">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
            <div class="block block-rounded mb-1">
              <div class="block-header block-header-default" role="tab" id="accordion2_h5">
                <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q5" aria-expanded="true" aria-controls="accordion2_q5">2.5 Accordion Title</a>
              </div>
              <div id="accordion2_q5" class="collapse" role="tabpanel" aria-labelledby="accordion2_h5">
                <div class="block-content">
                  <?php $dm->get_text('small'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Multiple Items -->
    </div>
  </div>
  <!-- END Accordion Examples -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
