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
                                        <div class="row">
                                            <div class="col-md-9 col-xxl-9">
                                                <!-- Hover table card start -->
                                                <?php if ($this->uri->segment(3) ==  'edit') : ?>
                                                    <div class="card">
                                                        <div class="card-block">
                                                            <form action="<?= base_url('admin/kelas_siswa/edit') ?>" method="GET">
                                                                <div class="row d-flex justify-content-between">
                                                                    <div class="col-xl-3">
                                                                        <div class="form-group">
                                                                            <label>Tahun Pelajaran</label>
                                                                            <select class="form-control" name="tp">
                                                                                <?php foreach ($tahun_pelajaran as $tp) : ?>
                                                                                    <?php if ($_GET['tp'] == null) : ?>
                                                                                        <option <?= $tp->status_tahun == 1 ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                    <?php else : ?>
                                                                                        <option <?= $_GET['tp'] == $tp->id ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                    <?php endif ?>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="form-group">
                                                                            <label>Kelas</label>
                                                                            <select class="form-control" name="k">
                                                                                <?php foreach ($kelas as $kls) : ?>
                                                                                    <?php if ($_GET['k'] == null) : ?>
                                                                                        <option value="<?= $kls->id ?>"><?= $kls->kelas ?></option>
                                                                                    <?php else : ?>
                                                                                        <option <?= $_GET['k'] == $kls->id ? 'selected' : '' ?> value="<?= $kls->id ?>"><?= $kls->kelas ?></option>
                                                                                    <?php endif ?>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <div class="form-group">
                                                                            <label>Jurusan</label>
                                                                            <select class="form-control" name="j">
                                                                                <?php foreach ($jurusan as $j) : ?>
                                                                                    <?php if ($_GET['j'] == null) : ?>
                                                                                        <option value="<?= $j->id ?>"><?= $j->nama_jurusan ?></option>
                                                                                    <?php else : ?>
                                                                                        <option <?= $_GET['j'] == $j->id ? 'selected' : '' ?> value="<?= $j->id ?>"><?= $j->nama_jurusan ?></option>
                                                                                    <?php endif ?>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="form-group">
                                                                            <label>Paralel</label>
                                                                            <select class="form-control" name="p">
                                                                                <?php foreach ($paralel as $p) : ?>
                                                                                    <?php if ($_GET['p'] == null) : ?>
                                                                                        <option value="<?= $p->id ?>"><?= $p->paralel ?></option>
                                                                                    <?php else : ?>
                                                                                        <option <?= $_GET['p'] == $p->id ? 'selected' : '' ?> value="<?= $p->id ?>"><?= $p->paralel ?></option>
                                                                                    <?php endif ?>
                                                                                <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div style="margin-top:25px;">
                                                                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-filter"></i> Filter Data</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <?php endif ?>
                                                <form action="<?= base_url('admin/kelas_siswa/update_kelas') ?>" method="POST">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row d-flex justify-content-end">
                                                                <div class="col-md-6">
                                                                    <a href="<?= base_url('admin/kelas_siswa/edit') ?>" type="submit" class="btn btn-info btn-sm btn-block">Siswa Dengan Kelas</a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="<?= base_url('admin/kelas_siswa/tambah') ?>" type="submit" class="btn btn-info btn-sm btn-block">Siswa Tanpa Kelas</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table id="myTable" class="table table-hover table-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>No</th>
                                                                            <th class="text-midle">Nama</th>
                                                                            <th class="text-midle">Kelas</th>
                                                                            <th class="text-midle">Jurusan</th>
                                                                            <th class="text-midle">Paralel</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($kelas_siswa as $no => $sis) : ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" name="id_siswa[]" class="chk-box" value="<?= $sis->id_siswa ?>" />
                                                                                    <!-- <?php if ($sis->id_tapel_siswa != null) : ?>
                                                                                        <input type="hidden" name="id_tapel_siswa[]" value="<?= $sis->id_tapel_siswa ?>">
                                                                                    <?php endif ?> -->
                                                                                </td>
                                                                                <td><?= $no + 1; ?></td>
                                                                                <td><?= $sis->nama ?></td>
                                                                                <td><?= $sis->kelas ?></td>
                                                                                <td><?= $sis->jurusan ?></td>
                                                                                <td><?= $sis->paralel ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Hover table card end -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position">
                                                    <div class="card" style="width: 90%;">
                                                        <div class="card-header">
                                                            Masukan kedalam kelas :
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Tahun Pelajaran</label>
                                                                        <select class="form-control" disabled name="tp">
                                                                            <?php foreach ($tahun_pelajaran as $tp) : ?>
                                                                                <option <?= $tp->status_tahun == '1' ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Kelas</label>
                                                                        <select class="form-control" name="k">
                                                                            <?php foreach ($kelas as $kls) : ?>
                                                                                <option value="<?= $kls->id ?>"><?= $kls->kelas ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jurusan</label>
                                                                        <select class="form-control" name="j">
                                                                            <?php foreach ($jurusan as $j) : ?>
                                                                                <option value="<?= $j->id ?>"><?= $j->nama_jurusan ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Paralel</label>
                                                                        <select class="form-control" name="p">
                                                                            <?php foreach ($paralel as $p) : ?>
                                                                                <option value="<?= $p->id ?>"><?= $p->paralel ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> Masukan Kelas</button>
                                                                    <a href="<?= base_url('admin/kelas_siswa') ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-pluis"></i> Kembali</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <!-- <div id="styleSelector"> </div> -->
                            </div>
                        </div>
                    </div>