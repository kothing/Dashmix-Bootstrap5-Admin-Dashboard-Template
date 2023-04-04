@extends('layouts.backend')

@section('css')
  <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
@endsection

@section('js')
  <!-- jQuery (required for Slick Slider plugin) -->
  <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>

  <!-- Page JS Code -->
  @vite(['resources/js/pages/slick.js'])
@endsection

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Slick Slider Example</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Examples</li>
            <li class="breadcrumb-item active" aria-current="page">Plugin</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- Info -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Plugin Example
            </h3>
          </div>
          <div class="block-content">
            <p>
              This page showcases how easily you can add a plugin’s JS/CSS assets and init it using a Dashmix JS helper.
            </p>
          </div>
        </div>
        <!-- END Info -->
      </div>
      <div class="col-md-6">
        <!-- Slider with dots -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Dots
            </h3>
          </div>
          <div class="js-slider" data-dots="true">
            <div>
              <img class="img-fluid" src="{{ asset('media/photos/photo2.jpg') }}" alt="photo">
            </div>
            <div>
              <img class="img-fluid" src="{{ asset('media/photos/photo3.jpg') }}" alt="photo">
            </div>
            <div>
              <img class="img-fluid" src="{{ asset('media/photos/photo4.jpg') }}" alt="photo">
            </div>
          </div>
          <!-- END Slider with dots -->
        </div>
        <!-- END Dots -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
@endsection
