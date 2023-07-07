<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
</head>
<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>NIP</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($presensis as $presensi)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($presensi->Tanggal)->format('j F Y') }}</td>
                    <td>{{ $presensi->NIP }}</td>
                    <td>{{ $presensi->Jam_masuk }}</td>
                    <td>{{ $presensi->Jam_pulang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <p>Presensi pada bulan Januari 2018 : {{ $presensi_januari }} kali</p>
    <br>
    <p>Daftar Pegawai yang belum melakukan presensi</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>Kode Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai_belum_presensi as $item)
                <tr>
                    <td>{{ $item->Nama }}</td>
                    <td>{{ $item->Alamat }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->Tanggal_lahir)->format('j F Y') }}</td>
                    <td>{{ $item->Kode_divisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
