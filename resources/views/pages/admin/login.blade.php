@extends('layouts.adminlogin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 mt-5">
                <form class="form card mt-5" action="{{ route('admin.authenticate') }}" method="POST">
                    @if (Session::has('error'))
                       <div class="alert alert-danger d-flex align-items-center" role="alert">
                           <div class="row">
                               <div class="col-12 col-md-12">
                                   <div><i class="fa fa-ban mr-2"></i>Error</div>
                               </div>
                               <div class="col-12 col-md-12">
                                   <p>{{ Session::get('error') }}</p>
                               </div>
                           </div>
                       </div>
                   @endif
                   @csrf
                   <div class="card_header">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z"></path>
                      </svg>
                      <h1 class="form_heading">User Login</h1>
                    </div>
                    <div class="field">
                      <label for="user_name">User Email</label>
                      <input class="input" name="user_name" type="text" placeholder="Username" id="user_name">
                        @error('user_name')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                      <label for="user_password">Password</label>
                      <input class="input" name="user_password" type="password" placeholder="Password" id="user_password">
                      @error('user_password')
                        <p class="invalid-feedback">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="field">
                      <figure>
                        <blockquote class="blockquote">
                          <p><em>Note:</em></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          User Email : <cite title="makaranda">makarandapathirana@gmail.com</cite>
                        </figcaption>
                        <figcaption class="blockquote-footer">
                          Password : <cite title="user">123</cite>
                        </figcaption>
                      </figure>
                      <a href="{{ URL::to('') }}" class="button2 float-left">Home</a>
                      <button class="button float-right">Login</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .card {
            background: #F4F6FB;
            border: 1px solid white;
            box-shadow: 10px 10px 64px 0px rgba(180, 180, 207, 0.75);
            -webkit-box-shadow: 10px 10px 64px 0px rgba(186, 186, 202, 0.75);
            -moz-box-shadow: 10px 10px 64px 0px rgba(208, 208, 231, 0.75);
        }

        .form {
            padding: 25px;
        }

        .card_header {
            display: flex;
            align-items: center;
        }

        .card svg {
            color: #7878bd;
            margin-bottom: 20px;
            margin-right: 5px;
        }

        .form_heading {
            padding-bottom: 20px;
            font-size: 21px;
            color: #7878bd;
        }

        .field {
            padding-bottom: 10px;
        }

        .input {
            border-radius: 5px;
            background-color: #e9e9f7;
            padding: 5px;
            width: 100%;
            color: #7a7ab3;
            border: 1px solid #dadaf7;
        }

        .input:focus-visible {
            outline: 1px solid #aeaed6;
        }

        .input::placeholder {
            color: #bcbcdf;
        }

        label {
            color: #B2BAC8;
            font-size: 14px;
            display: block;
            padding-bottom: 4px;
        }

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

        .button {
            background-color: #7878bd;
            margin-top: 10px;
            font-size: 14px;
            padding: 7px 12px;
            height: auto;
            font-weight: 500;
            color: white;
            border: none;
            text-decoration: none;
        }

        .button2 {
            background-color: #0603c2;
            margin-top: 10px;
            font-size: 14px;
            padding: 7px 12px;
            height: auto;
            font-weight: 500;
            color: white;
            border: none;
            text-decoration: none;
        }
        .button2:hover {
            background-color: #100de0;
        }
        button:hover {
            background-color: #5f5f9c;
        }
    </style>
@endpush
