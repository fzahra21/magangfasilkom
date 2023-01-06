<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Bimbingan;
use App\Models\Pembimbing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class BimbinganController extends Controller
{
    public function index(){
        $bimbingan = Bimbingan::all();
        return view('dashboard.bimbingan.index',['bimbingan' => $bimbingan]);
    }
    public function create(){
        $pembimbing = Pembimbing::all();
        return view('dashboard.bimbingan.create',['pembimbing' => $pembimbing]);
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'npm' => 'required|integer',
            'nama' => 'required',
            'posisi' =>'required',
            'namamitra' => 'required',
            'pembimbing' => 'required',
        ]);

        try {
            $data = new Bimbingan;
            $data->email = $request->email;
            $data->npm = $request->npm;
            $data->nama = $request->nama;
            $data->posisi = $request->posisi;
            $data->namamitra = $request->namamitra;
            $data->pembimbing = $request->pembimbing;
            $data->save();

            Session()->flash('alert-success', 'Usul Plot Pembimbing berhasil ditambahkan!');
            return redirect('dashboard/bimbingan');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/bimbingan-create')->withInput();
        }
    }

    public function show($id){
        $data = app('App\Models\Bimbingan')->cariBimbingan($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Bimbingan yang anda cari tidak ditemukan!');
            return redirect('/dashboard/bimbingan');
        }

        return view('dashboard.bimbingan.show', compact(['data']));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'email' => 'required',
            'npm' => 'required|integer',
            'nama' => 'required',
            'posisi' =>'required',
            'namamitra' => 'required',
            'pembimbing' => 'required',
        ]);

        $data = app('App\Models\Bimbingan')->cariBimbingan($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Bimbingan yang anda cari tidak ditemukan!');
            return redirect('/dashboard/bimbingan');
        }

        try {
            DB::transaction(function () use($request,&$data){
                $data->email = $request->email;
                $data->npm = $request->npm;
                $data->nama = $request->nama;
                $data->posisi = $request->posisi;
                $data->namamitra = $request->namamitra;
                $data->pembimbing = $request->pembimbing;
                $data->save();

                // throw new Exception('Error!');
            });
            Session()->flash('alert-success', 'Usul Plot Pembimbing berhasil diupdate!');
            return redirect('dashboard/bimbingan/' . $data->id);
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/bimbingan/'.$data->id)->withInput();
        }
    }
    public function delete($id){
        $data = app('App\Models\Bimbingan')->cariBimbingan($id);

        if(empty($data))
        {
            Session()->flash('alert-danger', 'Bimbingan yang anda cari tidak ditemukan!');
            return redirect('/dashboard/bimbingan');
        }

        try {
            DB::transaction(function () use(&$data){
                $data->delete();

                // throw new Exception('Error!');
            });


            Session()->flash('alert-success', 'Usul Plot Pembimbing berhasil dihapus!');
            return redirect('dashboard/bimbingan/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/bimbingan/'.$data->id);
        }
    }


}
