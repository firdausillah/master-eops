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
                                                                    <a class="nav-link <?= $page == 'prestasi' ? 'active show' : ''; ?>" data-toggle="tab" href="#prestasi" role="tab" aria-selected="true">Prestasi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'beasiswa' ? 'active show' : ''; ?>" data-toggle="tab" href="#beasiswa" role="tab" aria-selected="true">Beasiswa</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'registrasi_pd' ? 'active show' : ''; ?>" data-toggle="tab" href="#registrasi_pd" role="tab" aria-selected="true">Registrasi PD</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'registrasi_pd_keluar' ? 'active show' : ''; ?>" data-toggle="tab" href="#registrasi_pd_keluar" role="tab" aria-selected="true">Registrasi PD Keluar</a>
                                                                </li>
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content tabs card-block">
                                                                <div class="tab-pane<?= $page == 'data_identitas' ? ' active show' : ''; ?>" id="data_identitas" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_identitas/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nama" value="<?= $siswa->nama ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                                                                                    <input type="number" class="form-control" name="nik_siswa" value="<?= $siswa->nik_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Panggilan<span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nama_panggilan" value="<?= $siswa->nama_panggilan ?>">
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
                                                                                    <label class="form-label">Nomor KK</label>
                                                                                    <input type="number" class="form-control" name="no_kk" value="<?= $siswa->no_kk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="tempatlahir_siswa" value="<?= $siswa->tempatlahir_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tangal Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="date" class="form-control" name="tgllahir_siswa" value="<?= $siswa->tgllahir_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Akte Kelahiran</label>
                                                                                    <input type="text" class="form-control" name="noakte_lahir" value="<?= $siswa->noakte_lahir ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan" value="<?= $siswa->kewarganegaraan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Agama</label>
                                                                                    <select name="agama" id="agama" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->agama == 'Islam' ? 'selected' : '' ?> value="Islam">Islam</option>
                                                                                        <option <?= $siswa->agama == 'Kristen/Protenstan' ? 'selected' : '' ?> value="Kristen/Protenstan">Kristen/Protenstan</option>
                                                                                        <option <?= $siswa->agama == 'Katholik' ? 'selected' : '' ?> value="Katholik">Khatolik</option>
                                                                                        <option <?= $siswa->agama == 'Hindu' ? 'selected' : '' ?> value="Hindu">Hindu</option>
                                                                                        <option <?= $siswa->agama == 'Budha' ? 'selected' : '' ?> value="Budha">Budha</option>
                                                                                        <option <?= $siswa->agama == 'Khong Hu Chu' ? 'selected' : '' ?> value="Khong Hu Chu">Khong Hu Chu</option>
                                                                                        <option <?= $siswa->agama == 'Kepercayaan Kpd Tuhan YME' ? 'selected' : '' ?> value="Kepercayaan Kpd Tuhan YME">Kepercayaan Kpd Tuhan YME</option>
                                                                                        <option <?= $siswa->agama == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nohp" value="<?= $siswa->nohp ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_siswa" value="<?= $siswa->alamat_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RT</label>
                                                                                    <input type="text" class="form-control" name="rt" value="<?= $siswa->rt ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RW</label>
                                                                                    <input type="text" class="form-control" name="rw" value="<?= $siswa->rw ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Dusun</label>
                                                                                    <input type="text" class="form-control" name="dusun" value="<?= $siswa->dusun ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Desa</label>
                                                                                    <input type="text" class="form-control" name="desa" value="<?= $siswa->desa ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kecamatan</label>
                                                                                    <input type="text" class="form-control" name="kec" value="<?= $siswa->kec ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kabupaten</label>
                                                                                    <input type="text" class="form-control" name="kab" value="<?= $siswa->kab ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Provinsi</label>
                                                                                    <input type="text" class="form-control" name="provinsi_siswa" value="<?= $siswa->provinsi_siswa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kodepos</label>
                                                                                    <input type="number" class="form-control" name="kodepos" value="<?= $siswa->kodepos ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tempat Tinggal</label>
                                                                                    <select name="tempat_tinggal" id="tempat_tinggal" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Bersama orang tua' ? 'selected' : '' ?> value="Bersama orang tua">Bersama orang tua</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Wali' ? 'selected' : '' ?> value="Wali">Wali</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Kos' ? 'selected' : '' ?> value="Kos">Kos</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Asrama' ? 'selected' : '' ?> value="Asrama">Asrama</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Panti Asuhan' ? 'selected' : '' ?> value="Panti Asuhan">Panti Asuhan</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Pesantren' ? 'selected' : '' ?> value="Pesantren">Pesantren</option>
                                                                                        <option <?= $siswa->tempat_tinggal == 'Lainya' ? 'selected' : '' ?> value="Lainya">Lainya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Moda Transportasi</label>
                                                                                    <select name="moda_transportasi" id="moda_transportasi" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Jalan kaki' ? 'selected' : '' ?> value="Jalan kaki">Jalan kaki</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Kendaraan pribadi' ? 'selected' : '' ?> value="Kendaraan pribadi">Kendaraan pribadi</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Kendaraan Umum/angkot/Pete-pete' ? 'selected' : '' ?> value="Kendaraan Umum/angkot/Pete-pete">Kendaraan Umum/angkot/Pete-pete</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Jemputan Sekolah' ? 'selected' : '' ?> value="Jemputan Sekolah">Jemputan Sekolah</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Kereta Api' ? 'selected' : '' ?> value="Kereta Api">Kereta Api</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Ojek' ? 'selected' : '' ?> value="Ojek">Ojek</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Andong/Bendi/Sado/ Dokar/Delman/Beca' ? 'selected' : '' ?> value="Andong/Bendi/Sado/ Dokar/Delman/Beca">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Perahu penyebrangan/Rakit/Getek' ? 'selected' : '' ?> value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek</option>
                                                                                        <option <?= $siswa->moda_transportasi == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Anak Ke-</label>
                                                                                    <input type="number" class="form-control" name="anak_keberapa" value="<?= $siswa->anak_keberapa ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor KIP</label>
                                                                                    <input type="text" class="form-control" name="nomor_kip" value="<?= $siswa->nomor_kip ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama KIP</label>
                                                                                    <input type="text" class="form-control" name="nama_kip" value="<?= $siswa->nama_kip ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Lintang</label>
                                                                                    <input type="text" class="form-control" name="lintang" value="<?= $siswa->lintang ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bujur</label>
                                                                                    <input type="text" class="form-control" name="bujur" value="<?= $siswa->bujur ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor KKS</label>
                                                                                    <input type="text" class="form-control" name="nomor_kks" value="<?= $siswa->nomor_kks ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor KPS PKH</label>
                                                                                    <input type="text" class="form-control" name="nomor_kps_pkh" value="<?= $siswa->nomor_kps_pkh ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bahasa Sehari Hari</label>
                                                                                    <input type="text" class="form-control" name="bahasa" value="<?= $siswa->bahasa ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Golongan Darah</label>
                                                                                    <input type="text" class="form-control" name="golongan_darah" value="<?= $siswa->golongan_darah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Riwayat Penyakit</label>
                                                                                    <input type="text" class="form-control" name="riwayat_penyakit" value="<?= $siswa->riwayat_penyakit ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="password" value="<?= $siswa->password ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_ayah' ? ' active show' : ''; ?>" id="data_ayah" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_ayah/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Ayah</label>
                                                                                    <input type="text" class="form-control" name="nama_ayah" value="<?= $siswa->nama_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP Ayah</label>
                                                                                    <input type="number" class="form-control" name="nohp_ayah" value="<?= $siswa->nohp_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK Ayah</label>
                                                                                    <input type="number" class="form-control" name="nik_ayah" value="<?= $siswa->nik_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Lahir Ayah</label>
                                                                                    <input type="date" class="form-control" name="tgllahir_ayah" value="<?= $siswa->tgllahir_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pendidikan Ayah</label>
                                                                                    <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'Tidak sekolah' ? 'selected' : '' ?> value="Tidak sekolah">Tidak sekolah</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'Putus SD' ? 'selected' : '' ?> value="Putus SD">Putus SD</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'SD Sederajat' ? 'selected' : '' ?> value="SD Sederajat">SD Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'SMP Sederajat' ? 'selected' : '' ?> value="SMP Sederajat">SMP Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'SMA Sederajat' ? 'selected' : '' ?> value="SMA Sederajat">SMA Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'D1' ? 'selected' : '' ?> value="D1">D1</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'D2' ? 'selected' : '' ?> value="D2">D2</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'D3' ? 'selected' : '' ?> value="D3">D3</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'D4/S1' ? 'selected' : '' ?> value="D4/S1">D4/S1</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'S2' ? 'selected' : '' ?> value="S2">S2</option>
                                                                                        <option <?= $siswa->pendidikan_ayah == 'S3' ? 'selected' : '' ?> value="S3">S3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pekerjaan Ayah</label>
                                                                                    <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Tidak bekerja' ? 'selected' : '' ?> value="Tidak bekerja">Tidak bekerja</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Nelayan' ? 'selected' : '' ?> value="Nelayan">Nelayan</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Petani' ? 'selected' : '' ?> value="Petani">Petani</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Peternak' ? 'selected' : '' ?> value="Peternak">Peternak</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'PNS/TNI/POLRI' ? 'selected' : '' ?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Karyawan Swasta' ? 'selected' : '' ?> value="Karyawan Swasta">Karyawan Swasta</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Pedagang Kecil' ? 'selected' : '' ?> value="Pedagang Kecil">Pedagang Kecil</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Pedagang Besar' ? 'selected' : '' ?> value="Pedagang Besar">Pedagang Besar</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Wirausaha' ? 'selected' : '' ?> value="Wirausaha">Wirausaha</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Buruh' ? 'selected' : '' ?> value="Buruh">Buruh</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Pensiunan' ? 'selected' : '' ?> value="Pensiunan">Pensiunan</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Meninggal Dunia' ? 'selected' : '' ?> value="Meninggal Dunia">Meninggal Dunia</option>
                                                                                        <option <?= $siswa->pekerjaan_ayah == 'Lain-lain' ? 'selected' : '' ?> value="Lain-lain">Lain-lain</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Penghasilan</label>
                                                                                    <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == 'Kurang dari 500,000' ? 'selected' : '' ?> value="Kurang dari 500,000">Kurang dari 500,000</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == '500.000 - 999.9999' ? 'selected' : '' ?> value="500.000 - 999.9999">500.000 - 999.9999</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == '1 juta - 1.999.999' ? 'selected' : '' ?> value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == '2 juta - 4.999.999' ? 'selected' : '' ?> value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == '5 juta - 20 juta' ? 'selected' : '' ?> value="5 juta - 20 juta">5 juta - 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == 'lebih dari 20 juta' ? 'selected' : '' ?> value="lebih dari 20 juta">lebih dari 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_ayah == 'Tidak Berpenghasilan' ? 'selected' : '' ?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan_ayah" value="<?= $siswa->kewarganegaraan_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_ayah" value="<?= $siswa->alamat_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_ibu' ? ' active show' : ''; ?>" id="data_ibu" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_ibu/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Ibu</label>
                                                                                    <input type="text" class="form-control" name="nama_ibu" value="<?= $siswa->nama_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP Ibu</label>
                                                                                    <input type="number" class="form-control" name="nohp_ibu" value="<?= $siswa->nohp_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK Ibu</label>
                                                                                    <input type="number" class="form-control" name="nik_ibu" value="<?= $siswa->nik_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Lahir Ibu</label>
                                                                                    <input type="date" class="form-control" name="tgllahir_ibu" value="<?= $siswa->tgllahir_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pendidikan Ibu</label>
                                                                                    <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'Tidak sekolah' ? 'selected' : '' ?> value="Tidak sekolah">Tidak sekolah</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'Putus SD' ? 'selected' : '' ?> value="Putus SD">Putus SD</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'SD Sederajat' ? 'selected' : '' ?> value="SD Sederajat">SD Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'SMP Sederajat' ? 'selected' : '' ?> value="SMP Sederajat">SMP Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'SMA Sederajat' ? 'selected' : '' ?> value="SMA Sederajat">SMA Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'D1' ? 'selected' : '' ?> value="D1">D1</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'D2' ? 'selected' : '' ?> value="D2">D2</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'D3' ? 'selected' : '' ?> value="D3">D3</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'D4/S1' ? 'selected' : '' ?> value="D4/S1">D4/S1</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'S2' ? 'selected' : '' ?> value="S2">S2</option>
                                                                                        <option <?= $siswa->pendidikan_ibu == 'S3' ? 'selected' : '' ?> value="S3">S3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pekerjaan Ibu</label>
                                                                                    <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Tidak bekerja' ? 'selected' : '' ?> value="Tidak bekerja">Tidak bekerja</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Mengurus Rumah Tangga' ? 'selected' : '' ?> value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Nelayan' ? 'selected' : '' ?> value="Nelayan">Nelayan</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Petani' ? 'selected' : '' ?> value="Petani">Petani</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Peternak' ? 'selected' : '' ?> value="Peternak">Peternak</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'PNS/TNI/POLRI' ? 'selected' : '' ?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Karyawan Swasta' ? 'selected' : '' ?> value="Karyawan Swasta">Karyawan Swasta</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Pedagang Kecil' ? 'selected' : '' ?> value="Pedagang Kecil">Pedagang Kecil</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Pedagang Besar' ? 'selected' : '' ?> value="Pedagang Besar">Pedagang Besar</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Wirausaha' ? 'selected' : '' ?> value="Wirausaha">Wirausaha</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Buruh' ? 'selected' : '' ?> value="Buruh">Buruh</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Pensiunan' ? 'selected' : '' ?> value="Pensiunan">Pensiunan</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Meninggal Dunia' ? 'selected' : '' ?> value="Meninggal Dunia">Meninggal Dunia</option>
                                                                                        <option <?= $siswa->pekerjaan_ibu == 'Lain-lain' ? 'selected' : '' ?> value="Lain-lain">Lain-lain</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Penghasilan</label>
                                                                                    <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == 'Kurang dari 500,000' ? 'selected' : '' ?> value="Kurang dari 500,000">Kurang dari 500,000</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == '500.000 - 999.9999' ? 'selected' : '' ?> value="500.000 - 999.9999">500.000 - 999.9999</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == '1 juta - 1.999.999' ? 'selected' : '' ?> value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == '2 juta - 4.999.999' ? 'selected' : '' ?> value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == '5 juta - 20 juta' ? 'selected' : '' ?> value="5 juta - 20 juta">5 juta - 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == 'lebih dari 20 juta' ? 'selected' : '' ?> value="lebih dari 20 juta">lebih dari 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_ibu == 'Tidak Berpenghasilan' ? 'selected' : '' ?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan_ibu" value="<?= $siswa->kewarganegaraan_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_ibu" value="<?= $siswa->alamat_ibu ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_wali' ? ' active show' : ''; ?>" id="data_wali" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_wali/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Wali</label>
                                                                                    <input type="text" class="form-control" name="nama_wali" value="<?= $siswa->nama_wali ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP Wali</label>
                                                                                    <input type="number" class="form-control" name="nohp_wali" value="<?= $siswa->nohp_wali ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK Wali</label>
                                                                                    <input type="number" class="form-control" name="nik_wali" value="<?= $siswa->nik_wali ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Lahir Wali</label>
                                                                                    <input type="date" class="form-control" name="tgllahir_wali" value="<?= $siswa->tgllahir_wali ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pendidikan Wali</label>
                                                                                    <select name="pendidikan_wali" id="pendidikan_wali" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'Tidak sekolah' ? 'selected' : '' ?> value="Tidak sekolah">Tidak sekolah</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'Putus SD' ? 'selected' : '' ?> value="Putus SD">Putus SD</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'SD Sederajat' ? 'selected' : '' ?> value="SD Sederajat">SD Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'SMP Sederajat' ? 'selected' : '' ?> value="SMP Sederajat">SMP Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'SMA Sederajat' ? 'selected' : '' ?> value="SMA Sederajat">SMA Sederajat</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'D1' ? 'selected' : '' ?> value="D1">D1</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'D2' ? 'selected' : '' ?> value="D2">D2</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'D3' ? 'selected' : '' ?> value="D3">D3</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'D4/S1' ? 'selected' : '' ?> value="D4/S1">D4/S1</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'S2' ? 'selected' : '' ?> value="S2">S2</option>
                                                                                        <option <?= $siswa->pendidikan_wali == 'S3' ? 'selected' : '' ?> value="S3">S3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pekerjaan Wali</label>
                                                                                    <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Tidak bekerja' ? 'selected' : '' ?> value="Tidak bekerja">Tidak bekerja</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Nelayan' ? 'selected' : '' ?> value="Nelayan">Nelayan</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Petani' ? 'selected' : '' ?> value="Petani">Petani</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Peternak' ? 'selected' : '' ?> value="Peternak">Peternak</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'PNS/TNI/POLRI' ? 'selected' : '' ?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Karyawan Swasta' ? 'selected' : '' ?> value="Karyawan Swasta">Karyawan Swasta</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Pedagang Kecil' ? 'selected' : '' ?> value="Pedagang Kecil">Pedagang Kecil</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Pedagang Besar' ? 'selected' : '' ?> value="Pedagang Besar">Pedagang Besar</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Wirausaha' ? 'selected' : '' ?> value="Wirausaha">Wirausaha</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Buruh' ? 'selected' : '' ?> value="Buruh">Buruh</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Pensiunan' ? 'selected' : '' ?> value="Pensiunan">Pensiunan</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Meninggal Dunia' ? 'selected' : '' ?> value="Meninggal Dunia">Meninggal Dunia</option>
                                                                                        <option <?= $siswa->pekerjaan_wali == 'Lain-lain' ? 'selected' : '' ?> value="Lain-lain">Lain-lain</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Penghasilan</label>
                                                                                    <select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->penghasilan_wali == 'Kurang dari 500,000' ? 'selected' : '' ?> value="Kurang dari 500,000">Kurang dari 500,000</option>
                                                                                        <option <?= $siswa->penghasilan_wali == '500.000 - 999.9999' ? 'selected' : '' ?> value="500.000 - 999.9999">500.000 - 999.9999</option>
                                                                                        <option <?= $siswa->penghasilan_wali == '1 juta - 1.999.999' ? 'selected' : '' ?> value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_wali == '2 juta - 4.999.999' ? 'selected' : '' ?> value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                                                                                        <option <?= $siswa->penghasilan_wali == '5 juta - 20 juta' ? 'selected' : '' ?> value="5 juta - 20 juta">5 juta - 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_wali == 'lebih dari 20 juta' ? 'selected' : '' ?> value="lebih dari 20 juta">lebih dari 20 juta</option>
                                                                                        <option <?= $siswa->penghasilan_wali == 'Tidak Berpenghasilan' ? 'selected' : '' ?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_ayah" value="<?= $siswa->alamat_ayah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Hubungan Keluarga</label>
                                                                                    <input type="text" class="form-control" name="hubungan_keluarga_wali" value="<?= $siswa->hubungan_keluarga_wali ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_periodik' ? ' active show' : ''; ?>" id="data_periodik" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_periodik/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tinggi Badan (cm)</label>
                                                                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $siswa->tinggi_badan ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Berat Badan (kg)</label>
                                                                                    <input type="text" class="form-control" name="berat_badan" value="<?= $siswa->berat_badan ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jarak Tempat Tinggal (km)</label>
                                                                                    <input type="text" class="form-control" name="jarak_tempat_tinggal" value="<?= $siswa->jarak_tempat_tinggal ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Waktu Tempuh Kesekolah</label>
                                                                                    <input type="text" class="form-control" name="waktu_tempuh_kesekolah" value="<?= $siswa->waktu_tempuh_kesekolah ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jumlah Saudara Kandung</label>
                                                                                    <input type="number" class="form-control" name="jumlah_saudara_kandung" value="<?= $siswa->jumlah_saudara_kandung ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'prestasi' ? ' active show' : ''; ?>" id="prestasi" role="tabpanel">
                                                                    <div class="m-2">
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#prestasi_modal">
                                                                            Tambah Prestasi
                                                                        </button>
                                                                        <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table id="myTable" class="table table-hover display nowrap dataTable no-footer dtr-inline collapsed" width="100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle">Jenis Prestasi</th>
                                                                                    <th class="text-midle">Tingkat Prestasi</th>
                                                                                    <th class="text-midle">Nama Prestasi</th>
                                                                                    <th class="text-midle">Tahun</th>
                                                                                    <th class="text-midle">Penyelenggara</th>
                                                                                    <th class="text-midle">Peringkat</th>
                                                                                    <th class="text-midle">Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($prestasi as $no => $item) : ?>
                                                                                    <tr>
                                                                                        <form action="<?= base_url('admin/siswa/update_prestasi/' . $item->id) ?>" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td>
                                                                                                <select name="jenis_prestasi" id="jenis_prestasi" class="form-control-sm">
                                                                                                    <option value="">Pilih Disini</option>
                                                                                                    <option <?= $item->jenis_prestasi == 'Sains' ? 'selected' : '' ?> value="Sains">Sains</option>
                                                                                                    <option <?= $item->jenis_prestasi == 'Seni' ? 'selected' : '' ?> value="Seni">Seni</option>
                                                                                                    <option <?= $item->jenis_prestasi == 'Olahraga' ? 'selected' : '' ?> value="Olahraga">Olahraga</option>
                                                                                                    <option <?= $item->jenis_prestasi == 'LKS' ? 'selected' : '' ?> value="LKS">LKS</option>
                                                                                                    <option <?= $item->jenis_prestasi == 'Lain-lain' ? 'selected' : '' ?> value="Lain-lain">Lain-lain</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td>
                                                                                                <select name="tingkat_prestasi" id="tingkat_prestasi" class="form-control-sm">
                                                                                                    <option value="">Pilih Disini</option>
                                                                                                    <option <?= $item->tingkat_prestasi == 'Sekolah' ? 'selected' : '' ?> value="Sekolah">Sekolah</option>
                                                                                                    <option <?= $item->tingkat_prestasi == 'Kecamatan' ? 'selected' : '' ?> value="Kecamatan">Kecamatan</option>
                                                                                                    <option <?= $item->tingkat_prestasi == 'Kabupaten' ? 'selected' : '' ?> value="Kabupaten">Kabupaten</option>
                                                                                                    <option <?= $item->tingkat_prestasi == 'Nasional' ? 'selected' : '' ?> value="Nasional">Nasional</option>
                                                                                                    <option <?= $item->tingkat_prestasi == 'Internasional' ? 'selected' : '' ?> value="Internasional">Internasional</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nama_prestasi" value="<?= $item->nama_prestasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="tahun" value="<?= $item->tahun ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="penyelenggara" value="<?= $item->penyelenggara ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="peringkat" value="<?= $item->peringkat ?>"></td>
                                                                                            <td style="width: 15%;">
                                                                                                <button type="submit" class="btn btn-success btn-small"><i class="fas fa-save"></i> Simpan</button>
                                                                                                <a href="<?= base_url('admin/siswa/delete_prestasi/' . $item->id) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                                                            </td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'beasiswa' ? ' active show' : ''; ?>" id="beasiswa" role="tabpanel">
                                                                    <div class="m-2">
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#beasiswa_modal">
                                                                            Tambah Beasiswa
                                                                        </button>
                                                                        <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table id="myTable2" class="table table-hover display nowrap dataTable no-footer dtr-inline collapsed" width="100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle">Jenis Beasiswa</th>
                                                                                    <th class="text-midle">Keterangan</th>
                                                                                    <th class="text-midle">Tanggal Mulai</th>
                                                                                    <th class="text-midle">Tanggal Selesai</th>
                                                                                    <th class="text-midle">Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($beasiswa as $no => $item) : ?>
                                                                                    <tr>
                                                                                        <form action="<?= base_url('admin/siswa/update_beasiswa/' . $item->id) ?>" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td>
                                                                                                <select name="jenis_beasiswa" id="jenis_beasiswa" class="form-control-sm">
                                                                                                    <option value="">Pilih Disini</option>
                                                                                                    <option <?= $item->jenis_beasiswa == 'Anak Berprestasi' ? 'selected' : '' ?> value="Anak Berprestasi">Anak Berprestasi</option>
                                                                                                    <option <?= $item->jenis_beasiswa == 'Pendidikan' ? 'selected' : '' ?> value="Pendidikan">Pendidikan</option>
                                                                                                    <option <?= $item->jenis_beasiswa == 'Unggulan' ? 'selected' : '' ?> value="Unggulan">Unggulan</option>
                                                                                                    <option <?= $item->jenis_beasiswa == 'Anak Kurang Mampu' ? 'selected' : '' ?> value="Anak Kurang Mampu">Anak Kurang Mampu</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="keterangan" value="<?= $item->keterangan ?>"></td>
                                                                                            <td><input type="date" class="form-control form-control-sm" name="tanggal_mulai" value="<?= $item->tanggal_mulai ?>"></td>
                                                                                            <td><input type="date" class="form-control form-control-sm" name="tanggal_selesai" value="<?= $item->tanggal_selesai ?>"></td>
                                                                                            <td style="width: 15%;">
                                                                                                <button type="submit" class="btn btn-success btn-small"><i class="fas fa-save"></i> Simpan</button>
                                                                                                <a href="<?= base_url('admin/siswa/delete_beasiswa/' . $item->id) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                                                            </td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'registrasi_pd' ? ' active show' : ''; ?>" id="registrasi_pd" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_registrasi_pd/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis Pendaftaran</label>
                                                                                    <select name="jenis_pendaftaran" id="jenis_pendaftaran" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->jenis_pendaftaran == 'Siswa Baru' ? 'selected' : '' ?> value="Siswa Baru">Siswa Baru</option>
                                                                                        <option <?= $siswa->jenis_pendaftaran == 'Pindahan' ? 'selected' : '' ?> value="Pindahan">Pindahan</option>
                                                                                        <option <?= $siswa->jenis_pendaftaran == 'Kembali Bersekolah' ? 'selected' : '' ?> value="Kembali Bersekolah">Kembali Bersekolah</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Induk</label>
                                                                                    <input type="text" class="form-control" name="no_induk" value="<?= $siswa->no_induk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NISN</label>
                                                                                    <input type="text" class="form-control" name="nisn" value="<?= $siswa->nisn ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Diterima di kelas</label>
                                                                                    <input type="text" class="form-control" name="diterima_di_kelas" value="<?= $siswa->diterima_di_kelas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Masuk</label>
                                                                                    <input type="date" class="form-control" name="tgl_masuk_sekolah" value="<?= $siswa->tgl_masuk_sekolah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Asal Sekolah</label>
                                                                                    <input type="text" class="form-control" name="asal_sekolah" value="<?= $siswa->asal_sekolah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Asal Sekolah (Mutasi)</label>
                                                                                    <input type="text" class="form-control" name="asal_sekolah_pd_masuk" value="<?= $siswa->asal_sekolah_pd_masuk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Peserta Ujian</label>
                                                                                    <input type="text" class="form-control" name="nomor_peserta_ujian" value="<?= $siswa->nomor_peserta_ujian ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Seri Ijazah SMP/MTs</label>
                                                                                    <input type="text" class="form-control" name="nomor_seri_ijazah" value="<?= $siswa->nomor_seri_ijazah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Ijasah SMP/MTs</label>
                                                                                    <input type="date" class="form-control" name="tanggal_ijasah" value="<?= $siswa->tanggal_ijasah ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'registrasi_pd_keluar' ? ' active show' : ''; ?>" id="registrasi_pd_keluar" role="tabpanel">
                                                                    <form action="<?= base_url('admin/siswa/save_registrasi_pd_keluar/' . $siswa->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Keluar Karena</label>
                                                                                    <select name="keluar_karena" id="keluar_karena" class="form-control">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $siswa->keluar_karena == 'SLulus' ? 'selected' : '' ?> value="Lulus">Lulus</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Mutasi' ? 'selected' : '' ?> value="Mutasi">Mutasi</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Dikeluarkan' ? 'selected' : '' ?> value="Dikeluarkan">Dikeluarkan</option>
                                                                                        <option <?= $siswa->keluar_karena == ' Mengundurkan Diri' ? 'selected' : '' ?> value=" Mengundurkan Diri"> Mengundurkan Diri</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Putus Sekolah' ? 'selected' : '' ?> value="Putus Sekolah">Putus Sekolah</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Wafat' ? 'selected' : '' ?> value="Wafat">Wafat</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Hilang' ? 'selected' : '' ?> value="Hilang">Hilang</option>
                                                                                        <option <?= $siswa->keluar_karena == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Keluar</label>
                                                                                    <input type="date" class="form-control" name="tanggal_keluar" value="<?= $siswa->tanggal_keluar ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alasan Keluar</label>
                                                                                    <input type="text" class="form-control" name="alasan_keluar" value="<?= $siswa->alasan_keluar ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Sekolah Tujuan</label>
                                                                                    <input type="text" class="form-control" name="sekolah_tujuan" value="<?= $siswa->sekolah_tujuan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Dari Kelas</label>
                                                                                    <input type="text" class="form-control" name="dari_kelas" value="<?= $siswa->dari_kelas ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat Sekolah Tujuan</label>
                                                                                    <input type="text" class="form-control" name="alamat_sekolah_tujuan" value="<?= $siswa->alamat_sekolah_tujuan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NPSN</label>
                                                                                    <input type="text" class="form-control" name="npsn" value="<?= $siswa->npsn ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tahun Tamat</label>
                                                                                    <input type="text" class="form-control" name="tahun_tamat" value="<?= $siswa->tahun_tamat ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Seri Ijasah SMK</label>
                                                                                    <input type="text" class="form-control" name="nomor_seri_ijasah" value="<?= $siswa->nomor_seri_ijasah ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Ijasah SMK</label>
                                                                                    <input type="date" class="form-control" name="tanggal_ijasah_pd_keluar" value="<?= $siswa->tanggal_ijasah_pd_keluar ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Wirausaha</label>
                                                                                    <input type="text" class="form-control" name="wirausaha" value="<?= $siswa->wirausaha ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bekerja di</label>
                                                                                    <input type="text" class="form-control" name="bekerja_di" value="<?= $siswa->bekerja_di ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Melanjutkan ke</label>
                                                                                    <input type="text" class="form-control" name="melanjutkan_ke" value="<?= $siswa->melanjutkan_ke ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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

                    <!-- Modal Prestasi -->
                    <div class="modal fade" id="prestasi_modal" tabindex="-1" role="dialog" aria-labelledby="prestasi_modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="prestasi_modalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/siswa/save_prestasi/' . $siswa->id) ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Prestasi</label>
                                        <select name="jenis_prestasi" id="jenis_prestasi" class="form-control">
                                            <option value="Sains">Sains</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="LKS">LKS</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tingkat Prestasi</label>
                                        <select name="tingkat_prestasi" id="tingkat_prestasi" class="form-control">
                                            <option value="Sekolah">Sekolah</option>
                                            <option value="Kecamatan">Kecamatan</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                            <option value="Nasional">Nasional</option>
                                            <option value="Internasional">Internasional</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Prestasi</label>
                                        <input type="text" class="form-control" name="nama_prestasi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tahun</label>
                                        <input type="text" class="form-control" name="tahun">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Penyelenggara</label>
                                        <input type="text" class="form-control" name="penyelenggara">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Peringkat</label>
                                        <input type="text" class="form-control" name="peringkat">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Beasiswa -->
                    <div class="modal fade" id="beasiswa_modal" tabindex="-1" role="dialog" aria-labelledby="beasiswa_modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="beasiswa_modalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/siswa/save_beasiswa/' . $siswa->id) ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Beasiswa</label>
                                        <select name="jenis_beasiswa" id="jenis_beasiswa" class="form-control">
                                            <option value="Anak Berprestasi">Anak Berprestasi</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Unggulan">Unggulan</option>
                                            <option value="Anak Kurang Mampu">Anak Kurang Mampu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tanggal_mulai">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Selesai</label>
                                        <input type="date" class="form-control" name="tanggal_selesai">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>