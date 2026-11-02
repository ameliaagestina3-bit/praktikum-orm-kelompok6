<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body{font-family: Arial; padding:20px}
        table{border-collapse: collapse; width: 100%;}
        th,td{border:1px solid #333; padding:8px; text-align:left}
        th{background:#eee}
    </style>
</head>
<body>
    <h1>Data Mahasiswa - ORM Laravel</h1>
    <p>Total: {{ count($mahasiswas) }} Mahasiswa</p>
    <table>
        <tr><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Email</th></tr>
        @foreach($mahasiswas as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>{{ $m->email }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <b>Data: Reskia (IK2511060), Diva Ridwan, Amelia Agustina, Kayla Candra, Nurul Fatimah - Berhasil via ORM!</b>
</body>
</html>