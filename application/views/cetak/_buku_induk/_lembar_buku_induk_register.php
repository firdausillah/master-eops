<div class="container">
    <div class="text-center">
        <h2>IV. LEMBAR BUKU INDUK REGISTER</h2>
    </div>

    <?php foreach ($siswa as $key => $value) : ?>
        <table>
            <tbody>
                <tr>
                    <td>NAMA</td>
                    <td width="2%">:</td>
                    <td width="50%"><?= $value->nama ?></td>
                    <td>NIS</td>
                    <td width="2%">:</td>
                    <td><?= $value->no_induk ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?= $value->nik_siswa ?></td>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $value->nisn ?></td>
                </tr>
            </tbody>
        </table>

        <h3 style="margin-top: 0; margin-bottom: 7px;">A. Keterangan Peserta Didik</h3>
        <div class="row">
            <div class="" style="float: left; width: 80%;">
                <table class="">
                    <tbody>
                        <tr>
                            <td width="6%">1</td>
                            <td width="25%">a. Nama Lengkap</td>
                            <td width="2%">:</td>
                            <td width="60%"><?= $value->nama ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b. Nama Panggilan</td>
                            <td>:</td>
                            <td><?= $value->nama_panggilan ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $value->jk ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>a. Tempat Lahir</td>
                            <td>:</td>
                            <td><?= $value->tempatlahir_siswa ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b. Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $value->tgllahir_siswa != '0000-00-00' ? date('d F Y', strtotime($value->tgllahir_siswa)) : ''; ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $value->agama ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td><?= $value->kewarganegaraan ?></td>
                        <tr>
                            <td>6</td>
                            <td>No KK</td>
                            <td>:</td>
                            <td><?= $value->no_kk ?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Anak ke berapa (KK)</td>
                            <td>:</td>
                            <td><?= $value->anak_keberapa ?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Jumlah Saudara</td>
                            <td>:</td>
                            <td><?= $value->jumlah_saudara_kandung ?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Bahasa sehari-hari</td>
                            <td>:</td>
                            <td><?= $value->bahasa ?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Tempat Tinggal Bersama</td>
                            <td>:</td>
                            <td><?= $value->tempat_tinggal ?></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Moda Transportasi
                            </td>
                            <td>:</td>
                            <td><?= $value->moda_transportasi ?></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Nomor HP
                            </td>
                            <td>:</td>
                            <td><?= $value->nohp ?></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Nomor Akte Kelahiran
                            </td>
                            <td>:</td>
                            <td><?= $value->noakte_lahir ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="text-center" style="float: left; width: 20%;">
                <div class="box-34" style="margin-left: auto; margin-right: auto;">
                </div>
                <p>Foto Masuk</p>
            </div>
        </div>

        <h3 style="margin-top: 0; margin-bottom: 7px;">B. Keterangan Tempat Tinggal</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">12</td>
                        <td width="30%">Alamat</td>
                        <td width="2%">:</td>
                        <td width="20%">Jalan</td>
                        <td width="2%">:</td>
                        <td width=""><?= $value->alamat_siswa ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Dusun</td>
                        <td>:</td>
                        <td><?= $value->dusun ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>RT/RW</td>
                        <td>:</td>
                        <td><?= $value->rt ?>/<?= $value->rw ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Desa</td>
                        <td>:</td>
                        <td><?= $value->desa ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td><?= $value->kec ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Kabupaten</td>
                        <td>:</td>
                        <td><?= $value->kab ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td><?= $value->provinsi_siswa ?></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Tinggal Bersama</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tempat_tinggal ?></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Jarak Ke Sekolah</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->jarak_tempat_tinggal ?> km</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 style="margin-top: 0; margin-bottom: 7px;">C. Keterangan Kesehatan</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">15</td>
                        <td width="30%">Golongan Darah</td>
                        <td width="2%">:</td>
                        <td colspan="3"><?= $value->golongan_darah ?></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Riwayat Penyakit</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->riwayat_penyakit ?></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>a. Tinggi Badan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tinggi_badan ?> cm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Berat Badan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->berat_badan ?> kg</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagefooter name="MyFooter1" content-right="<?= $value->nama ?> | <?= $value->no_induk ?> (1/3)" footer-style="font-size: 8pt;
      font-weight: bold; color: #000000;" />

        <setpagefooter name="MyFooter1" value="on" />

        <pagebreak />

        <h3 style="margin-top: 0; margin-bottom: 7px;">D. Keterangan Pendidikan</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">18</td>
                        <td width="30%">Pendidikan Sebelumnya</td>
                        <td width="2%"></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Asal Sekolah</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->asal_sekolah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Tanggal & Nomor Ijazah</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tanggal_ijasah != '0000-00-00' ? date('d-m-Y', strtotime($value->tanggal_ijasah)) : ''; ?> dan <?= $value->nomor_seri_ijazah ?></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Pindahan</td>
                        <td></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Dari Sekolah</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->asal_sekolah_pd_masuk ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Alasan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->alasan_mutasi ?></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Diterima di sekolah ini</td>
                        <td></td>
                        <td colspan="3"> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Di Kelas</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->diterima_di_kelas ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Jurusan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->jurusan ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Tanggal</td>
                        <td>:</td>
                        <td colspan="3"> <?= $value->tgl_masuk_sekolah != '0000-00-00' ? date('d F Y', strtotime($value->tgl_masuk_sekolah)) : ''; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 style="margin-top: 0; margin-bottom: 7px;">E. Keterangan Orang Tua Kandung</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">21</td>
                        <td width="30%">Ayah Kandung</td>
                        <td width="2%"></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Nama</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. NIK</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nik_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Tahun Lahir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tgllahir_ayah != '0000-00-00' ? date('Y', strtotime($value->tgllahir_ayah)) : ''; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. Kewarganegaraan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->kewarganegaraan_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>e. Pendidikan Terakhir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pendidikan_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>f. Pekerjaan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pekerjaan_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>g. Penghasilan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->penghasilan_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>h. Alamat</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->alamat_ayah ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>i. Nomor HP</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nohp_ayah ?></td>
                    </tr>
                    <tr>
                        <td width="6%">22</td>
                        <td width="30%">Ibu Kandung</td>
                        <td width="2%"></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Nama</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. NIK</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nik_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Tahun Lahir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tgllahir_ibu != '0000-00-00' ? date('Y', strtotime($value->tgllahir_ibu)) : ''; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. Kewarganegaraan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->kewarganegaraan_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>e. Pendidikan Terakhir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pendidikan_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>f. Pekerjaan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pekerjaan_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>g. Penghasilan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->penghasilan_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>h. Alamat</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->alamat_ibu ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>i. Nomor HP</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nohp_ibu ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagefooter name="MyFooter1" content-right="<?= $value->nama ?> | <?= $value->no_induk ?> (2/3)" footer-style="font-size: 8pt;
      font-weight: bold; color: #000000;" />

        <setpagefooter name="MyFooter1" value="on" />

        <pagebreak />


        <h3 style="margin-top: 0; margin-bottom: 7px;">F. Keterangan Wali (Jika Ada)</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">23</td>
                        <td width="30%">Wali</td>
                        <td width="2%"></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Nama</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nama_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Tahun Lahir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->tgllahir_wali != '0000-00-00' ? date('Y', strtotime($value->tgllahir_wali)) : ''; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Hubungan Keluarga</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->hubungan_keluarga_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. Pendidikan Terakhir</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pendidikan_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>e. Pekerjaan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->pekerjaan_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>f. Penghasilan</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->penghasilan_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>g. Alamat</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->alamat_wali ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>h. Nomor HP</td>
                        <td>:</td>
                        <td colspan="3"><?= $value->nohp_wali ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 style="margin-top: 0; margin-bottom: 7px;">G. KETERANGAN PERKEMBANGAN PESERTA DIDIK</h3>
        <div class="row">
            <table class="">
                <tbody>
                    <tr>
                        <td width="6%">24</td>
                        <td width="30%">Menerima Beasiswa</td>
                        <td width="2%">:</td>
                        <td colspan="3">
                            <table class="td-border-sm text-center">
                                <thead>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>Dari</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 style="margin-top: 0; margin-bottom: 7px;">H. Keterangan Meninggalkan Sekolah</h3>
        <div class="row">
            <div class="" style="float: left; width: 80%;">
                <table class="">
                    <tbody>
                        <tr>
                            <td width="6%">25</td>
                            <td width="30%">Meninggalkan Sekolah</td>
                            <td width="2%"></td>
                            <td width="50%"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>a. Tanggal</td>
                            <td>:</td>
                            <!-- <td><?= $value->tanggal_keluar != '0000-00-00' and $value->tanggal_keluar != null ? date('d m Y', strtotime($value->tanggal_keluar)) : ''; ?></td> -->
                            <td><?= $value->tanggal_keluar != '0000-00-00' ? date('d F Y', strtotime($value->tanggal_keluar)) : ''; ?></td>

                        </tr>
                        <!-- <tr>
                            <td></td>
                            <td>b. Alasan</td>
                            <td>:</td>
                            <td><?= $value->alasan_keluar ?></td>
                        </tr> -->
                        <tr>
                            <td>26</td>
                            <td>Pindah Sekolah</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>a. Dari Kelas</td>
                            <td>:</td>
                            <td><?= $value->dari_kelas ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b. Sekolah Tujuan</td>
                            <td>:</td>
                            <td><?= $value->sekolah_tujuan ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>c. Alamat Sekolah Tujuan</td>
                            <td>:</td>
                            <td><?= $value->alamat_sekolah_tujuan ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>d. NPSN Sekolah Tujuan</td>
                            <td>:</td>
                            <td><?= $value->npsn ?></td>
                        </tr>

                        <tr>
                            <td>27</td>
                            <td>Tamat Belajar</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>a. Tahun</td>
                            <td>:</td>
                            <td><?= $value->tahun_tamat ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b. Nomor Ijazah</td>
                            <td>:</td>
                            <td><?= $value->nomor_seri_ijasah ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>c. Tanggal Ijazah</td>
                            <td>:</td>
                            <!-- <td><?= $value->tanggal_ijasah_pd_keluar != '0000-00-00' and $value->tanggal_ijasah_pd_keluar != null ? date('d m Y', strtotime($value->tanggal_ijasah_pd_keluar)) : ''; ?></td> -->
                            <td><?= $value->tanggal_ijasah_pd_keluar != '0000-00-00' ? date('d F Y', strtotime($value->tanggal_ijasah_pd_keluar)) : ''; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>d. Wirausaha</td>
                            <td>:</td>
                            <td><?= $value->wirausaha ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>e. Bekerja</td>
                            <td>:</td>
                            <td><?= $value->bekerja_di ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>f. Melanjutkan Ke</td>
                            <td>:</td>
                            <td><?= $value->melanjutkan_ke ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="text-center" style="float: left; width: 20%;">
                <div class="box-34" style="margin-left: auto; margin-right: auto;">
                </div>
                <p>Foto Keluar</p>
            </div>
        </div>

        <pagefooter name="MyFooter1" content-right="<?= $value->nama ?> | <?= $value->no_induk ?> (3/3)" footer-style="font-size: 8pt;
      font-weight: bold; color: #000000;" />

        <setpagefooter name="MyFooter1" value="on" />
    <?php endforeach ?>

</div>