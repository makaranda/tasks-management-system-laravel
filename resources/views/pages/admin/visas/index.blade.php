@extends('layouts.admindashboard')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 mb-lg-0 pb-0">
        <h6 class="font-weight-bolder mb-0 main-topic-area">visas</h6>
    </div>
  </div>
  <div class="container-fluid py-0">
    <div class="row justify-content-center mt-4">

      <div class="col-lg-11 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">

            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="d-flex flex-column h-100">
                    <div class="card-header">
                        <a href="{{ route('visas.create') }}" class="btn btn-sm btn-secondary float-right"><i class="bi bi-plus-circle"></i> Add New Visa</a>
                    </div>
                    <div class="card-body" id="fetchAllvisasDatas">
                        
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
