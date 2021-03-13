<form method="post" action="<?php $this->homeAddress('/add-dosen'); ?>">
    <label for="area_nip">NIP:</label>
    <br>
    <input style="margin-bottom: 16px; width: 20%" id="area_nip" type="text" placeholder="NIP Terdaftar" name="nip"/>
    <br>
    <label for="area_nama">Nama:</label>
    <br>
    <input style="margin-bottom: 16px; width: 20%" id="area_nama" type="text" placeholder="Nama lengkap anda" name="nama"/>
    <br>
    <label for="area_alamat">Alamat:</label>
    <br>
    <textarea style="margin-bottom: 16px; width: 20%; height: 60px;" id="area_alamat" type="text" placeholder="Alamat lengkap anda" name="alamat"></textarea>
    <br>
    <label for="area_jurusan">Prodi Jurusan:</label>
    <br>
    <input style="margin-bottom: 16px; width: 20%" id="area_jurusan" type="text" placeholder="Prodi Jurusan anda" name="prodi"/>
    <br>
    <label for="area_notelp">No. Telepon:</label>
    <br>
    <input style="margin-bottom: 16px; width: 20%" id="area_notelp" type="text" placeholder="No. Telepon yang aktif" name="notelp"/>
    <br>
    <input type="submit" name="submit" value="Simpan" />
</form>
