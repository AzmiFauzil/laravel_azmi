<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Menu</h1>
    <form action="/menu" method="POST">
        @csrf
        <label for="nama_menu">Nama Menu:</label><br>
        <input type="text" id="nama_menu" name="nama_menu"><br>
        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga"><br>
        <label for="stok">Stok:</label><br>
        <input type="text" id="stok" name="stok"><br>
        <label for="estimasi_jadi">Estimasi Jadi:</label><br>
        <input type="text" id="estimasi_jadi" name="estimasi_jadi"><br><br>
        <input type="submit" value="Submit">
</body>
</html>