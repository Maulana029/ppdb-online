<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('template/header') ?>
    </head>
    <body class="layout-top-nav bold-transition sidebar-mini layout-navbar-fixed text-sm layout-footer-fixed">
        <div class="wrapper">
            <?php $this->load->view('template/nav-header') ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8 pt-2">
                                <div class="card bg-info">
                                    <h5 class="font-weight-normal m-3 text-center">Selamat Datang di Aplikasi Penerimaan Peserta Didik Baru Tahun Pelajaran 2024 - 2025 <br> Dibawah ini adalah pengumuman dan pemberitahuan tentang pendaftaran siswa baru </h5>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header bg-success">
                                        <h4 class="card-title">Gelombang 1</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="text-justify">Pendaftaran dibuka mulai dari tanggal <b>08 Oktober 2023</b> sampai dengan <b>30 Maret 2024</b>, dari jam 09:00 sampai dengan 16:00 <br> Tes gelombang 1 akan dilaksanakan pada tanggal <b>31 Maret 2024</b>. Pengumuman hasil tes dilaksanakan pada <b>2 April 2024</b> dan daftar ulang dibuka dari tanggal <b>2 April 2024</b> sampai dengan <b>13 April 2024</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header bg-success">
                                        <h4 class="card-title">Gelombang 2</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="text-justify">Pendaftaran dibuka mulai dari tanggal <b>31 Maret 2024</b> sampai dengan <b>27 Juni 2024</b>, dari jam 09:00 sampai dengan 16:00 <br> Tes gelombang 2 akan dilaksanakan pada tanggal <b>28 Juni 2024</b>. Pengumuman hasil tes dilaksanakan pada <b>31 Juni 2024</b> dan daftar ulang dibuka dari tanggal <b>31 Juni 2024</b> sampai dengan <b>10 Juli 2024</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <h4 class="card-title">No. WhatsApp yang bisa dihubungi</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-5"><b>Panitia:</b></div>
                                            <div class="col-sm-8"><b>089576899098</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="card-title">Daftar Peserta Didik Baru</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-sm table-striped table-bordered" id="dtTable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 12px;">No</th>
                                                    <th>Gelombang</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Jurusan</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 12px;">No</th>
                                                    <th>Gelombang</th>
                                                    <th>Nama Peserta</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Jurusan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('template/nav-footer') ?>
            <?php $this->load->view('js/js_page_home')?>
        </div>
        <?php $this->load->view('template/modal_page')?>
    </body>
</html>