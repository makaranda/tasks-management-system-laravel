@extends('layouts.admindashboard')
@section('content')

  <div class="container-fluid">
    <div class="col-lg-12 mb-lg-0 pb-0">
        <h6 class="font-weight-bolder mb-0 main-topic-area">Add Visa</h6>
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
                    <div class="card-header pb-0">
                        
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Alert</strong> {{ Session::get('message') }}
                                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <form action="{{ route('visas.save') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::guard('admin')->user()->id }}">
                                    <input type="hidden" name="status" id="status" value="1">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Visa Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                                                    @if($errors->has('title'))
                                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-sm-6"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="type">Visa Type</label>
                                                    <select class="form-control" name="type" id="type">
                                                        @foreach ($visas_types as $visas_type)
                                                            <option value="{{ $visas_type->visa_type_name}}">{{ ucfirst($visas_type->visa_type_name)}} Term Visa</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Visa Valid Days</label>
                                                    <input type="number" class="form-control" name="valid_days" id="valid_days" value="{{ old('visas_deadline') }}"/>
                                                    @if($errors->has('visas_deadline'))
                                                        <small class="text-danger">{{ $errors->first('visas_deadline') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Visa Amount</label>
                                                    <input type="number" class="form-control" name="visa_price" id="visa_price" value="{{ old('visa_price') }}"/>
                                                    @if($errors->has('visa_price'))
                                                        <small class="text-danger">{{ $errors->first('visa_price') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Visa Type</label>
                                                    <input type="text" class="form-control" name="visa_type" id="visa_type" value="{{ old('visa_type') }}"/>
                                                    @if($errors->has('visa_type'))
                                                        <small class="text-danger">{{ $errors->first('visa_type') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Processing Time</label>
                                                    <input type="text" class="form-control" name="procesing_time" id="procesing_time" value="{{ old('procesing_time') }}"/>
                                                    @if($errors->has('procesing_time'))
                                                        <small class="text-danger">{{ $errors->first('procesing_time') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Visa Validity</label>
                                                    <input type="text" class="form-control" name="visa_validity" id="visa_validity" value="{{ old('visa_validity') }}"/>
                                                    @if($errors->has('visa_validity'))
                                                        <small class="text-danger">{{ $errors->first('visa_validity') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Stay Period</label>
                                                    <input type="text" class="form-control" name="stay_period" id="stay_period" value="{{ old('stay_period') }}"/>
                                                    @if($errors->has('stay_period'))
                                                        <small class="text-danger">{{ $errors->first('stay_period') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Extension</label>
                                                    <input type="text" class="form-control" name="extension" id="extension" value="{{ old('extension') }}"/>
                                                    @if($errors->has('extension'))
                                                        <small class="text-danger">{{ $errors->first('extension') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary shadow btn-sm">
                                                        <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                                        <span data-value="save_and_back">Save and back</span>
                                                    </button>
                                                    <a href="{{ route('admin.visas') }}" class="btn btn-secondary shadow btn-sm"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
