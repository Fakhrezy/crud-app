<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>data mahasiswa</h3>
    <a href="/mahasiswa/tambah">+ tambah mahasiswa baru</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $p )
        <tr>
            <td>{{ $p->nrp }}</td>
            <td>{{ $p->namaMhs }}</td>
            <td>{{ $p->alamatMhs }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $p->idMhs }}">Edit</a>
                <a href="/mahasiswa/hapus/{{ $p->idMhs }}">Hapus</a>
            </td>
        </tr>

        @endforeach
    </table>
</body>
</html>
