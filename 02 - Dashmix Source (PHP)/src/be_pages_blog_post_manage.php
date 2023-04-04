<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Manage All Posts</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active" aria-current="page">Manage</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
  <!-- Posts Statistics -->
  <div class="row text-center">
    <div class="col-6 col-xl-3">
      <!-- All Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.php">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="far fa-2x fa-file-alt text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              150
            </p>
            <p class="text-muted mb-0">
              All Posts
            </p>
          </div>
        </div>
      </a>
      <!-- END All Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- Active Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.php">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="far fa-2x fa-eye text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              140
            </p>
            <p class="text-muted mb-0">
              Active
            </p>
          </div>
        </div>
      </a>
      <!-- END Active Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- Draft Posts -->
      <a class="block block-rounded" href="be_pages_blog_post_manage.php">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="fa fa-2x fa-pencil-alt text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              10
            </p>
            <p class="text-muted mb-0">
              Drafts
            </p>
          </div>
        </div>
      </a>
      <!-- END Draft Posts -->
    </div>
    <div class="col-6 col-xl-3">
      <!-- New Post -->
      <a class="block block-rounded" href="be_pages_blog_post_add.php">
        <div class="block-content block-content-full">
          <div class="py-md-3">
            <div class="py-3 d-none d-md-block">
              <i class="fa fa-2x fa-plus text-primary"></i>
            </div>
            <p class="fs-4 fw-bold mb-0">
              <i class="fa fa-plus text-primary me-1 d-md-none"></i> New Post
            </p>
            <p class="text-muted mb-0">
              by John Doe
            </p>
          </div>
        </div>
      </a>
      <!-- END New Post -->
    </div>
  </div>
  <!-- Post Statistics -->

  <!-- Posts -->
  <div class="block">
    <div class="block-header block-header-default">
      <h3 class="block-title">Posts (150)</h3>
    </div>
    <div class="block-content">
      <!-- Search Posts -->
      <form class="push" action="be_pages_blog_post_manage.php" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Posts..">
          <span class="input-group-text">
            <i class="fa fa-fw fa-search"></i>
          </span>
        </div>
      </form>
      <!-- END Search Posts -->

      <!-- Posts Table -->
      <table class="table table-striped table-borderless table-vcenter">
        <thead>
          <tr class="bg-body-dark">
            <th style="width: 60px;">ID</th>
            <th style="width: 33%;">Title</th>
            <th class="d-none d-sm-table-cell">Author</th>
            <th class="d-none d-xl-table-cell">Created</th>
            <th class="d-none d-xl-table-cell">Published</th>
            <th style="width: 100px;" class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              150
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                An adventure of a lifetime
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 14, 2020 at 17:20
            </td>
            <td class="d-none d-xl-table-cell">
              January 15, 2020 at 16:34
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              149
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Learn to code in one week
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 13, 2020 at 15:36
            </td>
            <td class="d-none d-xl-table-cell">
              January 16, 2020 at 20:48
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              148
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Can you travel &amp; work efficiently?
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 11, 2020 at 20:12
            </td>
            <td class="d-none d-xl-table-cell">
              January 16, 2020 at 19:19
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              147
            </td>
            <td>
              <i class="fa fa-eye text-danger me-1"></i>
              <a href="be_pages_blog_story.php">
                The best places to work from
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 10, 2020 at 18:10
            </td>
            <td class="d-none d-xl-table-cell">
              January 11, 2020 at 17:20
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              146
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Visual Studio Code vs Atom Editor
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 07, 2020 at 23:19
            </td>
            <td class="d-none d-xl-table-cell">
              January 10, 2020 at 15:12
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              145
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Exploring the mysterious mountains
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 04, 2020 at 15:12
            </td>
            <td class="d-none d-xl-table-cell">
              January 05, 2020 at 19:12
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              144
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Inspire a new generation of web developers
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 03, 2020 at 17:33
            </td>
            <td class="d-none d-xl-table-cell">
              January 08, 2020 at 14:51
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              143
            </td>
            <td>
              <i class="fa fa-eye text-danger me-1"></i>
              <a href="be_pages_blog_story.php">
                What to do in the night market
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 02, 2020 at 08:23
            </td>
            <td class="d-none d-xl-table-cell">
              January 07, 2020 at 21:
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              142
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Modern CSS for Developers
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 02, 2020 at 14:54
            </td>
            <td class="d-none d-xl-table-cell">
              January 05, 2020 at 20:18
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              141
            </td>
            <td>
              <i class="fa fa-eye text-success me-1"></i>
              <a href="be_pages_blog_story.php">
                Laravel 6 From Scratch
              </a>
            </td>
            <td class="d-none d-sm-table-cell">
              <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a>
            </td>
            <td class="d-none d-xl-table-cell">
              January 01, 2020 at 12:20
            </td>
            <td class="d-none d-xl-table-cell">
              January 01, 2020 at 11:30
            </td>
            <td class="text-center">
              <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.php">
                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
              </a>
              <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- END Posts Table -->

      <!-- Posts Pagincation -->
      <nav aria-label="Posts Navigation">
        <ul class="pagination justify-content-end">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-left"></i>
              </span>
              <span class="visually-hidden">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              <span aria-hidden="true">
                <i class="fa fa-angle-double-right"></i>
              </span>
              <span class="visually-hidden">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- END Posts Pagincation -->
    </div>
  </div>
  <!-- END Posts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
