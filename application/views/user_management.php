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
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">User Management</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>" class="text-muted">Menu</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">User Management</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <h4 class="card-title">Pengguna</h4>
                            <div class="ml-auto">
                                <!-- Signup modal content -->
                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <h3>Tambah Pengguna</h1>
                                                </div>
                                                <form class="pl-3 pr-3" action="<?= base_url('user_management/add_user'); ?>" method="POST">
                                                    <div class="form-group">
                                                        <label for="name">Nama Lengkap</label>
                                                        <input class="form-control" type="text" id="name" name="name" placeholder="Masukan Nama Lengkap" value="<?= set_value('name'); ?>" required>
                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Alamat Email</label>
                                                        <input class="form-control" type="email" id="email" name="email" placeholder="Masukan Alamat Email" value="<?= set_value('email'); ?>" required>
                                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nip">NIP</label>
                                                        <input class="form-control" type="text" id="nip" name="nip" placeholder="Masukan NIP" value="<?= set_value('nip'); ?>" required>
                                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input class="form-control" type="password" id="password1" name="password1" placeholder="Masukan password" required>
                                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Konfirmasi Password</label>
                                                        <input class="form-control" type="password" id="password2" name="password2" placeholder="Masukan confirmasi password" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <select class="custom-select" id="role" name="role" required>
                                                            <option selected disabled value="">Choose Role...</option>
                                                            <?php foreach ($role->result_array() as $r) : ?>
                                                                <option value="<?= $r['id_role']; ?>"><?= $r['role']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit">Submit</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#signup-modal"><i class="fas fa-user-plus fa-sm"></i> Tambah</button>

                                <?php $no = 0;
                                foreach ($users as $u) : $no++; ?>
                                    <!-- update modal content -->
                                    <div id="modal-edit<?= $u['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center mt-2 mb-4">
                                                        <h3>Update Users</h1>
                                                    </div>
                                                    <form class="pl-3 pr-3" action="<?= base_url('user_management/edit'); ?>" method="POST">

                                                        <input type="hidden" name="id" value="<?= $u['id']; ?>">

                                                        <div class="form-group">
                                                            <label for="emailaddress">Alamat Email</label>
                                                            <input class="form-control" type="email" id="email" name="email" value="<?= $u['email']; ?>" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Nama Lengkap</label>
                                                            <input class="form-control" type="text" id="name" name="name" placeholder="Masukan Nama Lengkap" value="<?= $u['name']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">NIP</label>
                                                            <input class="form-control" type="text" id="nip" name="nip" placeholder="Masukan NIP" value="<?= $u['nip']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input class="form-control" type="password" id="password1" name="password1" placeholder="Masukan Password" value="<?= $u['password']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="role">Hak Akses</label>
                                                            <select class="custom-select" id="role" name="role">
                                                                <?php foreach ($role->result_array() as $r) : ?>
                                                                    <?php if ($u['role_id'] == $r['id_role']) : ?>
                                                                        <option value="<?= $r['id_role']; ?>" selected><?= $r['role']; ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $r['id_role']; ?>"><?= $r['role']; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-primary" type="submit"> Submit</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Nama Lengkap
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">NIP
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Hak Akses
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Buat Akun</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $u) : ?>
                                        <tr>
                                            <td class="border-top-0">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="mr-3">
                                                        <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" alt="user" class="rounded-circle" width="45" height="45" />
                                                    </div>
                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium"><?= $u['name']; ?></h5>
                                                        <span class="text-muted font-14"><?= $u['email']; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted font-14 text-center"><?= $u['nip'] ?></td>
                                            <td class="border-top-0 text-muted font-14 text-center"><?= $u['role'] ?></td>
                                            <td class="border-top-0 text-muted font-14 text-center"><?= date('d F Y', $u['date_created']); ?></td>
                                            <td class="border-top-0 text-center">
                                                <button data-toggle="modal" data-target="#modal-edit<?= $u['id']; ?>" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit fa-sm"></i> Update</button>
                                                <a onclick="deleteConfirm('<?= base_url('user_management/delete/' . $u['id']); ?>')" href="#!" class="btn btn-danger btn-sm text-white"><i class="fas fa-trash fa-sm"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- Delete Confirmation-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus akun ini?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Akun yang sudah dihapus tidak dapat dikembalikan.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
                </div>
            </div>
        </div>
    </div>
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