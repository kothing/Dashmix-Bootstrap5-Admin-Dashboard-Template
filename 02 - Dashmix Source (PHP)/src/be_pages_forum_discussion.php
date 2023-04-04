<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Discussion</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="be_pages_forum_categories.php">Forum</a>
          </li>
          <li class="breadcrumb-item">
            <a href="be_pages_forum_topics.php">Topics</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Discussion</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <!-- Discussion -->
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Hey all! I just signed up!</h3>
      <div class="block-options">
        <a class="btn-block-option me-2" href="#forum-reply-form">
          <i class="fa fa-reply me-1"></i> Reply
        </a>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
          <i class="si si-refresh"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <table class="table table-borderless">
        <tbody>
          <tr class="table-active">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name('female'); ?></a> on <span>July 1, 2018 16:15</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <p>
                <a href="be_pages_generic_profile.php">
                  <?php $dm->get_avatar('', 'female'); ?>
                </a>
              </p>
              <p class="fs-sm fw-medium">
                <?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?>
              </p>
            </td>
            <td>
              <?php $dm->get_text('medium', 2); ?>
              <hr>
              <p class="fs-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
            </td>
          </tr>
          <tr class="table-active">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name('male'); ?></a> on <span>July 10, 2018 10:09</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <p>
                <a href="be_pages_generic_profile.php">
                  <?php $dm->get_avatar('', 'male'); ?>
                </a>
              </p>
              <p class="fs-sm fw-medium">
                <?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?>
              </p>
            </td>
            <td>
              <?php $dm->get_text('large'); ?>
              <hr>
              <p class="fs-sm text-muted">Be yourself; everyone else is already taken.</p>
            </td>
          </tr>
          <tr class="table-active">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name('male'); ?></a> on <span>July 15, 2018 20:17</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <p>
                <a href="be_pages_generic_profile.php">
                  <?php $dm->get_avatar('', 'male'); ?>
                </a>
              </p>
              <p class="fs-sm fw-medium">
                <?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?>
              </p>
            </td>
            <td>
              <?php $dm->get_text('medium', 3); ?>
              <hr>
              <p class="fs-sm text-muted">Don't cry because it's over, smile because it happened.</p>
            </td>
          </tr>
          <tr class="table-active">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name('female'); ?></a> on <span>July 20, 2018 20:29</span>
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
              <p>
                <a href="be_pages_generic_profile.php">
                  <?php $dm->get_avatar('', 'female'); ?>
                </a>
              </p>
              <p class="fs-sm fw-medium">
                <?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?>
              </p>
            </td>
            <td>
              <?php $dm->get_text('medium', 2); ?>
              <hr>
              <p class="fs-sm text-muted">Strive not to be a success, but rather to be of value.</p>
            </td>
          </tr>
          <tr class="table-active" id="forum-reply-form">
            <td class="d-none d-sm-table-cell"></td>
            <td class="fs-sm text-muted">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name('male'); ?></a> Just now
            </td>
          </tr>
          <tr>
            <td class="d-none d-sm-table-cell text-center">
              <p>
                <a href="be_pages_generic_profile.php">
                  <?php $dm->get_avatar('', 'male'); ?>
                </a>
              </p>
              <p class="fs-sm fw-medium">
                <?php echo rand(100, 500); ?> Posts<br>Level <?php echo rand(1, 10); ?>
              </p>
            </td>
            <td>
              <form action="be_pages_forum_discussion.php" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <!-- CKEditor (js-ckeditor id is initialized in Helpers.jsCkeditor()) -->
                  <!-- For more info and examples you can check out http://ckeditor.com -->
                  <textarea id="js-ckeditor" name="ckeditor"></textarea>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-reply opacity-50 me-1"></i> Reply
                  </button>
                </div>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- END Discussion -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor plugin) -->
<script>Dashmix.helpersOnLoad(['js-ckeditor']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
