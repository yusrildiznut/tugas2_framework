@extends('master')
@section('title','Mahasiswa')
@section('menu2','active')

@section('content')
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih Button untuk menentukan metode yang digunakan.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/mahasiswa/select/selectRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/mahasiswa/select/selectQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/mahasiswa/select/selectEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
@endsection