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
                                                                    <a class="nav-link <?= $page == 'data_pribadi' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_pribadi" role="tab" aria-selected="false">Pribadi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_kepegawaian' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_kepegawaian" role="tab" aria-selected="false">Kepegawaian</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_penugasan' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_penugasan" role="tab" aria-selected="true">Penugasan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'riwayat_sertifikasi' ? 'active show' : ''; ?>" data-toggle="tab" href="#riwayat_sertifikasi" role="tab" aria-selected="true">Riwayat Sertifikasi</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'riwayat_pendidikan' ? 'active show' : ''; ?>" data-toggle="tab" href="#riwayat_pendidikan" role="tab" aria-selected="true">Riwayat Pendidikan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'tugas_tambahan' ? 'active show' : ''; ?>" data-toggle="tab" href="#tugas_tambahan" role="tab" aria-selected="true">Tugas Tambahan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link <?= $page == 'data_inpasing' ? 'active show' : ''; ?>" data-toggle="tab" href="#data_inpasing" role="tab" aria-selected="true">inpasing</a>
                                                                </li>
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content tabs card-block">
                                                                <div class="tab-pane<?= $page == 'data_identitas' ? ' active show' : ''; ?>" id="data_identitas" role="tabpanel">
                                                                    <form action="<?= base_url('admin/ptk/save_identitas/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nama_ptk" value="<?= $ptk->nama_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nik_ptk" value="<?= $ptk->nik_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" name="jenis_kelamin_ptk" id="jenis_kelamin_ptk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->jenis_kelamin_ptk == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                                                                        <option <?= $ptk->jenis_kelamin_ptk == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="tempat_lahir_ptk" value="<?= $ptk->tempat_lahir_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                                                                    <input type="date" class="form-control" name="tanggal_lahir_ptk" value="<?= $ptk->tanggal_lahir_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="nama_ibu_ptk" value="<?= $ptk->nama_ibu_ptk ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Username <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="username" value="<?= $ptk->username ?>" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                                                                    <input type="text" class="form-control" name="password" value="<?= $ptk->password ?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_pribadi' ? ' active show' : ''; ?>" id="data_pribadi" role="tabpanel">
                                                                    <form action="<?= base_url('admin/ptk/save_pribadi/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Alamat</label>
                                                                                    <input type="text" class="form-control" name="alamat_ptk" value="<?= $ptk->alamat_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RT</label>
                                                                                    <input type="text" class="form-control" name="rt_ptk" value="<?= $ptk->rt_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">RW</label>
                                                                                    <input type="text" class="form-control" name="rw_ptk" value="<?= $ptk->rw_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Dusun</label>
                                                                                    <input type="text" class="form-control" name="dusun_ptk" value="<?= $ptk->dusun_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Desa</label>
                                                                                    <input type="text" class="form-control" name="desa_ptk" value="<?= $ptk->desa_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kecamatan</label>
                                                                                    <input type="text" class="form-control" name="kecamatan_ptk" value="<?= $ptk->kecamatan_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Lintang</label>
                                                                                    <input type="text" class="form-control" name="lintang_ptk" value="<?= $ptk->lintang_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bujur</label>
                                                                                    <input type="text" class="form-control" name="bujur_ptk" value="<?= $ptk->bujur_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kode Pos</label>
                                                                                    <input type="text" class="form-control" name="kode_pos_ptk" value="<?= $ptk->kode_pos_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor HP</label>
                                                                                    <input type="number" class="form-control" name="nomor_hp_ptk" value="<?= $ptk->nomor_hp_ptk ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Agama</label>
                                                                                    <select class="form-control" name="agama_ptk" id="agama_ptk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Islam' ? 'selected' : '' ?> value="Islam">Islam</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Kristen/Protenstan' ? 'selected' : '' ?> value="Kristen/Protenstan">Kristen/Protenstan</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Katholik' ? 'selected' : '' ?> value="Katholik">Khatolik</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Hindu' ? 'selected' : '' ?> value="Hindu">Hindu</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Budha' ? 'selected' : '' ?> value="Budha">Budha</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Khong Hu Chu' ? 'selected' : '' ?> value="Khong Hu Chu">Khong Hu Chu</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Kepercayaan Kpd Tuhan YME' ? 'selected' : '' ?> value="Kepercayaan Kpd Tuhan YME">Kepercayaan Kpd Tuhan YME</option>
                                                                                        <option <?= $ptk->agama_ptk == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NPWP</label>
                                                                                    <input type="number" class="form-control" name="npwp" value="<?= $ptk->npwp ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Wajib Pajak</label>
                                                                                    <input type="text" class="form-control" name="nama_wajib_pajak" value="<?= $ptk->nama_wajib_pajak ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Kewarganegaraan</label>
                                                                                    <input type="text" class="form-control" name="kewarganegaraan_ptk" value="<?= $ptk->kewarganegaraan_ptk ?>" placeholder="contoh : INDONESIA">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Perkawinan</label>
                                                                                    <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Kawin' ? 'selected' : '' ?> value="Kawin">Kawin</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Belum Kawin' ? 'selected' : '' ?> value="Belum Kawin">Belum Kawin</option>
                                                                                        <option <?= $ptk->status_perkawinan == 'Janda / Duda' ? 'selected' : '' ?> value="Janda / Duda">Janda / Duda</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nama Suami / Isteri</label>
                                                                                    <input type="text" class="form-control" name="nama_suami_isteri" value="<?= $ptk->nama_suami_isteri ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pekerjaan Suami / Isteri</label>
                                                                                    <input type="text" class="form-control" name="pekerjaan_suami_isteri" value="<?= $ptk->pekerjaan_suami_isteri ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_kepegawaian' ? ' active show' : ''; ?>" id="data_kepegawaian" role="tabpanel">
                                                                    <form action="<?= base_url('admin/ptk/save_kepegawaian/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Kepegawaian</label>
                                                                                    <select class="form-control" name="status_kepegawaian" id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS' ? 'selected' : '' ?> value="PNS">PNS</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS Diperbantukan' ? 'selected' : '' ?> value="PNS Diperbantukan">PNS Diperbantukan</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'PNS DEPAG' ? 'selected' : '' ?> value="PNS DEPAG">PNS DEPAG</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTY/PTY' ? 'selected' : '' ?> value="GTY/PTY">GTY/PTY</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTT/PTT Provinsi' ? 'selected' : '' ?> value="GTT/PTT Provinsi">GTT/PTT Provinsi</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'GTT/PTT Kabupaten/Kota' ? 'selected' : '' ?> value="GTT/PTT Kabupaten/Kota">GTT/PTT Kabupaten/Kota</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Guru Bantu Pusat' ? 'selected' : '' ?> value="Guru Bantu Pusat">Guru Bantu Pusat</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Guru Honor Sekolah' ? 'selected' : '' ?> value="Guru Honor Sekolah">Guru Honor Sekolah</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'Tenaga Honor Sekolah' ? 'selected' : '' ?> value="Tenaga Honor Sekolah">Tenaga Honor Sekolah</option>
                                                                                        <option <?= $ptk->status_kepegawaian == 'CPNS' ? 'selected' : '' ?> value="CPNS">CPNS</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Induk Yayasan</label>
                                                                                    <input type="text" class="form-control" name="niy" value="<?= $ptk->niy ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">NUPTK</label>
                                                                                    <input type="text" class="form-control" name="nuptk" value="<?= $ptk->nuptk ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Jenis PTK</label>
                                                                                    <select class="form-control" name="jenis_ptk" id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Kelas ' ? 'selected' : '' ?> value="Guru Kelas ">Guru Kelas </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Mata Pelajaran ' ? 'selected' : '' ?> value="Guru Mata Pelajaran ">Guru Mata Pelajaran </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru BK ' ? 'selected' : '' ?> value="Guru BK ">Guru BK </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Inklusi ' ? 'selected' : '' ?> value="Guru Inklusi ">Guru Inklusi </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Tenaga Administrasi Sekolah' ? 'selected' : '' ?> value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Pendamping ' ? 'selected' : '' ?> value="Guru Pendamping ">Guru Pendamping </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru Magang ' ? 'selected' : '' ?> value="Guru Magang ">Guru Magang </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Guru TIK ' ? 'selected' : '' ?> value="Guru TIK ">Guru TIK </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Kepala Sekolah ' ? 'selected' : '' ?> value="Kepala Sekolah ">Kepala Sekolah </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Laboran ' ? 'selected' : '' ?> value="Laboran ">Laboran </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Pustakawan ' ? 'selected' : '' ?> value="Pustakawan ">Pustakawan </option>
                                                                                        <option <?= $ptk->jenis_ptk == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor SK Pengangkatan</label>
                                                                                    <input type="text" class="form-control" name="sk_pengangkatan" value="<?= $ptk->sk_pengangkatan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT Pengangkatan</label>
                                                                                    <input type="date" class="form-control" name="tmt_pengangkatan" value="<?= $ptk->tmt_pengangkatan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Lembaga Pengangkatan</label>
                                                                                    <select class="form-control" name="lembaga_pengangkat" id="">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Pusat' ? 'selected' : '' ?> value="Pemerintah Pusat">Pemerintah Pusat</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Provinsi' ? 'selected' : '' ?> value="Pemerintah Provinsi">Pemerintah Provinsi</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Pemerintah Kab/Kota' ? 'selected' : '' ?> value="Pemerintah Kab/Kota">Pemerintah Kab/Kota</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Ketua yaysan' ? 'selected' : '' ?> value="Ketua yaysan">Ketua yaysan</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Kepala Sekolah' ? 'selected' : '' ?> value="Kepala Sekolah">Kepala Sekolah</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Komite Sekolah' ? 'selected' : '' ?> value="Komite Sekolah">Komite Sekolah</option>
                                                                                        <option <?= $ptk->lembaga_pengangkat == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_penugasan' ? ' active show' : ''; ?>" id="data_penugasan" role="tabpanel">
                                                                    <form action="<?= base_url('admin/ptk/save_penugasan/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor Surat Tugas</label>
                                                                                    <input type="number" class="form-control" name="nomr_surat_tugas" value="<?= $ptk->nomr_surat_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal Surat Tugas</label>
                                                                                    <input type="date" class="form-control" name="tanggal_surat_tugas" value="<?= $ptk->tanggal_surat_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT Tugas</label>
                                                                                    <input type="date" class="form-control" name="tmt_tugas" value="<?= $ptk->tmt_tugas ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Status Sekolah Induk</label>
                                                                                    <select class="form-control" name="status_sekolah_induk" id="status_sekolah_induk">
                                                                                        <option value="">Pilih Disini</option>
                                                                                        <option <?= $ptk->status_sekolah_induk == 'Ya' ? 'Ya' : '' ?> value="Ya">Ya</option>
                                                                                        <option <?= $ptk->status_sekolah_induk == 'Tidak' ? 'Tidak' : '' ?> value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-secondary btn-sm">Kembali</a>
                                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'riwayat_sertifikasi' ? ' active show' : ''; ?>" id="riwayat_sertifikasi" role="tabpanel">
                                                                    <div class="m-2">
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#riwayat_sertifikasi_modal">
                                                                            Tambah Riwayat Sertifikasi
                                                                        </button>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table id="myTable" class="table table-hover table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th class="text-midle">Jenis Sertifikasi</th>
                                                                                    <th class="text-midle">Nomor Sertifikasi</th>
                                                                                    <th class="text-midle">Tahun Sertifikasi</th>
                                                                                    <th class="text-midle">Bidang Studi</th>
                                                                                    <th class="text-midle">NRG</th>
                                                                                    <th class="text-midle">Nomor Peserta</th>
                                                                                    <th class="text-midle">Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php foreach ($riwayat_sertifikasi as $no => $rs) : ?>
                                                                                    <tr>
                                                                                        <form action="<?= base_url('admin/ptk/update_rs/' . $rs->id) ?>" method="POST">
                                                                                            <td><?= $no + 1; ?></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="jenis_sertifikasi" value="<?= $rs->jenis_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nomor_sertifikasi" value="<?= $rs->nomor_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="thn_sertifikasi" value="<?= $rs->thn_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="bidang_studi_sertifikasi" value="<?= $rs->bidang_studi_sertifikasi ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nrg" value="<?= $rs->nrg ?>"></td>
                                                                                            <td><input type="text" class="form-control form-control-sm" name="nomor_peserta" value="<?= $rs->nomor_peserta ?>"></td>
                                                                                            <td style="width: 20%;">
                                                                                                <button type="submit" class="btn btn-success btn-small"><i class="fas fa-save"></i> Simpan</button>
                                                                                                <a href="<?= base_url('admin/ptk/delete_rs/' . $rs->id) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                                                            </td>
                                                                                        </form>
                                                                                    </tr>
                                                                                <?php endforeach ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'riwayat_pendidikan' ? ' active show' : ''; ?>" id="riwayat_pendidikan" role="tabpanel">
                                                                    <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet
                                                                        felis amet.</p>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'tugas_tambahan' ? ' active show' : ''; ?>" id="tugas_tambahan" role="tabpanel">
                                                                    <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet
                                                                        felis amet.</p>
                                                                </div>
                                                                <div class="tab-pane<?= $page == 'data_inpasing' ? ' active show' : ''; ?>" id="data_inpasing" role="tabpanel">
                                                                    <form action="<?= base_url('admin/ptk/save_inpasing/' . $ptk->id) ?>" method="POST">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Pangkat Golongan</label>
                                                                                    <input type="text" class="form-control" name="pangkat_golongan" value="<?= $ptk->pangkat_golongan ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Nomor SK Inpasing</label>
                                                                                    <input type="number" class="form-control" name="no_sk_inpasing" value="<?= $ptk->no_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Tanggal SK Inpasing</label>
                                                                                    <input type="date" class="form-control" name="tgl_sk_inpasing" value="<?= $ptk->tgl_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">TMT SK Inpasing</label>
                                                                                    <input type="date" class="form-control" name="tmt_sk_inpasing" value="<?= $ptk->tmt_sk_inpasing ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Angka Kredit</label>
                                                                                    <input type="text" class="form-control" name="angka_kredit" value="<?= $ptk->angka_kredit ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Masa Kerja Tahun</label>
                                                                                    <input type="text" class="form-control" name="masa_kerja_tahun" value="<?= $ptk->masa_kerja_tahun ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Masa Kerja Bulan</label>
                                                                                    <input type="text" class="form-control" name="masa_kerja_bulan" value="<?= $ptk->masa_kerja_bulan ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-6 text-right">
                                                                                <div class="form-group">
                                                                                    <a href="<?= base_url('admin/ptk') ?>" class="btn btn-secondary btn-sm">Kembali</a>
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

                    <!-- Modal Riwayat Sertifikasi -->
                    <div class="modal fade" id="riwayat_sertifikasi_modal" tabindex="-1" role="dialog" aria-labelledby="riwayat_sertifikasi_modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="riwayat_sertifikasi_modalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/ptk/save_rs/' . $ptk->id) ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Sertifikasi</label>
                                        <input type="text" class="form-control" name="jenis_sertifikasi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Sertifikasi</label>
                                        <input type="number" class="form-control" name="nomor_sertifikasi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tahun Sertifikasi</label>
                                        <input type="number" min="1900" max="2099" step="1" class="form-control" name="thn_sertifikasi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Bidang Studi Sertifikasi</label>
                                        <input type="text" class="form-control" name="bidang_studi_sertifikasi">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">NRG</label>
                                        <input type="text" class="form-control" name="nrg">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Peserta</label>
                                        <input type="number" class="form-control" name="nomor_peserta">
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