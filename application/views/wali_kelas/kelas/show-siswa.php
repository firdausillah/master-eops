<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<div class="col-lg-12">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs  tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="data_identitas_nav" data-toggle="tab" href="#data_identitas" role="tab" aria-selected="false">Identitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_ayah_nav" data-toggle="tab" href="#data_ayah" role="tab" aria-selected="false">Data Ayah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_ibu_nav" data-toggle="tab" href="#data_ibu" role="tab" aria-selected="false">Data Ibu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_wali_nav" data-toggle="tab" href="#data_wali" role="tab" aria-selected="true">Data Wali</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="data_periodik_nav" data-toggle="tab" href="#data_periodik" role="tab" aria-selected="true">Periodik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="registrasi_pd_nav" data-toggle="tab" href="#registrasi_pd" role="tab" aria-selected="true">Registrasi PD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pendaftaran_keluar_nav" data-toggle="tab" href="#pendaftaran_keluar" role="tab" aria-selected="true">Pendaftaran Keluar</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content tabs card-block mt-3">
        <div class="tab-pane active show" id="data_identitas" role="tabpanel">
            <form class="save_identitas" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" readonly value="<?= $siswa->nama ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" readonly id="jk">
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
                            <label class="form-label">NISN</label>
                            <input type="number" class="form-control" readonly value="<?= $siswa->nisn ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">NIK <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" readonly value="<?= $siswa->nik_siswa ?>">
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
                            <input type="text" class="form-control" readonly value="<?= $siswa->tempatlahir_siswa ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Tangal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" readonly value="<?= $siswa->tgllahir_siswa ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nomor Akte Kelahiran</label>
                            <input type="number" class="form-control" name="noakte_lahir" value="<?= $siswa->noakte_lahir ?>">
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
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">RT</label>
                            <input type="text" class="form-control" name="rt" value="<?= $siswa->rt ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">RW</label>
                            <input type="text" class="form-control" name="rw" value="<?= $siswa->rw ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Dusun</label>
                            <input type="text" class="form-control" name="dusun" value="<?= $siswa->dusun ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Desa</label>
                            <input type="text" class="form-control" name="desa" value="<?= $siswa->desa ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" name="kec" value="<?= $siswa->kec ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" name="kab" value="<?= $siswa->kab ?>">
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
                            <input type="number" class="form-control" readonly value="<?= $siswa->nomor_kip ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nama KIP</label>
                            <input type="text" class="form-control" readonly value="<?= $siswa->nama_kip ?>">
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
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="password" value="<?= $siswa->password ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a class="btn btn-success btn-sm text-light tombol_simpan_save_identitas">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="data_ayah" role="tabpanel">
            <form class="save_ayah" method=" POST">
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
                                <option <?= $siswa->tempat_tinggal == 'Tidak bekerja' ? 'selected' : '' ?> value="Tidak bekerja">Tidak bekerja</option>
                                <option <?= $siswa->tempat_tinggal == 'Nelayan' ? 'selected' : '' ?> value="Nelayan">Nelayan</option>
                                <option <?= $siswa->tempat_tinggal == 'Petani' ? 'selected' : '' ?> value="Petani">Petani</option>
                                <option <?= $siswa->tempat_tinggal == 'Peternak' ? 'selected' : '' ?> value="Peternak">Peternak</option>
                                <option <?= $siswa->tempat_tinggal == 'PNS/TNI/POLRI' ? 'selected' : '' ?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                <option <?= $siswa->tempat_tinggal == 'Karyawan Swasta' ? 'selected' : '' ?> value="Karyawan Swasta">Karyawan Swasta</option>
                                <option <?= $siswa->tempat_tinggal == 'Pedagang Kecil' ? 'selected' : '' ?> value="Pedagang Kecil">Pedagang Kecil</option>
                                <option <?= $siswa->tempat_tinggal == 'Pedagang Besar' ? 'selected' : '' ?> value="Pedagang Besar">Pedagang Besar</option>
                                <option <?= $siswa->tempat_tinggal == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                <option <?= $siswa->tempat_tinggal == 'Wirausaha' ? 'selected' : '' ?> value="Wirausaha">Wirausaha</option>
                                <option <?= $siswa->tempat_tinggal == 'Buruh' ? 'selected' : '' ?> value="Buruh">Buruh</option>
                                <option <?= $siswa->tempat_tinggal == 'Pensiunan' ? 'selected' : '' ?> value="Pensiunan">Pensiunan</option>
                                <option <?= $siswa->tempat_tinggal == 'Meninggal Dunia' ? 'selected' : '' ?> value="Meninggal Dunia">Meninggal Dunia</option>
                                <option <?= $siswa->tempat_tinggal == 'Lain-lain' ? 'selected' : '' ?> value="Lain-lain">Lain-lain</option>
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
                </div>
                <div class="row">
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a class="btn btn-success btn-sm text-light tombol_simpan_save_ayah">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="data_ibu" role="tabpanel">
            <form class="save_ibu" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" readonly value="<?= $siswa->nama_ibu ?>">
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
                </div>
                <div class="row">
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a class="btn btn-success btn-sm text-light tombol_simpan_save_ibu">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="data_wali" role="tabpanel">
            <form class="save_wali" method="POST">
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
                    <div class="col-6 text-right">
                        <div class="form-group">
                            <a class="btn btn-success btn-sm text-light tombol_simpan_save_wali">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="data_periodik" role="tabpanel">
            <form class="save_periodik" method="POST">
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
                            <a class="btn btn-success btn-sm text-light tombol_simpan_save_periodik">Simpan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="registrasi_pd" role="tabpanel">
            <form class="save_registrasi_pd" method="POST">
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
                        <div class="form-group">
                            <label class="form-label">Nomor Induk Siswa</label>
                            <input type="number" class="form-control" name="nis" value="<?= $siswa->nis ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tgl_masuk_sekolah" value="<?= $siswa->tgl_masuk_sekolah ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="<?= $siswa->asal_sekolah ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor Peserta Ujian</label>
                            <input type="text" class="form-control" name="nomor_peserta_ujian" value="<?= $siswa->nomor_peserta_ujian ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor Seri Ijazah</label>
                            <input type="text" class="form-control" name="nomor_seri_ijazah" value="<?= $siswa->nomor_seri_ijazah ?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="pendaftaran_keluar" role="tabpanel">
            <form class="save_pendaftaran_keluar" method="POST">
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
                        <div class="form-group">
                            <label class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control" name="tanggal_keluar" value="<?= $siswa->tanggal_keluar ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alasan Keluar</label>
                            <input type="text" class="form-control" name="alasan_keluar" value="<?= $siswa->alasan_keluar ?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tombol_simpan_save_identitas").click(function() {
            var data = $('.save_identitas').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('wali_kelas/siswa/save_identitas/' . $siswa->id) ?>',
                data: data,
                success: function() {
                    $('.hasil-data').load('<?= base_url('wali_kelas/siswa/show/' . $siswa->id) ?>');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Diupdate !',
                    });
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tombol_simpan_save_ayah").click(function() {
            var data = $('.save_ayah').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('wali_kelas/siswa/save_ayah/' . $siswa->id) ?>',
                data: data,
                success: function() {
                    $('.hasil-data').load('<?= base_url('wali_kelas/siswa/show/' . $siswa->id) ?>');
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Berhasil',
                    //     text: 'Data Berhasil Diupdate !',
                    // });
                    const flash = $('.flash-data').data('flashdata');
                    console.log(flash);

                    if (flash) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: flash,
                        });
                    }
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tombol_simpan_save_ibu").click(function() {
            var data = $('.save_ibu').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('wali_kelas/siswa/save_ibu/' . $siswa->id) ?>',
                data: data,
                success: function() {
                    $('.hasil-data').load('<?= base_url('wali_kelas/siswa/show/' . $siswa->id) ?>');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Diupdate !',
                    });
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tombol_simpan_save_wali").click(function() {
            var data = $('.save_wali').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('wali_kelas/siswa/save_wali/' . $siswa->id) ?>',
                data: data,
                success: function() {
                    $('.hasil-data').load('<?= base_url('wali_kelas/siswa/show/' . $siswa->id) ?>');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Diupdate !',
                    });
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".tombol_simpan_save_periodik").click(function() {
            var data = $('.save_periodik').serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('wali_kelas/siswa/save_periodik/' . $siswa->id) ?>',
                data: data,
                success: function() {
                    $('.hasil-data').load('<?= base_url('wali_kelas/siswa/show/' . $siswa->id) ?>');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Diupdate !',
                    });
                }
            });
        });
    });
</script>