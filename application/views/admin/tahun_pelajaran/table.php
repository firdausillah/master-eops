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
                                            <div class="col-lg-10">
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
                                                                        <th class="text-midle">Tahun Awal</th>
                                                                        <th class="text-midle">Tahun Akhir</th>
                                                                        <th class="text-midle">Status</th>
                                                                        <th class="text-midle">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($tahun_pelajaran as $no => $thnpelajaran) : ?>
                                                                        <tr>
                                                                            <td><?= $no + 1; ?></td>
                                                                            <td><?= $thnpelajaran->tahun_awal ?></td>
                                                                            <td><?= $thnpelajaran->tahun_akhir ?></td>
                                                                            <td><?= $thnpelajaran->status_tahun == 1 ? 'Aktif' : 'Tidak Aktif' ?></td>
                                                                            <td style="width: 20%;">
                                                                                <a href="<?= base_url('admin/tahun_pelajaran/edit/' . $thnpelajaran->id) ?>" class="btn btn-info btn-small"><i class="ti-pencil-alt" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                                                                <a href="<?= base_url('admin/tahun_pelajaran/delete/' . $thnpelajaran->id) ?>" class="btn btn-danger btn-small tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="ti-trash"></i></a>
                                                                                <?php if ($thnpelajaran->status_tahun == 0) :?>
                                                                                    <a href="<?= base_url('admin/tahun_pelajaran/set_status/' . $thnpelajaran->id) ?>" class="btn btn-success btn-small" data-toggle="tooltip" data-placement="top" title="Aktifkan"><i class="ti-check-box"></i></a>
                                                                                <?php endif?>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $title ? $title : 'Judul Page' ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/tahun_pelajaran/save') ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tahun Awal</label>
                                        <input type="text" class="form-control years" onchange="getYear(this.value)" name=" tahun_awal" readonly required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tahun Akhir</label>
                                        <input type="text" class="form-control" name="tahun_akhir" id="tahun_akhir" readonly required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status_tahun" id="status_tahun" class="form-control">
                                            <option value="0">Tidak Aktif</option>
                                            <!-- <option value="1">Aktif</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        function getYear(value) {

                            var yearsend = parseInt(value) + 1;

                            $("#tahun_akhir").val(yearsend);

                        }
                    </script>