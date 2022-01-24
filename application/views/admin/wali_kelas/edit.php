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
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"><?= $title ? $title : 'Judul Page' ?></a>
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
                                        <!-- Hover table card start -->
                                        <div class="row">
                                            <div class="col-lg-8 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form <?= $title ? $title : 'Judul Page' ?></h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="<?= base_url('admin/wali_kelas/save/') ?>" method="POST" class="form-material">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama PTK</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="" value="<?= $wali_kelas->nama ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tahun Pelajaran</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="" value="<?= $tahun_pelajaran->tahun_awal.' - '. $tahun_pelajaran->tahun_akhir ?>">
                                                                    <input type="hidden" class="form-control" name="id_ptk" value="<?= $_GET['ptk']?>">
                                                                    <input type="hidden" class="form-control" name="id_tahun_pelajaran" value="<?= $_GET['tp']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Kelas</label>
                                                                <div class="col-sm-9">
                                                                    <select name="id_kelas" id="id_kelas" class="form-control">
                                                                        <option value="">Pilih disini</option>
                                                                        <?php foreach ($kelas as $key => $kel) : ?>
                                                                            <option <?= isset($wali_kelas->id_kelas) ?? $wali_kelas->id_kelas == $kel->id ? 'selected' : '' ?> value="<?= $kel->id ?>"><?= $kel->kelas ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Jurusan</label>
                                                                <div class="col-sm-9">
                                                                    <select name="id_jurusan" id="id_jurusan" class="form-control">
                                                                        <option value="">Pilih disini</option>
                                                                        <?php foreach ($jurusan as $key => $jur) : ?>
                                                                            <option <?= isset($wali_kelas->id_jurusan) ?? $wali_kelas->id_jurusan == $jur->id ? 'selected' : '' ?> value="<?= $jur->id ?>"><?= $jur->nama_jurusan ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Paralel</label>
                                                                <div class="col-sm-9">
                                                                    <select name="id_paralel" id="id_paralel" class="form-control">
                                                                        <option value="">Pilih disini</option>
                                                                        <?php foreach ($paralel as $key => $par) : ?>
                                                                            <option <?= isset($wali_kelas->id_paralel) ?? $wali_kelas->id_paralel == $par->id ? 'selected' : '' ?> value="<?= $par->id ?>"><?= $par->paralel ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="<?= base_url() ?>admin/jurusan" class="btn btn-secondary btn-sm">Kembali</a>
                                                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                            </div>
                                                        </form>
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