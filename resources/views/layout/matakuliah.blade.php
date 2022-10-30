@extends('master')
@section('title','Mata Kuliah')
@section('menu3','active')


@section('content')
<div class="container text-center p-4">
    <h1>Data Mata Kuliah</h1>
    <div class="row">
        <div class="m-auto">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama Mata Kuliah</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @forelse ($matakuliahs as $matakuliah)
                    <td>{{$loop -> iteration}}</th>
                    <td>{{$matakuliah -> kode_mk}}</th>
                    <td>{{$matakuliah -> nama_mk}}</td>
                </tr>
                </tbody>
                @empty

                @endforelse
            </table>
            <a href="/matakuliah/insert" class="btn btn-primary text-right">Insert</a>
            <a href="/matakuliah/update" class="btn btn-primary text-right">Update</a>
            <a href="/matakuliah/select" class="btn btn-primary text-right">Select</a>
            <a href="/matakuliah/delete" class="btn btn-primary text-right">Delete</a>
        </div>
    </div>
</div>
@endsection