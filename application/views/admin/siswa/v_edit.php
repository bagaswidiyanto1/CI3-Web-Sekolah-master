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

            <?= form_open_multipart('siswa/edit/' . $siswa->id_siswa); ?>
            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" type="text" name="nis" value="<?= $siswa->nis; ?>" placeholder="NIS">
            </div>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" type="text" name="nama_siswa" value="<?= $siswa->nama_siswa; ?>" placeholder="Nama Siswa">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" value="<?= $siswa->tempat_lahir; ?>" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="test" id="tanggal" value="<?= $siswa->tgl_lahir; ?>" name="tgl_lahir">
                </div>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option disabled selected>--Pilih Kelas--</option>
                    <option value="I" <?= $siswa->kelas == 'I' ? 'selected' : "" ?>>I</option>
                    <option value="II" <?= $siswa->kelas == 'II' ? 'selected' : "" ?>>II</option>
                    <option value="III" <?= $siswa->kelas == 'III' ? 'selected' : "" ?>>III</option>
                    <option value="IV" <?= $siswa->kelas == 'IV' ? 'selected' : "" ?>>IV</option>
                    <option value="V" <?= $siswa->kelas == 'V' ? 'selected' : "" ?>>V</option>
                    <option value="VI" <?= $siswa->kelas == 'S2' ? 'selected' : "" ?>>S2</option>
                    <option value="VII" <?= $siswa->kelas == 'VII' ? 'selected' : "" ?>>VII</option>
                    <option value="VIII" <?= $siswa->kelas == 'VIII' ? 'selected' : "" ?>>VIII</option>
                    <option value="IX" <?= $siswa->kelas == 'IX' ? 'selected' : "" ?>>IX</option>
                    <option value="X" <?= $siswa->kelas == 'X' ? 'selected' : "" ?>>X</option>
                    <option value="XI" <?= $siswa->kelas == 'XII' ? 'selected' : "" ?>>XII</option>
                    <option value="XII" <?= $siswa->kelas == 'XII' ? 'selected' : "" ?>>XII</option>
                </select>
            </div>


            <div class="form-group">
                <img src="<?= base_url('foto_siswa/' . $siswa->foto_siswa); ?>" alt="" width="100" height="100">
            </div>
            <div class="form-group">
                <label>Ganti Foto</label>
                <input class="form-control" type="file" name="foto_siswa">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>