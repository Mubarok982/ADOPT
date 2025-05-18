<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Sistem Akademik</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            height: 100%;
        }

        .sidebar h3 {
            margin-bottom: 200px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini" id="body">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto w-100 justify-content-center">
                <li class="nav-item">
                    <h1 class="m-0 text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Dashboard Utama</h1>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('dashboard') ?>" class="brand-link">
                <i class="fas fa-university brand-image img-circle elevation-3" style="opacity: .8;"></i>
                <span class="brand-text font-weight-light">Sistem Akademik</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= site_url('mahasiswa') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('dosen') ?>" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('matkul') ?>" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Mata Kuliah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('kelas') ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Kelas</p>
                            </a>
                        </li>
                        <!-- Dark Mode Toggle -->
                        <li class="nav-item">
                            <button id="toggleDark" class="btn btn-outline-light btn-sm me-3">
                                <i class="fas fa-moon"></i> Dark Mode
                            </button>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('auth/logout') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="row">
                <!-- KIRI: Grafik IPK dan Jadwal -->
                <div class="col-lg-6">
                    <!-- Grafik IPK -->
                    <div class="card">
                        <h3>Data IPK Mahasiswa</h3>
                        <table class="table table-bordered table-striped mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>ID Mahasiswa</th>
                                    <th>Semester</th>
                                    <th>IPK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($ipk_mahasiswa as $row): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nama_mahasiswa ?></td>
                                        <td><?= $row->id_mahasiswa ?></td>
                                        <td><?= $row->semester ?></td>
                                        <td><?= $row->ipk ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Jadwal Kuliah -->
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h5 class="card-title mb-0" style="font-size: 1.5rem;">Jadwal Kuliah</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Mata Kuliah</th>
                                        <th>Dosen</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($jadwal) && !empty($jadwal)): ?>
                                        <?php foreach ($jadwal as $row): ?>
                                            <tr>
                                                <td><?= $row->hari ?></td>
                                                <td><?= date('H:i', strtotime($row->jam_mulai)) ?> -
                                                    <?= date('H:i', strtotime($row->jam_selesai)) ?>
                                                </td>
                                                <td><?= $row->nama_matkul ?></td>
                                                <td><?= $row->nama_dosen ?></td>
                                                <td><?= $row->nama_kelas ?></td>
                                                <td><?= $row->nama_ruangan ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" class="text-center">Data jadwal tidak tersedia.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- KANAN: Box Manajemen -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="small-box bg-info p-4" style="min-height: 300px;">
                                <div class="inner">
                                    <h3>Dosen</h3>
                                    <p class="card-text"><?= $count_dosen ?> Dosen</p>
                                    <p>Manajemen data dosen</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <a href="<?= site_url('dosen') ?>" class="small-box-footer">Kelola <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="small-box bg-success p-4" style="min-height: 300px;">
                                <div class="inner">
                                    <h3>Mata Kuliah</h3>
                                    <p class="card-text"><?= $count_matkul ?> Mata Kuliah</p>
                                    <p>Manajemen mata kuliah</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="<?= site_url('matkul') ?>" class="small-box-footer">Kelola <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="small-box bg-warning p-4" style="min-height: 300px;">
                                <div class="inner">
                                    <h3>Mahasiswa</h3>
                                    <p class="card-text"><?= $count_mahasiswa ?> Mahasiswa</p>
                                    <p>Manajemen data mahasiswa</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <a href="<?= site_url('mahasiswa') ?>" class="small-box-footer">Kelola <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="small-box bg-danger p-4" style="min-height: 300px;">
                                <div class="inner">
                                    <h3>Kelas</h3>
                                    <p class="card-text"> Jumlah kelas Tersedia: <?= $count_kelas ?></p>
                                    <p>Manajemen data kelas</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= site_url('kelas') ?>" class="small-box-footer">Kelola <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- ./wrapper -->
        <!-- main footer -->
        <div>
            <footer class="main-footer text-center">
                <strong>&copy; <?= date('Y') ?> Sistem Akademik.</strong> Dibuat oleh Rizqy Mubarok.
            </footer </div>

            <!-- jQuery -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

            <!-- Dark Mode Toggle Script -->
            <script>
                const toggle = document.getElementById('toggleDark');
                const body = document.body;

                // Cek preferensi mode di localStorage
                if (localStorage.getItem('darkMode') === 'enabled') {
                    body.classList.add('dark-mode');
                    toggle.innerHTML = '<i class="fas fa-sun"></i> Light Mode';
                }

                toggle.addEventListener('click', () => {
                    body.classList.toggle('dark-mode');

                    if (body.classList.contains('dark-mode')) {
                        toggle.innerHTML = '<i class="fas fa-sun"></i> Light Mode';
                        localStorage.setItem('darkMode', 'enabled');
                    } else {
                        toggle.innerHTML = '<i class="fas fa-moon"></i> Dark Mode';
                        localStorage.setItem('darkMode', 'disabled');
                    }
                });
            </script>
</body>

</html>