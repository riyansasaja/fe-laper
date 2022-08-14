<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h3 class="font-weight-bolder mb-0">Dashboard Laporan Triwulan</h3>
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
                <h6 class="d-block">Laporan Triwulan Tahun 2022</h6>
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

                <a href="<?php echo base_url() ?>pa_user/addtriwulan" class="btn bg-gradient-success">Tambah Laporan</a>


                <!-- table start -->
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Triwulan / Berkas</th>
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
                                for ($i = 1; $i < 3; $i++) :
                                ?>

                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs text-secondary mb-0 ms-3"><?= $i; ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Triwulan <?= $i; ?></h6>
                                                <p class="text-xs text-secondary mb-0">Lap Per Triwulan <?= $i; ?></p>
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