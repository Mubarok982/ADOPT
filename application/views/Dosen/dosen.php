<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dosen</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

   <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .container-fluid {
            margin-top: 30px;
            padding-left: 10px;
            padding-right: 10px;
        }
        h2 {
            font-weight: 600;
            font-size: 1.8rem;
            color: #343a40;
        }
        .btn-primary {
            font-weight: 500;
        }
        table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 100%;
        }
        thead {
            background-color: #0d6efd;
            color: #fff;
        }
        .btn {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <?php $this->load->view('Navbar/navbar'); ?>

    <div class="container-fluid shadow-sm p-3 bg-white rounded">
<h2>Data Dosen</h2>
<div class="mb-3 text-start">
    <a href="<?= site_url('dosen/tambah') ?>" class="btn btn-primary">+ Tambah Dosen</a>
</div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dosen</th>
                        <th>NIDN</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dosen as $d): ?>
                    <tr>
                        <td><?= $d->id_dosen ?></td>
                        <td><?= $d->nama_dosen ?></td>
                        <td><?= $d->nidn ?></td>
                        <td><?= $d->email ?></td>
                        <td><?= $d->no_telp ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('dosen/edit/'.$d->id_dosen) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('dosen/hapus/'.$d->id_dosen) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
