<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Tambah Buku</h1>
        <form action="/buku" method="POST">
            @csrf
            <label for="judul">Judul:</label><br>
            <input type="text" id="judul" name="judul"><br>
            <label for="pengarang">Pengarang:</label><br>
            <input type="text" id="pengarang" name="pengarang"><br>
            <label for="penerbit">Penerbit:</label><br>
            <input type="text" id="penerbit" name="penerbit"><br>
            <label for="tahun_terbit">Tahun Terbit:</label><br>
            <input type="number" id="tahun_terbit" name="tahun_terbit"><br>
            <label for="jumlah_halaman">Jumlah Halaman:</label><br>
            <input type="number" id="jumlah_halaman" name="jumlah_halaman"><br><br>
            <input type="submit" value="Submit">
    </body>
</html>