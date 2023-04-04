@extends('layouts.simple')

@section('content')
  <!-- Hero -->
  <div class="hero bg-body-extra-light">
    <div class="hero-inner">
      <div class="content content-full text-center">
        <h1 class="fw-bold mb-2">
          Dash<span class="text-primary">mix</span> + Laravel <span class="text-danger">9</span>
        </h1>
        <h2 class="h4 fw-medium text-muted mb-5">
          Welcome to the starter kit. Build something amazing.
        </h2>
        <a class="btn btn-hero btn-primary px-4 py-3 d-inline-block" href="/dashboard">
          <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Enter Dashboard
        </a>
      </div>
    </div>
  </div>
  <!-- END Hero -->
@endsection
