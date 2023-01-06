<?php

namespace App\Http\Controllers;

use App\Models\InfoPeluang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class InfoPeluangController extends Controller
{
    public function index(){
        $infopeluang = InfoPeluang::all();
        return view('dashboard.infopeluang.index',['infopeluang' => $infopeluang]);
    }
    public function create(){
        $infopeluang = InfoPeluang::all();
        return view('dashboard.infopeluang.create', ['infopeluang' => $infopeluang]);
    }
    public function save(Request $request){
        $this->validate($request, [
            'namamitra' => 'required',
            'posisi' => 'required',
            'alamatmitra' => 'required'
        ]);

        try {
            $data = new InfoPeluang;
            $data->namamitra = $request->namamitra;
            $data->posisi = $request->posisi;
            $data->alamatmitra = $request->alamatmitra;
            $data->save();

            Session()->flash('alert-success', 'Informasi Peluang Magang berhasil ditambahkan!');
            return redirect('dashboard/infopeluang');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/infopeluang-create')->withInput();
        }
    }

    public function show($id){
        $data = app('App\Models\InfoPeluang')->cariInfoPeluang($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Informasi Peluang yang anda cari tidak ditemukan!');
            return redirect('/dashboard/infopeluang');
        }

        return view('dashboard.infopeluang.show', compact(['data']));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'namamitra' => 'required',
            'posisi' =>'required',
            'alamatmitra' => 'required',
        ]);

        $data = app('App\Models\InfoPeluang')->cariInfoPeluang($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Informasi Peluang yang anda cari tidak ditemukan!');
            return redirect('/dashboard/infopeluang');
        }

        try {
            DB::transaction(function () use($request,&$data){
                $data->namamitra = $request->namamitra;
                $data->posisi = $request->posisi;
                $data->alamatmitra = $request->alamatmitra;
                $data->save();
            });

            Session()->flash('alert-success', 'Informasi Peluang berhasil diupdate!');
            return redirect('dashboard/infopeluang/' . $data->id);
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/infopeluang/'.$data->id)->withInput();
        }
    }
    public function delete($id){
        $data = app('App\Models\InfoPeluang')->cariInfoPeluang($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Informasi Peluang yang anda cari tidak ditemukan!');
            return redirect('/dashboard/infopeluang');
        }

        try {
            DB::transaction(function () use(&$data){
                $data->delete();
            });

            Session()->flash('alert-success', 'Informasi Peluang berhasil dihapus!');
            return redirect('dashboard/infopeluang/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/infopeluang/'.$data->id);
        }
    }

    
}