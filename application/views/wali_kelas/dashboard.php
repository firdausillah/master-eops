                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Material Able</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card bg-c-green total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4><?= $jumlah_siswa['siswa_lk'] ?></h4>
                                                            <p class="m-0">Siswa Laki-laki</p>
                                                        </div>
                                                        <!-- <span class="label bg-c-green value-badges">15%</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card bg-c-green total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4><?= $jumlah_siswa['siswa_pr'] ?></h4>
                                                            <p class="m-0">Siswa Perempuan</p>
                                                        </div>
                                                        <!-- <span class="label bg-c-green value-badges">15%</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card bg-c-blue total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4><?= $jumlah_siswa['total'] ?></h4>
                                                            <p class="m-0">Total Siswa</p>
                                                        </div>
                                                        <!-- <span class="label bg-c-blue value-badges">15%</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Profile PTK</h5>
                                                        <div class="text-center mb-4">
                                                            <img src="<?= base_url('uploads/img/ptk/'. $profile_ptk->foto ) ?>" height="90px" alt="">
                                                        </div>
                                                        <hr>
                                                        <div class="table-responsive">
                                                            <table class="table table-stripped">
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->nama_ptk ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>NIK</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->nik_ptk ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Induk</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->status_sekolah_induk ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Kepegawaian</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->status_kepegawaian ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nomor SK Pengangkatan</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->sk_pengangkatan ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Username</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->username ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nomor HP</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile_ptk->nomor_hp_ptk ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Profile Sekolah</h5>
                                                        <div class="text-center mb-4">
                                                            <img src="<?= base_url('uploads/img/logo.png') ?>" height="90px" alt="">
                                                        </div>
                                                        <hr>
                                                        <div class="table-responsive">
                                                            <table class="table table-stripped">
                                                                <tr>
                                                                    <td>Nama Sekolah</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->nama_sekolah ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama Kepala Sekolah</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->nama_kepalasekolah ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat Sekolah</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->alamat ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tahun Ajaran</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->tahun_ajaran ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Person</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->cp_1 ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Person 2</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->cp_2 ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Website</td>
                                                                    <td>:</td>
                                                                    <td><?= $profile->website ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <!-- <div id="styleSelector"> </div> -->
                            </div>
                        </div>
                    </div>