@extends('layouts.admindashboard')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 mb-lg-0 pb-4">
        <h6 class="font-weight-bolder mb-0 main-topic-area">Tasks</h6>
    </div>
    <div class="page-header min-height-300 border-radius-xl mt-0" style="background-image: url('{{ asset('public/assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
      <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('public/assets/img/user-icon.png') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
                {{ Auth::guard('admin')->user()->name }}
            </h5>
            <p class="mb-0 font-weight-bold text-sm d-none">
              CEO / Co-Founder
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-relative end-0">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row justify-content-center mt-4">

      <div class="col-lg-11 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">

            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="d-flex flex-column h-100">
                    <div class="card-header">
                        <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-secondary float-right"><i class="bi bi-plus-circle"></i> Add New Task</a>
                    </div>
                    <div class="card-body" id="fetchAllTasksDatas">

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
        .float-right{
            float: right;
        }
    </style>
@endpush
