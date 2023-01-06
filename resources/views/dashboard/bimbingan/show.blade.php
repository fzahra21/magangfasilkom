@extends('layouts.master')
@section('title', 'Update Usul Plot Bimbingan')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        <form method="post" action="{{url('/dashboard/bimbingan/'.$data->id)}}" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="form-group">
                <h3 class="mb-4">Update Usul Plot Pembimbing</h3>

                @include('errors.message')

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$email}}" required>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="npm" class="form-control" id="npm" placeholder="NPM" value="{{$npm}}" required>
                    <label for="floatingPassword">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{$nama}}" required>
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="posisi" class="form-control" id="posisi" placeholder="Posisi Magang" value="{{$posisi}}" required>
                    <label for="floatingInput">Posisi Magang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="namamitra" class="form-control" id="namamitra" placeholder="Nama Mitra Magang" value="{{$namamitra}}" required>
                    <label for="floatingInput">Nama Mitra Magang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="usul" class="form-control" id="usul" placeholder="Usul Dosen Pembimbing" value="{{$pembimbing}}" required>
                    <label for="floatingInput">Usul Dosen Pembimbing</label>
                </div>

                <div class="btn-group">
                    <a href="{{url('/dashboard/bimbingan-delete/'.$data->id)}}" class="btn btn-danger mt-4" onclick="return confirm('Yakin data akan dihapus?')">Delete</a>
                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                </div>
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
            var r = confirm('Lanjutkan update data?');

            if(r){
                return true;
            } else{
                return false;
            }
        }
    </script>
@endsection
