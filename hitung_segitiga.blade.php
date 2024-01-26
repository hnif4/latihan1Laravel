<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Segitiga</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Segitiga</h1>

    <form method="post" action="/hitung-segitiga">
        @csrf
        <label for="alas">Alas:</label>
        <input type="number" name="alas" required>
        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggi" required>
        <label for="sisi1">Sisi 1:</label>
        <input type="number" name="sisi1" required>
        <label for="sisi2">Sisi 2:</label>
        <input type="number" name="sisi2" required>
        <label for="sisi3">Sisi 3:</label>
        <input type="number" name="sisi3" required>
        <button type="submit">Hitung</button>
    </form>

    @isset($alas)
        <h2>Hasil Perhitungan:</h2>
        <p>Alas: {{ $alas }}</p>
        <p>Tinggi: {{ $tinggi }}</p>
        <p>Sisi 1: {{ $sisi1 }}</p>
        <p>Sisi 2: {{ $sisi2 }}</p>
        <p>Sisi 3: {{ $sisi3 }}</p>
        <p>Luas Segitiga: {{ $luas }}</p>
        <p>Keliling Segitiga: {{ $keliling }}</p>
    @endisset
</body>
</html>
