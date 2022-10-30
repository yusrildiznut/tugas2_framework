@extends('master')
@section('title','Data Tidak Ditemukan')


@section('content')
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-danger">Halaman Tidak Ditemukan!</h1>
    <P>Tekan tombol kembali untuk menuju ke halaman utama.</p>
    <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
</div>
@endsection