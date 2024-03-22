<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data
        </div>
        <div class="panel-body">
            <?= form_open_multipart('pengumuman/edit/' . $pengumuman->id_pengumuman); ?>
            <div class="form-group">
                <label>Judul Pengumuman</label>
                <input class="form-control" type="text" name="judul_pengumuman" value="<?= $pengumuman->judul_pengumuman; ?>" placeholder="Judul Pengumuman">
            </div>
            <div class="form-group">
                <label>Isi Pengumuman</label>
                <textarea name="isi_pengumuman" id="editor" class="form-control" cols="30" rows="10"><?= $pengumuman->isi_pengumuman; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>