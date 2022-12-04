@php
    $p = 5;
    $l = 3;
    $luas = $p * $l;

@endphp

@extends('tugas')

@section('content')

<h1>{{ $luas }}</h1>
<h1>{{ $judul }}</h1>
<h1>Zodiak</h1>
@foreach ($contoh as $key => $value)

    <h2>{{ $key.' : '.$value }}</h2>

@endforeach



<form action="{{ url('zodiac') }}" method="post">
    @csrf

    Tanggal :
    <input type="number" name="tanggal" required placeholder="Masukkan tanggal lahir">
    Bulan :
    <input type="number" name="bulan" required placeholder="Masukkan bulan lahir">
    
    <input type="submit" name="simpan" value="Submit">
</form>

@endsection

@section('menu')
    <a href="/">Home</a>
@endsection