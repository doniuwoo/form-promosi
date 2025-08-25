<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
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
    }
    .table tbody td {
      vertical-align: middle;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>📋 Daftar Pegawai</h2>
    <div class="card shadow-lg rounded-4">
      <div class="card-body">
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
            <!-- contoh isi -->
            <tr>
              <td>PGA92504691</td>
              <td>Jakayla Hudson</td>
              <td>+1.727.230.1818</td>
              <td>kamron.lindgren@example.com</td>
              <td>101 Langosh Land Apt. 128 South Gayleton, ND 55561-2590</td>
              <td>1974-08-21</td>
              <td>Laki-laki</td>
            </tr>
            <tr>
              <td>PGA48751445</td>
              <td>Bernadine Stark</td>
              <td>986-707-1852</td>
              <td>marquardt.zander@example.net</td>
              <td>10188 Madisyn Creek Raubury, KY 35317</td>
              <td>1977-05-18</td>
              <td>Laki-laki</td>
            </tr>
            <!-- tambahkan data pegawai lain sampai 1000 -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#pegawaiTable').DataTable({
        "pageLength": 25,
        "lengthMenu": [10, 25, 50, 100, 500, 1000],
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
