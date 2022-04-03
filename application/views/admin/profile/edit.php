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
                                            <div class="col-lg-12 col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form <?= $title ? $title : 'Judul Page' ?></h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="<?= base_url('admin/profile/update/1') ?>" method="POST" class="form-material" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Nama Sekolah <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="nama_sekolah" value="<?= $profile->nama_sekolah ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Nama Kepala Sekolah <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="nama_kepalasekolah" value="<?= $profile->nama_kepalasekolah ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Alamat Sekolah <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="alamat" value="<?= $profile->alamat ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Tahun Ajaran <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="tahun_ajaran" value="<?= $profile->tahun_ajaran ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Contact Person 1 <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="cp_1" value="<?= $profile->cp_1 ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Contact Person 2 <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="cp_2" value="<?= $profile->cp_2 ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Website <small class="text-danger">*</small></label>
                                                                        <input type="text" class="form-control" name="website" value="<?= $profile->website ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Sosial Media 1</label>
                                                                        <input type="text" class="form-control" name="sosial_media_1" value="<?= $profile->sosial_media_1 ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Sosial Media 2</label>
                                                                        <input type="text" class="form-control" name="sosial_media_2" value="<?= $profile->sosial_media_2 ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Sosial Media 3</label>
                                                                        <input type="text" class="form-control" name="sosial_media_3" value="<?= $profile->sosial_media_3 ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="form-label" for="gambar">Logo <small class="text-danger">maksimal 2 MB</small> <small class="text-danger">*</small></label>
                                                                    <input type="hidden" name="logo" value="<?= @$profile->logo ?>">
                                                                    <input class="form-control" type="file" name="gambar" id="gambar">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <a href="<?= $img = base_url('uploads/img/' . $profile->logo) ?>" target='_blank' class="pt-5">
                                                                        <img src="<?= $img ?>" height="150px" alt="" class="rounded">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 text-right">
                                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                                </div>
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