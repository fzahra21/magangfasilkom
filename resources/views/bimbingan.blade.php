@extends('layouts.master')

@section('title')
Bimbingan
@endsection

@section('main')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Bimbingan</li>
        </ol>
        <h2>Bimbingan Magang</h2>

      </div>
    </section>
    <!-- ======= End Breadcrumbs ======= -->

    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Pentingnya Bimbingan</h3>
                <h2>Apa yang didapat dari Bimbingan?</h2>
                <p>
                    Pembelajaran lebih efektif dan bisa berbagi pengetahuan secara langsung bersama pakar atau ahli yang profesional. <br>
                    Memperoleh wawasan praktis, bimbingan, dan saran dari tenaga ahli yang berpengalaman. <br>
                    Meningkatkan pemberdayaan agar individu lebih maju dan mengembangkan potensi yang dimiliki. <br>
                    Memiliki wawasan dan pemahaman yang lebih luas dengan sudut pandang berbeda, dll.
                </p>
                <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{asset('/tema/img/about.jpg')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </section>

  </main>


@endsection
