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
                                            <div class="col-12 col-xxl-10">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Filter
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="<?= base_url('admin/wali_kelas') ?>" method="GET">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label>Tahun Pelajaran</label>
                                                                        <select class="form-control" name="tp">
                                                                            <?php foreach ($tahun_pelajaran as $tp) : ?>
                                                                                <?php if ($_GET['tp'] == null) :?>
                                                                                    <option <?= $tp->status_tahun == 1 ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                <?php else :?>
                                                                                    <option <?= $_GET['tp'] == $tp->id ? 'selected' : '' ?> value="<?= $tp->id ?>"><?= $tp->tahun_awal . '/' . $tp->tahun_akhir ?></option>
                                                                                <?php endif?>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div style="margin-top:25px;">
                                                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-filter"></i> Filter Data</button>
                                                                        <a href="<?= base_url('admin/wali_kelas/tambah') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Masukan Kelas PTK</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Hover table card start -->
                                                <div class="card">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th class="text-midle">Nama</th>
                                                                        <th class="text-midle">Wali Kelas</th>
                                                                        <th class="text-midle">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($wali_kelas as $no => $sis) : ?>
                                                                        <tr>
                                                                            <td><?= $no + 1; ?></td>
                                                                            <td><?= $sis->nama ?></td>
                                                                            <td><?= $sis->kelas .' '. $sis->jurusan .' '. $sis->paralel .' ' ?></td>
                                                                            <td style="width: 20%;">
                                                                                <a href="<?= base_url('admin/wali_kelas/edit/' . $sis->id_tapel_ptk) ?>" class="btn btn-info btn-small"><i class="ti-pencil-alt"></i></a>
                                                                                <a href="<?= base_url('admin/wali_kelas/delete/' . $sis->id_tapel_ptk) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="ti-trash"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Hover table card end -->
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
                                <?= form_open_multipart('admin/ptk/save') ?>
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