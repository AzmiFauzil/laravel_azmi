<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga Siku-Siku</title>
</head>
<body>

    <h2>Hitung Luas Segitiga Siku-Siku</h2>

    <form method="GET" action="/rumusluassegitigasikusiku">
        @csrf

        <label>Alas:</label><br>
        <input type="number" name="alas" required><br><br>

        <label>Tinggi:</label><br>
        <input type="number" name="tinggi" required><br><br>

        <button type="submit">Hitung</button>
    </form>

    @if(isset($luas))
        <h3>Hasil:</h3>
        <p>Luas = {{ $luas }}</p>
    @endif

</body>
</html>