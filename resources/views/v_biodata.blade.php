<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passing Data Array </title>
</head>
<body>
    <h1>Pemrograman Web Lanjut</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Makanan Kesukaan</p>
    <br>
    <ul>
        @foreach ($makanan as $m)
        <li>{{ $m }}</li>
        @endforeach
    </ul>
    </body>
</html>