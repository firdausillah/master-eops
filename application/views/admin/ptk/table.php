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
                                            <div class="col-md-8 col-12">
                                                <!-- Hover table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                            Tambah <?= $title ? $title : 'Judul Page' ?>
                                                        </button>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th class="text-midle">Nama</th>
                                                                        <th class="text-midle">Username</th>
                                                                        <th class="text-midle">Password</th>
                                                                        <th class="text-midle">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($ptk as $no => $kls) : ?>
                                                                        <tr>
                                                                            <td><?= $no + 1; ?></td>
                                                                            <td><?= $kls->nama ?></td>
                                                                            <td><?= $kls->username ?></td>
                                                                            <td><?= $kls->password ?></td>
                                                                            <td style="width: 20%;">
                                                                                <a href="<?= base_url('admin/ptk/edit/' . $kls->id) ?>" class="btn btn-info btn-small"><i class="ti-pencil-alt"></i></a>
                                                                                <a href="<?= base_url('admin/ptk/delete/' . $kls->id) ?>" class="btn btn-danger btn-small tombol-hapus"><i class="ti-trash"></i></a>
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
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
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