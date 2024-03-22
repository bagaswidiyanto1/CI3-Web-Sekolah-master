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

            <?= form_open_multipart('berita/edit/' . $berita->id_berita); ?>
            <div class="form-group">
                <label>Judul Berita</label>
                <input class="form-control" type="text" name="judul_berita" id="judul_berita" value="<?= $berita->judul_berita; ?>" placeholder="Judul Berita" onchange="convertSlug()" onkeyup="convertSlug()">
            </div>
            <div class="form-group">
                <label>Slug Berita</label>
                <input class="form-control" type="text" name="slug_berita" id="slug" value="<?= $berita->slug_berita; ?>" placeholder="Slug Berita">
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea name="isi_berita" id="editor" class="form-control" id="" cols="30" rows="10"><?= $berita->isi_berita; ?></textarea>
            </div>

            <div class="form-group">
                <img src="<?= base_url('foto_berita/' . $berita->gambar_berita); ?>" alt="" width="100" height="100">
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" name="gambar_berita">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>

<script>
    function convertSlug() {


        var Text = $('#judul_berita').val();

        var trimmed = $.trim(Text);

        slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');


        $("#slug").val(slug.toLowerCase());

    }
</script>