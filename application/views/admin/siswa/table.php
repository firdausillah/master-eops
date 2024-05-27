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
                                            <div class="col-12 col-xl-12">
                                                <!-- Hover table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                            Tambah <?= $title ? $title : 'Judul Page' ?>
                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ImportSiswa">
                                                            Import <?= $title ? $title : 'Judul Page' ?>
                                                        </button>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-hover display nowrap" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama</th>
                                                                        <th>JK</th>
                                                                        <th>NISN</th>
                                                                        <th>No. Induk</th>
                                                                        <th>NIK</th>
                                                                        <th>Tingkat Kelas</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($siswa as $no => $sis) : ?>
                                                                        <tr>
                                                                            <td><?= $no + 1; ?></td>
                                                                            <td><?= $sis->nama ?></td>
                                                                            <td><?= $sis->jk ?></td>
                                                                            <td><?= $sis->nisn ?></td>
                                                                            <td><?= $sis->no_induk ?></td>
                                                                            <td><?= $sis->nik_siswa ?></td>
                                                                            <td><?= $sis->kelas . ' ' . $sis->jurusan . ' ' . $sis->paralel . ' ' ?></td>
                                                                            <td style="width: 20%;">
                                                                                <a href="<?= base_url('cetak/cetak_buku_induk_register/' . $sis->id_siswa) ?>" target="_blank" class="btn btn-success btn-small"><i class="ti-printer"></i></a>
                                                                                <a href="<?= base_url('admin/siswa/edit/' . $sis->id_siswa) ?>" class="btn btn-info btn-small"><i class="ti-pencil-alt"></i></a>
                                                                                <a href="<?= base_url('admin/siswa/delete/' . $sis->id_siswa) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="ti-trash"></i></a>
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
                    <!-- Modal Import -->
                    <div class="modal fade" id="ImportSiswa" tabindex="-1" role="dialog" aria-labelledby="ImportSiswaLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ImportSiswaLabel"><?= $title ? $title : 'Judul Page' ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/import_excel/import_data_siswa') ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">File Excel</label>
                                        <input type="file" class="form-control" name="excel">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Download Template Excel Disini <a class="text-success" href="<?= base_url() ?>uploads/file/template/siswa-master-import.xlsx">Download</a></label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Import</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Tambah -->
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
                                        <label class="form-label">Nama <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">NIK <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="nik_siswa" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select class="form-control" name="jk" id="jk">
                                            <option value="">Pilih Disini</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="tempatlahir_siswa" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="tgllahir_siswa" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="nama_ibu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="nohp" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="password" required>
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