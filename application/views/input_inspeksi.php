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
                                <li class="breadcrumb-item"><a href="index.php">Menu</a></li>
                                <li class="breadcrumb-item"><a href="presale.php">Input Inspeksi</a></li>
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
            <form>
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        DATA PEMERIKSAAN
                    </div>
                    <div class="card-body">
                        <!-- input tanggal otomatis keisi pada sistem -->


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Hari/Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                        </div>

                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Lokasi</legend>
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <input type="radio" name="answer[1]" value="1">
                                    Terminal
                                    <input type="radio" name="answer[1]" value="1">
                                    Pool
                                    <input type="radio" name="answer[1]" value="1">
                                    Lainnya
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Pengemudi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama PO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Nomor Kendaraan</legend>

                                <div class="col-sm-7 mt-2">
                                    <div class="form-group">
                                        <input type="radio" name="answer[2]" value="Reguler">
                                        Reguler
                                        <input type="radio" name="answer[2]" value="cadangan">
                                        Cadangan
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor STUK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Trayek</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[3]" value="AKAP">
                                        AKAP
                                        <input type="radio" name="answer[3]" value="AKDP">
                                        AKDP
                                        <input type="radio" name="answer[3]" value="PARIWISA">
                                        PARIWISA
                                        <input type="radio" name="answer[3]" value="MPU">
                                        MPU
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Trayek</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
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
                                        <input type="radio" name="answer[4]" value="ada">
                                        Ada,berlaku
                                        <input type="radio" name="answer[4]" value="tdkberlaku">
                                        Tidak berlaku
                                        <input type="radio" name="answer[4]" value="tidakada">
                                        Tidak ada
                                        <input type="radio" name="answer[4]" value="tdksesuai">
                                        Tidak sesuai fisik
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">KP. Reguler</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[5]" value="ada">
                                        Ada,berlaku
                                        <input type="radio" name="answer[5]" value="tdkberlaku">
                                        Tidak berlaku
                                        <input type="radio" name="answer[5]" value="tidakada">
                                        Tidak ada
                                        <input type="radio" name="answer[5]" value="tdksesuai">
                                        Tidak sesuai fisik
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">KP. Cadangan</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[6]" value="ada">
                                        Ada,berlaku
                                        <input type="radio" name="answer[6]" value="tdkberlaku">
                                        Tidak berlaku
                                        <input type="radio" name="answer[6]" value="tidakada">
                                        Tidak ada
                                        <input type="radio" name="answer[6]" value="tdksesuai">
                                        Tidak sesuai fisik
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Sim Pengemudi</legend>
                                <div class="col-sm-10">

                                    <div class="form-group">
                                        <input type="radio" name="answer[7]" value="Aumum">
                                        A umum
                                        <input type="radio" name="answer[7]" value="B1umum">
                                        B1 umum
                                        <input type="radio" name="answer[7]" value="B2umum">
                                        B2 umum
                                        <input type="radio" name="answer[7]" value="simtdksesuai">
                                        Sim tidak sesuai
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
                                        <input type="radio" name="answer[8]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[8]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[8]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[8]" value="kiri">
                                        Kiri
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jauh</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[9]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[9]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[9]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[9]" value="kiri">
                                        Kiri
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <label class="ml-3">2. Lampu Penunjuk Arah</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Depan</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[10]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[10]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[10]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[10]" value="kiri">
                                        Kiri
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <legend class="col-form-label col-sm-2 pt-0">Belakang</legend>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[11]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[11]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[11]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[11]" value="kiri">
                                        Kiri
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <label class="ml-3">3. Lampu Rem</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[12]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[12]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[12]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[12]" value="kiri">
                                        Kiri
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">4. Lampu Mundur</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[13]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[13]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[13]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[13]" value="kiri">
                                        Kiri
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
                                        <input type="radio" name="answer[14]" value="berfungsi">
                                        berfungsi
                                        <input type="radio" name="answer[14]" value="noberfungsi">
                                        Tidak berfungsi

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">6. Kondisi Rem Parkir</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[15]" value="berfungsi">
                                        berfungsi
                                        <input type="radio" name="answer[15]" value="noberfungsi">
                                        Tidak berfungsi

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
                                        <input type="radio" name="answer[16]" value="baik">
                                        Baik
                                        <input type="radio" name="answer[16]" value="buruk">
                                        Buruk

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
                                        <input type="radio" name="answer[17]" value="Semualaik">
                                        Semua laik
                                        <input type="radio" name="answer[17]" value="tdklaik">
                                        Tidak laik
                                        <input type="radio" name="answer[17]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[17]" value="kiri">
                                        Kiri
                                    </div>

                                </div>
                            </div>
                            <div class="row ml-3">
                                <label class="ml-3">Belakang</label>

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[18]" value="Semualaik">
                                        Semua laik
                                        <input type="radio" name="answer[18]" value="tdklaik">
                                        Tidak laik
                                        <input type="radio" name="answer[18]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[18]" value="kiri">
                                        Kiri
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
                                        <input type="radio" name="answer[19]" value="adafungsi">
                                        Ada dan berfungsi
                                        <input type="radio" name="answer[19]" value="tidakadafungsi">
                                        Tidak ada/tidak berfungsi

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
                                        <input type="radio" name="answer[20]" value="adafungsi">
                                        Ada dan berfungsi
                                        <input type="radio" name="answer[20]" value="tidakfungsi">
                                        Tidak berfungsi
                                        <input type="radio" name="answer[20]" value="tidakada">
                                        Tidak ada

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
                                        <input type="radio" name="answer[21]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[21]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[21]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[21]" value="kiri">
                                        Kiri
                                    </div>

                                </div>
                            </div>
                            <div class="row ml-3">
                                <label class="ml-3">Belakang</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[22]" value="nyala">
                                        Semua menyala
                                        <input type="radio" name="answer[22]" value="nonyala">
                                        Tidak menyala
                                        <input type="radio" name="answer[22]" value="kanan">
                                        Kanan
                                        <input type="radio" name="answer[22]" value="kiri">
                                        Kiri
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
                                        <input type="radio" name="answer[23]" value="adasesuai">
                                        Ada dan sesuai
                                        <input type="radio" name="answer[23]" value="nosesuai">
                                        Tidak sesuai
                                        <input type="radio" name="answer[23]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">13. Penghapus Kaca</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[24]" value="adasesuai">
                                        Ada dan sesuai
                                        <input type="radio" name="answer[24]" value="nosesuai">
                                        Tidak sesuai
                                        <input type="radio" name="answer[24]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">14. Klakson</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[25]" value="adasesuai">
                                        Ada dan sesuai
                                        <input type="radio" name="answer[25]" value="nosesuai">
                                        Tidak sesuai
                                        <input type="radio" name="answer[25]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <h4><b>D. KAPASITAS TEMPAT DUDUK</b></h4>
                        <label class="ml-3">15. Jln Tempat Duduk Penumpang </label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[26]" value="sesuai">
                                        sesuai
                                        <input type="radio" name="answer[26]" value="nosesuai">
                                        Tidak sesuai

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
                                        <input type="radio" name="answer[27]" value="adalaik">
                                        Ada dan laik
                                        <input type="radio" name="answer[27]" value="nolaik">
                                        Tidak laik
                                        <input type="radio" name="answer[27]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">17. Segitiga Pengaman</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[28]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[28]" value="tdkada">
                                        Tidak ada

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">18. Dongkrak</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[29]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[29]" value="tdkada">
                                        Tidak ada

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">19. Pembuka Roda</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[30]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[30]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">20. Lampu Senter</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[31]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[31]" value="tdkfungsi">
                                        Tidak berfungsi
                                        <input type="radio" name="answer[31]" value="tdkada">
                                        Tidak ada

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
                                        <input type="radio" name="answer[32]" value="adalaik">
                                        Ada dan laik
                                        <input type="radio" name="answer[32]" value="tdklaik">
                                        Tidak laik

                                    </div>

                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">22. Jendela Darurat</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[33]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[33]" value="tdkada">
                                        Tidak ada

                                    </div>


                                </div>
                            </div>

                        </fieldset>
                        <label class="ml-3">23. Alat Pemukul/Pemecah Kaca</label>
                        <fieldset class="form-group">
                            <div class="row ml-3">

                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="radio" name="answer[34]" value="ada">
                                        Ada
                                        <input type="radio" name="answer[34]" value="tdkada">
                                        Tidak ada

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Form Nama
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Nama Penyidik</label>
                            <input type="text" class="form-control" name="nama_penyidik">
                        </div>
                        <div class="form-group">
                            <label>Nip Penyidik</label>
                            <input type="text" class="form-control" name="nip_penyidik">
                        </div>

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
                                            <input type="radio" name="answer[35]" value="ada">
                                            Diijinkan Operasional
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answer[35]" value="ada">
                                            Peringatan/Perbaiki
                                        </div>

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
                                            <input type="radio" name="answer[36]" value="ada">
                                            Dilarang Operasional
                                        </div>

                                        <div class="form-group">
                                            <input type="radio" name="answer[36]" value="ada">
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


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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