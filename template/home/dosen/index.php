<h2>Data Dosen</h2>
<a href="<?php echo $this->homeAddress('/add-dosen'); ?>">Tambah Dosen Baru</a>
<br/>
<br/>
<table class="data-table">
    <thead class="data-table-th">
        <td class="data-table-td">NIP</td>
        <td class="data-table-td">Nama</td>
        <td class="data-table-td">Alamat</td>
        <td class="data-table-td">Prodi</td>
        <td class="data-table-td">Jurusan</td>
        <td class="data-table-td">No. Telepon</td>
    </thead>
    <tbody>
    <?php foreach ($this->data('all_dosen') as $dosen) { ?>
        <tr class="data-table-tr">
            <td class="data-table-td"><?= $dosen['nip'] ?></td>
            <td class="data-table-td"><?= $dosen['nama'] ?></td>
            <td class="data-table-td"><?= $dosen['alamat'] ?></td>
            <td class="data-table-td"><?= $dosen['prodi']?></td>
            <td class="data-table-td"><?= $dosen['jurusan']?></td>
            <td class="data-table-td"><?= $dosen['notelp'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
