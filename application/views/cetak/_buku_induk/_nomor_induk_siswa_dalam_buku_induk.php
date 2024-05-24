<div class="container">
    <div class="text-center">
        <h2>II. NOMOR INDUK SISWA DALAM BUKU INDUK</h2>
    </div>

    <table>
        <thead class="td-border text-center">
            <tr>
                <th style="font-size: x-small; padding-left: 0px; padding-right: 0px;" width="8%">No. Urut</th>
                <th style="font-size: x-small; padding-left: 0px; padding-right: 0px;">NIS</th>
                <th style="font-size: x-small; padding-left: 0px; padding-right: 0px;">NISN</th>
                <th style="font-size: x-small; padding-left: 0px; padding-right: 0px;">NAMA LENGKAP</th>
                <th style="font-size: x-small; padding-left: 0px; padding-right: 0px;">L/P</th>
            </tr>
        </thead>
        <tbody class="td-border">
            <?php foreach ($siswa as $key => $value) : ?>
                <tr>
                    <td class="text-center" style="font-size: x-small;"><?= $key + 1 ?></td>
                    <td style="font-size: x-small;"><?= $value->nis ?></td>
                    <td style="font-size: x-small;"><?= $value->nisn ?></td>
                    <td style="font-size: x-small;"><?= $value->nama ?></td>
                    <td style="font-size: x-small;"><?= $value->jk ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>