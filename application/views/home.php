<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('template/header')?> 
    </head>
    <body class="layout-top-nav bold-transition dark-mode sidebar-mini layout-navbar-fixed text-sm layout-footer-fixed">
        <div class="wrapper">
            <?php $this->load->view('template/nav-header')?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card bg-info">
                                    <h5 class="font-weight-normal m-3"><i class="icon fas fa-home"></i> Selamat Datang di Aplikasi Penerimaan Peserta Didik Baru <i class="far fa-smile-wink"></i> - Tahun Pelajaran 2024 - 2025 </h5>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/kepegawaian')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #ffaaa7;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Kepegawaian</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-user-tie"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/kesiswaan')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #0D8176;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Kesiswaan</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fa fa-graduation-cap"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/kurikulum')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #269216;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Kurikulum</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-chart-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/akademik')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #038ade;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Akademik</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-project-diagram"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/cbt')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #4C4C6D;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Computer Based Test (CBT)</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-chalkboard-teacher"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/prakerin')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #00C8C5;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Prakerin</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-industry"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/keuangan')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #79a3b1;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Keuangan</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-money-bill-wave"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/surat')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #ADAA03;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Surat - Menyurat</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/konseling')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #433FBD;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Konseling</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-comments"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/ekstrakurikuler')?>" class="text-light">
                                                    <div class="small-box p-2" style="background-color: #FFD700;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Ekstrakurikuler</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-puzzle-piece"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/ppdb')?>" class="text-light">
                                                    <div class="small-box p-2 justify-content-center" style="background-color: #1E90FF;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">PPDB</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-user-graduate"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/barang')?>" class="text-light">
                                                    <div class="small-box p-2 justify-content-center" style="background-color:#FA8072;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Barang</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-box-open"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-6 m-0">
                                                <a href="<?= base_url('dashboard/pengaturan')?>" class="text-light">
                                                    <div class="small-box p-2 justify-content-center" style="background-color: #32CD32;">
                                                        <div class="inner text-center">
                                                            <h5 class="pt-4 pb-4">Pengaturan</h5>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="fas fa-cogs"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->load->view('template/nav-footer')?> 
    </body>
</html>