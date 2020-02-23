<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="dark" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Input Inspeksi</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Menu</a></li>
                                <li class="breadcrumb-item">Input Inspeksi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!--Data pemeriksaan-->
            <form action="<?= base_url('form'); ?>" method="post">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        DATA PEMERIKSAAN
                    </div>
                    <div class="card-body">
                        <!-- input tanggal otomatis keisi pada sistem -->

                        <div class="row">
                            <label class="col-form-label col-sm-2 pt-0">Lokasi</label>
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <div class="text">
                                        <input type="radio" name="answer[1]" value="Terminal" required>
                                        Terminal
                                    </div>
                                    <div class="text">

                                        <input type="radio" name="answer[1]" value="Pool" required>
                                        Pool
                                    </div>
                                    <div class="text">

                                        <input type="radio" name="answer[1]" value="Lainnya" required>
                                        Lainnya
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi">
                                <?= form_error('nama_lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Pengemudi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_pengemudi" name="nama_pengemudi">
                                <?= form_error('nama_pengemudi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="umur" name="umur">
                                <?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama PO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_po" name="nama_po">
                                <?= form_error('nama_po', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Nomor Kendaraan</legend>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="nomor_kendaraan" name="nomor_kendaraan">
                                    <?= form_error('nomor_kendaraan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="col-sm-5 mt-2">
                                    <div class="form-group">
                                        <input type="radio" name="answer[2]" value="Reguler" required>
                                        Reguler
                                        <input type="radio" name="answer[2]" value="cadangan" required>
                                        Cadangan
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor STUK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_stuk" id="nomor_stuk">
                                <?= form_error('nomor_stuk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Trayek</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">
                                            <input type="radio" name="answer[3]" value="AKAP" required>
                                            AKAP
                                        </div>
                                        <div class="text">
                                            <input type="radio" name="answer[3]" value="AKDP" required>
                                            AKDP
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[3]" value="PARIWISA" required>
                                            PARIWISA
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[3]" value="MPU" required>
                                            MPU
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Trayek</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="trayek" id="trayek">
                                <?= form_error('trayek', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>



                    </div>
                </div>
                <!--Unsur administrasi-->
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        UNSUR ADMINISTRASI
                    </div>
                    <div class="card-body">


                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Kartu Uji/STUK</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">
                                            <input type="radio" name="answer[4]" value="1" required>
                                            Ada,berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[4]" value="2" required>
                                            Tidak berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[4]" value="3" required>
                                            Tidak ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[4]" value="4" required>
                                            Tidak sesuai fisik
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">KP. Reguler</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[5]" value="1" required>
                                            Ada,berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[5]" value="2" required>
                                            Tidak berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[5]" value="3" required>
                                            Tidak ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[5]" value="4" required>
                                            Tidak sesuai fisik
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">KP. Cadangan</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[6]" value="1" required>
                                            Ada,berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[6]" value="2" required>
                                            Tidak berlaku
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[6]" value="3" required>
                                            Tidak ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[6]" value="4" required>
                                            Tidak sesuai fisik
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Sim Pengemudi</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[7]" value="1" required>
                                            A umum
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[7]" value="2" required>
                                            B1 umum
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[7]" value="3" required>
                                            B2 umum
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[7]" value="4" required>
                                            Sim tidak sesuai
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>



                    </div>
                </div>
                <!--UNSUR TEKNISI UTAMA-->
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        UNSUR TEKNISI UTAMA
                    </div>
                    <div class="card-body">
                        <h4><b>A. SISTEM PEMERANGAN</b></h4>
                        <label class="ml-3">1. Lampu Utama Kendaraan</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Dekat</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[8]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[8]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[8]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[8]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jauh</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[9]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[9]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[9]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[9]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <label class="ml-3">2. Lampu Penunjuk Arah(Sein)</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Depan</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[10]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[10]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[10]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[10]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Belakang</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[11]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[11]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[11]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[11]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <label class="ml-3">3. Lampu Rem</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[12]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[12]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[12]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[12]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">4. Lampu Mundur</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[13]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[13]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[13]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[13]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <h4><b>B. SISTEM PENGEREMAN</b></h4>
                        <label class="ml-3">5. Kondisi Rem Utama</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[14]" value="1" required>
                                            berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[14]" value="2" required>
                                            Tidak berfungsi
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">6. Kondisi Rem Parkir</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[15]" value="1" required>
                                            berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[15]" value="2" required>
                                            Tidak berfungsi
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>

                        <h4><b>C. BADAN KENDARAAN</b></h4>
                        <label class="ml-3">7. Kondisi Kaca Depan</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[16]" value="1" required>
                                            Baik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[16]" value="2" required>
                                            Buruk
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <h4><b>D. BAN</b></h4>
                        <label class="ml-3">8. Kondisi Ban </label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <label class="ml-3">Depan</label>

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[17]" value="1" required>
                                            Semua laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[17]" value="2" required>
                                            Tidak laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[17]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[17]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row ml-3">
                                <label class="ml-3">Belakang</label>

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[18]" value="1" required>
                                            Semua laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[18]" value="2" required>
                                            Tidak laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[18]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[18]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </fieldset>

                        <h4><b>E. PERLENGKAPAN</b></h4>
                        <label class="ml-3">9. Sabuk Keselamatan Pengemudi</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[19]" value="1" required>
                                            Ada dan berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[19]" value="2" required>
                                            Tidak ada/tidak berfungsi
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>



                    </div>
                </div>
                <!--UNSUR TEKNISI UTAMA-->
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        UNSUR TEKNIS PENUNJANG
                    </div>
                    <div class="card-body">
                        <h4><b>A. PENGUKUR KECEPATAN</b></h4>
                        <label class="ml-3">10. Pengkur kecepatan</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[20]" value="1" required>
                                            Ada dan berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[20]" value="2" required>
                                            Tidak berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[20]" value="3" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <h4><b>B. SISTEM PEMERANGAN</b></h4>
                        <label class="ml-3">11. Lampu Posisi</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <label class="ml-3">Depan</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[21]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[21]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[21]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[21]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row ml-3">
                                <label class="ml-3">Belakang</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[22]" value="1" required>
                                            Semua menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[22]" value="2" required>
                                            Tidak menyala
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[22]" value="3" required>
                                            Kanan
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[22]" value="4" required>
                                            Kiri
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </fieldset>

                        <h4><b>C. BADAN KENDARAAN</b></h4>
                        <label class="ml-3">12. Kaca Spion</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[23]" value="1" required>
                                            Ada dan sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[23]" value="2" required>
                                            Tidak sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[23]" value="3" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">13. Penghapus Kaca(Wiper)</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[24]" value="1" required>
                                            Ada dan sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[24]" value="2" required>
                                            Tidak sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[24]" value="3" required>
                                            Tidak ada
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">14. Klakson</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[25]" value="1" required>
                                            Ada dan sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[25]" value="2" required>
                                            Tidak sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[25]" value="3" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <h4><b>D. KAPASITAS TEMPAT DUDUK</b></h4>
                        <label class="ml-3">15. Jlh Tempat Duduk Penumpang </label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[26]" value="1" required>
                                            sesuai
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[26]" value="2" required>
                                            Tidak sesuai
                                        </div>

                                    </div>


                                </div>
                            </div>


                        </fieldset>

                        <h4><b>E. PERLENGKAPAN KENDARAAN</b></h4>
                        <label class="ml-3">16. Ban Cadangan</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[27]" value="1" required>
                                            Ada dan laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[27]" value="2" required>
                                            Tidak laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[27]" value="3" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">17. Segitiga Pengaman</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[28]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[28]" value="2" required>
                                            Tidak ada
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">18. Dongkrak</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[29]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[29]" value="2" required>
                                            Tidak ada
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">19. Pembuka Roda</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[30]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[30]" value="2" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">20. Lampu Senter</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[31]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[31]" value="2" required>
                                            Tidak berfungsi
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[31]" value="3" required>
                                            Tidak ada
                                        </div>

                                    </div>


                                </div>
                            </div>

                            <!---->
                        </fieldset>
                        <h4><b>F. TANGGAP DARURAT</b></h4>
                        <label class="ml-3">21. Pintu Darurat</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[32]" value="1" required>
                                            Ada dan laik
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[32]" value="2" required>
                                            Tidak laik
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">22. Jendela Darurat</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[33]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[33]" value="2" required>
                                            Tidak ada
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">23. Alat Pemukul/Pemecah Kaca</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class="text">

                                            <input type="radio" name="answer[34]" value="1" required>
                                            Ada
                                        </div>
                                        <div class="text">

                                            <input type="radio" name="answer[34]" value="2" required>
                                            Tidak ada
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Kesimpulan
                    </div>
                    <div class="card-body">
                        <!--start card-->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-success text-white text-center">
                                        Laik Jalan
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <input type="radio" name="answer[35]" value="1" required>
                                            Diijinkan Operasional
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answer[35]" value="2" required>
                                            Perbaiki/Peringatan </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-danger text-white text-center">
                                        Tidak Laik Jalan
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <input type="radio" name="answer[35]" value="3" required>
                                            Dilarang Operasional
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answer[35]" value="4" required>
                                            Tilang dan Dilarang Operasional
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        Catatan
                                    </div>
                                    <div class="card-body">
                                        <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--start card-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Form Nama
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label>Nama Penyidik PNS</label>
                                    <input type="text" class="form-control" name="nama_penyidik">
                                    <?= form_error('nama_penyidik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nip Penyidik PNS</label>
                                    <input type="text" class="form-control" name="nip_penyidik">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->