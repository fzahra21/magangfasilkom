<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'bimbingans';

    public function cariBimbingan($id){
        $data = Bimbingan::where('id', $id)->first();

        return $data;
    }

}