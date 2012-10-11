
<form class="form-horizontal" action="<?php echo base_url(); ?>/index.php/mahasiswa/insert" method="POST">
    <div class="control-group">
        <label class="control-label" for="nim">Nim :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="nim" name="nim">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="nama">Nama :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="nama" name="nama">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="alamat">Alamat :</label>
        <div class="controls">
            <input type="text" class="input-xlarge" id="alamat" name="alamat">
        </div>
    </div>
    <div class="control-group">
        <div class="controls"><button class="btn btn-info"><i class="icon-white icon-check"></i> Simpan</button></div>
    </div>

</form>

</div>
