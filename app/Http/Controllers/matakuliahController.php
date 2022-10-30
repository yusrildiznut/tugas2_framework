<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\matakuliah;

class matakuliahController extends Controller
{
    public function index(){
        $sql = matakuliah::all();

        return view('layout.matakuliah', [
            'matakuliahs' => $sql
        ]); 
    }

    public function insertRawSQL(){
        $sql = DB::insert("INSERT INTO matakuliahs (kode_mk, nama_mk)
        VALUES('2006','Blockchain')");

        return view('notification.insertMatakuliah');
    }

    public function insertQueryBuilder(){
        $sql = DB::table('matakuliahs')->insert([
            [
                'kode_mk' => "2007",
                'nama_mk' => "Framework Pemrograman Web"
            ],
            [
                'kode_mk' => "2008",
                'nama_mk' => "Technopreneur"
            ],
            [
                'kode_mk' => "2009",
                'nama_mk' => "Data Mining"
            ],
            [
                'kode_mk' => "2010",
                'nama_mk' => "Cloud Computing"
            ],
            [
                'kode_mk' => "2011",
                'nama_mk' => "Pemrograman Berbasis Mobile"
            ]
        ]);
        return view('notification.insertMatakuliah');
    }

    public function insertEloquent(){

        matakuliah::create(
            [
                'kode_mk' => "2012",
                'nama_mk' => "Kecerdasan Buatan"
            ]
        );
        return view('notification.insertMatakuliah');
    }

    public function updateRawSQL(){
        $sql = DB::update("UPDATE matakuliahs SET nama_mk='Rekayasa Perangkat Lunak' WHERE nama_mk=?", ["Blockchain"]);
        return view('notification.updateMatakuliah');
    }
        
    public function updateQueryBuilder(){
        $sql = DB::table('matakuliahs')
        -> where('nama_mk', 'Framework Pemrograman Web')
        -> update([
            'nama_mk' => 'Pemrograman Berbasis Web'
        ]); 
        return view('notification.updateMatakuliah');
    }
     
    public function updateEloquent(){
        matakuliah::where('id', '1')->update([
            'nama_mk' => 'Sistem Operasi'
        ]);
        return view('notification.updateMatakuliah');
    }

    public function selectRawSQL(){
        $sql = DB::select("SELECT * FROM matakuliahs");
        return view('select.matakuliahRawSQL', [
            'matakuliahs1' => $sql
        ]);
    }

    public function selectQueryBuilder(){
    $sql = DB::table('matakuliahs') -> get();
    return view('select.matakuliahQueryBuilder', [
        'matakuliahs2' => $sql
    ]);
    }

    public function selectEloquent(){

        $sql = matakuliah::all();

        return view('select.matakuliahEloquent', [
            'matakuliahs' => $sql
        ]); 
    }

    public function deleteRawSQL(){
        $sql = DB::delete("DELETE FROM matakuliahs WHERE nama_mk=?", ["Technopreneur"]);
        return view('notification.deleteMatakuliah');
    }

    public function deleteQueryBuilder(){    
        $sql = DB::table('matakuliahs')
        ->where('id', '1')
        ->delete();
        return view('notification.deleteMatakuliah');
    } 
    
    public function deleteEloquent(){    
       $sql = matakuliah::destroy(2);
       return view('notification.deleteMatakuliah');
    }
}
