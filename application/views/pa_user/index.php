<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h3 class="font-weight-bolder mb-0">Dashboard Laporan Perkara</h3>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col text-center">
                <h6 class="d-block">Laporan Perkara Tahun 2022</h6>
                <!-- dropdown start -->
                <div class="d-flex justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">2022</a></li>
                            <li><a class="dropdown-item" href="#">2023</a></li>
                            <li><a class="dropdown-item" href="#">2024</a></li>
                        </ul>
                    </div>
                </div>
                <!-- dropdown end -->
            </div>
        </div>

        <!-- modal start -->
        <div class="row">
            <div class="col">
                <!-- button -->
                <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Laporan
                </button>

                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Laporan Perkara</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- form start -->
                                <form action="">
                                    <div class="input-group input-group-static my-3">
                                        <label for="bulan">Periode</label>
                                        <input id="bulan" type="month" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static my-3">
                                        <label for="upload-pdf">Upload file PDF</label>
                                        <input id="upload-pdf" type="file" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static my-3">
                                        <label for="upload-zip">Upload file ZIP</label>
                                        <input id="upload-zip" type="file" class="form-control">
                                    </div>
                                </form>
                                <!-- form end -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </div>
        </div>
        <!-- modal end -->

        <!-- table start -->
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bulan / Berkas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Upload
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Revisi
                                Akhir
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- looping data start -->

                        <?php
                        for ($i = 1; $i < 6; $i++) :
                        ?>

                            <?php
                            $Obj   = DateTime::createFromFormat('!m', $i);
                            $bulan = $Obj->format('F');
                            ?>

                            <tr>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs text-secondary mb-0 ms-3"><?= $i + 1; ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs"><?= $bulan ?></h6>
                                        <p class="text-xs text-secondary mb-0">Lap Per <?= $bulan; ?></p>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-success text-xs font-weight-normal">
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Upload">
                                        <i class="fas fa-upload"></i>
                                    </a> |
                                    <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a> |
                                    <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Download">
                                        <i class="fas fa-download"></i>
                                    </a> |
                                    <a href="<?= base_url('pa_user/action_view') ?>" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Lihat">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endfor; ?>



                        <!-- looping data end -->

                    </tbody>
                </table>
            </div>
        </div>
        <!-- table end -->