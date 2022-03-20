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
                                            <!-- <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"><?= $title ? $title : 'Judul Page' ?></a>
                                            </li> -->
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
                                            <div class="col-12">
                                                <!-- Hover table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="<?= base_url('wali_kelas/kelas'); ?>" class="btn btn-sm btn-danger">Kembali</a>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table id="myTable" class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th class="text-midle">Nama</th>
                                                                        <th class="text-midle">JK</th>
                                                                        <th class="text-midle">NISN</th>
                                                                        <th class="text-midle">No. Induk</th>
                                                                        <th class="text-midle">NIK</th>
                                                                        <th class="text-midle">Aksi</th>
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
                                                                            <td style="width: 20%;">
                                                                                <a href="#show_modal" data-toggle="modal" data-target=".bd-example-modal-lg" data-id="<?= $sis->id_siswa ?>" class="btn btn-success btn-small btn-block">Lihat Siswa</a>
                                                                                <!-- <a href="<?= base_url('wali_kelas/siswa/edit/' . $sis->id_siswa) ?>" class="btn btn-success btn-small btn-block">Lihat Siswa</a> -->
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

                    <div class="modal fade bd-example-modal-lg" id="show_modal" tabindex="-1" aria-labelledby="show_modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="show_modalLabel">Lihat Data Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="hasil-data"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#show_modal').on('show.bs.modal', function(e) {
                                var idx = $(e.relatedTarget).data('id');
                                //menggunakan fungsi ajax untuk pengambilan data
                                $.ajax({
                                    type: 'post',
                                    url: '<?= base_url('wali_kelas/siswa/show/') ?>' + idx,
                                    data: 'idx=' + idx,
                                    success: function(data) {
                                        $('.hasil-data').html(data); //menampilkan data ke dalam modal
                                    }
                                });
                            });
                        });
                    </script>