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
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Estimasi Jadi</th>

        </tr>
        @foreach($menu as $menu)
        <tr>
            <td>{{ $menu->nama_menu }}</td>
            <td>{{ $menu->harga }}</td>
            <td>{{ $menu->stok }}</td>
            <td>{{ $menu->estimasi_jadi }}</td>
            <td>
                <form action="/menu/beli/{{ $menu->id }}" method="POST">
                    @csrf
                    <button type="submit">Beli</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/tambah_menu"><button>Tambah Menu</button></a>
</body>
</html>