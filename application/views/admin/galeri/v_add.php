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

            <?= form_open_multipart('galeri/add'); ?>
            <div class="form-group">
                <label>Nama Galeri</label>
                <input class="form-control" type="text" name="nama_galeri" placeholder="Nama Galeri">
            </div>


            <div class="form-group">
                <label>Sampul</label>
                <input class="form-control" type="file" name="sampul">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>

    </div>

</div>