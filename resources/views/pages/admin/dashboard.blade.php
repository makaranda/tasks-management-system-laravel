@extends('layouts.admindashboard')
@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center mt-4">
      <div class="col-lg-12 mb-lg-0 pb-4">
          <h6 class="font-weight-bolder mb-0 main-topic-area">Dashboard</h6>
      </div>
      <div class="col-lg-10 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">

            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">Makaranda</p>
                  <h5 class="font-weight-bolder">Tasks Dashboard</h5>
                  <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                  <!--<a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                    Read More
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>-->
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary border-radius-lg h-100">
                  <img src="{{asset('public/assets/img/shapes/waves-white.svg')}}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <img class="w-100 position-relative z-index-2 pt-4" src="{{asset('public/assets/img/illustrations/rocket-white.png')}}" alt="rocket">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
@endsection
@push('css')
    <style>

    </style>
@endpush
