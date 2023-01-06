@extends('layouts.master')
@section('title', 'Kelola Info Peluang')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        @include('errors.message')

        <div class="row mt-4 ">
            <div class="col-md-12">
                <h3 class="mb-4">Data Informasi Peluang Magang</h3>
            </div>

            <div class="container">
                <a href="{{url('/dashboard/infopeluang-create')}}" class="btn btn-primary">Tambah Info Peluang</a>
            </div>

            <table class="table mt-3 ms-3">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Mitra</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Alamat Mitra</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($infopeluang as $ip)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$ip->namamitra}}</td>
                      <td>{{$ip->posisi}}</td>
                      <td>{{$ip->alamatmitra}}</td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>

</section>

@endsection
