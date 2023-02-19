@extends('template-inheritance.parent')

@section("tittle", "Halaman Utama")

@section('header')
{{-- parent digunakan untuk mengambil data default dari section --}}
@parent
<p>Deskripsi Header</p>
@endsection

@section('content')
<p>Ini adalah Halam utama</p>
@endsection