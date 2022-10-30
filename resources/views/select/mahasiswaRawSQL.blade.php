@extends('master')
@section('title','Mahasiswa')
@section('menu2','active')


@section('content')
<div class="container text-center p-4">
    <h1>Data Mahasiswa</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Foto</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @forelse ($mahasiswas1 as $mahasiswa)
                    <td>{{$loop -> iteration}}</th>
                    <td>{{$mahasiswa -> npm}}</th>
                    <td>{{$mahasiswa -> nama}}</td>
                    <td>{{$mahasiswa -> jenis_kelamin}}</td>
                    <td>{{$mahasiswa -> alamat}}</td>
                    <td>{{$mahasiswa -> tempat_lahir}}</td>
                    <td>{{$mahasiswa -> tanggal_lahir}}</td>
                    <td>{{$mahasiswa -> photo}}</td>
                </tr>
                </tbody>
                @empty

                @endforelse
            </table>
            <a href="/mahasiswa" class="btn btn-primary text-right">Kembali</a>
        </div>
    </div>
</div>
@endsection