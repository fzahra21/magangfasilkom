@extends('layouts.master')
@section('title', 'Login')

@section('extracss')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        label{
            font-family: "Nunito", sans-serif;
            color: #013289;
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
        }
    </style>
@endsection

@section('main')
<section class="vh-80 mt-4">
    <div class="container py-5 h-100">
        @include('errors\message')

      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Login">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="{{url('/login')}}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg required" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg required" />
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">

                <!-- Submit button -->
                <button type="submit" class="getstarted scrollto btn btn-primary btn-lg btn-block">Login</button>
                </div>

            </form>
        </div>
      </div>
    </div>
  </section>


@endsection

