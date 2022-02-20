                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10"><?= $title ? $title : 'Judul Page' ?></h5>
                                            <p class="m-b-0">Halaman <?= $title ? $title : 'Judul Page' ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 'data_identitas';
                        }
                        ?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Hover table card start -->
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form <?= $title ? $title : 'Judul Page' ?></h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="col-lg-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs  tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_identitas' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_identitas" role="tab" aria-selected="false">Identitas</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_ayah' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_ayah" role="tab" aria-selected="false">Data Ayah</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_ibu' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_ibu" role="tab" aria-selected="false">Data Ibu</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_wali' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_wali" role="tab" aria-selected="true">Data Wali</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_periodik' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_periodik" role="tab" aria-selected="true">Periodik</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'registrasi_pd' ? 'active show' : ''; ?>" data-toggle="tab" href="#registrasi_pd" role="tab" aria-selected="true">Registrasi PD</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'pendaftaran_keluar' ? 'active show' : ''; ?>" data-toggle="tab" href="#pendaftaran_keluar" role="tab" aria-selected="true">Pendaftaran Keluar</a>
                                                                </li>
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content tabs card-block">
                                                                <div class="tab-pane<?= $page == 'data_identitas' ? ' active show' : ''; ?>" id="data_identitas" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/data_identitas/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nama" value="<?= $siswa->nama ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" name="jk" id="jk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->jk == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                                                                        <option <?= $siswa->jk == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nisn</label>
                                                                                    <input type="number" class="form-control" name="nisn" value="<?= $siswa->nisn ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nik_siswa <span class="text-danger">*</span></label>
                                                                                    <input type="number" class="form-control" name="nik_siswa" value="<?= $siswa->nik_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">no_kk</label>
                                                                                    <input type="number" class="form-control" name="no_kk" value="<?= $siswa->no_kk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">tempatlahir_siswa <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="tempatlahir_siswa" value="<?= $siswa->tempatlahir_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">tgllahir_siswa <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="tgllahir_siswa" value="<?= $siswa->tgllahir_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">noakte_lahir</label>
                                                                                    <input type="text" class="form-control" name="noakte_lahir" value="<?= $siswa->noakte_lahir ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan" value="<?= $siswa->kewarganegaraan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">agama</label>
                                                                                    <input type="text" class="form-control" name="agama" value="<?= $siswa->agama ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">alamat_siswa</label>
                                                                                    <input type="text" class="form-control" name="alamat_siswa" value="<?= $siswa->alamat_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">rt</label>
                                                                                    <input type="text" class="form-control" name="rt" value="<?= $siswa->rt ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nohp <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nohp" value="<?= $siswa->nohp ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">rw</label>
                                                                                    <input type="text" class="form-control" name="rw" value="<?= $siswa->rw ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">dusun</label>
                                                                                    <input type="text" class="form-control" name="dusun" value="<?= $siswa->dusun ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">desa</label>
                                                                                    <input type="text" class="form-control" name="desa" value="<?= $siswa->desa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kec</label>
                                                                                    <input type="text" class="form-control" name="kec" value="<?= $siswa->kec ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kab</label>
                                                                                    <input type="text" class="form-control" name="kab" value="<?= $siswa->kab ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kodepos</label>
                                                                                    <input type="text" class="form-control" name="kodepos" value="<?= $siswa->kodepos ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">tempat_tinggal</label>
                                                                                    <input type="text" class="form-control" name="tempat_tinggal" value="<?= $siswa->tempat_tinggal ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">moda_transportasi</label>
                                                                                    <input type="text" class="form-control" name="moda_transportasi" value="<?= $siswa->moda_transportasi ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">anak_keberapa</label>
                                                                                    <input type="text" class="form-control" name="anak_keberapa" value="<?= $siswa->anak_keberapa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nomor_kip</label>
                                                                                    <input type="text" class="form-control" name="nomor_kip" value="<?= $siswa->nomor_kip ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nama_kip</label>
                                                                                    <input type="text" class="form-control" name="nama_kip" value="<?= $siswa->nama_kip ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">lintang</label>
                                                                                    <input type="text" class="form-control" name="lintang" value="<?= $siswa->lintang ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">bujur</label>
                                                                                    <input type="text" class="form-control" name="bujur" value="<?= $siswa->bujur ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nomor_kks</label>
                                                                                    <input type="text" class="form-control" name="nomor_kks" value="<?= $siswa->nomor_kks ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">nomor_kps_pkh</label>
                                                                                    <input type="text" class="form-control" name="nomor_kps_pkh" value="<?= $siswa->nomor_kps_pkh ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">password <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="password" value="<?= $siswa->password ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_ayah' ? ' active show' : ''; ?>" id="data_ayah" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/data_ayah/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_ibu' ? ' active show' : ''; ?>" id="data_ibu" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/data_ibu/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_wali' ? ' active show' : ''; ?>" id="data_wali" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/data_wali/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_periodik' ? ' active show' : ''; ?>" id="data_periodik" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/data_periodik/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'registrasi_pd' ? ' active show' : ''; ?>" id="registrasi_pd" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/registrasi_pd/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'pendaftaran_keluar' ? ' active show' : ''; ?>" id="pendaftaran_keluar" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/pendaftaran_keluar/' . $siswa->id) ?>" method="POST">

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <!-- <div id="styleSelector"> </div> -->
                            </div>
                        </div>
                    </div>