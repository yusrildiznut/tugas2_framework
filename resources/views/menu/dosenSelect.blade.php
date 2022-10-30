@extends('master')
@section('title', 'Dosen')
@section('menu1', 'active')

@section('content')
    <div class="container text-center p-4">
        <p></p>
        <h1>Pilih Metode</h1>
        <p>Pilih Button untuk menentukan metode yang digunakan.</p>
        <div class="row">
            <div class="m-auto">
                <a href="/dosen/select/selectRawSQL" class="btn btn-primary">Raw Sql</a>
                <a href="/dosen/select/selectQueryBuilder" class="btn btn-primary">Query Builder</a>
                <a href="/dosen/select/selectEloquent" class="btn btn-primary">Eloquent</a>
            </div>
        </div>
    </div>
@endsection
