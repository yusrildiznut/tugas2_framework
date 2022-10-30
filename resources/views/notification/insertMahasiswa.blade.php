@extends('master')
@section('title','Insert Berhasil')
@section('menu2','active')

@section('content')
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-success">Data berhasil ditambahkan</h1>
    <P>Tekan tombol Home untuk melihat data.</p>
    <a href="/mahasiswa" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
</div>
@endsection