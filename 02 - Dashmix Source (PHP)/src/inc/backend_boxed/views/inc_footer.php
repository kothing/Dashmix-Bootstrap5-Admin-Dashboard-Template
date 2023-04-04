<?php
/**
 * boxed_backend/views/inc_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page
 *
 */
?>

<!-- Footer -->
<footer id="page-footer" class="footer-static bg-body-extra-light">
  <div class="content py-4">
    <!-- Footer Navigation -->
    <div class="row items-push fs-sm border-bottom pt-4">
      <div class="col-6 col-md-4">
        <h3 class="fw-light">Account</h3>
        <ul class="list list-simple-mini">
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-users text-primary-lighter me-1"></i> Customers
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fab fa-fw fa-paypal text-primary-lighter me-1"></i> Billing
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-wrench text-primary-lighter me-1"></i> Preferences
            </a>
          </li>
          <li>
            <a class="fw-semibold text-dark" href="javascript:void(0)">
              <i class="fa fa-fw fa-user-circle text-muted me-1"></i> Carol Ray
            </a> -
            <a class="fw-semibold text-danger" href="javascript:void(0)">
              Log out?
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3 class="fw-light">Server</h3>
        <ul class="list list-simple-mini">
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-database text-primary-lighter me-1"></i> Databases
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-globe-americas text-primary-lighter me-1"></i> Domains
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-envelope text-primary-lighter me-1"></i> Emails
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-wrench text-primary-lighter me-1"></i> Management
            </a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md-4">
        <h3 class="fw-light">Projects</h3>
        <ul class="list list-simple-mini">
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example1.com
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example2.com
            </a>
          </li>
          <li>
            <a class="fw-semibold" href="javascript:void(0)">
              <i class="fa fa-fw fa-globe text-primary-lighter me-1"></i> example2.com
            </a>
          </li>
          <li>
            <a class="fw-semibold text-dark" href="javascript:void(0)">
              <i class="fa fa-fw fa-plus text-muted me-1"></i> Add new project
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- END Footer Navigation -->

    <!-- Footer Copyright -->
    <div class="row fs-sm pt-4">
      <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
      </div>
      <div class="col-sm-6 order-sm-1 text-center text-sm-start">
        <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank"><?php echo $dm->name . ' ' . $dm->version; ?></a> &copy; <span data-toggle="year-copy"></span>
      </div>
    </div>
    <!-- END Footer Copyright -->
  </div>
</footer>
<!-- END Footer -->
