<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/social/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/highlightjs/styles/atom-one-dark.css'); ?>
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18@2x.jpg');">
  <div class="bg-black-50">
    <div class="content content-full content-top">
      <div class="py-4 text-center">
        <a class="img-link" href="javascript:void(0)">
          <?php $dm->get_avatar(8, '', 96, true); ?>
        </a>
        <h1 class="h2 fw-bold my-2 text-white">Stella Smith</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">
          Developer <a class="text-primary-lighter" href="javascript:void(0)">@ProXdev</a>
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <!-- Post Update -->
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <form action="db_social.php" method="POST" onsubmit="return false;">
            <div class="input-group">
              <input type="text" class="form-control form-control-alt" placeholder="What’s happening?">
              <button type="submit" class="btn btn-primary border-0">
                <i class="fa fa-pencil-alt opacity-50 me-1"></i> Post
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- END Post Update -->

      <!-- Timeline -->
      <!-- Update #1 -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <div>
            <a class="img-link" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'female', 32, true); ?>
            </a>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
            <span class="fs-sm text-muted">3 hrs ago</span>
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <p>
            How to get started your HTML page:
          </p>
          <pre><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
          <hr>
          <ul class="nav nav-pills fs-sm push">
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-share-alt opacity-50 me-1"></i> Share
              </a>
            </li>
          </ul>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fs-sm">
            <i class="fa fa-thumbs-up text-info"></i>
            <i class="fa fa-heart text-danger"></i>
            <i class="far fa-smile text-warning me-1"></i>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)">and 150 others</a>
          </p>
          <form action="db_social.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
          </form>
          <div class="pt-3 fs-sm">
            <div class="d-flex">
              <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                <?php $dm->get_avatar(0, 'female', 32, true); ?>
              </a>
              <div class="flex-grow-1">
                <p class="mb-1">
                  <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                  Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                </p>
                <p>
                  <a href="javascript:void(0)" class="me-1">Like</a>
                  <a href="javascript:void(0)">Comment</a>
                </p>
                <div class="d-flex">
                  <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                    <?php $dm->get_avatar(0, 'male', 32, true); ?>
                  </a>
                  <div class="flex-grow-1">
                    <p class="mb-1">
                      <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                      Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                    <p>
                      <a href="javascript:void(0)" class="me-1">Like</a>
                      <a href="javascript:void(0)">Comment</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Update #1 -->

      <!-- Update #2 -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <div>
            <a class="img-link" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'male', 32, true); ?>
            </a>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
            <span class="fs-sm text-muted">5 hrs ago</span>
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small'); ?>
          <hr>
          <ul class="nav nav-pills fs-sm push">
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-share-alt opacity-50 me-1"></i> Share
              </a>
            </li>
          </ul>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fs-sm">
            <i class="fa fa-heart text-danger"></i>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)">and 36 others</a>
          </p>
          <form action="db_social.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
          </form>
        </div>
      </div>
      <!-- END Update #2 -->

      <!-- Update #3 -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <div>
            <a class="img-link" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'female', 32, true); ?>
            </a>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
            <span class="fs-sm text-muted">8 hrs ago</span>
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <p>
            Our city escape continues..
          </p>
          <div class="row g-sm js-gallery img-fluid-100">
            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
            <?php for ($i = 11; $i < 14; $i++) { ?>
              <div class="col-4">
                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                  <?php $dm->get_photo($i, false, 'img-fluid'); ?>
                </a>
              </div>
            <?php } ?>
          </div>
          <hr>
          <ul class="nav nav-pills fs-sm push">
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-share-alt opacity-50 me-1"></i> Share
              </a>
            </li>
          </ul>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fs-sm">
            <i class="fa fa-thumbs-up text-info"></i>
            <i class="fa fa-heart text-danger"></i>
            <i class="far fa-smile text-warning me-1"></i>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)">and 43 others</a>
          </p>
          <form action="db_social.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
          </form>
        </div>
      </div>
      <!-- END Update #3 -->

      <!-- Update #4 -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <div>
            <a class="img-link" href="javascript:void(0)">
              <?php $dm->get_avatar(0, 'female', 32, true); ?>
            </a>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
            <span class="fs-sm text-muted">15 hrs ago</span>
          </div>
          <div class="block-options">
            <div class="dropdown">
              <button type="button" class="btn-block-option dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-times-circle text-danger me-1"></i> Hide similar posts
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="far fa-fw fa-thumbs-down text-warning me-1"></i> Stop following this user
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-exclamation-triangle me-1"></i> Report this post
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-fw fa-bookmark me-1"></i> Bookmark this post
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="block-content">
          <?php $dm->get_text('small', 2); ?>
          <hr>
          <ul class="nav nav-pills fs-sm push">
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-thumbs-up opacity-50 me-1"></i> Like
              </a>
            </li>
            <li class="nav-item me-1">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-comment-alt opacity-50 me-1"></i> Comment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">
                <i class="fa fa-share-alt opacity-50 me-1"></i> Share
              </a>
            </li>
          </ul>
        </div>
        <div class="block-content block-content-full bg-body-light">
          <p class="fs-sm">
            <i class="fa fa-thumbs-up text-info"></i>
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
            <a class="fw-semibold" href="javascript:void(0)">and 5 others</a>
          </p>
          <form action="db_social.php" method="POST" onsubmit="return false;">
            <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
          </form>
        </div>
      </div>
      <!-- END Update #4 -->
      <!-- END Timeline -->
    </div>
    <div class="col-md-4">
      <!-- Group Suggestions -->
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="row g-sm mb-2">
            <div class="col-6">
              <?php echo $dm->get_photo(12, false, 'img-fluid'); ?>
            </div>
            <div class="col-6">
              <?php echo $dm->get_photo(13, false, 'img-fluid'); ?>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <a class="fw-semibold" href="javascript:void(0)">Travel Photos</a>
              <div class="fs-sm text-muted">65k Members</div>
            </div>
            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
              <i class="fa fa-fw fa-plus-circle"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="row g-sm mb-2">
            <div class="col-6">
              <?php echo $dm->get_photo(22, false, 'img-fluid'); ?>
            </div>
            <div class="col-6">
              <?php echo $dm->get_photo(23, false, 'img-fluid'); ?>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <a class="fw-semibold" href="javascript:void(0)">Coding Frenzy</a>
              <div class="fs-sm text-muted">109k Members</div>
            </div>
            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
              <i class="fa fa-fw fa-plus-circle"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="block block-rounded">
        <div class="block-content block-content-full">
          <div class="row g-sm mb-2">
            <div class="col-6">
              <?php echo $dm->get_photo(9, false, 'img-fluid'); ?>
            </div>
            <div class="col-6">
              <?php echo $dm->get_photo(6, false, 'img-fluid'); ?>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <a class="fw-semibold" href="javascript:void(0)">Nature Lovers</a>
              <div class="fs-sm text-muted">32k Members</div>
            </div>
            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
              <i class="fa fa-fw fa-plus-circle"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- END Group Suggestions -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- jQuery (required for Magnific Popup Plugin) -->
<?php $dm->get_js('js/lib/jquery.min.js'); ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>Dashmix.helpersOnLoad(['js-highlightjs', 'jq-magnific-popup']);</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
