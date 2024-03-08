@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-5 text-center mt-5">
                <h1>Welcome to Tasks Management System</h1>
                <a href="{{ route('admin.login') }}" class="btn btn-lg btn-info mt-5">Click to User Login</a>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>

        button {
        background-color: #7878bd;
        margin-top: 10px;
        font-size: 14px;
        padding: 7px 12px;
        height: auto;
        font-weight: 500;
        color: white;
        border: none;
        }

        button:hover {
        background-color: #5f5f9c;
        }
    </style>
@endpush
