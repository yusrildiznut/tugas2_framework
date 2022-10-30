@extends('master')
@section('title','Dosen')
@section('menu1','active')

@section('content')
<div class="container text-center p-4">
    <p></p>
    <h1>Pilih Metode</h1>
    <p>Pilih Button untuk menentukan metode yang digunakan.</p>
    <div class="row">
        <div class="m-auto">
            <a href="/dosen/delete/deleteRawSQL" class="btn btn-primary">Raw Sql</a>
            <a href="/dosen/delete/deleteQueryBuilder" class="btn btn-primary">Query Builder</a>
            <a href="/dosen/delete/deleteEloquent" class="btn btn-primary">Eloquent</a>
        </div>
    </div>
</div>
@endsection