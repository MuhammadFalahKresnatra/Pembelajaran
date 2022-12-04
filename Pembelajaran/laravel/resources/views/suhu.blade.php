@extends('tugas')

@section('content')
    
    <h2>Konversi Suhu</h2>

    <form action="{{ 'suhu' }}" method="post">
        @csrf
        Suhu :
        <input type="number" name="suhu">
        <select name="sebelum" id="">
            <option value="C">Celcius</option>
            <option value="R">Reamur</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>
        Konversi ke
        <select name="setelah" id="">
            <option value="C">Celcius</option>
            <option value="R">Reamur</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>

        <input type="submit" name="kirim" value="Konversi">
    </form>

@endsection

@section('menu')
    <a href="/">Home</a>
@endsection