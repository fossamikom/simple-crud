<table class="table">
    <tr>
        <td>NIM</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>ACTION</td>
    </tr>
    <?php foreach ($mahasiswas as $mhs): ?>
    <tr>
        <td><?php echo $mhs->nim ?></td>
        <td><?php echo $mhs->nama ?></td>
        <td><?php echo $mhs->alamat ?></td>
        <td><a href="<?php echo site_url()?>/mahasiswa/ubah/<?php echo $mhs->nim;?>">Ubah</a> || <a href="<?php echo site_url()?>/mahasiswa/delete/<?php echo $mhs->nim ?>" onclick="return confirm('Apakah sudah benar benar yakin untuk menghapus data ??? :D')">Hapus</a> </td>

    </tr>
    <?php endforeach; ?>
</table>