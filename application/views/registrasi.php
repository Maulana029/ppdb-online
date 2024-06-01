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
                            <div class="col-sm-8 pt-5">
                                <div class="card bg-info">
                                    <h5 class="font-weight-normal m-3 text-center">Selamat Datang di Aplikasi Penerimaan Peserta Didik Baru Tahun Pelajaran 2024 - 2025 <br> Silahkan isi data diri anda pada formulir yang sudah disediakan... </h5>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header p-1">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#datadiri" data-toggle="tab">Data Diri</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#dataorangtua" data-toggle="tab">Data Orang Tua</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#datawali" data-toggle="tab">Data Wali</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="datadiri">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="nama_lengkap">Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-sm mb-2" required="true" placeholder="Nama Lengkap">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="desa_kelurahan">Desa / Kelurahan</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="desa_kelurahan" id="desa_kelurahan" class="form-control form-control-sm mb-2" required="true" placeholder="Desa / Kelurahan">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="nisn">NISN</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="nisn" id="nisn" class="form-control form-control-sm mb-2" required="true" placeholder="Nomor Induk Siswa Nasional">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="kecamatan">Kecamatan</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control form-control-sm mb-2" required="true" placeholder="Kecamatan">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="nik">NIK</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="nik" id="nik" class="form-control form-control-sm mb-2" required="true" placeholder="No. Induk Kependudukan">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="kabupaten">Kabupaten</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="kabupaten" id="kabupaten" class="form-control form-control-sm mb-2" required="true" placeholder="Kabupaten">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm mb-2" required="true" placeholder="Tempat Lahir">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="anak_ke">Anak Ke</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="anak_ke" id="anak_ke" class="form-control form-control-sm mb-2" required="true" placeholder="Anak Ke">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm mb-2" required="true">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="jumlah_saudara">Jumlah Saudara Kandung</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="jumlah_saudara" id="jumlah_saudara" class="form-control form-control-sm mb-2" required="true" placeholder="Jumlah Saudara Kandung">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">--- Pilih Jenis Kelamin ---</option>
                                                            <option value="Laki - laki">Laki - laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="status_keluarga">Status dalam Keluarga</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="status_keluarga" id="status_keluarga" class="form-control form-control-sm mb-2" required="true" placeholder="Status dalam Keluarga">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="Agama">Agama</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select name="Agama" id="Agama" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">--- Pilih Agama ---</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="asal_sekolah">Asal Sekolah</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control form-control-sm mb-2" required="true" placeholder="Asal Sekolah SMP / MTs">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="alamat">Alamat</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="alamat" id="alamat" class="form-control form-control-sm mb-2" required="true" placeholder="Alamat">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label for="no_wa">No. WhatsApp</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" name="no_wa" id="no_wa" class="form-control form-control-sm mb-2" required="true" placeholder="No. WhatsApp">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="rtrw1">RT </label>/ <label for="rtrw2">RW</label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="number" name="rtrw" id="rtrw1" class="form-control form-control-sm mb-2" required="true" placeholder="RT">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="number" name="rtrw" id="rtrw2" class="form-control form-control-sm mb-2" required="true" placeholder="RW">
                                                    </div>
                                                    <div class="col-sm-2"><label for="pilih_jurusan">Jurusan</label> / <label for="pilih_gelombang">Gelombang</label></div>
                                                    <div class="col-sm-2">
                                                        <select name="pilih_jurusan" id="pilih_jurusan" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">-- Pilih Jurusan --</option>
                                                            <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                                            <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                                                        </select>
                                                    </div>
                                                   
                                                    <div class="col-sm-2">
                                                        <select name="pilih_gelombang" id="pilih_gelombang" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">-- Pilih Gelombang --</option>
                                                            <option value="Gel - 1">Gelombang 1</option>
                                                            <option value="Gel - 2">Gelombang 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="dataorangtua">
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="nama_ayah">Nama Ayah</label></div>
                                                    <div class="col-sm-4"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="Nama Ayah"></div>
                                                    <div class="col-sm-2"><label for="nama_ibu">Nama Ibu</label></div>
                                                    <div class="col-sm-4"><input type="text" name="nama_ibu" id="nama_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="Nama Ibu"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="nik_ayah">NIK</label></div>
                                                    <div class="col-sm-4"><input type="number" name="nik_ayah" id="nik_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="No. Induk Kependudukan"></div>
                                                    <div class="col-sm-2"><label for="nik_ibu">NIK</label></div>
                                                    <div class="col-sm-4"><input type="number" name="nik_ibu" id="nik_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="No. Induk Kependudukan"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="tempat_lahir_ayah">Tempat Lahir</label></div>
                                                    <div class="col-sm-4"><input type="text" name="tempat_lahir_ayah" id="tempat_lahir_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="Tempat Lahir"></div>
                                                    <div class="col-sm-2"><label for="tempat_lahir_ibu">Tempat Lahir</label></div>
                                                    <div class="col-sm-4"><input type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="Tempat Lahir"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="tanggal_lahir_ayah">Tanggal Lahir</label></div>
                                                    <div class="col-sm-4"><input type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="Tanggal Lahir"></div>
                                                    <div class="col-sm-2"><label for="tanggal_lahir_ibu">Tanggal Lahir</label></div>
                                                    <div class="col-sm-4"><input type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="Tanggal Lahir"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="pendidikan_ayah">Pendidikan</label></div>
                                                    <div class="col-sm-4">
                                                        <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">-- Pendidikan Ayah --</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Sarjana">Sarjana / S1</option>
                                                            <option value="Megister">Megister / S2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2"><label for="pendidikan_ibu">Pendidikan</label></div>
                                                    <div class="col-sm-4">
                                                        <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">-- Pendidikan Ibu --</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Sarjana">Sarjana / S1</option>
                                                            <option value="Megister">Megister / S2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="pekerjaan_ayah">Pekerjaan Ayah</label></div>
                                                    <div class="col-sm-4"><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="Pekerjaan Ayah"></div>
                                                    <div class="col-sm-2"><label for="pekerjaan_ibu">Pekerjaan Ibu</label></div>
                                                    <div class="col-sm-4"><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="Pekerjaan Ibu"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="penghasilan_ayah">Penghasilan Ayah</label></div>
                                                    <div class="col-sm-4"><input type="text" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control form-control-sm mb-2" required="true" placeholder="Penghasilan Ayah"></div>
                                                    <div class="col-sm-2"><label for="penghasilan_ibu">Penghasilan Ibu</label></div>
                                                    <div class="col-sm-4"><input type="text" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control form-control-sm mb-2" required="true" placeholder="Penghasilan Ibu"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="datawali">
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="nama_wali">Nama Wali</label></div>
                                                    <div class="col-sm-4"><input type="text" name="nama_wali" id="nama_wali" class="form-control form-control-sm mb-2" required="true" placeholder="Nama Wali"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="nik_wali">NIK</label></div>
                                                    <div class="col-sm-4"><input type="text" name="nik_wali" id="nik_wali" class="form-control form-control-sm mb-2" required="true" placeholder="No. Induk Kependudukan"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="tempat_lahir_wali">Tempat Lahir</label></div>
                                                    <div class="col-sm-4"><input type="text" name="tempat_lahir_wali" id="tempat_lahir_wali" class="form-control form-control-sm mb-2" required="true" placeholder="Tempat Lahir"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="tanggal_lahir_wali">Tanggal Lahir</label></div>
                                                    <div class="col-sm-4"><input type="date" name="tanggal_lahir_wali" id="tanggal_lahir_wali" class="form-control form-control-sm mb-2" required="true" placeholder="Tanggal Lahir"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="pendidikan_wali">Pendidikan</label></div>
                                                    <div class="col-sm-4">
                                                        <select name="pendidikan_wali" id="pendidikan_wali" class="form-control form-control-sm mb-2" required="true">
                                                            <option value="">-- Pendidikan Wali --</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Sarjana">Sarjana / S1</option>
                                                            <option value="Megister">Megister / S2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="pekerjaan_wali">Pekerjaan Wali</label></div>
                                                    <div class="col-sm-4"><input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control form-control-sm mb-2" required="true" placeholder="Pekerjaan Wali"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2"><label for="penghasilan_wali">Penghasilan Wali</label></div>
                                                    <div class="col-sm-4"><input type="text" name="penghasilan_wali" id="penghasilan_wali" class="form-control form-control-sm mb-2" required="true" placeholder="Penghasilan Wali"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col"><button class="btn btn-sm btn-info"><i class="fas fa-save"></i> Simpan</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('template/nav-footer') ?>
        </div>
    </body>
</html>