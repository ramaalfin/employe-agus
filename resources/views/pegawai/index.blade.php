<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>

</head>

<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>Kode Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{ $pegawai->NIP }}</td>
                    <td>{{ $pegawai->Nama }}</td>
                    <td>{{ $pegawai->Alamat }}</td>
                    <td>{{ \Carbon\Carbon::parse($pegawai->Tanggal_lahir)->format('j F Y') }}</td>
                    <td>{{ $pegawai->Kode_divisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <p>Pegawai yang lahir bulan November</p>
    @foreach ($pegawai_november as $item)
        {{ $item->Nama }} <br>
    @endforeach

    <br>
    <p>Pegawai dengan alamat Bogor</p>
    @foreach ($pegawai_bogor as $item)
        {{ $item->Nama }} <br>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
