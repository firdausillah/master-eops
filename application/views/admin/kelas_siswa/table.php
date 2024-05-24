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
                                            <div class="col-md-8 col-xl-9">
                                                <!-- Hover table card start -->
                                                <div class="card">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th class="text-midle">Nama</th>
                                                                        <th class="text-midle">Kelas</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($kelas_siswa as $no => $sis) : ?>
                                                                        <tr>
                                                                            <td><?= $no + 1; ?></td>
                                                                            <td><?= $sis->nama ?></td>
                                                                            <td><?= $sis->kelas . ' ' . $sis->jurusan . ' ' . $sis->paralel . ' ' ?></td>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Hover table card end -->
                                            </div>
                                            <div class="col-md-4 col-xl-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Filter
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="<?= base_url('admin/kelas_siswa') ?>" method="GET">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <label>Tahun Pelajaran</label>
                                                                        <select class="form-control" name="tp">
                                                                            <?php foreach ($tahun_pelajaran as $tp) : ?>
                                                                                <?php if ($_GET['tp'] == null) : ?>
                                                                                    <option <?= $tp->status_tahun == 1 ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                <?php else : ?>
                                                                                    <option <?= $_GET['tp'] == $tp->id ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                <?php endif ?>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
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
                                                                    <div style="margin-top:25px;" class="text-center">
                                                                        <button type="submit" class="btn btn-sm btn-success btn-block"><i class="fa fa-filter"></i> Filter Data</button>
                                                                        <a href="<?= base_url('admin/kelas_siswa/tambah') ?>" class="btn btn-sm btn-primary btn-block"><i class="fa fa-plus"></i> Masukan Kelas Siswa</a>
                                                                        <?php if ($_GET != null) :
                                                                            $kode = $_GET['k'] . $_GET['j'] . $_GET['p'] . $_GET['tp'];
                                                                        ?>
                                                                            <a href="<?= base_url('export/export_siswa_kelas/' . $kode)  ?>" class="btn btn-sm btn-info btn-block"><i class="fa fa-download"></i> Export Excel</a>
                                                                            <a href="<?= base_url('cetak/cetak_buku_induk/' . $kode)  ?>" class="btn btn-sm btn-info btn-block" target="_blank"><i class="fa fa-print"></i> Print Buku Induk</a>
                                                                        <?php endif ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?= $title ? $title : 'Judul Page' ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/siswa/save') ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Kode Jurusan</label>
                                        <input type="text" class="form-control" name="kode_jurusan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Jurusan</label>
                                        <input type="text" class="form-control" name="nama_jurusan" required>
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