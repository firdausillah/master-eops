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
                                                        <form action="<?= base_url('admin/jurusan/update/'.$jurusan->id) ?>" method="POST" class="form-material">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Kode Jurusan</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="kode_jurusan" value="<?= $jurusan->kode_jurusan ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama Jurusan</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="nama_jurusan" value="<?= $jurusan->nama_jurusan ?>" required>
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