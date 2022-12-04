<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h1>Tugas Laravel</h1>
            <ul>
                <li><a href="{{ url('zodiac') }}">Zodiac</a></li>
                <li><a href="{{ url('kalkulator') }}">Kalkulator</a></li>
                <li><a href="{{ url('suhu') }}">Suhu</a></li>
            </ul>
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @yield('menu')
        </div>
    </div>
</body>
</html>