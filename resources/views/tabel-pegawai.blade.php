<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pegawai</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 40px;
        }
        .table thead th {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            border: 1px solid #dee2e6;
        }
        .table tbody td {
            vertical-align: middle;
            border: 1px solid #dee2e6;
            padding: 10px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>📋 Daftar Pegawai PT DonSyai</h1>

    <table id="pegawaiTable" class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>No. Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Gender</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->nip }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->nomer_telepon }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->gender }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables Bootstrap 5 JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#pegawaiTable').DataTable({
            "pageLength": 25,
            "lengthMenu": [25, 50, 100, 500, 1000],
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "paginate": {
                    "first": "Awal",
                    "last": "Akhir",
                    "next": "➡",
                    "previous": "⬅"
                }
            }
        });
    });
</script>
</body>
</html>



