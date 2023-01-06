@extends('layouts.master')

@section('title')
    Info Peluang Magang
@endsection

@section('extracss')
    <link rel="stylesheet" type="text/css" href="{{asset('tema/css/style.css')}}">
@endsection

@section('main')

 <!-- Info Peluang Section -->
 <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5">
        <h2>Information</h2>
        <p>Informasi Peluang Magang</p>
      </header>

      <div class="row gy-4">

        @foreach ($infopeluang as $ip)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>{{$ip->namamitra}}</h3>
              <p>{{$ip->alamatmitra}}</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        @endforeach

      </div>
    </div>

  </section><!-- End infopeluang Section -->

@endsection
