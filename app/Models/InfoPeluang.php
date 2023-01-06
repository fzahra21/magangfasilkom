<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPeluang extends Model
{
    use HasFactory;

    protected $table = 'info_peluangs';

    public function cariInfoPeluang($id){
        $data = InfoPeluang::where('id', $id)->first();

        return $data;
    }

}