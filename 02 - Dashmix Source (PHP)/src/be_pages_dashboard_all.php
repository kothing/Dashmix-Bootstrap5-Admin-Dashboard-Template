<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard Examples</h1>
      <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Dashboards</li>
          <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="row items-push">
    <div class="col-md-6 col-xl-4">
      <!-- Default Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="be_pages_dashboard_v1.php">
        <div class="block-content pt-5 pb-0 bg-default-dark">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_v1.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_v1@2x.png 2x" alt="Default Dashboard v1">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Corporate v1
          </p>
          <p class="fw-medium text-muted mb-0">
            Get inspiration for your project
          </p>
        </div>
      </a>
      <!-- END Default Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Social Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_social.php">
        <div class="block-content pt-5 pb-0 bg-xmodern-dark">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social@2x.png 2x" alt="Social Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Social
          </p>
          <p class="fw-medium text-muted mb-0">
            For your new social network
          </p>
        </div>
      </a>
      <!-- END Social Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Dark Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_dark.php">
        <div class="block-content pt-5 pb-0 bg-dark">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark@2x.png 2x" alt="Dark Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Dark
          </p>
          <p class="fw-medium text-muted mb-0">
            Dashboard with dark mode on
          </p>
        </div>
      </a>
      <!-- END Dark Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Modern Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_modern.php">
        <div class="block-content pt-5 pb-0 bg-gd-dusk">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern@2x.png 2x" alt="Modern Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Modern
          </p>
          <p class="fw-medium text-muted mb-0">
            Creative and media oriented
          </p>
        </div>
      </a>
      <!-- END Modern Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Minimal Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_minimal.php">
        <div class="block-content pt-5 pb-0 bg-xwork-lighter">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal@2x.png 2x" alt="Minimal Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Minimal
          </p>
          <p class="fw-medium text-muted mb-0">
            For super clean and artistic apps
          </p>
        </div>
      </a>
      <!-- END Minimal Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Messages Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_messages.php">
        <div class="block-content pt-5 pb-0 bg-xsmooth">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages@2x.png 2x" alt="Messages Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Messages
          </p>
          <p class="fw-medium text-muted mb-0">
            Perfect starting point for your inbox
          </p>
        </div>
      </a>
      <!-- END Messages Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Classic Boxed -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_classic_boxed.php">
        <div class="block-content pt-5 pb-0 bg-primary-lighter">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed@2x.png 2x" alt="Classic Boxed Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Classic Boxed
          </p>
          <p class="fw-medium text-muted mb-0">
            Corporate analytics dashboard
          </p>
        </div>
      </a>
      <!-- END Classic Boxed -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Crypto Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_crypto.php">
        <div class="block-content pt-5 pb-0 bg-dark">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto@2x.png 2x" alt="Crypto Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Crypto
          </p>
          <p class="fw-medium text-muted mb-0">
            Dashboard for crypto management
          </p>
        </div>
      </a>
      <!-- END Crypto Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Banking Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_banking.php">
        <div class="block-content pt-5 pb-0 bg-xwork-light">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking@2x.png 2x" alt="Banking Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Banking
          </p>
          <p class="fw-medium text-muted mb-0">
            Modern money dashboard
          </p>
        </div>
      </a>
      <!-- END Banking Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Hosting Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_hosting.php">
        <div class="block-content pt-5 pb-0 bg-xmodern">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting@2x.png 2x" alt="Hosting Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Hosting
          </p>
          <p class="fw-medium text-muted mb-0">
            Perfect for custom web hosting
          </p>
        </div>
      </a>
      <!-- END Hosting Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Booking Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_booking.php">
        <div class="block-content pt-5 pb-0 bg-xinspire-darker">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking@2x.png 2x" alt="Booking Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Booking
          </p>
          <p class="fw-medium text-muted mb-0">
            Building a travel business
          </p>
        </div>
      </a>
      <!-- END Booking Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Gaming Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_gaming.php">
        <div class="block-content pt-5 pb-0 bg-xeco-darker">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming@2x.png 2x" alt="Gaming Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Gaming
          </p>
          <p class="fw-medium text-muted mb-0">
            Minecraft server custom dashboard
          </p>
        </div>
      </a>
      <!-- END Gaming Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Tasks Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_tasks.php">
        <div class="block-content pt-5 pb-0 bg-gd-aqua">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks@2x.png 2x" alt="Tasks Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Tasks
          </p>
          <p class="fw-medium text-muted mb-0">
            Todo list web application
          </p>
        </div>
      </a>
      <!-- END Tasks Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Medical Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_medical.php">
        <div class="block-content pt-5 pb-0 bg-gd-sublime">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical@2x.png 2x" alt="Medical Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Medical
          </p>
          <p class="fw-medium text-muted mb-0">
            Hospital based interface
          </p>
        </div>
      </a>
      <!-- END Medical Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Travel Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_travel.php">
        <div class="block-content pt-5 pb-0 bg-gd-sea">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel@2x.png 2x" alt="Travel Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Travel
          </p>
          <p class="fw-medium text-muted mb-0">
            Hotel/Apartment renting interface
          </p>
        </div>
      </a>
      <!-- END Travel Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Social Compact Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_social_compact.php">
        <div class="block-content pt-5 pb-0 bg-xmodern-light">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact@2x.png 2x" alt="Social Compact Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Social Compact
          </p>
          <p class="fw-medium text-muted mb-0">
            UI similar to Facebook
          </p>
        </div>
      </a>
      <!-- END Social Compact Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Chat Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_chat.php">
        <div class="block-content pt-5 pb-0 bg-xdream-light">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat@2x.png 2x" alt="Chat Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Chat
          </p>
          <p class="fw-medium text-muted mb-0">
            Communication interface
          </p>
        </div>
      </a>
      <!-- END Chat Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Analytics Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_analytics.php">
        <div class="block-content pt-5 pb-0 bg-xpro-dark">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics@2x.png 2x" alt="Analytics Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Analytics
          </p>
          <p class="fw-medium text-muted mb-0">
            Web analytics interface
          </p>
        </div>
      </a>
      <!-- END Analytics Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- Corporate Slim Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_corporate_slim.php">
        <div class="block-content pt-5 pb-0 bg-gd-xpro">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_corporate_slim.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_corporate_slim@2x.png 2x" alt="Corporate Slim Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            Corporate Slim
          </p>
          <p class="fw-medium text-muted mb-0">
            Modern and clean interface
          </p>
        </div>
      </a>
      <!-- END Corporate Slim Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- WP Post Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_wp_post.php">
        <div class="block-content pt-5 pb-0 bg-gd-xwork">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_wp_post.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_wp_post@2x.png 2x" alt="WP Post Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            WP Post
          </p>
          <p class="fw-medium text-muted mb-0">
            A WordPress inspired UI
          </p>
        </div>
      </a>
      <!-- END WP Post Dashboard -->
    </div>
    <div class="col-md-6 col-xl-4">
      <!-- File Hosting Dashboard -->
      <a class="block block-rounded block-link-pop text-center h-100 mb-0" href="db_file_hosting.php">
        <div class="block-content pt-5 pb-0 bg-gd-xdream">
          <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_file_hosting.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_file_hosting@2x.png 2x" alt="File Hosting Dashboard">
        </div>
        <div class="block-content block-content-full">
          <p class="fs-lg fw-semibold mb-0">
            File Hosting
          </p>
          <p class="fw-medium text-muted mb-0">
            Cloud file hosting UI
          </p>
        </div>
      </a>
      <!-- END File Hosting Dashboard -->
    </div>
  </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>