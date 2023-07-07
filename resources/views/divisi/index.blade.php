<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisi</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
</head>
<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Kode Divisi</th>
                <th>Nama Divisi</th>
                <th>Pimpinan Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($divisis as $divisi)
                <tr>
                    <td>{{ $divisi->Kode_divisi }}</td>
                    <td>{{ $divisi->Nama_divisi }}</td>
                    <td>{{ $divisi->Pimpinan_divisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <p>Pegawai per Divisi</p>
    @foreach ($pegawaiPerDivisi as $item)
        <p>Kode Divisi : {{ $item->Kode_divisi }}</p>
        <p>Jumlah Pegawai : {{ $item->total_pegawai }}</p>
        <hr>
    @endforeach
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>
