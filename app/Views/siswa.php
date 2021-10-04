<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Siswa</title>
    <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>/home">Data Siswa</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Fitur</div>
                        <a class="nav-link active" href="<?php echo base_url(); ?>/siswa">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Siswa
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Data Siswa</h1>
                </div>
                <div class="card m-2">
                    <div class="card-content">
                        <br />
                        <div class="container-fluid">
                            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('message'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>/siswa_input">+ Tambah Siswa</a>
                            <br />
                            <br />

                            <h3>Daftar Siswa</h3>
                            <div style="overflow-x:auto;">
                                <table border="1" class="table table-bordered">
                                    <tr>
                                        <th class="bg-danger">No</th>
                                        <th class="bg-danger">NIS</th>
                                        <th class="bg-danger">NAMA</th>
                                        <th class="bg-danger">ALAMAT</th>
                                        <th class="bg-danger">Aksi</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    foreach ($Siswa as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->NIS; ?></td>
                                            <td><?= $row->NAMA; ?></td>
                                            <td><?= $row->ALAMAT; ?></td>
                                            <td>
                                                <a title="Edit" href="<?= base_url("siswa_edit/$row->NIS"); ?>" class="btn btn-info d-flex justify-content-center mx-auto m-2">Edit</a>
                                                <a title="Delete" href="<?= base_url("siswa_hapus/$row->NIS") ?>" class="btn btn-danger d-flex justify-content-center mx-auto m-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/demo/datatables-demo.js"></script>
</body>

</html>