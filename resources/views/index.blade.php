<!DOCTYPE html>
<html>
    <head>
        <title>MEMBUAT CRUD PADA LARAVEL</title>
    </head>  
    <body>

    <h2>Belajar Laravel</h2>
    <h3>Data Pegawai</h3>

    <a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan as $kry)

        <tr>
            <td>{{ $kry->Nama }}</td>
            <td>{{ $kry->Jabatan }}</td>
            <td>{{ $kry->Umur }}</td>
            <td>{{ $kry->Alamat }}</td>
        <td> 
            <a href="/karyawan/edit/{{ $kry->Id_karyawan }}">EDIT</a>

            <a href="/karyawan/hapus/{{ $kry->Id_karyawan }}">HAPUS</a>
        </td>
        </tr>
        @endforeach
    </table>
</body>     
</html>