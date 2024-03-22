<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data
        </div>
        <div class="panel-body">

            <?php if (isset($error_upload)) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $error_upload; ?>
                </div>

            <?php } ?>

            <?= form_open_multipart('guru/add'); ?>
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" placeholder="NIP">
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" type="text" name="nama_guru" placeholder="Nama Guru">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="test" id="tanggal" name="tgl_lahir">
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label>Mapel</label>
                    <select name="id_mapel" class="form-control">
                        <option disabled selected>--Pilih Mapel--</option>
                        <?php foreach ($mapel as $mpl) { ?>
                            <option value="<?= $mpl->id_mapel; ?>"><?= $mpl->nama_mapel; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
                        <option disabled selected>--Pilih Pendidikan--</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" name="foto_guru">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>