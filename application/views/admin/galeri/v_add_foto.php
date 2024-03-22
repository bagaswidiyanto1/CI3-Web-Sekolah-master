<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Foto Galeri
        </div>
        <div class="panel-body">

            <?php if (isset($error_upload)) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $error_upload; ?>
                </div>

            <?php } ?>

            <?php if ($this->session->flashdata('pesan')) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>

            <?php
            echo validation_errors('<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '
            </div>');
            ?>

            <?= form_open_multipart('galeri/add_foto/' . $galeri->id_galeri); ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan Foto</label>
                        <input class="form-control" type="text" name="ket_foto" placeholder="Keterangan Foto">
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Foto</label>
                        <input class="form-control" type="file" name="foto">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('galeri'); ?>" class="btn btn-danger">Back</a>
            <?= form_close(); ?>
            <hr>
            <?php foreach ($foto as $key) { ?>
                <div class="col-sm-3 text-center">
                    <label for=""><?= $key->ket_foto; ?></label>
                    <img src="<?= base_url('foto/' . $key->foto); ?>" width="250" height="250">
                    <a href="<?= base_url('galeri/delete_foto/' . $key->id_galeri . '/' . $key->id_foto); ?>" class="btn btn-danger btn-xs text-center" onclick="return confirm('Yakin ingin di hapus ?')"><i class="fa fa-trash"></i></a>
                </div>
            <?php } ?>
        </div>

    </div>

</div>