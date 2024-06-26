                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <?php $url = $this->uri->segment(2); ?>
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?= base_url() ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?= $url == 'dashboard' ? 'active' : '' ?>">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu <?= $url == 'jurusan' || $url == 'tahun_pelajaran' || $url == 'kelas' ? 'active pcoded-trigger' : '' ?>">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Master</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?= $url == 'tahun_pelajaran' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/tahun_pelajaran') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tahun Pelajaran</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="<?= $url == 'kelas' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/kelas') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Kelas</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="<?= $url == 'jurusan' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/jurusan') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Jurusan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu <?= $url == 'nama_pembayaran' || $url == 'jenis_pembayaran' ? 'active pcoded-trigger' : '' ?>">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Master Pembayaran</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?= $url == 'nama_pembayaran' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/pembayaran') ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Nama Pembayaran</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu <?= $url == 'siswa' || $url == 'ptk' || $url == 'wali_kelas' || $url == 'kelas_siswa' || $url == 'print_buku_induk' ? 'active pcoded-trigger' : '' ?>">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Akademik</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <div class="pcoded-navigation-label ml-2">Siswa</div>
                                        <li class="<?= $url == 'siswa' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/siswa'); ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><b>FC</b></span>
                                                <span class="pcoded-mtext">Data Siswa</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="<?= $url == 'kelas_siswa' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/kelas_siswa'); ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><b>FC</b></span>
                                                <span class="pcoded-mtext">Kelas Siswa</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <div class="pcoded-navigation-label ml-2">PTK</div>
                                        <li class="<?= $url == 'ptk' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/ptk'); ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><b>FC</b></span>
                                                <span class="pcoded-mtext">Data PTK</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="<?= $url == 'wali_kelas' ? 'active' : '' ?>">
                                            <a href="<?= base_url('admin/wali_kelas'); ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><b>FC</b></span>
                                                <span class="pcoded-mtext">Data Wali Kelas</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?= $url == 'user' ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/user'); ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Users</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                </li>
                                <li class="<?= $url == 'profile' ? 'active' : '' ?>">
                                    <a href="<?= base_url('admin/profile'); ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fas fa-gear"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Profile Sekolah</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>