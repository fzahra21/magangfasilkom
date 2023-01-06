@extends('layouts.master')
@section('title', 'Kelola Bimbingan')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        @include('errors.message')

        <div class="row mt-4">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h3 class="mb-4">Data Pembimbing</h3>
                </div>

                <div class="container">
                    <a href="{{url('/dashboard/bimbingan-create')}}" class="btn btn-primary">Usul Plot Pembimbing</a>
                </div>

                <table class="table mt-3 ms-3">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Nama Mitra</th>
                        <th scope="col">Pembimbing</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse ($bimbingan as $b)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$b->email}}</td>
                          <td>{{$b->npm}}</td>
                          <td>{{$b->nama}}</td>
                          <td>{{$b->posisi}}</td>
                          <td>{{$b->namamitra}}</td>
                          <td>{{$b->pembimbing}}</td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</section>

@endsection

