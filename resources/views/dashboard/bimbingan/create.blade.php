@extends('layouts.master')
@section('title', 'Usul Plot Bimbingan')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        <form method="post" action="{{url('/dashboard/bimbingan-create')}}" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="form-group">
                <h3 class="mb-4">Usul Plot Pembimbing</h3>

                @include('errors.message')

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="npm" class="form-control" id="npm" placeholder="NPM" required>
                    <label for="floatingPassword">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="posisi" class="form-control" id="posisi" placeholder="Posisi Magang" required>
                    <label for="floatingInput">Posisi Magang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="namamitra" class="form-control" id="namamitra" placeholder="Nama Mitra Magang" required>
                    <label for="floatingInput">Nama Mitra Magang</label>
                </div>
                <div class="mb-3">
                    {{-- <label for="floatingInput">Pembimbing</label> --}}
                    <select id="pembimbing" name="pembimbing" class="form-select">
                      @forelse ($pembimbing as $p)
                        <option value="{{$p->nama}}">{{$p->nama}}</option>
                      @empty
                      @endforelse
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Save</button>
            </div>
        </form>
    </div>

</section>

@endsection

@section('extrajs')
    <script src="{{asset('/vendor/ckeditor/ckeditor.js')}}"></script>

    <script>
        CKEditor.replace('bimbingan');
    </script>

    <script>
        function konfrimasiSubmit(){
            var r = confirm('Lanjutkan penyimpanan data?');

            if(r){
                return true;
            } else{
                return false;
            }
        }
    </script>
@endsection
