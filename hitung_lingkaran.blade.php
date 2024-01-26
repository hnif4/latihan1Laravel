<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran</h1>

    <form method="post" action="/hitung-lingkaran">
        @csrf
        <label for="jari_jari">Jari-Jari:</label>
        <input type="number" name="jari_jari" required>
        <button type="submit">Hitung</button>
    </form>

    @isset($jariJari)
        <h2>Hasil Perhitungan:</h2>
        <p>Jari-Jari: {{ $jariJari }}</p>
        <p>Luas Lingkaran: {{ $luas }}</p>
    @endisset
</body>
</html>
