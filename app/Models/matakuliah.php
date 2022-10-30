<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'nama_mk'];
}
