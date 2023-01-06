@extends('layouts.master')
@section('title', 'Update Informasi Peluang Magang')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        <form method="post" action="{{url('/dashboard/infopeluang/'.$data->id)}}" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="form-group">
                <h3 class="mb-4">Update Informasi Peluang Magang</h3>

                @include('errors.message')

                <div class="form-floating mb-3">
                <div class="form-floating mb-3">
                    <input type="text" name="namamitra" class="form-control" id="namamitra" placeholder="Nama Mitra Magang" value="{{$namamitra}}" required>
                    <label for="floatingInput">Nama Mitra Magang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="posisi" class="form-control" id="posisi" placeholder="Posisi" value="{{$posisi}}" required>
                    <label for="floatingInput">Posisi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="alamatmitra" class="form-control" id="alamatmitra" placeholder="Alamat Mitra" value="{{$alamatmitra}}" required>
                    <label for="floatingInput">Alamat Mitra</label>
                </div>

                <div class="btn-group">
                    <a href="{{url('/dashboard/infopeluang-delete/'.$data->id)}}" class="btn btn-danger mt-4" onclick="return confirm('Yakin data akan dihapus?')">Delete</a>
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
        CKEditor.replace('infopeluang');
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
