@extends('layouts.master')
@section('title', 'Usul Plot Bimbingan')

@section('main')

<section class="inner-page mt-5">
    <div class="container">
        <form method="post" action="{{url('/dashboard/infopeluang-create')}}" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="form-group">
                <h3 class="mb-4">Daftar Informasi Peluang Magang</h3>

                @include('errors.message')

                <div class="form-floating mb-3">
                    <input type="text" name="namamitra" class="form-control" id="namamitra" placeholder="Nama Mitra" required>
                    <label for="floatingInput">Nama Mitra</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="posisi" class="form-control" id="posisi" placeholder="Posisi" required>
                    <label for="floatingInput">Posisi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="alamatmitra" class="form-control" id="alamatmitra" placeholder="Alamat Mitra" required>
                    <label for="floatingInput">Alamat Mitra</label>
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
