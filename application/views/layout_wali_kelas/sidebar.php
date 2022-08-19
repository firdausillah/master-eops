                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <?php $url = $this->uri->segment(2); ?>
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?= $this->session->userdata('foto') ? base_url('uploads/img/ptk/' . $this->session->userdata('foto')) : base_url('uploads/img/ptk/profile.png') ?>" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?= $this->session->userdata('nama') ? $this->session->userdata('nama') : $this->session->userdata('username') ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#"><i class="ti-settings"></i>Settings</a>
                                            <a href="<?= base_url('auth/logout') ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?= $url == 'dashboard' ? 'active' : '' ?>">
                                    <a href="<?= base_url('wali_kelas/dashboard') ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?= $url == 'kelas' ? 'active' : '' ?>">
                                    <a href="<?= base_url('wali_kelas/kelas') ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Wali Kelas</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?= $url == 'profile' ? 'active' : '' ?>">
                                    <a href="<?= base_url('wali_kelas/profile') ?>" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>