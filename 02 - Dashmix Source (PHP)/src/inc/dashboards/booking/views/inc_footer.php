<?php
/**
 * dashboards/booking/views/inc_footer.php
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
        <h3 class="h5 fw-bold">Destinations</h3>
        <ul class="list list-simple-mini">
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Countries</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">States</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Cities</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Airports</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Hotels</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">POIs</a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md-4">
        <h3 class="h5 fw-bold">Experiences</h3>
        <ul class="list list-simple-mini">
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Food</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Drink</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Cars</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Sports</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Islands</a>
          </li>
          <li>
            <a class="link-fx fw-semibold" href="javascript:void(0)">Xtreme</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3 class="h5 fw-bold">Special Offers</h3>
        <form class="mb-4" action="db_booking.php" method="POST">
          <div class="input-group">
            <input type="email" class="form-control" id="dm-subscribe-email" name="dm-subscribe-email" placeholder="Email Address..">
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </div>
        </form>
        <h3 class="h5 fw-bold">Our Company</h3>
        <div>
          0956 Sunshine Street, Suite 85<br>
          Los Angeles, CA 98852<br>
          <abbr title="Phone">P:</abbr> (123) 456-7890
        </div>
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
