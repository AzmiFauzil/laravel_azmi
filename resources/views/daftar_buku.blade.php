<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman</th>
        </tr>
        <tr>
            @foreach($books as $book)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->pengarang }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->jumlah_halaman }}</td>
        </tr>
        @endforeach
    </table>
    <a href="/tambah_buku"><button>Tambah Buku</button></a>
</body>
</html>