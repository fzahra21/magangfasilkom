@extends('layouts.master')
@section('title', 'Dashboard')

@section('main')

@section('extracss')
    <style>
        .img-icon{
            height: 90px;
            width: 90px;
            object-fit: cover;
        }

        p {
            font-family: "Nunito", sans-serif;
            color: #013289;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
        }

    </style>
@endsection

<section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5">
        <h2>Kelola Dashboard</h2>
        <p>Selamat Datang di Halaman Dashboard</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <a href="{{url('/dashboard/infopeluang')}}">
                <img src="{{asset('/images/icon/infopeluang.png')}}" class="img-icon">
                <p class="mt-2">Kelola Info Peluang</p>
            </a>
          </div>
        </div>

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <a href="{{url('/dashboard/bimbingan')}}">
                <img src="{{asset('/images/icon/bimbingan.png')}}" class="img-icon">
                <p class="mt-2">Kelola Bimbingan</p>
            </a>
          </div>
        </div>

    </div>

    </div>

  </section><!-- End infopeluang Section -->


@endsection
