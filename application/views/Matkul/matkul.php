<?php $this->load->view('Navbar/navbar'); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mata Kuliah</title>

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
    <div class="container shadow-sm p-3 bg-white rounded">
        <h2 class="text-right">Data Mata Kuliah</h2>
        <div class="text-start mb-3">
            <a href="<?= site_url('matkul/tambah') ?>" class="btn btn-primary">+ Tambah Matkul</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Nama Mata Kuliah</th>
                        <th>Kode</th>
                        <th>SKS</th>
                        <th class="text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($matkul as $m): ?>
                    <tr>
                        <td><?= htmlspecialchars($m->nama_matkul) ?></td>
                        <td><?= htmlspecialchars($m->kode_matkul) ?></td>
                        <td><?= htmlspecialchars($m->sks) ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('matkul/edit/'.$m->kode_matkul) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('matkul/hapus/'.$m->kode_matkul) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
