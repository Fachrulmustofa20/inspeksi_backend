<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard'); ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">MENU</span></li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= base_url('form'); ?>" aria-expanded="false">
                        <i data-feather="edit" class="feather-icon"></i>
                        <span class="hide-menu">Input Inspeksi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('form/laporan'); ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Laporan</span>
                    </a>
                </li>
                <?php if ($user['role_id'] == 1) {  ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="<?= base_url('user_management'); ?>" aria-expanded="false">
                            <i data-feather="users" class="feather-icon"></i>
                            <span class="hide-menu">User Management</span>
                        </a>
                    </li>
                <?php } ?>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Lainnya</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('auth/logout'); ?>" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->