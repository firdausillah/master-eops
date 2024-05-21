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
            <?php for ($i = 0; $i < 25; $i++) : ?>
                <tr>
                    <td class="text-center" style="font-size: x-small;"><?= $i + 1 ?></td>
                    <td style="font-size: x-small;">6063/100.9.2.1</td>
                    <td style="font-size: x-small;">0064369264</td>
                    <td style="font-size: x-small;">ALBETY DWI ADI PUTRA</td>
                    <td style="font-size: x-small;">Laki-Laki</td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>