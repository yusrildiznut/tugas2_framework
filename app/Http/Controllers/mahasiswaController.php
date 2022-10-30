<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswa;


class mahasiswaController extends Controller
{
    public function index()
    {
        $sql = mahasiswa::all();

        return view('layout.mahasiswa', [
            'mahasiswas' => $sql
        ]);
    }

    public function insertRawSQL()
    {
        $sql = DB::insert("INSERT INTO mahasiswas (npm, nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, photo)
        VALUES('201085','M. Yusril Reza Pratama','laki-laki','Bekasi','Palembang','2002-07-28','ada foto')");

        return view('notification.insertMahasiswa');
    }

    public function insertQueryBuilder()
    {
        $sql = DB::table('mahasiswas')->insert([
            [
                'npm' => "201003",
                'nama' => "Karin Anastasya",
                'jenis_kelamin' => "perempuan",
                'alamat' => "Bekasi",
                'tempat_lahir' => "Bekasi",
                'tanggal_lahir' => "2002-07-05",
                'photo' => "belum ada"
            ],
            [
                'npm' => "201004",
                'nama' => "Marsya Meinanda",
                'jenis_kelamin' => "perempuan",
                'alamat' => "Bekasi",
                'tempat_lahir' => "Bekasi",
                'tanggal_lahir' => "2009-01-08",
                'photo' => "belum ada"
            ],
            [
                'npm' => "201005",
                'nama' => "Ceci Katarina",
                'jenis_kelamin' => "perempuan",
                'alamat' => "Jakarta",
                'tempat_lahir' => "Palembang",
                'tanggal_lahir' => "1978-03-06",
                'photo' => "belum ada"
            ],
            [
                'npm' => "201006",
                'nama' => "Rahmat Effendi",
                'jenis_kelamin' => "laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Aceh",
                'tanggal_lahir' => "1980-08-12",
                'photo' => "belum ada"
            ],
            [
                'npm' => "201007",
                'nama' => "Fernando Panjaitan",
                'jenis_kelamin' => "laki-laki",
                'alamat' => "Cibubur",
                'tempat_lahir' => "Palembang",
                'tanggal_lahir' => "1990-12-11",
                'photo' => "belum ada"
            ]
        ]);
        return view('notification.insertMahasiswa');
    }

    public function insertEloquent()
    {

        mahasiswa::create(
            [
                'npm' => "201008",
                'nama' => "Muhammad Mifat",
                'jenis_kelamin' => "laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "2002-12-11",
                'photo' => "belum ada"
            ]
        );
        return view('notification.insertMahasiswa');
    }

    public function updateRawSQL()
    {
        $sql = DB::update("UPDATE mahasiswas SET nama='yusril' WHERE nama=?", ["M. Yusril Reza Pratama"]);
        return view('notification.updateMahasiswa');
    }

    public function updateQueryBuilder()
    {
        $sql = DB::table('mahasiswas')
            ->where('nama', 'Karin Anastasya')
            ->update([
                'photo' => 'ada foto'
            ]);
        return view('notification.updateMahasiswa');
    }

    public function updateEloquent()
    {
        mahasiswa::where('alamat', 'Karawang')->update([
            'tempat_lahir' => 'Bogor'
        ]);
        return view('notification.updateMahasiswa');
    }

    public function selectRawSQL()
    {
        $sql = DB::select("SELECT * FROM mahasiswas");
        return view('select.mahasiswaRawSQL', [
            'mahasiswas1' => $sql
        ]);
    }

    public function selectQueryBuilder()
    {
        $sql = DB::table('mahasiswas')->get();
        return view('select.mahasiswaQueryBuilder', [
            'mahasiswas2' => $sql
        ]);
    }

    public function selectEloquent()
    {

        $sql = mahasiswa::all();

        return view('select.mahasiswaEloquent', [
            'mahasiswas' => $sql
        ]);
    }

    public function deleteRawSQL()
    {
        $sql = DB::delete("DELETE FROM mahasiswas WHERE nama=?", ["Marsya Meinanda"]);
        return view('notification.deleteMahasiswa');
    }

    public function deleteQueryBuilder()
    {
        $sql = DB::table('mahasiswas')
            ->where('photo', 'ada foto')
            ->delete();
        return view('notification.deleteMahasiswa');
    }

    public function deleteEloquent()
    {
        $sql = mahasiswa::destroy(6);
        return view('notification.deleteMahasiswa');
    }
}
