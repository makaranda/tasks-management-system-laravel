@extends('layouts.admindashboard')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 mb-lg-0 pb-0">
        <h6 class="font-weight-bolder mb-0 main-topic-area">Edit Visa</h6>
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
                                <form action="{{ route('visas.update',$visas->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" id="user_id" value="{{ $visas->user_id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Task Title</label>
                                                    <input type="text" class="form-control" name="task_title" id="task_title" value="{{ $visas->title }}"/>
                                                    @if($errors->has('task_title'))
                                                        <small class="text-danger">{{ $errors->first('task_title') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-sm-6"></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Deadline</label>
                                                    <input type="date" class="form-control" name="task_deadline" id="task_deadline" value="{{ $visas->deadline }}"/>
                                                    @if($errors->has('task_deadline'))
                                                        <small class="text-danger">{{ $errors->first('task_deadline') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="category">Category</label>
                                                    <select class="form-control" name="category" id="category">
                                                        <option value="{{ $visas->category}}">{{ $visas->category}}</option>
                                                        @foreach ($categories as $category)
                                                            @if ($visas->category != $category->category_name)
                                                                <option value="{{ $category->category_name}}">{{ $category->category_name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="status" id="status">
                                                        @if ($visas->status == 1)
                                                            <option value="1">Active</option><option value="0">Not Active</option>
                                                        @else
                                                            <option value="0">Not Active</option><option value="1">Active</option>
                                                        @endif

                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-12">
                                                    <label for="">Description</label>
                                                    <textarea rows="4" class="form-control" name="description" id="description">{{ $visas->description }}</textarea>
                                                    @if($errors->has('description'))
                                                        <small class="text-danger">{{ $errors->first('description') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-sm-6"></div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary shadow btn-sm">
                                                        <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                                        <span data-value="save_and_back">Update and back</span>
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
