@extends('master')
@section('title','Update Mahasiswa')
@section('menu2','active')

@section('content')
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih Button untuk menentukan metode yang digunakan.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/mahasiswa/update/updateRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/mahasiswa/update/updateQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/mahasiswa/update/updateEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
@endsection