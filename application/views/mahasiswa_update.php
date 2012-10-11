
<form class="form-horizontal" action="<?php echo base_url(); ?>/index.php/mahasiswa/update" method="POST">
    <?php foreach ($mahasiswa as $mhs): ?>
    <div class="control-group">
        <label class="control-label" for="nim">NIM :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="nim" value="<?php echo $mhs->nim; ?>" name="nim" readonly="readonly">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">NAMA :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="nama" name="nama" value="<?php echo $mhs->nama; ?>">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="alamat">ALAMAT :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="alamat" name="alamat" value="<?php echo $mhs->alamat; ?>" name="alamat">
        </div>
    </div>
    <div class="control-group">
        <div class="controls"><button class="btn btn-info"><i class="icon-white icon-check"></i> Simpan</button></div>
    </div>
    <?php endforeach; ?>

</form>

</div>