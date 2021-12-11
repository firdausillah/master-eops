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
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form <?= $title ? $title : 'Judul Page' ?></h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="<?= base_url('admin/tahun_pelajaran/update/' . $tahun_pelajaran->id) ?>" method="POST" class="form-material">
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Tahun Awal</label>
                                                                    <input type="text" class="form-control years" onchange="getYear(this.value)" name=" tahun_awal" value="<?= $tahun_pelajaran->tahun_awal ?>" readonly required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Tahun Akhir</label>
                                                                    <input type="text" class="form-control" name="tahun_akhir" id="tahun_akhir" value="<?= $tahun_pelajaran->tahun_akhir ?>" readonly required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Status</label>
                                                                    <input type="text" class="form-control" value="<?= $tahun_pelajaran->status_tahun == 1 ? 'Aktif' : 'Tidak Aktif' ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="<?= base_url() ?>admin/tahun_pelajaran" class="btn btn-secondary btn-sm">Kembali</a>
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

                    <script>
                        function getYear(value) {

                            var yearsend = parseInt(value) + 1;

                            $("#tahun_akhir").val(yearsend);

                        }
                    </script>