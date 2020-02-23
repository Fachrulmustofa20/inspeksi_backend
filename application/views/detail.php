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
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Detail Laporan / <?= $form_detail['no_kendaraan'] ?> / <?= $form_detail['nama_pngmd']; ?></h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('form'); ?>">Laporan</a></li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- Content -->

            <div class="card">
                <div class="card-header bg-primary text-white">
                    DATA PEMERIKSAAN
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    1. Hari/Tanggal
                                </div>
                                <div class="col-md-8">
                                    : <?= date('l / d F Y', $form_detail['tgl']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    6. Nama PO
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['nama_po']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    2. Lokasi
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['lokasi'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    7. Nomor Kndrn
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['no_kendaraan'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    3. Nama Lok
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['nama_lok']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    8. Nomor STUK
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['no_stuk'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    4. Nama Pngmd
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['nama_pngmd'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    9. Jns Trayek
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['jenis_trayek'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    5. Umur
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['umur'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    10. Trayek
                                </div>
                                <div class="col-md-8">
                                    : <?= $form_detail['trayek'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header bg-primary text-white">
                    I. UNSUR ADMINISTRASI
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    1. Kartu Uji/STUK
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['kartu_uji_stuk'] == 1) { ?>
                                        : <span class="badge badge-success">Ada Berlaku</span>
                                    <?php } else if ($form_detail['kartu_uji_stuk'] == 2) { ?>
                                        : <span class="badge badge-danger">Tidak Berlaku</span>
                                    <?php } else if ($form_detail['kartu_uji_stuk'] == 3) { ?>
                                        : <span class="badge badge-danger">Tidak Ada</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Sesuai Fisik</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    2. KP Reguler
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['kp_reguler'] == 1) { ?>
                                        : <span class="badge badge-success">Ada Berlaku</span>
                                    <?php } else if ($form_detail['kp_reguler'] == 2) { ?>
                                        : <span class="badge badge-danger">Tidak Berlaku</span>
                                    <?php } else if ($form_detail['kp_reguler'] == 3) { ?>
                                        : <span class="badge badge-danger">Tidak Ada</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Sesuai Fisik</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    3. KP Cadangan (utk Kendaraan cadangan)
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['kp_cadangan'] == 1) { ?>
                                        : <span class="badge badge-success">Ada Berlaku</span>
                                    <?php } else if ($form_detail['kp_cadangan'] == 2) { ?>
                                        : <span class="badge badge-danger">Tidak Berlaku</span>
                                    <?php } else if ($form_detail['kp_cadangan'] == 3) { ?>
                                        : <span class="badge badge-danger">Tidak Ada</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Sesuai Fisik</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    4. SIM Pngmdi
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['sim_pengemudi'] == 1) { ?>
                                        : <span class="badge badge-success">A Umum</span>
                                    <?php } else if ($form_detail['sim_pengemudi'] == 2) { ?>
                                        : <span class="badge badge-success">B1 Umum</span>
                                    <?php } else if ($form_detail['sim_pengemudi'] == 3) { ?>
                                        : <span class="badge badge-success">B2 Umum</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Sim Tidak Sesuai</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    II. UNSUR TEKNIS UTAMA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">A. SISTEM PENERANGAN</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    1. Lampu Utama
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-4">
                                    a. Dekat
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['luk_dekat'] == 1) { ?>
                                        : <span class="badge badge-success">Semua Menyala</span>
                                    <?php } else if ($form_detail['luk_dekat'] == 2) { ?>
                                        : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-4">
                                    b. Jauh
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['luk_jauh'] == 1) { ?>
                                        : <span class="badge badge-success">Semua Menyala</span>
                                    <?php } else if ($form_detail['luk_jauh'] == 2) { ?>
                                        : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            2. Lampu Petunjuk Arah (Sein)
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                            a. Depan
                        </div>
                        <div class="col-md-7">
                            <?php if ($form_detail['sein_depan'] == 1) { ?>
                                : <span class="badge badge-success">Semua Menyala</span>
                            <?php } else if ($form_detail['sein_depan'] == 2) { ?>
                                : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                            <?php } else { ?>
                                : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                            b. Belakang
                        </div>
                        <div class="col-md-7">
                            <?php if ($form_detail['sein_belakang'] == 1) { ?>
                                : <span class="badge badge-success">Semua Menyala</span>
                            <?php } else if ($form_detail['sein_belakang'] == 2) { ?>
                                : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                            <?php } else { ?>
                                : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            3. Lampu Rem
                        </div>
                        <div class="col-md-7">
                            <?php if ($form_detail['lampu_rem'] == 1) { ?>
                                : <span class="badge badge-success">Semua Menyala</span>
                            <?php } else if ($form_detail['lampu_rem'] == 2) { ?>
                                : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                            <?php } else { ?>
                                : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            4. Lampu Mundur
                        </div>
                        <div class="col-md-7">
                            <?php if ($form_detail['lampu_mundur'] == 1) { ?>
                                : <span class="badge badge-success">Semua Menyala</span>
                            <?php } else if ($form_detail['lampu_mundur'] == 2) { ?>
                                : <span class="badge badge-danger">Kanan Tidak Menyala</span>
                            <?php } else { ?>
                                : <span class="badge badge-danger">Kiri Tidak Menyala</span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">B. SISTEM PENGEREMAN</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    5. Kondisi Rem Utama
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['rem_utama'] == 1) { ?>
                                        : <span class="badge badge-success">Berfungsi</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Berfungsi</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    6. Kondisi Rem Parkir
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['rem_parkir'] == 1) { ?>
                                        : <span class="badge badge-success">Berfungsi</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Berfungsi</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">C. BADAN KENDARAAN</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    7. Kondisi Kaca Depan
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['kaca_depan'] == 1) { ?>
                                        : <span class="badge badge-success">Baik</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Buruk</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">D. BAN</div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-4">
                                    a. Kondisi Ban Depan
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['ban_depan'] == 1) { ?>
                                        : <span class="badge badge-success">Semua Laik</span>
                                    <?php } else if ($form_detail['ban_depan'] == 2) { ?>
                                        : <span class="badge badge-danger">Kanan Tidak Laik</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Kiri Tidak Laik</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-4">
                                    b. Kondisi Ban Belakang
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['ban_belakang'] == 1) { ?>
                                        : <span class="badge badge-success">Semua Laik</span>
                                    <?php } else if ($form_detail['ban_belakang'] == 2) { ?>
                                        : <span class="badge badge-danger">Kanan Tidak Laik</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Kiri Tidak Laik</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-bold">E. PERLENGKAPAN</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    9. Sabuk Keselamatan Pengemudi
                                </div>
                                <div class="col-md-7">
                                    <?php if ($form_detail['sabuk'] == 1) { ?>
                                        : <span class="badge badge-success">Ada dan Fungsi</span>
                                    <?php } else { ?>
                                        : <span class="badge badge-danger">Tidak Fungsi/Tidak Ada</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white">
                    III. UNSUR TEKNIS PENUNJANG
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="font-weight-bold">A. PENGUKURAN KECEPATAN</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            10. Pengukuran Kecepatan
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['kecepatan'] == 1) { ?>
                                                : <span class="badge badge-success">Ada dan Berfungsi</span>
                                            <?php } else if ($form_detail['kecepatan'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Berfungsi</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="font-weight-bold">B. SISTEM PENGEREMAN</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    11. Lampu Posisi
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-md-4">
                                                    a. Depan
                                                </div>
                                                <div class="col-md-7">
                                                    <?php if ($form_detail['lampu_posisi_d'] == 1) { ?>
                                                        : <span class="badge badge-success">Semua Menyala</span>
                                                    <?php } else if ($form_detail['lampu_posisi_d'] == 2) { ?>
                                                        : <span class="badge badge-warning">Kanan Tidak Menyala</span>
                                                    <?php } else { ?>
                                                        : <span class="badge badge-warning">Kiri Tidak Menyala</span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-md-4">
                                                    b. Belakang
                                                </div>
                                                <div class="col-md-7">
                                                    <?php if ($form_detail['lampu_posisi_b'] == 1) { ?>
                                                        : <span class="badge badge-success">Semua Menyala</span>
                                                    <?php } else if ($form_detail['lampu_posisi_b'] == 2) { ?>
                                                        : <span class="badge badge-warning">Kanan Tidak Menyala</span>
                                                    <?php } else { ?>
                                                        : <span class="badge badge-warning">Kiri Tidak Menyala</span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="font-weight-bold">C. BADAN KENDARAAN</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            12. Spion
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['kaca_spion'] == 1) { ?>
                                                : <span class="badge badge-success">Ada dan Sesuai</span>
                                            <?php } else if ($form_detail['kaca_spion'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Sesuai</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            13. Penghapus Kaca (Wiper)
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['wiper'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else if ($form_detail['wiper'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Berfungsi</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            14. Klakson
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['klakson'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else if ($form_detail['klakson'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Berfungsi</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="font-weight-bold">D. KAPASITAS TEMPAT DUDUK</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            15. Jlh Tmpt Duduk Penumpang
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['tempat_duduk'] == 1) { ?>
                                                : <span class="badge badge-success">Sesuai</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Sesuai</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="font-weight-bold">E. PERLENGKAPAN KENDARAAN</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            16. Ban Cadangan
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['ban_cadangan'] == 1) { ?>
                                                : <span class="badge badge-success">Ada dan Laik</span>
                                            <?php } else if ($form_detail['ban_cadangan'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Laik</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            17. Segitiga Pengaman
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['stg_pengaman'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            18. Dongkrak
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['dongkrak'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            19. Pembuka Roda
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['pmbk_roda'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            20. Lampu Senter
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['lampu_senter'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else if ($form_detail['lampu_senter'] == 2) { ?>
                                                : <span class="badge badge-warning">Tidak Berfungsi</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="font-weight-bold">F. TANGGAP DARURAT</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            21. Pintu Darurat
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['pintu_darurat'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            22. Jendela Darurat
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['jendela_darurat'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            23. Alat Pemukul/Pemecah Kaca
                                        </div>
                                        <div class="col-md-7">
                                            <?php if ($form_detail['pemecah_kaca'] == 1) { ?>
                                                : <span class="badge badge-success">Ada</span>
                                            <?php } else { ?>
                                                : <span class="badge badge-warning">Tidak Ada</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    KESIMPULAN
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="font-weight-normal">Berdasarkan Hasil Diatas Maka Kendaraan Tersebut Dinyatakan:</div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <?php if ($form_detail['hasil_inspeksi'] == 1) { ?>
                                        <button type="button" class="btn btn-success">DI IJINKAN OPERASIONAL</button>
                                    <?php } else if ($form_detail['hasil_inspeksi'] == 2) { ?>
                                        <button type="button" class="btn btn-success">PERINGATAN/PERBAIKI</button>
                                    <?php } else if ($form_detail['hasil_inspeksi'] == 3) { ?>
                                        <button type="button" class="btn btn-danger">TILANG DAN DILARANG OPERASIONAL</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger">DILARANG OPERASIONAL</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="font-weight-normal">Catatan :</div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <?php if ($form_detail['catatan'] == null) { ?>
                                            <div class="font-weight-bold">-</div>
                                        <?php } else { ?>
                                            <div class="font-weight-bold"><?= $form_detail['catatan']; ?></div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">

                                                <table class="table table-bordered">
                                                    <thead class="text-center">

                                                        <tr>
                                                            <th width="250px">Catatan</th>
                                                            <th width=" 250px">PENGEMUDI</th>
                                                            <th width="250px">PENGUJI KENDARAAN BERMOTOR </th>
                                                            <th width="250px">PENYIDIK PEGAWAI NEGERI SIPIL </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <tr>
                                                            <td>
                                                                <i>
                                                                    Jika setiap unsur terdapat pelanggaran,
                                                                    maka sanksi yang dikenakkan adalah sanki yang paling berat.
                                                                </i>
                                                            </td>

                                                            <td><br><br><br>Nama : <?= $form_detail['nama_pngmd']; ?>

                                                            </td>
                                                            <td><br><br>Nama :
                                                                <br>
                                                                Nip :
                                                            </td>
                                                            <td><br><br>Nama : <?= $form_detail['nama_penyidik']; ?><br>
                                                                Nip : <?= $form_detail['nip_penyidik']; ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <!--  tabel ttd-->
                    <div class="row">
                        <div class="col-md-2">
                            Keterangan :
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            - <span class="badge badge-success">Hijau</span> : Diijinkan/Laik
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            - <span class="badge badge-warning">Kuning</span> : Peringatan/Perbaiki
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            - <span class="badge badge-danger">Merah</span> : Dilarang/Tidak Laik
                        </div>
                    </div>

                </div>


            </div>

            <!-- End Content --->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
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
<!-- ============================================================== -->