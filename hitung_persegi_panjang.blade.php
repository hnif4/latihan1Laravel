<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi Panjang</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Persegi Panjang</h1>

    <form method="post" action="/hitung-persegi-panjang">
        @csrf
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" required>
        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" required>
        <button type="submit">Hitung</button>
    </form>

    @isset($panjang)
        <h2>Hasil Perhitungan:</h2>
        <p>Panjang: {{ $panjang }}</p>
        <p>Lebar: {{ $lebar }}</p>
        <p>Luas: {{ $luas }}</p>
        <p>Keliling: {{ $keliling }}</p>
    @endisset
</body>
</html>
