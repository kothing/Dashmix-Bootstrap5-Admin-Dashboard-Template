<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-boxed content-full overflow-hidden">
  <!-- Header -->
  <div class="py-5 text-center">
    <a class="link-fx fw-bold fs-3" href="index.php">
      <span class="text-dark">Dash</span><span class="text-primary">mix</span>
    </a>
    <h1 class="fs-2 fw-bold mt-4 mb-2">
      Complete Payment
    </h1>
    <h2 class="fs-5 fw-medium text-muted mb-0">
      Thank you for shopping from our store. Your items are almost at your doorstep.
    </h2>
  </div>
  <!-- END Header -->

  <!-- Checkout -->
  <form action="op_checkout.php" method="POST" onsubmit="return false;">
    <div class="row">
      <!-- Order Info -->
      <div class="col-xl-7">
        <!-- Shipping Method -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              1. Shipping Method
            </h3>
          </div>
          <div class="block-content block-content-full space-y-3">
            <div class="form-check form-block">
              <input type="radio" class="form-check-input" id="checkout-delivery-1" name="checkout-delivery" checked>
              <label class="form-check-label" for="checkout-delivery-1">
                <span class="d-block fw-normal p-1">
                  <span class="d-block fw-semibold mb-1">Standard Delivery</span>
                  <span class="d-block fs-sm fw-medium text-muted"><span class="fw-semibold">FREE</span> (4-5 working days)</span>
                </span>
              </label>
            </div>
            <div class="form-check form-block">
              <input type="radio" class="form-check-input" id="checkout-delivery-2" name="checkout-delivery">
              <label class="form-check-label" for="checkout-delivery-2">
                <span class="d-block fw-normal p-1">
                  <span class="d-block fw-semibold mb-1">
                    Express Delivery
                    <i class="fa fa-fire text-danger ms-1"></i>
                  </span>
                  <span class="d-block fs-sm fw-medium text-muted"><span class="fw-semibold">+$9.99</span> (1-2 working days)</span>
                </span>
              </label>
            </div>
          </div>
        </div>
        <!-- END Shipping Method -->

        <!-- Shipping Address -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              2. Shipping Address
            </h3>
          </div>
          <div class="block-content">
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="checkout-company" name="checkout-company" placeholder="Enter your company">
                <label class="form-label" for="checkout-company">Company (optional)</label>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="checkout-firstname" name="checkout-firstname" placeholder="Enter your firstname">
                  <label class="form-label" for="checkout-firstname">Firstname</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="checkout-lastname" name="checkout-lastname" placeholder="Enter your lastname">
                  <label class="form-label" for="checkout-lastname">Lastname</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="checkout-street-1" name="checkout-street-1" placeholder="Enter your street address 1">
                <label class="form-label" for="checkout-street-1">Street Address 1</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="checkout-street-2" name="checkout-street-2" placeholder="Enter your street address 2">
                <label class="form-label" for="checkout-street-1">Street Address 2</label>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-7">
                <div class="form-floating">
                  <input type="text" class="form-control" id="checkout-city" name="checkout-city" placeholder="Enter your city">
                  <label class="form-label" for="checkout-city">City</label>
                </div>
              </div>
              <div class="col-5">
                <div class="form-floating">
                  <input type="text" class="form-control" id="checkout-postal" name="checkout-postal" placeholder="Enter your postal">
                  <label class="form-label" for="checkout-postal">Postal</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="checkout-phone" name="checkout-phone" placeholder="Enter your phone number">
                <label class="form-label" for="checkout-phone">Phone Number</label>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkout-billing-address-same" name="checkout-billing-address-same" checked>
                <label class="form-check-label fw-medium text-muted" for="checkout-billing-address-same">Billing address is the same</label>
              </div>
            </div>
          </div>
        </div>
        <!-- END Shipping Address -->

        <!-- Payment -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              3. Payment
            </h3>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-3">
              <div class="col-6 col-sm-2">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="checkout-payment-1" name="checkout-payment" checked>
                  <label class="form-check-label bg-body-light" for="checkout-payment-1">
                    <span class="d-block p-1 ratio ratio-21x9">
                      <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152.407 108">
                        <path style="fill:none" d="M0 0h152.407v108H0z"/>
                        <path style="fill:#ff5f00" d="M60.412 25.697h31.5v56.606h-31.5z"/>
                        <path d="M382.208 306a35.938 35.938 0 0 1 13.75-28.303 36 36 0 1 0 0 56.606A35.938 35.938 0 0 1 382.208 306Z" transform="translate(-319.796 -252)" style="fill:#eb001b"/>
                        <path d="M454.203 306a35.999 35.999 0 0 1-58.245 28.303 36.005 36.005 0 0 0 0-56.606A35.999 35.999 0 0 1 454.203 306ZM450.769 328.308v-1.16h.467v-.235h-1.19v.236h.468v1.159Zm2.31 0v-1.398h-.364l-.42.962-.42-.962h-.365v1.398h.258v-1.054l.393.908h.267l.394-.91v1.056Z" transform="translate(-319.796 -252)" style="fill:#f79e1b"/>
                      </svg>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6 col-sm-2">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="checkout-payment-2" name="checkout-payment">
                  <label class="form-check-label bg-body-light" for="checkout-payment-2">
                    <span class="d-block p-1 ratio ratio-21x9">
                      <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000.046 323.653">
                        <path style="fill:#00579f" d="M116.145 95.719H97.858l11.438-70.724h18.286zM182.437 26.724c-3.607-1.431-9.328-3.011-16.402-3.011-18.059 0-30.776 9.63-30.854 23.398-.15 10.158 9.105 15.8 16.027 19.187 7.075 3.461 9.48 5.72 9.48 8.805-.072 4.738-5.717 6.922-10.982 6.922-7.301 0-11.213-1.126-17.158-3.762l-2.408-1.13-2.559 15.876c4.289 1.954 12.191 3.688 20.395 3.764 19.188 0 31.68-9.481 31.828-24.153.073-8.051-4.814-14.22-15.35-19.261-6.396-3.236-10.313-5.418-10.313-8.729.075-3.01 3.313-6.093 10.533-6.093 5.945-.151 10.313 1.278 13.622 2.708l1.654.751 2.487-15.272zM206.742 70.664c1.506-4.063 7.301-19.788 7.301-19.788-.076.151 1.503-4.138 2.406-6.771l1.278 6.094s3.463 16.929 4.215 20.465h-15.2zm22.573-45.669H215.17c-4.362 0-7.676 1.278-9.558 5.868l-27.163 64.855h19.188s3.159-8.729 3.838-10.609h23.479c.525 2.483 2.182 10.609 2.182 10.609h16.932l-14.753-70.723zM82.584 24.995 64.675 73.222l-1.957-9.781c-3.311-11.286-13.695-23.548-25.283-29.645l16.404 61.848h19.338l28.744-70.649H82.584z" transform="matrix(4.42996 0 0 4.42996 -81.166 -105.048)"/>
                        <path d="M48.045 24.995H18.623l-.301 1.429c22.951 5.869 38.151 20.016 44.396 37.02L56.322 30.94c-1.053-4.517-4.289-5.796-8.277-5.945z" style="fill:#faa61a" transform="matrix(4.42996 0 0 4.42996 -81.166 -105.048)"/>
                      </svg>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6 col-sm-2">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="checkout-payment-3" name="checkout-payment">
                  <label class="form-check-label bg-body-light" for="checkout-payment-3">
                    <span class="d-block p-1 ratio ratio-21x9">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 997.517">
                        <path d="M55.5 1002.345h997.517v538.49l-49.375 77.147 49.375 68.661v313.22H55.5v-507.631l30.859-35.488-30.859-33.945Z" style="fill:#016fd0;fill-opacity:1;stroke:none" transform="translate(-55.5 -1002.345)"/>
                        <path d="M249.14 1697.444v-156.61h165.82l17.791 23.193 18.38-23.192h601.886v145.808s-15.74 10.644-33.945 10.801H685.795l-20.058-24.687v24.687h-65.73v-42.142s-8.979 5.883-28.39 5.883h-22.373v36.26h-99.52l-17.766-23.69-18.038 23.69zM55.5 1422.8l37.393-87.177h64.668l21.22 48.832v-48.833h80.388l12.633 35.295 12.247-35.294h360.858v17.743s18.97-17.744 50.146-17.744l117.085.41 20.854 48.193v-48.602h67.273l18.515 27.683v-27.684h67.89v156.61h-67.89l-17.744-27.773v27.773h-98.838l-9.94-24.687h-26.57l-9.779 24.687h-67.028c-26.826 0-43.974-17.382-43.974-17.382v17.382H543.843l-20.058-24.687v24.687H147.981l-9.933-24.687H111.56l-9.862 24.687H55.5z" style="fill:#fff;stroke:none" transform="translate(-55.5 -1002.345)"/>
                        <path d="m106.128 1354.93-50.435 117.263h32.836l9.306-23.481h54.1l9.257 23.481h33.56l-50.388-117.264h-38.236zm18.66 27.29 16.49 41.033H108.25l16.538-41.033zM198.223 1472.174v-117.265l46.661.174 27.14 75.604 26.49-75.778h46.289v117.264h-29.316v-86.405l-31.076 86.405h-25.71l-31.162-86.405v86.405zM364.861 1472.174v-117.265h95.663v26.23h-66.038v20.059h64.495v24.687h-64.495v20.83h66.038v25.459zM477.497 1354.93v117.263h29.316v-41.66h12.343l35.15 41.66h35.826l-38.574-43.202c15.831-1.336 32.161-14.924 32.161-36.018 0-24.677-19.368-38.044-40.985-38.044h-65.237zm29.316 26.23h33.51c8.04 0 13.887 6.287 13.887 12.343 0 7.79-7.577 12.343-13.452 12.343h-33.945v-24.687zM625.62 1472.174h-29.933v-117.265h29.933zM696.595 1472.174h-6.46c-31.262 0-50.243-24.63-50.243-58.15 0-34.35 18.768-59.115 58.246-59.115h32.402v27.773h-33.586c-16.026 0-27.36 12.507-27.36 31.63 0 22.71 12.96 32.249 31.63 32.249h7.715zM760.387 1354.93l-50.435 117.263h32.836l9.305-23.481h54.1l9.258 23.481h33.559l-50.387-117.264h-38.236zm18.66 27.29 16.49 41.033h-33.029l16.539-41.033zM852.433 1472.174v-117.265h37.272l47.59 73.676v-73.676h29.317v117.264h-36.067l-48.796-75.604v75.605zM269.199 1677.386v-117.264h95.662v26.23h-66.038v20.058h64.495v24.687h-64.495v20.83h66.038v25.459zM737.947 1677.386v-117.264h95.662v26.23h-66.038v20.058h64.187v24.687H767.57v20.83h66.038v25.459zM368.574 1677.386l46.578-57.91-47.687-59.354H404.4l28.4 36.693 28.497-36.693h35.488l-47.06 58.632 46.663 58.632H459.46l-27.576-36.115-26.905 36.115zM499.87 1560.141v117.264h30.087v-37.03h30.859c26.111 0 45.903-13.853 45.903-40.792 0-22.316-15.523-39.442-42.094-39.442H499.87zm30.087 26.52h32.498c8.436 0 14.465 5.17 14.465 13.5 0 7.827-5.999 13.501-14.561 13.501h-32.402v-27.001zM619.448 1560.122v117.264h29.316v-41.66h12.344l35.15 41.66h35.825l-38.573-43.203c15.83-1.336 32.16-14.923 32.16-36.018 0-24.676-19.368-38.043-40.984-38.043h-65.238zm29.316 26.23h33.511c8.039 0 13.887 6.288 13.887 12.343 0 7.79-7.577 12.344-13.453 12.344h-33.945v-24.687zM847.187 1677.386v-25.459h58.671c8.681 0 12.44-4.691 12.44-9.836 0-4.93-3.747-9.914-12.44-9.914h-26.513c-23.045 0-35.88-14.04-35.88-35.121 0-18.802 11.753-36.934 46-36.934h57.088l-12.343 26.384h-49.375c-9.438 0-12.343 4.953-12.343 9.682 0 4.861 3.59 10.222 10.8 10.222h27.773c25.69 0 36.838 14.572 36.838 33.656 0 20.516-12.422 37.32-38.236 37.32zM954.784 1677.386v-25.459h58.67c8.682 0 12.44-4.691 12.44-9.836 0-4.93-3.746-9.914-12.44-9.914h-26.512c-23.046 0-35.88-14.04-35.88-35.121 0-18.802 11.753-36.934 45.999-36.934h57.089l-12.344 26.384h-49.374c-9.438 0-12.344 4.953-12.344 9.682 0 4.861 3.59 10.222 10.801 10.222h27.773c25.69 0 36.838 14.572 36.838 33.656 0 20.516-12.422 37.32-38.236 37.32z" style="fill:#016fd0;fill-opacity:1;stroke:none" transform="translate(-55.5 -1002.345)"/>
                      </svg>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6 col-sm-2">
                <div class="form-check form-block">
                  <input type="radio" class="form-check-input" id="checkout-payment-4" name="checkout-payment">
                  <label class="form-check-label bg-body-light" for="checkout-payment-4">
                    <span class="d-block p-1 ratio ratio-21x9">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 33">
                        <path fill="#253B80" d="M46.211 6.749h-6.839a.95.95 0 0 0-.939.802l-2.766 17.537a.57.57 0 0 0 .564.658h3.265a.95.95 0 0 0 .939-.803l.746-4.73a.95.95 0 0 1 .938-.803h2.165c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415-.972-1.142-2.696-1.746-4.985-1.746zM47 13.154c-.374 2.454-2.249 2.454-4.062 2.454h-1.032l.724-4.583a.57.57 0 0 1 .563-.481h.473c1.235 0 2.4 0 3.002.704.359.42.469 1.044.332 1.906zM66.654 13.075h-3.275a.57.57 0 0 0-.563.481l-.145.916-.229-.332c-.709-1.029-2.29-1.373-3.868-1.373-3.619 0-6.71 2.741-7.312 6.586-.313 1.918.132 3.752 1.22 5.031.998 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .562.66h2.95a.95.95 0 0 0 .939-.803l1.77-11.209a.568.568 0 0 0-.561-.658zm-4.565 6.374c-.316 1.871-1.801 3.127-3.695 3.127-.951 0-1.711-.305-2.199-.883-.484-.574-.668-1.391-.514-2.301.295-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.499.589.697 1.411.554 2.317zM84.096 13.075h-3.291a.954.954 0 0 0-.787.417l-4.539 6.686-1.924-6.425a.953.953 0 0 0-.912-.678h-3.234a.57.57 0 0 0-.541.754l3.625 10.638-3.408 4.811a.57.57 0 0 0 .465.9h3.287a.949.949 0 0 0 .781-.408l10.946-15.8a.57.57 0 0 0-.468-.895z"/>
                        <path fill="#179BD7" d="M94.992 6.749h-6.84a.95.95 0 0 0-.938.802l-2.766 17.537a.569.569 0 0 0 .562.658h3.51a.665.665 0 0 0 .656-.562l.785-4.971a.95.95 0 0 1 .938-.803h2.164c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.971-1.142-2.694-1.746-4.983-1.746zm.789 6.405c-.373 2.454-2.248 2.454-4.062 2.454h-1.031l.725-4.583a.568.568 0 0 1 .562-.481h.473c1.234 0 2.4 0 3.002.704.359.42.468 1.044.331 1.906zM115.434 13.075h-3.273a.567.567 0 0 0-.562.481l-.145.916-.23-.332c-.709-1.029-2.289-1.373-3.867-1.373-3.619 0-6.709 2.741-7.311 6.586-.312 1.918.131 3.752 1.219 5.031 1 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .564.66h2.949a.95.95 0 0 0 .938-.803l1.771-11.209a.571.571 0 0 0-.565-.658zm-4.565 6.374c-.314 1.871-1.801 3.127-3.695 3.127-.949 0-1.711-.305-2.199-.883-.484-.574-.666-1.391-.514-2.301.297-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.501.589.699 1.411.554 2.317zM119.295 7.23l-2.807 17.858a.569.569 0 0 0 .562.658h2.822c.469 0 .867-.34.939-.803l2.768-17.536a.57.57 0 0 0-.562-.659h-3.16a.571.571 0 0 0-.562.482z"/>
                        <path fill="#253B80" d="m7.266 29.154.523-3.322-1.165-.027H1.061L4.927 1.292a.316.316 0 0 1 .314-.268h9.38c3.114 0 5.263.648 6.385 1.927.526.6.861 1.227 1.023 1.917.17.724.173 1.589.007 2.644l-.012.077v.676l.526.298a3.69 3.69 0 0 1 1.065.812c.45.513.741 1.165.864 1.938.127.795.085 1.741-.123 2.812-.24 1.232-.628 2.305-1.152 3.183a6.547 6.547 0 0 1-1.825 2c-.696.494-1.523.869-2.458 1.109-.906.236-1.939.355-3.072.355h-.73c-.522 0-1.029.188-1.427.525a2.21 2.21 0 0 0-.744 1.328l-.055.299-.924 5.855-.042.215c-.011.068-.03.102-.058.125a.155.155 0 0 1-.096.035H7.266z"/>
                        <path fill="#179BD7" d="M23.048 7.667c-.028.179-.06.362-.096.55-1.237 6.351-5.469 8.545-10.874 8.545H9.326c-.661 0-1.218.48-1.321 1.132L6.596 26.83l-.399 2.533a.704.704 0 0 0 .695.814h4.881c.578 0 1.069-.42 1.16-.99l.048-.248.919-5.832.059-.32c.09-.572.582-.992 1.16-.992h.73c4.729 0 8.431-1.92 9.513-7.476.452-2.321.218-4.259-.978-5.622a4.667 4.667 0 0 0-1.336-1.03z"/>
                        <path fill="#222D65" d="M21.754 7.151a9.757 9.757 0 0 0-1.203-.267 15.284 15.284 0 0 0-2.426-.177h-7.352a1.172 1.172 0 0 0-1.159.992L8.05 17.605l-.045.289a1.336 1.336 0 0 1 1.321-1.132h2.752c5.405 0 9.637-2.195 10.874-8.545.037-.188.068-.371.096-.55a6.594 6.594 0 0 0-1.017-.429 9.045 9.045 0 0 0-.277-.087z"/>
                        <path fill="#253B80" d="M9.614 7.699a1.169 1.169 0 0 1 1.159-.991h7.352c.871 0 1.684.057 2.426.177a9.757 9.757 0 0 1 1.481.353c.365.121.704.264 1.017.429.368-2.347-.003-3.945-1.272-5.392C20.378.682 17.853 0 14.622 0h-9.38c-.66 0-1.223.48-1.325 1.133L.01 25.898a.806.806 0 0 0 .795.932h5.791l1.454-9.225 1.564-9.906z"/>
                      </svg>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-0">
          <div class="block-content block-content-full">
            <div class="p-3 rounded-3 bg-body-light">
              <div class="mb-4">
                <div class="form-floating">
                  <input type="text" class="form-control" id="payment-card-number" name="payment-card-number" placeholder="**** **** **** ****">
                  <label class="form-label" for="payment-card-number">Card Number</label>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="payment-expriration" name="payment-expriration" placeholder="MM / YY">
                    <label class="form-label" for="payment-expriration">MM / YY</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="payment-cvc" name="payment-cvc" placeholder="***">
                    <label class="form-label" for="payment-cvc">CVC</label>
                  </div>
                </div>
              </div>
              <div>
                <div class="form-floating">
                  <input type="text" class="form-control" id="payment-card-name" name="payment-card-name" placeholder="Enter your name">
                  <label class="form-label" for="payment-card-name">Name on Card</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Payment -->
      </div>
      <!-- END Order Info -->

      <!-- Order Summary -->
      <div class="col-xl-5 order-xl-last">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Order Summary
            </h3>
          </div>
          <div class="block-content block-content-full">
            <table class="table table-vcenter">
              <tbody>
                <tr>
                  <td class="ps-0">
                    <a class="fw-semibold" href="javascript:void(0)">Airpods</a>
                    <div class="fs-sm text-muted">Bluetooth headset</div>
                  </td>
                  <td class="pe-0 fw-medium text-end">$129</td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <a class="fw-semibold" href="javascript:void(0)">Mac Mini</a>
                    <div class="fs-sm text-muted">256GB, 16GB RAM</div>
                  </td>
                  <td class="pe-0 fw-medium text-end">$799</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="ps-0 fw-medium">Subtotal</td>
                  <td class="pe-0 fw-medium text-end">$928</td>
                </tr>
                <tr>
                <td class="ps-0 fw-medium">Vat (10%)</td>
                  <td class="pe-0 fw-medium text-end">$92.8</td>
                </tr>
                <tr>
                  <td class="ps-0 fw-medium">Total</td>
                  <td class="pe-0 fw-bold text-end">$1,020.8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-3 push">
          <i class="fa fa-check opacity-50 me-1"></i>
          Complete Order
        </button>
      </div>
      <!-- END Order Summary -->
    </div>
  </form>
  <!-- END Checkout -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>