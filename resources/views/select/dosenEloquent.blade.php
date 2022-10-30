@extends('master')
@section('title','Dosen')
@section('menu1','active')


@section('content')
<div class="container text-center p-4">
    <h1>Data Dosen</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIDN</th>
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
                @forelse ($dosens as $dosen)
                    <td>{{$loop -> iteration}}</th>
                    <td>{{$dosen -> nidn}}</th>
                    <td>{{$dosen -> nama}}</td>
                    <td>{{$dosen -> jenis_kelamin}}</td>
                    <td>{{$dosen -> alamat}}</td>
                    <td>{{$dosen -> tempat_lahir}}</td>
                    <td>{{$dosen -> tanggal_lahir}}</td>
                    <td>{{$dosen -> photo}}</td>
                </tr>
                </tbody>
                @empty

                @endforelse
            </table>
            <a href="/dosen" class="btn btn-primary text-right">Kembali</a>
        </div>
    </div>
</div>
@endsection