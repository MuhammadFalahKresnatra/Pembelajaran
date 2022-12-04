@extends('tugas')

@section('content')

<h1>Kalkulator</h1>

<form action="{{ url('kalkulator') }}" method="post">
    @csrf

    Angka 1 :
    <input type="number" name="angka1" required placeholder="Masukkan angka 1">
    Angka 2 :
    <input type="number" name="angka2" required placeholder="Masukkan angka 2">
    
    <input type="submit" name="tambah" value="+">
    <input type="submit" name="kurang" value="-">
    <input type="submit" name="bagi" value="/">
    <input type="submit" name="kali" value="x">
</form>

@endsection

@section('menu')
    <a href="/">Home</a>
@endsection