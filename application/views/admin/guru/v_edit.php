<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data
        </div>
        <div class="panel-body">
            <?= validation_errors(
                '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>'
            ); ?>

            <?php if (isset($error_upload)) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $error_upload; ?>
                </div>

            <?php } ?>

            <?= form_open_multipart('guru/edit/' . $guru->id_guru); ?>
            <div class="form-group">
                <label>NIP</label>
                <input class="form-control" type="text" name="nip" value="<?= $guru->nip; ?>" placeholder="NIP">
            </div>
            <div class="form-group">
                <label>Nama Guru</label>
                <input class="form-control" type="text" name="nama_guru" value="<?= $guru->nama_guru; ?>" placeholder="Nama Guru">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" value="<?= $guru->tempat_lahir; ?>" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="test" id="tanggal" value="<?= $guru->tgl_lahir; ?>" name="tgl_lahir">
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label>Mapel</label>
                    <select name="id_mapel" class="form-control">
                        <option disabled selected>--Pilih Mapel--</option>
                        <?php foreach ($mapel as $mpl) { ?>
                            <?php if ($guru->id_mapel == $mpl->id_mapel) { ?>
                                <option value="<?= $mpl->id_mapel; ?>" selected><?= $mpl->nama_mapel; ?></option>
                            <?php } else { ?>
                                <option value="<?= $mpl->id_mapel; ?>"><?= $mpl->nama_mapel; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
                        <option disabled selected>--Pilih Pendidikan--</option>
                        <option value="D1" <?= $guru->pendidikan == 'D1' ? 'selected' : "" ?>>D1</option>
                        <option value="D2" <?= $guru->pendidikan == 'D2' ? 'selected' : "" ?>>D2</option>
                        <option value="D3" <?= $guru->pendidikan == 'D3' ? 'selected' : "" ?>>D3</option>
                        <option value="D4" <?= $guru->pendidikan == 'D4' ? 'selected' : "" ?>>D4</option>
                        <option value="S1" <?= $guru->pendidikan == 'S1' ? 'selected' : "" ?>>S1</option>
                        <option value="S2" <?= $guru->pendidikan == 'S2' ? 'selected' : "" ?>>S2</option>
                        <option value="S3" <?= $guru->pendidikan == 'S3' ? 'selected' : "" ?>>S3</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <img src="<?= base_url('foto_guru/' . $guru->foto_guru); ?>" alt="" width="100" height="100">
            </div>
            <div class="form-group">
                <label>Ganti Foto</label>
                <input class="form-control" type="file" name="foto_guru">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>