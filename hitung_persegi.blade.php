<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Persegi</h1>

    <form method="post" action="/hitung-persegi">
        @csrf
        <label for="sisi">Panjang Sisi:</label>
        <input type="number" name="sisi" required>
        <button type="submit">Hitung</button>
    </form>

    @isset($sisi)
        <h2>Hasil Perhitungan:</h2>
        <p>Sisi: {{ $sisi }}</p>
        <p>Luas: {{ $luas }}</p>
        <p>Keliling: {{ $keliling }}</p>
    @endisset
</body>
</html>
